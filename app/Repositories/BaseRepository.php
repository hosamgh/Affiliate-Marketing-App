<?php

namespace App\Repositories;

use App\RepositoryInterfaces\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
class BaseRepository  implements EloquentRepositoryInterface
{

    
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function find($id): ?Model
    {
        return $this->model->find($id);
    }

    public function delete($id): bool
    {
        return $this->model->findOrFail($id)->delete();
    }


    public function latest($column): Collection
    {
        return $this->model->latest($column)->get();
    }

 
    public function count(): int
    {
        return $this->model->count();
    }


    public function update($id,$attributes):bool{
        return $this->model->findOrFail($id)->update($attributes);
    }

 

    public function query()
    {
        return $this->model->query();
    }

    public function lookup($text,$value) : Collection{
        return $this->model->pluck($text,$value);
    }

 

   
}
