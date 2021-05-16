<?php

class General extends Controller
{
    protected $table = "general";
    protected $modelName = 'GeneralModel';
    protected $requestName = 'GeneralRequest';


    // SELECT DATA FROM THE TABLE [ ANY TABLE BY TABLE NAME ]
    public function index()
    {
        if (auth()->permissions == 'user') {
            $data = $this->model->whereUserID('general', auth()->id);
            return $this->view('dashboard/app', 'dashboard/general/edit', $data);
        }
        $data = $this->model->select('general');
        return $this->view('dashboard/app', 'dashboard/general/index', $data);
    }

    // EDIT THE USER ALL HIS DATA FROM ALL TABLES
    public function edit(int $id = null)
    {
        $id = $id !== null ? $id : auth()->id;
        $data = $this->model->whereID('general', $id);
        if (!$data) {
            return $this->PageNotFound();
        }
        return $this->view('dashboard/app', 'dashboard/general/edit', $data);
    }

    public function update()
    {
        // CHECK IF THE USER NAME IS EXSITS TO ANOTHER USER OR NOT
        if ($this->model->issetPhone((object) $_POST)) {
            msg('danger', 'This phone is already exists');
            return header('location:' . URL('dashboard/general'));
        }  // END CHECK
        $info = $this->request->validation((object) $_POST);
        if (!$info)
            return header('Location: ' . $_SERVER['HTTP_REFERER']);
        // UPDATE THE DATA
        $this->saveUpdate($info);
    }


    // TO UPDATE THE DATA OF ROW
    public function saveUpdate($data)
    {
        if ($this->model->save($this->table, (object)$data)) {
            msg('success', 'Updating Successfully');
        } else {
            msg('danger', 'An error occurred unless the record was updated');
        }
        return header("location:" . URL('dashboard/general'));
    }


    // EDIT THE USER ALL HIS DATA FROM ALL TABLES
    public function delete()
    {
        if ($this->model->delete((string)$this->table, (int)$_POST['id'])) {
            msg('success', 'Deleted Successfully');
            header('location:' . URL('dashboard/' . $this->table));
        } else {
            msg('danger', 'An error occurred unless the record was deleted');
            return $this->view('dashboard/app', 'dashboard/general/edit');
        }
    }
}
