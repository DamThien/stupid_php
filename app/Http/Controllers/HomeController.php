<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;

use Illuminate\Support\Facades\App;
class HomeController extends Controller
{
    public function index()
    {
        // return view('master');
        $slide = Slide::all();
        return view('page.home', compact('slide'));						
        // $new_product = Product::where('new', 1)->get();
        // //dd($new_product);								
        // return view('page.trangchu', compact('slide', 'new_product'));
    }																
}
