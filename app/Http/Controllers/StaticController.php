<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function home()
    {
        return view('home', ['name' => 'Home']);
    }
    public function trips()
    {
        return view('trips', ['name' => 'Top Places']);
    }
    public function trip($id)
    {
        return view('trip', ['name' => 'Trip', 'id' => $id]);
    }
}
