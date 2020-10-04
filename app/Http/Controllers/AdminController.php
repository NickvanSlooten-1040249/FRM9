<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $wishlist = Admin::all();
        $users = User::all();

        return view("Admin.Admin",compact('wishlist','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Titel'=>'required',
            'Subtitel'=>'required',
            'Tekst'=>'required',
            'Fotos'=>'required',
            'Prijs'=>'required'
        ]);

        if ($wishlist = $request->Fotos) {
            $destinationPath = 'images';
            $itemImage = $wishlist->getClientOriginalName();

            $wishlist->move($destinationPath, $itemImage);
        }

        $wishlist = new Admin([
            'Titel' => $request->get('Titel'),
            'user_id' => $request->user()->id,
            'Subtitel' => $request->get('Subtitel'),
            'Tekst' => $request->get('Tekst'),
            'Fotos' => $itemImage,
            'Prijs' => $request->get('Prijs'),

        ]);



        $wishlist->user_id = Auth::user()->id;

        $wishlist->save();


$wishlist->save();
        return redirect('/wishlist')->with('success', 'Item saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = Admin::find($id);
        return view('wishlist', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $wishlist = Admin::find($id);
        return view('Admin.edit', compact('wishlist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Titel'=>'required',
            'Subtitel'=>'required',
            'Tekst'=>'required',
            'Fotos'=>'required',
            'Prijs'=>'required'
        ]);

        if ($files = $request->Fotos) {
            $destinationPath = 'images';
            $itemImage = $files->getClientOriginalName();

            $files->move($destinationPath, $itemImage);
        }

        $wishlist = Admin::find($id);
        $wishlist->Titel =  $request->get('Titel');
        $wishlist->Subtitel = $request->get('Subtitel');
        $wishlist->Tekst = $request->get('Tekst');
        $wishlist->Fotos = $itemImage;
        $wishlist->Prijs = $request->get('Prijs');
        $wishlist->save();

        return redirect('/wishlist')->with('success', 'Wishlist updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wishlist = Admin::find($id);
        $wishlist->delete();

        return redirect('/admin')->with('success', 'Item deleted!');
    }
}
