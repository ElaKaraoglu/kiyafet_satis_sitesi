<?php

use Symfony\Component\Routing\Loader\ProtectedPhpFileLoader;
use App\Models\kategoriler;
use Illuminate\Auth\Events\Attempting;

?>
@extends('layouts.adminbase')
@section('title')
    Admin Paneli
@endsection

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

        <a href="{{route('admin.category.create')}}"  class="btn btn-block btn-success btn-lg" style="width: 200px;">+  Kategori Ekle  </a>

            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li><a href="#">Kategoriler</a></li>

            </ol>
        </section>

        <div class="box">
            <div class="box-header">
              <h3 class="box-title"> Kategori Listesi</h3>
            </div>
            <div class="box-body">
              <table class="table table-bordered" style="background-color:ivory">
                <tbody><tr>
                  <th style="width:10px">Id</th>
                  <th>Ana Kategori</th>


                  <th>Anahtar Kelimeler</th>
                  <th>Durum</th>
                  <th>Resim</th>
                  <th style="width:40px">Düzenle</th>
                  <th style="width:40px">Sil</th>
                  <th style="width:40px">Göster</th>
                </tr>
             @foreach($data as $rs)
                <tr>
                  <td>{{$rs->id}}</td>
                <td> {{$rs->getParentsTree($rs)}}</td>
                  <td>{{$rs->keywords}}</td>
                  <td>{{$rs->durum}}</td>
                  <td>

                         <img src="{{Storage::url($rs->resim)}}" style="height:50px;">



                  </td>
                  <td><a href="{{route('admin.category.edit',['id'=>$rs->id])}}"  class="btn btn-block btn-primary btn-xs" >Düzenle</td>
                  <td><a href="{{route('admin.category.destroy',['id'=>$rs->id])}}"  class="btn btn-block btn-danger btn-xs">Sil</td>
                  <td><a href="{{route('admin.category.show',['id'=>$rs->id])}}"  class="btn btn-block btn-warning btn-xs">Göster</td>
                </tr>

           @endforeach
              </tbody></table>
            </div>
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="https://www.free-css.com/free-css-templates">«</a></li>
                <li><a href="https://www.free-css.com/free-css-templates">1</a></li>
                <li><a href="https://www.free-css.com/free-css-templates">2</a></li>
                <li><a href="https://www.free-css.com/free-css-templates">3</a></li>
                <li><a href="https://www.free-css.com/free-css-templates">»</a></li>
              </ul>
            </div>
          </div>
      Storage
    </div><!-- /.content-wrapper -->

@endsection

