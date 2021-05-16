<?php

class Home extends Controller
{
    protected $modelName = 'ProfileModel';

    public function index() {
        $data = $this->model->allUserInfo((int) auth()->id);
        return $this->view('dashboard/app', 'dashboard/home/index', $data);
    }
}

