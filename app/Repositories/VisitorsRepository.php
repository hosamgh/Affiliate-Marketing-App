<?php 
namespace App\Repositories;

use App\Models\Visitor;
use App\RepositoryInterfaces\VisitorsRepositoryInterface;

class VisitorsRepository extends BaseRepository implements VisitorsRepositoryInterface{

    public function __construct(Visitor $model)
    {
        parent::__construct($model);
    }
}
