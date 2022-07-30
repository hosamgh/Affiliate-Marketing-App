<?php

namespace App\Http\Controllers;

use App\ServiceInterfaces\CategoriesServiceInterface;
use App\ServiceInterfaces\TransactionsServiceInterface;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{

    private $transactionsService, $categoryService;
    public function __construct(TransactionsServiceInterface $transactionsService, CategoriesServiceInterface $categoryService)
    {
        $this->transactionsService = $transactionsService;
        $this->categoryService = $categoryService;
    }

    public function transactionPopup()
    {
        $categories = $this->categoryService->lookup();
        $view = view('layout.partials.transaction-popup', ['categories' => $categories])->render();
        return response()->json([
            'title' => 'Create Transaction',
            'body' => $view
        ]);
    }
    public function store(Request $request)
    {
        try {
            $user = auth()->user();
            $categoryId = $request->category_id;
            $amount = $request->amount;
            $note = $request->note;
            $transaction =  $this->transactionsService->create([
                "user_id"=>$user->id,
                "category_id" => $categoryId,
                "amount" => $amount,
                "note" => $note
            ]);

            $category = $transaction->category;
            if ($category->type == "income") {
               $newBalance = $user->wallet->balance + $transaction->amount;
            }else{
                $newBalance = $user->wallet->balance - $transaction->amount;
            }
            $user->wallet()->update([
                "balance" => $newBalance,
            ]);

            return redirect()->back()->with('message', 'Transaction Created Successfully');
        } catch (\Exception $e) {

            return redirect()->back();
        }
    }

    public function validateAmount(Request $request)
    {
        $categoryId = $request->category_id;
        $amount = $request->amount;
        $user = auth()->user();
        $wallet = $user->wallet;
        $category = $this->categoryService->find($categoryId);
        if ($category->type == "expenses") {
            if ($wallet->balance < $amount)
                return response()->json([
                    'success' => false,
                ], 200);
        }

        return response()->json([
            'success' => true,
        ], 200);
    }
}
