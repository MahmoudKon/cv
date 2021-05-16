<?php

class Register extends Controller
{
    protected $modelName = 'RegisterModel';
    protected $requestName = 'UsersRequest';

    // Go To REGISTER THE NEW USER AND LOGIN HIM
    public function index()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST))
        {
            // MAKE A VALIDATION ON THE DATA
            $user = $this->validation((object) $_POST);
            // CALL THE METHOD TO EXECUTE THE INSERT DATA
            return $this->registerUser((object) $user);
        }
        // IF not Login Go To The Login Page
        return $this->view('dashboard/register/register');
    }  // END index

    public function validation($data) : object  // RETURN THE USER VARUBALE
    {
        $user = [];
                                            // START VALIDATION
        // CHECK IF THE USERNAME IS EXSITS TO ANOTHER USER OR NOT
        if ($this->model->issetUserField('username', (string) $_POST['username'])) {
            msg('danger', 'This user name already exists');
            return $this->view('dashboard/register/register', '', $data);
        }  // END CHECK

        // CHECK IF THE EMAIL IS EXSITS TO ANOTHER USER OR NOT
        if ($this->model->issetUserField('email', (string) $data->email)) {
            msg('danger', 'This email already exists');
            return $this->view('dashboard/register/register', '', $data);
        }  // END CHECK

        // START USERNAME VALIDATION
        if (!$user['username'] = $this->request->username($data->username))
            return $this->view('dashboard/register/register', '', $data);
        // END USERNAME VALIDATION

        // START EMAIL VALIDATION
        if(!$user['email'] = $this->request->email($data->email))
            return $this->view('dashboard/register/register', '', $data);
        // END EMAIL VALIDATION

        // START PASSWORD VALIDATION
        if($data->password === $data->confirm_password)
        {
            if(!empty($data->password))
            {
                if(!$user['password'] = $this->request->password($data->password))
                    return $this->view('dashboard/register/register', '', $data);
            }
        }else{
            msg('danger', 'The password and confirm password does not match');
            return $this->view('dashboard/register/register', '', $data);
        }
        // END PASSWORD VALIDATION

        // START Image VALIDATION
        if(isset($_FILES['image']) && $_FILES['image']['name'] != '') {
            if(!$user['image'] = $this->request->image($_FILES['image']))
            {return header("location:" . URL('dashboard/' . $this->table . '/edit/' . $data->id));}
            
        }
        // END Image VALIDATION
                                            // END VALIDATION
        return (object) $user;
    }  // END VALIDATION

    // INSERT THE DATA ON DATABASE AND REDIRECT TO LOGIN FORM
    public function registerUser(object $data)  // RETURN THE VIEW
    {
        if($this->model->insert('users', (object) $data))
        {
            msg('success', 'Registration was successful, please login');
            return header('location:' . URL('dashboard/login'));
        }else{
            msg('danger', 'Something went wrong, please try again later');
            return header('location:' . URL('dashboard/register'));
        }
    }  // END REGESTER
}  // END CONTROLLER
