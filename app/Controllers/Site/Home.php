<?php

class Home extends Controller
{
    protected $model;
    protected $modelName = 'HomeModel';


    public function index()
    {
        if (isset($_POST['id'])) {
            return $this->show((int) $_POST['id']);
        }
        $data['users'] = $this->model->selectUsers();
        return $this->view('site/app', 'site/home/index', $data);
    }


    public function show(int $id)
    {
        $data = ['' => ''];
        if ($id) :
            $data['user'] = $this->model->selectTables('users', $id);
            $data['skills'] = $this->model->selectTables('skills', $id);
            $data['general'] = $this->model->selectTables('generals', $id);
            $data['hobbies'] = $this->model->selectTables('hobbies', $id);
            $data['education'] = $this->model->selectTables('education', $id);
            $data['experience'] = $this->model->selectTables('experiences', $id);
        endif;

        $this->view('site/app', 'site/home/show', $data);
    }
}
