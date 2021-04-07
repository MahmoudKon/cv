<?php

//Load the model and the view
class Controller
{

    protected $model;
    protected $request;

    public function __construct()
    {
        $this->model = $this->model($this->modelName);

        if (isset($this->requestName))
            $this->request = $this->request($this->requestName);
    }


    public function model($model)
    {
        //Require model file
        require_once(MODELS . $model . '.php');
        //Instantiate
        return new $model();
    }

    public function request($request)
    {
        //Require request file
        require_once(REQUESTS . $request . '.php');
        //Instantiate
        return new $request();
    }

    //Load the view (checks for the file)
    // $app => it's mean the [ dashboard or site ],   $view => it's mean  the [View File]
    public function view($app,  $view = null, $data = [])
    {
        if (file_exists(VIEWS . $app . '.php')) {
            // extract((array) $data);
            require_once VIEWS . $app . '.php';
        } else {
            return $this->PageNotFound();
        }
    }

    // SELECT DATA FROM THE TABLE [ ANY TABLE BY TABLE NAME ]
    public function index()
    {
        if (auth()->permission == 'user') {
            $data = $this->model->whereID('users', auth()->id);
            return $this->view('dashboard/app', 'dashboard/' . $this->table . '/edit', $data);
        }
        $data = $this->model->select($this->table);
        return $this->view('dashboard/app', 'dashboard/' . $this->table . '/index', $data);
    }

    // EDIT THE USER ALL HIS DATA FROM ALL TABLES
    public function edit(int $id = null)
    {
        $id = $id !== null ? $id : auth()->id;
        $data = $this->model->whereID($this->table, $id);
        if (!$data) {
            return $this->PageNotFound();
        }
        return $this->view('dashboard/app', 'dashboard/' . $this->table . '/edit', $data);
    }

    // TO UPDATE THE DATA OF ROW
    public function saveUpdate($data)
    {
        if ($this->model->save($this->table, (object)$data)) {
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
            return header('location:' . URL('dashboard/' . $this->table));
        } else {
            msg('danger', 'An error occurred unless the record was deleted');
            return header("location:" . $_SERVER['HTTP_REFERER']);
        }
    }


    // GO TO ERROR 404 PAGE NOT FOUND
    public function PageNotFound()
    {
        return $this->view('errors/PageNotFound');
    }
}
