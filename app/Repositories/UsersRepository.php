<?php 
namespace App\Repositories;

use App\Models\User;
use App\RepositoryInterfaces\UsersRepositoryInterface;

class UsersRepository extends BaseRepository implements UsersRepositoryInterface{

    public function __construct(User $model)
    {
        parent::__construct($model);
    }
}
