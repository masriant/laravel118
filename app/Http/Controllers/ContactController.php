<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {
        return view('contact');
    }

    public function store()
    {
        //
    }

    public function create()
    {
        //
    }

    public function update()
    {
        //
    }

    public function delete()
    {
        //
    }
}
