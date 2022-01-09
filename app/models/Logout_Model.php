<?php

class Logout_Model {


    public function EndSession()
    {

        $_SESSION =[];
        session_unset();
        session_destroy();
        header('Location: ' . BASEURL . '/home');
        exit;

    }
}


