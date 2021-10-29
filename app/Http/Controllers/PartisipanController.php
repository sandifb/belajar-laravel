<?php

namespace App\Http\Controllers;

use App\Models\Kpp;
use App\Models\Partisipan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartisipanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partisipan = Partisipan::get();

        return view('partisipan.index')->with([
            'partisipan' => $partisipan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kpp = Kpp::get();

        return view('partisipan.create');
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
            'nama'          => 'required|max:200',
            'jenis_kelamin' => 'required',
        ]);

        Partisipan::create($request->all());

        return redirect('/partisipan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partisipan  $partisipan
     * @return \Illuminate\Http\Response
     */
    public function show(Partisipan $partisipan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partisipan  $partisipan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partisipan = Partisipan::find($id);
        return view('partisipan.edit')->with([
            'partisipan' => $partisipan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partisipan  $partisipan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partisipan $partisipan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partisipan  $partisipan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partisipan = Partisipan::find($id);
        $partisipan->delete();

        return redirect('partisipan');
    }
}
