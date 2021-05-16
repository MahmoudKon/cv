<?php

class Login extends Controller
{
    protected $modelName = 'LoginModel';
    protected $requestName = 'UsersRequest';

    // Go To Login Page , Make Login and Redirect To Dashboard Page
    public function index()
    {
        dd("done");
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $this->validation((object) $_POST);
            return $this->loginUser($data);
        }
        // IF not Login Go To The Login Page
        return $this->view('dashboard/login/login');
    }

    // THE LOGEN METHOD
    public function validation($data): object
    {
        $user = [];
        // START USERNAME VALIDATION
        if (!$user['username'] = $this->request->username($data->username))
            return $this->view('dashboard/login/login', '', $data);
        // END USERNAME VALIDATION

        // START USERNAME VALIDATION
        if (!$user['password'] = $this->request->password($data->password))
            return $this->view('dashboard/login/login', '', $data);
        // END USERNAME VALIDATION

        // Make Login
        $logged = $this->model->login($user['username'], $user['password']);

        // CHECK IF THE USER NAME AND PASSWORD IS CORRECT, IF NOT WILL BACK
        if (!$logged) {
            msg('danger', 'user name or password not correct');
            return $this->view('dashboard/login/login', '', $data);
        }

        return (object) $logged;
    }

    public function loginUser(object $logged)
    {
        // Call The Session
        $this->createUserSession((object) $logged);
        // Redirect To The Dashboard Page
        msg('success', 'Login successful, Welcome ' . $logged->username);
        return header("Location: " . URL('dashboard'));
    }

    // Create Sesstion and Save The User Object;
    public function createUserSession(object $logged)
    {
        $_SESSION['user'] = $logged;
    }
}
