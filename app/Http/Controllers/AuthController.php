<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\ServiceInterfaces\UsersServiceInterface;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private $usersService;
    public function __construct(UsersServiceInterface $usersService)
    {
        $this->usersService = $usersService;
    }
    public function loginForm()
    {
        return view('auth.login');
    }

    public function registerForm()
    {
        return view('auth.register');
    }

    public function login()
    {
    }

    public function register(RegistrationRequest $request)
    {
        try {
            $validated = $request->validated();
            $this->usersService->create([
                "email" => $validated['email'],
                "password" => $validated['password'],
                "image" => $request->file('image'),
                "date_of_birth" => $request->date_of_birth,
                "name" => $validated['name'],
                "phone_number" => $validated['phone_number'],
            ]);

            return redirect('/login');
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }
}
