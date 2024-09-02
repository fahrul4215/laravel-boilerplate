<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [];

        $data['products'] = Product::take(12)->get();

        return view("home", $data);
    }
}
