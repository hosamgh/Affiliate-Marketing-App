<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','ip_address','referral_link','visit_date'];
    
    //relations
    public function user(){
        return $this->belongsTo(User::class);
    }
}
