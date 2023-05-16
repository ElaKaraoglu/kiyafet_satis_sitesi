@extends('layouts.adminbase')
@section('title')
 Kategori Ekle
@endsection

@section('content')

    <div class="content-wrapper">
    <section class="content-header">
            <h1>
               Kategori Ekle
                <small>it all starts here</small>
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
            <form action="/admin/category/store" role="form" method="post" enctype="multipart/form-data">
                @csrf
              <div class="box-body">

              <div class="form-group">
                  <label>Ana Kategori</label>
                  <select class="form-control select 2" name="parent_id">
                    <option value="0" selected="selected">Ana Kategori</option>

                    @foreach($data as $rs)
                        <option value="{{$rs->id}}" >{{$rs->getParentsTree($rs)}}</option>
                    @endforeach
                  </select>
              </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kategori Adı:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Adı">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Anahtar Kelimeler:</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Anahtar Kelimeler" name="keywords">
                </div>

                <div class="form-group">
                  <label>Durumu</label>
                  <select class="form-control" name="status">
                    <option>Mevcut</option>
                    <option>Mevcut Değil</option>

                  </select>
                </div>
                <div class="custom-file">
                  <label for="exampleInputFile">Kategori Resmi Seç:</label>
                  <input type="file" class="custom-file-input", name="img">

                </div>

              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Kaydet</button>
              </div>
            </form>
          </div>
    </div><!-- /.content-wrapper -->

@endsection

