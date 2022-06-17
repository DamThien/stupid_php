<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormInputRequest;

class SignupController extends Controller{
    public function index()
    {
        return view('signup');
    }

    public function displayInfor(FormInputRequest $getvalue)
    
    {
        $user=[
            'name'=>$name = $getvalue -> input("name"),
            'age'=>$age = $getvalue->input("age"),
            'date'=>$date = $getvalue->input("date"),
            'phone'=>$phone = $getvalue->input("phone"),
            'web'=>$web = $getvalue->input("web"),
            'address'=> $address = $getvalue->input("address"),
        ];
        return view('signup')->with('user',$user);
    }
}
