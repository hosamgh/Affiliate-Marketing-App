<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','name','phone_number','date_of_birth','image','referral_link'];

    //relations 
    public function user(){
        return $this->belongsTo(User::class);
    }

    //attributes
    public function setDateOfBirthAttribute($value){
        $this->attributes['date_of_birth'] = \Carbon\Carbon::parse($value);
    }
}


