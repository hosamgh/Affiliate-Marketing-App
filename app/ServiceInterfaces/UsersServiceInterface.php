<?php 
namespace App\ServiceInterfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface UsersServiceInterface {

    public function create(array $attributes) :Model;
    public function find($id):?Model;
    public function all():Collection;





    
}