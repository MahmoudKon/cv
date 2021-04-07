<?php

class Education extends Controller
{
    protected $table = "education";
    protected $modelName = 'EducationModel';
    protected $requestName = 'EducationRequest';

    // SELECT DATA FROM THE TABLE [ ANY TABLE BY TABLE NAME ]
    public function index()
    {
        if (auth()->permissions == 'user') {
            $data = $this->model->whereUserID('education', auth()->id);
            if (!$data) {
                return $this->view('dashboard/app', 'dashboard', $data);
            }
            return $this->view('dashboard/app', 'dashboard/education/edit', $data);
        }
        $data = $this->model->select($this->table);
        return $this->view('dashboard/app', 'dashboard/education/index', $data);
    }

    // EDIT THE USER ALL HIS DATA FROM ALL TABLES
    public function edit(int $id = null)
    {
        $id = $id !== null ? $id : auth()->id;
        $data = $this->model->whereID($this->table, $id);
        if (!$data) {
            return $this->PageNotFound();
        }

        return $this->view('dashboard/app', 'dashboard/education/edit', (array) $data);
    }

    public function update()
    {
        $user_id = (int) $_POST['user_id'];
        unset($_POST['user_id']);

        $update = [];
        $insert = [];
        foreach ($_POST['education'] as $index => $row) {
            if ($row['id'] > 0) {
                $update[$index] = $this->request->validation((object) $row);
                if (!isset($update[$index]->user_id)) {
                    $update[$index]['user_id'] = $user_id;
                }
            } else {
                $insert[$index] = $this->request->validation((object) $row);
                $insert[$index]['user_id'] = $user_id;
            }
        }

        if (count($insert) > 0) {
            if (!$this->model->InsertEducation((object)$insert)) {
                msg('danger', 'An error occurred unless the record was updated');
                return header("location:" . $_SERVER['HTTP_REFERER']);
            }
        }

        // UPDATE THE DATA
        if ($this->model->UpdateEducation((object)$update)) {
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
