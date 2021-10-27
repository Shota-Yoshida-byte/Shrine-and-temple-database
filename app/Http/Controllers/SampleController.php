<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SampleController extends Controller
{
    //
    public function index()
    {
        return view('');
    }
    public function abc()
    {
         return view('sample.abc');
    }
    
    public function xyz()
    {
        return view('sample.xyz');
    }
}