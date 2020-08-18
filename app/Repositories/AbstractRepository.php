<?php

namespace App\Repositories;

use App\Models\User;

class  AbstractRepository
{
    protected $model;

    public function __construct()
    {
        $this->model =  $this->resolveModel();
    }

    public function all ()
    {
        return $this->model->all();
    }

    protected function resolveModel()
    {
        return app($this->model);
    }
}
