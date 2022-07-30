<?php
namespace App\Models;
use App\Models\Invitation;
use App\Models\Visitor;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SiteData {
 public function init(){
    $loggedInUser = auth()->user();
    $usersCount = Invitation::where('user_id',$loggedInUser->id)->first() ? Invitation::where('user_id',$loggedInUser->id)->first()->invitedUser()->count() : 0;
    $visitorsCount = Visitor::where('user_id',$loggedInUser->id)->count();
    $invitedUsers = Invitation::where('user_id',$loggedInUser->id)->get();
    $visitors = Visitor::where('user_id',$loggedInUser->id)->get();
    $userBalance = $loggedInUser->wallet->balance;
    $income = $loggedInUser->transactions()->whereHas('category',function($query){
        return $query->where('type','income');
    })->sum('amount');
    $expenses = $loggedInUser->transactions()->whereHas('category',function($query){
        return $query->where('type','expenses');
    })->sum('amount');

    $lastTransaction = optional($loggedInUser->transactions()->latest()->first())->created_at;
    
  
    $data['usersCount'] = $usersCount;
    $data['visitorsCount'] = $visitorsCount;
    $data['invitedUsers'] = $invitedUsers;
   
    $data['visitors'] = $visitors;
    $data['balance'] = $userBalance;
    $data['income'] = $income;
    $data['expenses'] = $expenses;
    $data['last_transaction'] = $lastTransaction;

    return $data;

 }   

 public function lastRegistredUsers(){
    $loggedInUser = auth()->user();
    $lastRegistredUsers = Invitation::where('user_id',$loggedInUser->id)->select(DB::raw("COUNT(*) as count"), DB::raw("DAY(created_at) as day"),'created_at as date')
    ->where('created_at', '>', Carbon::today()->subDay(14))
    ->groupBy('day','created_at')
    ->orderBy('day')
    ->get();
    $labels = [];
    $counters = [];
    foreach ($lastRegistredUsers as $user){
        $labels[] = \Carbon\Carbon::parse($user['date'])->format('d-m-Y');
        $counters[] = $user['count'];
    }

    $data = [
        "labels"=>$labels,
        "counters"=>$counters,
    ];

 

    return $data;
 }
}