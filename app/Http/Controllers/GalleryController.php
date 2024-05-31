<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index()
    {
        return view('gallery');
    }
}
