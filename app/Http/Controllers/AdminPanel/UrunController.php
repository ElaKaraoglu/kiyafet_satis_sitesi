<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\kategoriler;
use App\Models\urunler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UrunController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=urunler::all();

        return view('admin.urun.index',[
            'data'=>$data


        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=kategoriler::all();

        return view('admin.urun.create',[
            'data'=>$data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data=new urunler();

       $data->kategori_id=$request->category_id;
       $data->ad=$request->name;
       $data->aciklama=$request->description;
       $data->fiyat=$request->price;
       $data->beden=$request->size;
       $data->renk=$request->color;
       $data->miktar=$request->quantity;
       $data->keywords=$request->keywords;
       $data->durum=$request->status;

       if($request->hasfile('image'))
       {
         $data->resim=$request->file('image')->store('images');
       }
       $data->save();
       return redirect('admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\urunler  $urun
     * @return \Illuminate\Http\Response
     */
    public function show(urunler $urun,$id)
    {
        $data= urunler::find($id);
        return view('admin.urun.show',[
           'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\urunler  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(urunler $urun ,$id)
    {
        $data= urunler::find($id);
        $datalist =kategoriler::all();
        return view('admin.urun.edit',[
           'data' => $data,
           'datalist' => $datalist
        ]);



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\urunler  $urun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, urunler $urun,$id)
    {

        $data= urunler::find($id);

         $data->ad = $request->name;
         $data->kategori_id = $request->category_id;
         $data->keywords=$request->keywords;
         $data->durum=$request->status;
         $data->fiyat=$request->price;
         $data->renk=$request->color;
         $data->beden=$request->size;
         $data->miktar=$request->quantity;

         if($request->hasfile('image'))
         {
           $data->resim=$request->file('image')->store('images');
         }
         $data->save();
         return redirect(route('admin.product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\urunler  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(urunler $urun,$id)
    {
        $data=urunler::find($id);
        $data->delete();
    }
}
