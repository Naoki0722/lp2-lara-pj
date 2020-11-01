<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function post()
    {
        return view('finish');
    }
    public function index()
    {
        return view('apply');
    }
}
