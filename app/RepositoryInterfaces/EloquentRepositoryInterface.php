<?php

namespace App\RepositoryInterfaces;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface EloquentRepositoryInterface{

    public function all():Collection;
    public function create(array $attributes):Model;
    public function find($id):?Model;
    public function delete($id):bool;
    public function latest($column):Collection;
    public function count():int;
    public function update($id, $attributes): bool;
    public function query();
    public function lookup($text,$value) : Collection;

 


}