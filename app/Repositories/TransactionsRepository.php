<?php 
namespace App\Repositories;

use App\Models\Transaction;
use App\RepositoryInterfaces\TransactionsRepositoryInterface;

class TransactionsRepository extends BaseRepository implements TransactionsRepositoryInterface{

    public function __construct(Transaction $model)
    {
        parent::__construct($model);
    }
}
