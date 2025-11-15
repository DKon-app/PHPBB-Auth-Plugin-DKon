<?php
namespace dkon\auth;

class ext extends \phpbb\extension\base
{
    public function get_name()
    {
        return 'DKon Authentication Extension';
    }

    public function get_description()
    {
        return 'Allows users to authenticate via DKon.app API';
    }

    public function activate()
    {
        // Code to activate plugin
    }

    public function deactivate()
    {
        // Code to deactivate plugin
    }
}
