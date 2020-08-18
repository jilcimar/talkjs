<?php

namespace App\Repositories;

use App\Models\User;

class  UserRepository extends AbstractRepository
{
    protected $model = User::class;

    public function allNotLoggedIn ()
    {
        $model = app(User::class);
        return $model->whereNotIn('id', [auth()->user()->id])->orderBy('name','asc')->get();
    }
}
