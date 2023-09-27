<?php
namespace App\Http\Repositories;

use App\Models\User;

Class UserRepository
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function create($data){
        return $this->model->create($data);
    }
    public function getAllUser()
    {
        return $this->model->all();
    }
}
