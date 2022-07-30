<?php 
namespace App\Repositories;

use App\Models\Invitation;
use App\RepositoryInterfaces\InvitationUsersRepositoryInterface;

class InvitationUsersRepository extends BaseRepository implements InvitationUsersRepositoryInterface{

    public function __construct(Invitation $model)
    {
        parent::__construct($model);
    }
}
