<?php

class LoginModel extends Model
{
    // LOGIN USER
    public function login($username, $password)
    {
        // Prepare Statment
        $this->db->query('SELECT * FROM users WHERE username = :username AND password = :password');
        // Bind The Parameters
        $this->db->bind(':username', $username);
        $this->db->bind(':password', $password);
        // Check if The Email is already registerd
        $row = $this->db->single();

        if (!empty($row))
            return $row;  // RETURN THE USER DATA
        else
            return false;   // RETURN FALSE
    }
}
