<?php

namespace App\Services;

use App\RepositoryInterfaces\UsersRepositoryInterface;
use App\ServiceInterfaces\UsersServiceInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class UsersService implements UsersServiceInterface
{
    private $usersRepository;
    public function __construct(UsersRepositoryInterface $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }
    public function create(array $attributes)
    {
        $user =  $this->usersRepository->create($attributes);
       
        $url =    Storage::disk('public')->put("users", $attributes['image']);

        $user->profile()->create([
            "name" => $attributes['name'],
            "phone_number" => $attributes['phone_number'],
            "date_of_birth" => $attributes['date_of_birth'],
            "image" => url('/') . "/storage/$url",
            "referral_link" => URL::signedRoute('auth.invitation', ['user' => encrypt($user->id)])

        ]);
    }
    public function find($id): ?Model
    {
        return $this->usersRepository->find($id);
    }
}
