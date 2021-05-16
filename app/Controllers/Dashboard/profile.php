<?php

class Profile extends Controller
{
    // THIS PARAM FOR THE CONSTRACT METOD
    protected $modelName = 'ProfileModel';
    protected $requestName = 'ProfileRequest';

    public function index()
    {
        return $this->show();
    }

    // SHOW ALL USER DATA FROM ALL TABLES PROFILE PAGE
    public function show($id = null)
    {
        if ($id != null && auth()->permissions == 'user') {
            return $this->PageNotFound();
        }
        $id = $id == null ? auth()->id : $id;
        $data = $this->model->allUserInfo($id);

        // IF NOT HAVE USER RETURN TO PAGE NOT FOUND
        if (!$data) {
            return $this->PageNotFound();
        }

        $data = $this->RemoveNull($data);
        return $this->view('dashboard/app', 'dashboard/profile/show', $data);
    }

    // SHOW ALL USER DATA FROM ALL TABLES PROFILE PAGE
    public function edit($id = null)
    {
        if ($id != null && auth()->permissions == 'user') {
            return $this->PageNotFound();
        }
        $id = $id == null ? auth()->id : $id;
        $data = $this->model->allUserInfo($id);

        // IF NOT HAVE USER RETURN TO PAGE NOT FOUND
        if (!$data) {
            return $this->PageNotFound();
        }

        $data = $this->RemoveNull($data);
        return $this->view('dashboard/app', 'dashboard/profile/edit', $data);
    }

    // TO REMOVE ANY TABLE NOT HAVE DATA FROM OBJECT
    public function RemoveNull($data): object
    {
        if ($data->general === NULL) {
            unset($data->general);
        }

        if ($data->skills === NULL) {
            unset($data->skills);
        }

        if ($data->hobbies === NULL) {
            unset($data->hobbies);
        }

        if ($data->education === NULL) {
            unset($data->education);
        }

        if ($data->experience === NULL) {
            unset($data->experience);
        }

        return (object) $data;
    }

    // TO UPDATE THE ALL USER DATA
    public function update()
    {
        $user = $this->UserValidation((object) $_POST['users']);
        $general = $this->GeneralValidation((object) $_POST['general']);
        dd($general);
        $this->model->updateUser((object) $_POST);
    }


    public function UserValidation(object $data)
    {
        $user = [];
        // START USERS VALIDATION
        // START USERNAME VALIDATION
        if (!$user['id'] = $this->request->id((int) $data->id))
            return header("location:" . URL('dashboard/profile/edit'));
        // END USERNAME VALIDATION

        // CHECK IF THE EMAIL IS EXSITS TO ANOTHER USER OR NOT
        if ($this->model->issetField('users', 'email', (object) $data)) {
            msg('danger', 'This email already exists');
            return header("location:" . URL('dashboard/profile/edit'));
        }  // END CHECK

        // START USERNAME VALIDATION
        if (!$user['username'] = $this->request->username($data->username))
            return header("location:" . URL('dashboard/profile/edit'));
        // END USERNAME VALIDATION

        // START EMAIL VALIDATION
        if (!$user['email'] = $this->request->email($data->email))
            return header("location:" . URL('dashboard/profile/edit'));
        // END EMAIL VALIDATION

        // START PASSWORD VALIDATION
        if ($data->password === $data->confirm_password) {
            if (!empty($data->password)) {
                if (!$user['password'] = $this->request->password($data->password))
                    return header("location:" . URL('dashboard/profile/edit'));
            }
        } else {
            msg('danger', 'The password and confirm password does not match');
            return header("location:" . URL('dashboard/profile/edit'));
        }
        // END PASSWORD VALIDATION

        // START permissions VALIDATION
        if (isset($data->permissions)) :
            if (in_array($data->permissions, ['user', 'admin'])) {
                $user['permissions'] = $data->permissions;
            } else {
                msg('danger', 'Please select the user permissions');
                return header("location:" . URL('dashboard/profile/edit'));;
            }
        endif;
        // END permissions VALIDATION

        // START Image VALIDATION
        if (isset($_FILES['image']) && $_FILES['image']['name'] != '') {
            if (!$user['image'] = $this->request->image($_FILES['image'])) {
                return header("location:" . URL('dashboard/profile/edit'));
            }
        }
        // END Image VALIDATION

        // CHECK IF THE USER NAME IS EXSITS TO ANOTHER USER OR NOT
        if ($this->model->issetField('users', 'username', (object) $user)) {
            msg('danger', 'This username already exists');
            return header("location:" . URL('dashboard/profile/edit'));
        }  // END CHECK
        // END USERS VALIDATION
        return (object) $user;
    }

    public function GeneralValidation(object $data)
    {
        $general = [];
        // START VALIDATION
        // START DATE VALIDATION
        if ($data->birthday > date('Y-m-d') || empty($data->birthday)) {
            msg('danger', 'Please choose a valid date');
            return header("location:" . URL('dashboard/profile/edit'));
        }
        // END DATE VALIDATION
        $general['birthday'] = $data->birthday;

        // START DATE VALIDATION
        if (in_array($data->gender, ['male', 'female'])) {
            $general['gender'] = $data->gender;
        } else {
            msg('danger', 'Please choose a gender');
            return header("location:" . URL('dashboard/profile/edit'));
        }
        // END DATE VALIDATION

        if (isset($data->id)) {
            // START ID VALIDATION
            if (!$general['id'] = $this->request->id((int) $data->id))
                return header("location:" . URL('dashboard/profile/edit'));
            // END ID VALIDATION
        }

        // START WEBSITE VALIDATION
        if (!$general['website'] = $this->request->website((string) $data->website))
            return header("location:" . URL('dashboard/profile/edit'));
        // END WEBSITE VALIDATION

        // START FULL NAME VALIDATION
        if (!$general['full_name'] = $this->request->full_name((string) $data->full_name))
            return header("location:" . URL('dashboard/profile/edit'));
        // END FULL NAME VALIDATION

        // START JOB VALIDATION
        if (!$general['job'] = $this->request->job((string) $data->job))
            return header("location:" . URL('dashboard/profile/edit'));
        // END JOB VALIDATION

        // START ADDRESS VALIDATION
        if (!$general['address'] = $this->request->address((string) $data->address))
            return header("location:" . URL('dashboard/profile/edit'));
        // END ADDRESS VALIDATION

        // START PHONE VALIDATION
        if (!$general['phone'] = $this->request->phone($data->phone))
            return header("location:" . URL('dashboard/profile/edit'));
        // END PHONE VALIDATION

        // START HOBBY ICON VALIDATION
        if (!$general['about'] = $this->request->about((string) $data->about))
            return header("location:" . URL('dashboard/profile/edit'));
        // END HOBBY ICON VALIDATION

        // START HOBBY ICON VALIDATION
        if (!$general['awards'] = $this->request->awards((string) $data->awards))
            return header("location:" . URL('dashboard/profile/edit'));
        // END HOBBY ICON VALIDATION
        // CHECK IF THE USER NAME IS EXSITS TO ANOTHER USER OR NOT
        if ($this->model->issetField('general', 'phone', (object) $general)) {
            msg('danger', 'This phone is already exists');
            return header("location:" . URL('dashboard/profile/edit'));
        }  // END CHECK
        // End VALIDATION
        return (object) $general;
    }
}
