<?php

namespace App\Http\Controllers;

use App\Models\faturalar;
use App\Http\Controllers\Controller;
use Illuminate\Supports\Facades\DB;
use Illuminate\Http\Request;

use App\Models\bolumler;

class FaturalarController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    
    public function index()
    {
       return view('faturalar.faturalar');
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
          $bolumler = bolumler::all();// table dan bilgiler gitermek icin
        return view('faturalar.add_fatura',compact('bolumler'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(faturalar $faturalar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(faturalar $faturalar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, faturalar $faturalar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(faturalar $faturalar)
    {
        //
    }
    public function geturunler($id){
        $urunler= DB::table("urunlers")->where("bolum_id",$id)->pluck("urun_ismi","id");
        return ($urunler);
        //\ json_encode
    }
}
