<?php

namespace App\Http\Controllers;

use App\helpers\Status;
use App\Models\Product;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $products = Product::where(['in_stock' => Status::IN_STOCK])->paginate(9);
        $pr = Product::find(25);
        dd($pr);
        return view('home.index');
    }
}
