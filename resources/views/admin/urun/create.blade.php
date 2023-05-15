@extends('layouts.adminbase')
@section('title')
 Kategori Ekle
@endsection

@section('content')

    <div class="content-wrapper">
    <section class="content-header">
            <h1>
               Ürün Ekle

            </h1>
            <ol class="breadcrumb">
                <li><a href="/admin"><i class="fa fa-dashboard"></i> Anasayfa</a></li>

                <li> <a href="/admin/kategori">Kategori</a></li>
                <li><a href="breadcrumb-item active">Kategori Ekle</a></li>
            </ol>
        </section>
    <div class="box">
            <div class="box-header" >
              <h3 class="box-title">Ekle</h3>
            </div>
            <form action="/admin/product/store" role="form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
            <div class="form-group">
                  <label for="exampleInputEmail1">Kategori:</label>
                  <select class="form-control" name="category_id" >

                    @foreach($data as $rs)
                    <option >{{$rs->getkategori->ad}}</option>
                    @endforeach
                     </select>
                </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Ürün Adı:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Adı">
                </div>

                <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Ürün Açıklaması:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="description" placeholder="Açıklama">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Fiyat:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="price" placeholder="Fiyat">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Renk:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="color" placeholder="Adı">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Anahtar Kelimeler:</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Anahtar Kelimeler" name="keywords">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Miktar:</Kelimelerlabel>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Miktar" name="quantity">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Beden:</label>
                  <select class="form-control" name="size">
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
                  <select class="form-control" name="status">
                    <option>Mevcut</option>
                    <option>Mevcut Değil</option>

                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Kategori Resmi Seç:</label>
                  <img src="{{Storage::url($rs->resim)}}" style="height: 50px" alt="">
                </div>

              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Kaydet</button>
              </div>
            </form>
          </div>
    </div><!-- /.content-wrapper -->

@endsection

