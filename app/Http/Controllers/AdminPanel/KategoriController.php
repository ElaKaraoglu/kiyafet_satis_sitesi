<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\kategoriler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $data=kategoriler::all();

        return view('admin.kategori.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=kategoriler::all();
        return view('admin.kategori.create',[
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
       $data=new kategoriler();
       $data->ad=$request->name;
       $data->parent_id=$request->parent_id;
       $data->keywords=$request->keywords;
       $data->durum=$request->durum;

       if($request->hasfile('image'))
       {
         $data->resim=$request->file('image')->store('images');
       }

       $data->save();
       return redirect('admin/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kategoriler  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(kategoriler $kategori,$id)
    {
        $data= kategoriler::find($id);

        return view('admin.kategori.show',[
           'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kategoriler  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(kategoriler $kategori ,$id)
    {
        $data= kategoriler::find($id);
        $datalist =kategoriler::all();
        return view('admin.kategori.edit',[
           'data' => $data,
           'datalist'=>$datalist
        ]);



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kategoriler  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kategoriler $kategori,$id)
    {

        $data= kategoriler::find($id);

         $data->ad = $request->name;
         $data->keywords=$request->keywords;
         $data->durum=$request->status;

         if($request->hasfile('image'))
         {
           $data->resim=$request->file('image')->store('images');
         }

         $url = Storage::url($data->image);
         $data->save();

         return redirect('/admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kategoriler  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(kategoriler $kategori, $id)
    {
        $data=kategoriler::find($id);
        $data->delete();
    }
}
