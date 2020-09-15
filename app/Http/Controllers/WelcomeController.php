<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
   public function index() {

       $wishlist = Admin::all();

       return view('welcome',compact('wishlist'));

   }
}
