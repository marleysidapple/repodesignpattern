<?php

namespace App\Repositories\Users;

use App\User;

class UserEloquent implements UserInterface
{

	private $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        //Users: Implement getAll() method.
        return $this->model->all();
    }

    public function getById($id)
    {
        //Users: Implement getById() method.
        return $this->findById($id);

    }

    public function create(array $attributes)
    {
        //Users: Implement create() method.
        return $this->model->create($attributes);
    }

    public function update($id, array $attributes)
    {
        //Users: Implement update() method.
        $user = $this->model->findOrFail($id);
        $user->update($attributes);
        return $user;
    }

    public function delete($id)
    {
        //Users: Implement delete() method.
        $this->getById($id)->delete();
        return true;
    }
}
