<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
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
        $data = DB::table('kantor')
            ->join('penerimaan_dummy', 'kantor.kpp', '=', 'penerimaan_dummy.admin')
            ->select(
                'kantor.kpp',
                'penerimaan_dummy.tahunbayar',
                'penerimaan_dummy.kdmap',
                'penerimaan_dummy.kdbayar',
                'penerimaan_dummy.total',
            )
            ->where('kantor.kpp', 211)
            ->where('penerimaan_dummy.tahunbayar', 2021)
            ->where('penerimaan_dummy.kdmap', 411121)
            ->get();

        // return $data;

        return view('home');
    }
}
