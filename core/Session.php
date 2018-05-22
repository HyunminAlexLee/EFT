<?php

class Session
{
    static function start()
    {
        session_start();
    }

    static function reg($arr=array())
    {
        foreach($arr as $key => $val){		
            $_SESSION[$key] = $val;
        }
    }
    static function flushSession()
    {
        session_unset();
    }
    static function close()
    {
        session_unset();
        session_destroy();
    }

}

?>
