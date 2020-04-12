<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        Log::alert('Something went wring');
        return view('welcome',['id' => "SSSSSSSSSSSS"]);
    }
}
