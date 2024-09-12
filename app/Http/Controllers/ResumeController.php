<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    //
    public function index()
    {
        $about = About::all()->first();
        return view('index', compact('about'));
    }
}
