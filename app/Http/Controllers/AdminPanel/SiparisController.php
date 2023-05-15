<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\kategoriler;
use App\Models\siparisler;
use App\Models\urunler;
use Illuminate\Http\Request;



class SiparisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function onaylanan_index()
    {
       $data=siparisler::all();
       return view('admin.siparis.onaylanan_siparisler_index',[
        'data'=>$data
       ]);
    }

    public function onaylanan_detay($id)
    {
       $data=siparisler::find($id)::with('detaylar')->get();

        $maindata= $data[0]->detaylar[0];
        return view('admin.siparis.onaylanan_detail',[ 'data'=>$maindata]);



     //  $detaylar=$data->getsiparisdetay;return


    }
    /**
     * Show the form for creating a new resource. view('admin.siparis.onaylanan_detail',[ 'data'=>$data]);

     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
