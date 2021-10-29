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
                'kantor.nama',
                DB::raw('sum(penerimaan_dummy.total) as nominal'),
            )
            ->groupBy(
                'kantor.nama',
            )
            ->where('penerimaan_dummy.tahunbayar', 2021)
            ->where('penerimaan_dummy.kdmap', 411121)
            ->get();

        // return $data;
        $label = [];
        $dataset = [];
        foreach ($data as $item) {
            $label[]    = $item->nama;
            $dataset[]  = $item->nominal;
        }

        return $label;


        return view('home');
    }
}
