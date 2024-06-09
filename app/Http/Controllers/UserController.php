<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        // return \App\Models\User::get();
        // return DB::table('articles')
        //     ->select('title', 'slug', 'id')
        //     ->get();



        $users = User::query()->latest()->get();

        return view('users.index', [
            'users' => $users,
        ]);
    }

// ------------------------------------------------------------- //
    public function create()
    {
        return view('users.create');
    }
    
// ------------------------------------------------------------- //
    public function store(Request $request)
    {
        // User::create($request->all());
        User::create($request->only('name', 'email', 'password'));

        return redirect('/users');
    }
}
