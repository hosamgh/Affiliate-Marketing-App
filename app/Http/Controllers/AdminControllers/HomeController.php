<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\ServiceInterfaces\UsersServiceInterface;

class HomeController extends Controller {
    private $usersService;
    public function __construct(UsersServiceInterface $usersService)
    {
        $this->usersService = $usersService;
        
    }
    public function index(){
        $users = $this->usersService->all();
        return view('admin.home.index',['users'=>$users]);
    }
}