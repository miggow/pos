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

    public function getAllUser()
    {
        return $this->model->all();
    }
}
