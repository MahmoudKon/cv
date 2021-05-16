<?php

class Logout extends Controller
{
    public function __construct() {}

    // Go To Login Page , Make Login and Redirect To Dashboard Page 
    public function index()
    {
        if(auth())
        {
            session_destroy();
            // IF not Login Go To The Login Page
            header("Location: " . URL('dashboard/login'));   // Redirect To The Dashboard Page
        }
    }

}