<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.home');
    }

    public function dailyReport()
    {
        return view('app.createdailyreport');
    }

    public function rekapLaporan()
    {
        return view('app.rekap-laporan');
    }

    public function inventory()
    {
        return view('app.inventory');
    }

    public function stock()
    {
        return view('app.stock');
    }
}
