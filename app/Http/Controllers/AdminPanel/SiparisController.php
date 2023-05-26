<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\kategoriler;
use App\Models\sepet;
use App\Models\Shopcart_items;
use App\Models\siparisler;
use App\Models\siparis_detaylari;
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

    }

    public function siparis_index()
    {
      $data=siparisler::all();
       return view('admin.siparis.siparis_index',['data'=>$data]);
    }

    public function siparis_detay($id)
    {
        $data=siparis_detaylari::where('siparis_id',$id)->get();

       return view('admin.siparis.siparis_detail',['data'=>$data]);
    }


    /**
     * Show the form for creating a new resource.
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
    public function store(Request $request, $id)
    {
       //  $data=sepet::where('id',$id)->get(); kullanıcı için
         $items=sepet::where('sepet_id',$id)->get();

         $siparis=new siparisler();
        $user=session('globaluser');
         $siparis->kullanici_id=$user->id;

         $siparis->save();







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
