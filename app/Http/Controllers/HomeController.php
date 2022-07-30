<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteData;

class HomeController extends Controller
{
    public function index(SiteData $siteData)
    {
        $data = $siteData->init();
      
        return view('home.index', ['data' => $data]);
    }

    public function chartData(SiteData $siteData){
        $chartData = $siteData->lastRegistredUsers();
        return response()->json(['data'=>$chartData]);
    }

  
}
