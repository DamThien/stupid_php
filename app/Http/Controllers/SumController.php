<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function GetValue()
    {
        return view('sum');
    }
    public function Result(Request $a)
    {
        $sumab = $a->number1 + $a->number2;
        return view('sum',compact('sumab'));
    }
}
