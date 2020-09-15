<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Admin;

class wishlistController extends Controller
{
    public function index() {
        $wishlist = Admin::all();

        return view("wishlist",compact('wishlist'));

    }
}
