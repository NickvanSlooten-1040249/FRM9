<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Admin;


class wishlistController extends Controller
{
    public function index() {

        $id = Auth::id();
        $wishlist = Admin::all()->where('user_id',$id);

        return view("wishlist",compact('wishlist'));

    }
}
