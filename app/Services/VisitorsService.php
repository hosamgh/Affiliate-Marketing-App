<?php

namespace App\Services;

use App\RepositoryInterfaces\UsersRepositoryInterface;
use App\RepositoryInterfaces\VisitorsRepositoryInterface;
use App\ServiceInterfaces\VisitorsServiceInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class VisitorsService implements VisitorsServiceInterface
{
    private $visitorRepository;
    public function __construct(VisitorsRepositoryInterface $visitorRepository)
    {
        $this->visitorRepository = $visitorRepository;
    }
    public function create(array $attributes)
    {
        $visitor = $this->visitorRepository->query()->where('ip_address', $attributes['ip_address'])->first();
        if (!$visitor) {
            $this->visitorRepository->create([
                "user_id"=>$attributes['user_id'],
                "ip_address" => $attributes['ip_address'],
                "referral_link" => $attributes['referral_link'],
                "visit_date" => now(),
            ]);
        }
    }
    public function find($id): ?Model
    {
        return $this->usersRepository->find($id);
    }
}
