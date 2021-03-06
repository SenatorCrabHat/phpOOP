<?php
/**
 * Created by PhpStorm.
 * User: jslavin
 * Date: 6/12/18
 * Time: 9:49 AM
 */

class Session
{
    public $session;

    public function save(array $data = null) {
        foreach($data as $key => $value) {
            $this->session[$key] = $value;
        }
    }

    public function start()
    {
        session_start();
        $this->session = &$_SESSION;
    }

    public function get($key = null)
    {
        if (!$this->session && !$key) {
            echo 'No key was provided, or the session has not been started';
            return false;
        }
        return $this->session[$key];
    }

    public function destroy ()
    {
        session_destroy($this->session);
    }
}