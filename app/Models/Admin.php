<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
class Admin extends Authenticatable{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
   
        'email',
     

        'password',
    ];

    protected $hidden = [
        'password',
    ];
}