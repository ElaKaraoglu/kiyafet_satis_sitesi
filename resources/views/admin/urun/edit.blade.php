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

            <form action="{{route('admin.product.update',['id'=>$data->id])}}" role="form" method="post">
                @csrf
              <div class="box-body">
              <div class="form-group">
                  <label>Ana Kategori</label>
                  <!--<select class="form-control" name="parent_id">
                  <option value="0">Ana kategori</option>
                    @foreach($datalist as $rs)
                    <option value="{{$rs->id}}">{{$rs->id}}
                    </option>
                    @endforeach
                  </select>-->
              </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kategori Adı:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$data->ad}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Anahtar Kelimeler:</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="keywords" value="{{$data->keywords}}" >
                <div class="form-group">
                  <label>Durumu</label>
                  <select class="form-control" name="status" >
                    <option>Mevcut</option>
                    <option>Mevcut Değil</option>

                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Kategori Resmi Seç:</label>
                  <input type="file" id="exampleInputFile", name="image" value="{{$data->resim}}">

                </div>

              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Güncelle</button>
              </div>
            </form>
          </div>
    </div><!-- /.content-wrapper -->

@endsection

