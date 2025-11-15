<?php
namespace dkon\auth\controller;

use phpbb\request\request_interface;
use phpbb\user;
use phpbb\event\dispatcher;

class login
{
    protected $request;
    protected $user;
    protected $dispatcher;

    public function __construct(request_interface $request, user $user, dispatcher $dispatcher)
    {
        $this->request = $request;
        $this->user = $user;
        $this->dispatcher = $dispatcher;
    }

    public function handleLogin()
    {
        if ($this->request->is_post()) {
            $username = $this->request->variable('username', '', true);
            $password = $this->request->variable('password', '', true);
            $clientId = $this->request->variable('clientId', '');

            $response = $this->apiLogin($username, $password, $clientId);
            if ($response['error'] === 0) {
                // Success: Set session or cookies
                $this->user->session_create($response['accountId']);
                $this->user->data['username'] = $username; // Optionally store username
                return true;
            } else {
                // Error handling
                return false;
            }
        }
        return false;
    }

    protected function apiLogin($username, $password, $clientId)
    {
        // Prepare the API request
        $url = 'https://api.dkon.app/api/v3/method/account.signIn';
        $data = [
            'clientId' => $clientId,
            'username' => $username,
            'password' => $password,
        ];

                   $options = [
                'http' => [
                    'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
                    'method' => 'POST',
                    'content' => http_build_query($data),
                ],
            ];

            // Sending the request
            $context = stream_context_create($options);
            $result = file_get_contents($url, false, $context);

            // Decode the JSON response
            return json_decode($result, true);
        }
    }
}

