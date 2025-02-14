<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $featured_products= Product::where('trending', '1')->get();
        return view('frontend.index', compact('featured_products'));
    }
}
