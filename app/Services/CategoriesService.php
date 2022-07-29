<?php 
namespace App\Services;

use App\RepositoryInterfaces\CategoriesRepositoryInterface;
use App\ServiceInterfaces\CategoriesServiceInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class CategoriesService implements CategoriesServiceInterface{
    private $categoriesRepository;
    public function __construct(CategoriesRepositoryInterface $categoriesRepository)
    {
        $this->categoriesRepository = $categoriesRepository;
    }
    public function create(array $attributes): Model
    {
        return $this->categoriesRepository->create($attributes);
    }

    public function update($id, array $attributes): bool
    {
        return $this->categoriesRepository->update($id,$attributes);
    }

    public function find($id): ?Model
    {
        return $this->categoriesRepository->find($id);
    }
    public function lookup(): Collection
    {
        return $this->categoriesRepository->lookup('title','id');
    }
}
