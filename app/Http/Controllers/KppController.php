<?php

namespace App\Http\Controllers;

use App\Models\Kpp;
use Illuminate\Http\Request;

class KppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kpp = Kpp::get();

        return view('kpp.index')->with([
            'kpp' => $kpp
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kpp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode'      => 'required|unique:kpps|max:3',
            'alamat'    => 'required',
        ]);

        Kpp::create($request->all());

        return redirect('/kpp');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kpp  $kpp
     * @return \Illuminate\Http\Response
     */
    public function show(Kpp $kpp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kpp  $kpp
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kpp = Kpp::find($id);

        return view('kpp.edit')->with([
            'kpp' => $kpp
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kpp  $kpp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kpp = Kpp::find($id);
        
        $kpp->update([
            'alamat'    => $request->alamat,
            'no_telp'   => $request->no_telp,
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kpp  $kpp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kpp $kpp)
    {
        //
    }
}
