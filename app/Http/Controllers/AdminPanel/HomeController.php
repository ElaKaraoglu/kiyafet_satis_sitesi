<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public  function index()
    {
         return view('front.loging');

    }
    public  function setting()
    {
        $data=Settings::first();
        if($data==null)
        {
            $data=new Settings();
            $data->ad='Örgü Evi';
            $data->save();

        }
       return view ('admin.setting',['data' => $data]);
    }
    public  function settingupdate(Request $request)
    {
        $id=$request->input('id');
        $data= settings::find($id);
        $data->ad=$request->input('name');
        $data->keywords=$request->input('keywords');
        $data->aciklama=$request->input('description');
        $data->sirket=$request->input('company');
        $data->adres=$request->input('address');
        $data->telefon=$request->input('phone');
        $data->fax=$request->input('fax');
        $data->email=$request->input('email');
        $data->smtpserver=$request->input('smtpserver');
        $data->smtpemail=$request->input('smtpemail');
        $data->smtpsifre=$request->input('smtppassword');
        $data->smtpport=$request->input('smtpport');
        $data->facebook=$request->input('facebook');
        $data->instagram=$request->input('instagram');
        $data->twitter=$request->input('twitter');
        $data->youtube=$request->input('youtube');
        $data->hakkimizda=$request->input('aboutus');
        $data->contact=$request->input('contact');
        $data->referanslar=$request->input('references');
        $data->durum=$request->input('status');
        echo 'saved';
        if($request->file('icon'))
        {
            $data->ikon=$request->file(('icon'))->store('images');
        }

        $data->save();
        return redirect()->route('admin.setting');




    }

}
