<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class createTable extends Controller
{
    public function createTable()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('price');
            $table->string('content');
            $table->boolean('active');
            $table->timestamps();
        });
        Schema::create('newproduct', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('price');
            $table->string('content');
            $table->boolean('active');
            $table->timestamps();
        });
        echo ("tao bang thanh cong");
    }

}
