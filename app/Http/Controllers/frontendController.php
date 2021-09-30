<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use DB;
class frontendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
}
