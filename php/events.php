<?php
namespace dkon\auth\event;

use phpbb\event\subscriber;
use phpbb\controller\helper as controller_helper;

class listener implements subscriber
{
    protected $controller_helper;

    public function __construct(controller_helper $controller_helper)
    {
        $this->controller_helper = $controller_helper;
    }

    static public function get_subscriber_id()
    {
        return 'dkon_auth';
    }

    public function get_subscribed_events()
    {
        return [
            'core.user_login_after' => 'handle_login',
        ];
    }

    public function handle_login($event)
    {
        $login_controller = new \dkon\auth\controller\login($this->controller_helper->request(), $event['user'], $event['dispatcher']);
        $login_controller->handleLogin();
    }
}
