<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PublicUsers;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        $public = PublicUsers::select('id', 'name', 'email')->get();
        return response()->json($public);
    }
}
