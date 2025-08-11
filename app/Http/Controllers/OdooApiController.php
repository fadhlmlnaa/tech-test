<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OdooApiController extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:8017/api/public_users');
        if ($response->successful()) {
            $users = $response->json();
            return view('users.index', compact('users'));
        }
    }
}
