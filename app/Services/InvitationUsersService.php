<?php

namespace App\Services;

use App\RepositoryInterfaces\InvitationUsersRepositoryInterface;
use App\ServiceInterfaces\InvitationUsersServiceInterface;
use Illuminate\Database\Eloquent\Model;


class InvitationUsersService implements InvitationUsersServiceInterface
{
    private $invitationUsersRepository;
    public function __construct(InvitationUsersRepositoryInterface $invitationUsersRepository)
    {
        $this->invitationUsersRepository = $invitationUsersRepository;
    }
    public function create(array $attributes)
    {
        $this->invitationUsersRepository->create([
            "user_id" => $attributes["user_id"],
            "invited_user_id" => $attributes["invited_user_id"],

        ]);
    }
    public function find($id): ?Model
    {
        return $this->invitationUsersRepository->find($id);
    }
}
