@extends('layouts.adminbase')
@section('title')
 Kategoriyi Düzenle
@endsection

@section('content')

    <div class="content-wrapper">
    <section class="content-header">
            <h1>
               Kategoriyi Düzenle
                <small>it all starts here</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/admin"><i class="fa fa-dashboard"></i> Anasayfa</a></li>

                <li> <a href="/admin/kategori">Kategori</a></li>

            </ol>
        </section>






    <div class="box">
            <div class="box-header" >
              <h3 class="box-title">Düzenle</h3>
            </div>
            <form action="/admin/product/update/{{$data->id}}" role="form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
            <div class="form-group">
                  <label for="exampleInputEmail1">Kategori:</label>
                  <select class="form-control" name="category_name" >
                    @foreach($datalist as $rs)
                    <option>{{$rs->id}}</option>
                    @endforeach
                    </select>
                </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Ürün Adı:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->ad}}" name="name" placeholder="Adı">
                </div>

                <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Ürün Açıklaması:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->aciklama}}" name="description" placeholder="Açıklama">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Fiyat:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->fiyat}}" name="price" placeholder="Fiyat">
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">Renk:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="{{$data->renk}}" name="color" placeholder="Adı">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Anahtar Kelimeler:</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$data->keywords}}" placeholder="Anahtar Kelimeler" name="keywords">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Miktar:</Kelimelerlabel>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$data->miktar}}" placeholder="Miktar" name="quantity">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Beden:</label>
                  <select class="form-control" value="{{$data->beden}}" name="size">
                    <option>xs</option>
                    <option>s</option>
                    <option>m</option>
                    <option>l</option>
                    <option>xl</option>
                    <option>st</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Durumu</label>
                  <select class="form-control" name="status" >
                    <option>Mevcut</option>
                    <option>Mevcut Değil</option>

                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Kategori Resmi Seç:</label>
                  <input type="file" id="exampleInputFile" value="{{$data->resim}}", name="image">

                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Güncelle</button>
              </div>
            </form>
          </div>
    </div><!-- /.content-wrapper -->

@endsection

