<?php

class Users extends Controller
{
    protected $table = "users";
    protected $modelName = 'UserModel';
    protected $requestName = 'UsersRequest';


    // SELECT ALL USERS DATA WHEN AUTH IS ADMIN , GO TO EDIT WHEN AUTH IS USER
    public function index()
    {
        if (auth()->permissions == 'user') {
            $data = $this->model->whereID('users', auth()->id);
            return $this->view('dashboard/app', 'dashboard/users/edit', $data);
        }

        $data = $this->model->select('users');
        return $this->view('dashboard/app', 'dashboard/users/index', $data);
    }

    // GO TO CREATE PAGE IF ADMIN
    public function create()
    {
        if (auth()->permissions == 'user') {
            return $this->PageNotFound();
        }
        return $this->view('dashboard/app', 'dashboard/users/create');
    }

    // STORE ALL USER DATA IN ALL TABLES AND REDIRECT TO GENERAL/INDEX
    public function store()
    {
        // CALL THE VALIDATION METHOD
        // $data = $this->validation((object) $_POST);
        $_POST['image'] = 'image.jpg';
        if ($this->model->create((object)$_POST)) {
            msg('success', 'Creating Successfully');
            header("Location:" . URL('dashboard/users'));
        } else {
            msg('danger', 'Something happened preventing the creation of the user');
            return $this->view('dashboard/app', 'dashboard/users/create');
        }
    }
    // END CREATE USER

    // SHOW ALL USER DATA FROM ALL TABLES TO PROFILE PAGE
    public function show($id)
    {
        $data = $this->model->allUserInfo($id);
        return $this->view('dashboard/app', 'dashboard/profie/show', $data);
    }

    // EDIT THE USER ALL HIS DATA FROM ALL TABLES
    public function edit(int $id = null)
    {
        $id = $id !== null ? $id : auth()->id;
        $data = $this->model->whereID($this->table, $id);
        if (!$data) {
            return $this->PageNotFound();
        }
        return $this->view('dashboard/app', 'dashboard/users/edit', $data);
    }

    // TO UPDATE THE DATA OF ROW
    public function update()
    {
        // CALL THE VALIDATION METHOD
        $data = $this->validation((object) $_POST);
        // UPDATE THE USER DATA
        return $this->saveUpdate($data);
    }

    // TO UPDATE THE DATA OF ROW
    public function saveUpdate($data)
    {
        if ($this->model->save($this->table, (object)$data)) {
            msg('success', 'Updating Successfully');
            return header("location:" . URL('dashboard/users'));
        } else {
            msg('danger', 'An error occurred unless the record was updated');
            return header("location:" . $_SERVER['HTTP_REFERER']);
        }
    }

    // DELETE THE RECORD BY HIS ID USING THE NAME TABLE FROM THE MODEL
    public function delete()
    {
        // THE RESALTE OF QUERY [ FALSE IF DO ERROR, OR NEW REDIRECT ]
        $redirect = $this->model->delete($this->table, (int) $_POST['id']);
        // IF THE RESALTE IS FALSE
        if ($redirect == false) {
            msg('dangerx', 'Something happened preventing the user from being deleted');
            return $this->view('dashboard/delete/index');  // REDIRECT BACK
        }
        // SUCSSESS
        msg('success', 'Deleted Successfully');
        header('location:' . URL($redirect));
    }

    // THIS METHOD TO MAKE VALIDATE ON THE DATA TO UPDATE IT
    public function validation(object $data): object
    {
        $user = [];
        // START VALIDATION
        // CHECK IF THE EMAIL IS EXSITS TO ANOTHER USER OR NOT
        if ($this->model->issetField('users', 'email', (object) $data)) {
            msg('danger', 'This email already exists');
            return header("location:" . $_SERVER['HTTP_REFERER']);
        }  // END CHECK

        // START USERNAME VALIDATION
        if (!$user['id'] = $this->request->id((int) $data->id))
            return header("location:" . $_SERVER['HTTP_REFERER']);
        // END USERNAME VALIDATION

        // START USERNAME VALIDATION
        if (!$user['username'] = $this->request->username($data->username))
            return header("location:" . $_SERVER['HTTP_REFERER']);
        // END USERNAME VALIDATION

        // START EMAIL VALIDATION
        if (!$user['email'] = $this->request->email($data->email))
            return header("location:" . $_SERVER['HTTP_REFERER']);
        // END EMAIL VALIDATION

        // START PASSWORD VALIDATION
        if ($data->password === $data->confirm_password) {
            if (!empty($data->password)) {
                if (!$user['password'] = $this->request->password($data->password))
                    return header("location:" . $_SERVER['HTTP_REFERER']);
            }
        } else {
            msg('danger', 'The password and confirm password does not match');
            return header("location:" . $_SERVER['HTTP_REFERER']);
        }
        // END PASSWORD VALIDATION

        // START permissions VALIDATION
        if (isset($data->permissions)) :
            if (in_array($data->permissions, ['user', 'admin'])) {
                $user['permissions'] = $data->permissions;
            } else {
                msg('danger', 'Please select the user permissions');
                return header("location:" . $_SERVER['HTTP_REFERER']);
            }
        endif;
        // END permissions VALIDATION

        // CHECK IF THE USER NAME IS EXSITS TO ANOTHER USER OR NOT
        if ($this->model->issetField('users', 'username', (object) $user)) {
            msg('danger', 'This username already exists');
            return header("location:" . $_SERVER['HTTP_REFERER']);
        }  // END CHECK

        // START Image VALIDATION
        if (isset($_FILES['image']) && $_FILES['image']['name'] != '') {
            if (!$user['image'] = $this->request->image($_FILES['image'])) {
                return header("location:" . $_SERVER['HTTP_REFERER']);
            }
        }
        // END Image VALIDATION
        // END VALIDATION
        return (object) $user;
    }
}
