<?php

class Login_Model {
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function Login($data)
        {
            $this->db->query(  'SELECT * FROM '. $this->table . ' WHERE username=:username AND password=:password' );
            $this->db->bind('username', $data['username']);
            $this->db->bind('password', $data['password']);

            $this->db->execute();
            return $this->db->rowCount();
        }





}