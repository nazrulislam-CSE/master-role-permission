<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use Auth;
use Illuminate\Support\Facades\Hash;

 
class IndexController extends Controller
{
    public function index(){

    	return view('welcome');

    }

}
 