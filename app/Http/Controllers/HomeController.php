<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\file;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $files= file::all();

        return view('home')->with('files',$files);
    }

    public function uploadfile()
    {
        return view('uploadfile');
    }





}
