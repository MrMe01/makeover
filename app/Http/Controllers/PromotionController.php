<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromotionController extends Controller
{
    function __construct()
    {
    	
    }

    public function index()
    {
    	return  view('promotions.index');
    }
}
