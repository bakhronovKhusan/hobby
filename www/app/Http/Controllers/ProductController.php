<?php

namespace App\Http\Controllers;

use App\Mail\ProductMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
{
    public function show(){
        return view('product');
    }

    public function email(){

    }
}
