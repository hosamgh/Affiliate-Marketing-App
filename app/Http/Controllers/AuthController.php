<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Http\Requests\LoginRequest;
use App\ServiceInterfaces\InvitationUsersServiceInterface;
use App\ServiceInterfaces\UsersServiceInterface;
use App\ServiceInterfaces\VisitorsServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class AuthController extends Controller
{
    private $usersService,$visitorService,$invitationUsersService;
    public function __construct(UsersServiceInterface $usersService,VisitorsServiceInterface $visitorService,InvitationUsersServiceInterface $invitationUsersService)
    {
        $this->usersService = $usersService;
        $this->visitorService = $visitorService;
        $this->invitationUsersService = $invitationUsersService;
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
            $userId = $request->user_id;
            
          $user =   $this->usersService->create([
                "email" => $validated['email'],
                "password" => $validated['password'],
                "image" => $request->file('image'),
                "date_of_birth" => $request->date_of_birth,
                "name" => $validated['name'],
                "phone_number" => $validated['phone_number'],
            ]);

            if($userId){
                $userId = decrypt($userId);
                $this->invitationUsersService->create([
                    "user_id"=>$userId,
                    "invited_user_id"=>$user->id,
                ]);
            }

            return redirect('/login')->with('message', 'You have successfully registered, you can login now');
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back();
        }
    }


    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        if (!Auth::validate($credentials)) :
            return redirect()->to('login')
                ->withErrors(trans('auth.failed'));
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    public function invitation(Request $request)
    {
        if (!$request->hasValidSignature()) {
            abort(401);
        }

        $userId = $request->user;
        $userId = decrypt($userId);
    
        $this->visitorService->create([
            "user_id"=>$userId,
            "ip_address"=>$request->ip(),
            "referral_link"=>Url::current(),
        ]);

        return view('auth.register');
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


    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('login');
    }
}
