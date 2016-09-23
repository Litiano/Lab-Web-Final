<?php

namespace App\Http\Controllers;

use App\Models\Cautela;
use App\Models\Militar;
use Faker\Generator;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function luan(){
        dd(['Luan']);
    }
}
