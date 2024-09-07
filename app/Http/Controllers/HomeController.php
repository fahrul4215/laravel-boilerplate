<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Cache;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [];

        $data["headline"] = Cache::remember('headline', 3600 * 12, function () {
            return Product::has('images')->active()->onStock()->take(4)->get();
        });

        $data['products'] = Product::active()->onStock()->take(12)->get();

        return view("front-end.home", $data);
    }
}
