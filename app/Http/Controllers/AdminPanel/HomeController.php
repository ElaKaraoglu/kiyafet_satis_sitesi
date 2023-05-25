<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public  function index()
    {
         return view('front.loging');

    }
    

}
