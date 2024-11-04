<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{


    public function index(){
        $users = User::all();
        return response()->json($users);
    }

    public function store(Request $request)
    {
        echo 'sdlkfj';
    }
}
