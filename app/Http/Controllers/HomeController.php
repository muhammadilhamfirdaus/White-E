<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function index2()
    {
        return view('welcome2');
    }

    public function index3()
    {
        return view('create_material');
    }

    public function index5()
    {
        return view('master_material');
    }

    public function index4()
    {
        return view('inventory');
    }

    public function table1()
    {
        return view('inventory-table');
    }
}
