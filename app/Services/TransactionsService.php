<?php

namespace App\Services;

use App\RepositoryInterfaces\TransactionsRepositoryInterface;
use App\ServiceInterfaces\TransactionsServiceInterface;
use Illuminate\Database\Eloquent\Model;

class TransactionsService implements TransactionsServiceInterface{
    private $transactionsRepository;
    public function __construct(TransactionsRepositoryInterface $transactionsRepository)
    {
        $this->transactionsRepository = $transactionsRepository;
    }

    public function create(array $attributes) : Model
    {
        return $this->transactionsRepository->create($attributes);
    }
}