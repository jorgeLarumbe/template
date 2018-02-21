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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/welcome');
    }

    public function table()
    {
        return view('admin.partials.tables.table');
    }

    public function chart()
    {
        return view('admin.partials.charts.charts');
    }

}
