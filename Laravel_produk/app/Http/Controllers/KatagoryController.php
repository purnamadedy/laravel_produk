<?php

namespace App\Http\Controllers;

use App\katagory;
use Illuminate\Http\Request;

class KatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('produk.katagori', ['katagori' => katagory::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.tambah');
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

            'katagori' => 'required'
        ]);

        katagory::create($request->all());
    return redirect('/katagori')->with('status', 'Data Category Berhasil Di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\katagory  $katagory
     * @return \Illuminate\Http\Response
     */
    public function show(katagory $katagory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\katagory  $katagory
     * @return \Illuminate\Http\Response
     */
    public function edit(katagory $katagory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\katagory  $katagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, katagory $katagory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\katagory  $katagory
     * @return \Illuminate\Http\Response
     */
    public function destroy(katagory $katagory)
    {
        katagory::destroy($katagory->id);
       return redirect('/katagori')->with('status', 'Data Berhasil Category Di Hapus');
    }
}
