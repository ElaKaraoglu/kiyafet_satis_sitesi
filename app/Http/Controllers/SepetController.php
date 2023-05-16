<?php

namespace App\Http\Controllers;

use App\Models\sepet;
use App\Models\sepets;
use App\Models\urunler;
use Illuminate\Http\Request;

class SepetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sepet = sepet::first();
         

$urunler=[];
 $i=0;
 $total=0;

    $urun_id = $sepet->urun_id;

    $urunler[$i] = urunler::find($urun_id);
    $total=$urunler[$i]->fiyat+$total;
    $i++;
    // diğer ürün özelliklerini burada kullanabilirsiniz


return view('front.shopcart',[
    'datalist'=>$urunler ,
    'total'=>$total,
    'data'=>$sepet

   ]);


    /*$product=urunler::find(20);
   */


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
    public function store(Request $request,$id)
    {
           $data=new sepet();
           $data->urun_id=$id;
           $data->kullanici_id=1;
           $data->save();

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
    public function destroy(sepet $sepet, $id)

    {
        $data = sepet::where('urun_id',$id)->first();
        $data->delete();


    }
}
