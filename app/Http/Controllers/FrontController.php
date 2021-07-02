<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\content;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = content::all();
        return view('front-end.index', compact('content'));
    }
}
