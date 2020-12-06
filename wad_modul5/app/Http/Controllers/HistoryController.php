<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Order;

class HistoryController extends Controller
{
    public function index() 
    {
        $history = Order::all();
        return view('history', ['order' => $history]);

        // $history = Order::find(1);
        // dump($history);
        // dump($history->product->name);
    }
}
