<?php

namespace App\Http\Controllers;

use App\Models\PublicUsers;
use Illuminate\Http\Request;

class PublicViewController extends Controller
{
    public function index()
    {
        $public = PublicUsers::select('id', 'name', 'email', 'password')->get();
        return view('public-list', compact('public'));
    }
}
