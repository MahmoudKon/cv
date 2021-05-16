<?php

class Hobbies extends Controller
{
    protected $table = "hobbies";
    protected $modelName = 'HobbyModel';
    protected $requestName = 'HobbiesRequest';


    // SELECT DATA FROM THE TABLE [ ANY TABLE BY TABLE NAME ]
    public function index()
    {
        if (auth()->permissions == 'user') {
            $data = $this->model->whereUserID('skills', auth()->id);
            if (!$data) {
                return $this->view('dashboard/app', 'dashboard', $data);
            }
            return $this->view('dashboard/app', 'dashboard/hobbies/edit', $data);
        }
        $data = $this->model->select($this->table);
        return $this->view('dashboard/app', 'dashboard/hobbies/index', $data);
    }

    // EDIT THE USER ALL HIS DATA FROM ALL TABLES
    public function edit(int $id = null)
    {
        $id = $id !== null ? $id : auth()->id;
        $data = $this->model->whereUserID($this->table, $id);
        if (!$data) {
            return $this->PageNotFound();
        }

        return $this->view('dashboard/app', 'dashboard/hobbies/edit', (array) $data);
    }

    public function update()
    {
        $user_id = (int) $_POST['user_id'];
        unset($_POST['user_id']);

        $update = [];
        $insert = [];
        foreach ($_POST['hobbies'] as $index => $row) {
            // CHECK IF THE SKILL NAME IS EXSITS TO ANOTHER USER OR NOT
            if ($this->model->issetField('hobbies', 'hobby', (object) $row)) {
                msg('danger', 'You already have this hobbies');
                return header("location:" . $_SERVER['HTTP_REFERER']);
            }  // END CHECK

            if ($row['id'] > 0) {
                $update[$index] = $this->request->validation((object) $row);
                if (!isset($update[$index]->user_id)) {
                    $update[$index]->user_id = $user_id;
                }
            } else {
                $insert[$index] = $this->request->validation((object) $row);
                $insert[$index]->user_id = $user_id;
            }
        }

        if (count($insert) > 0) {
            if (!$this->model->InsertHobbies((object)$insert)) {
                msg('danger', 'An error occurred unless the record was updated');
                return header("location:" . $_SERVER['HTTP_REFERER']);
            }
        }

        // UPDATE THE DATA
        if ($this->model->UpdateHobbies((object)$update)) {
            msg('success', 'Updating Successfully');
            return header("location:" . $_SERVER['HTTP_REFERER']);
        } else {
            msg('danger', 'An error occurred unless the record was updated');
            return header("location:" . $_SERVER['HTTP_REFERER']);
        }
    }

    // EDIT THE USER ALL HIS DATA FROM ALL TABLES
    public function delete()
    {
        if ($this->model->delete((string)$this->table, (int)$_POST['id'])) {
            msg('success', 'Deleted Successfully');
            return true;
        } else {
            msg('danger', 'An error occurred unless the record was deleted');
            return false;
        }
    }
}
