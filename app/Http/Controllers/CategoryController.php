<?php

namespace App\Http\Controllers;

use App\ServiceInterfaces\CategoriesServiceInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    private $categoriesService;
    public function __construct(CategoriesServiceInterface $categoriesService)
    {
        $this->categoriesService = $categoriesService;
    }

    public function categoryPopup()
    {
        $view = view('layout.partials.category-popup')->render();
        return response()->json([
            'title' => 'Create Category',
            'body' => $view
        ]);
    }
    public function store(Request $request)
    {
        try {
            $title = $request->title;
            $type = $request->type;
            $this->categoriesService->create([
                "type" => $type,
                "title" => $title,
            ]);
            return redirect()->back()->with('message', 'Category Created Successfully');
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }
}
