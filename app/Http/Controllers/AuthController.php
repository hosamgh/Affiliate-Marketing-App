<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Http\Requests\LoginRequest;
use App\ServiceInterfaces\UsersServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

            return redirect('/login')->with('message', 'You have successfully registered, you can login now');
      

        } catch (\Exception $e) {
            return redirect()->back();
        }


    }


    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)):
            return redirect()->to('login')
                ->withErrors(trans('auth.failed'));
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    /**
     * Handle response after user authenticated
     * 
     * @param Request $request
     * @param Auth $user
     * 
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, $user) 
    {
        return redirect()->intended();
    }


    
}
