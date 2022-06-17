<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Hi()
    {
        $title = "Bao nhiêu một mớ bình yên";
        return view('test')->with('title', $title);
    }
}
