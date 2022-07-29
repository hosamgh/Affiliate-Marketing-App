<?php 
namespace App\ServiceInterfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface CategoriesServiceInterface {
    public function find($id):?Model;
    public function create(array $attributes): Model;
    public function update($id,array $attributes)  : bool;


    public function lookup():Collection;

    
}