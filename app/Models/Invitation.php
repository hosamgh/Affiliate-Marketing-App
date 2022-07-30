<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{

    use HasFactory;
    protected $fillable=["user_id","invited_user_id"];

    //relations
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function invitedUser(){
        return $this->belongsTo(User::class,'invited_user_id');
    }
}
