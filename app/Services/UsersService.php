<?php

namespace App\Services;

use App\RepositoryInterfaces\UsersRepositoryInterface;
use App\ServiceInterfaces\UsersServiceInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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
        $timestamp = now();
     $url =    Storage::disk('public')->put("users", $attributes['image']);
     
     $user->profile()->create([
            "name" => $attributes['name'],
            "phone_number" => $attributes['phone_number'],
            "date_of_birth" => $attributes['date_of_birth'],
            "image" => url('/') . "/storage/$url", 
            "referral_link"=>"sss"

        ]);


    }
}
