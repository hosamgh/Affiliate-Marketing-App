<?php 
namespace App\ServiceInterfaces;

use Illuminate\Database\Eloquent\Model;

interface TransactionsServiceInterface {

    public function create(array $attributes):Model;






    
}