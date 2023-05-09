
@extends('layouts.adminbase')
@section('title')
    Admin Paneli
@endsection

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


 <div class="card">

        <section class="content-header ">

        <div class="col-sm-3">

          </div>
            <div class="col-sm-3">
                 <a href="/admin/product/edit/{{$data->id}}"  class="btn btn-block btn-warning " style="width: 1000p;" >Düzenle</a>
          </div>
          <div class="col-sm-3">
                 <a href="/admin/product/destroy/{{$data->id}}" onclick="return confirm('Bu kategori silinecek!! Silmek istediğinize Emin misiniz?')" class="btn btn-block btn-danger " style="width: 1000p;" >Sil</a>
          </div>





    <ol class="breadcrumb">
      <li><a href="/admin"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
      <li><a href="#" class="fa fa-dashboard"  active>Kategori Göster</a></li>

    </ol>
        </section>






            <div class="card-body ">

              <table class="table table-striped">
                <caption><h1 style="color: red;">{{$data->ad}}</h1></caption>

             <tbody>
                <tr>
                  <th style="width:30px">Id:</th>
                  <td>{{$data->id}}</td>

                </tr>
                <tr>
                  <th style="width:30px">Kategori:</th>
                  <td>{{ \App\Http\Controllers\AdminPanel\KategoriController::getParentsTree($data->kategori,$data->kategori->ad)}}</td>

                </tr>


                <tr>
                  <th style="width:30px">Ad:</th>
                  <td>{{$data->ad}}</td>

                </tr>
                <tr>
                  <th style="width:30px">fiyat:</th>
                  <td>{{$data->id}}</td>

                </tr>
                <tr>
                  <th style="width:30px">beden:</th>
                  <td>{{$data->beden}}</td>

                </tr>
                <tr>
                  <th style="width:30px">Renk:</th>
                  <td>{{$data->id}}</td>

                </tr>
                <tr>
                  <th style="width:30px">Anahtar Kelimeler:</th>
                  <td>{{$data->keywords}}</td>

                </tr>

                <tr>
                  <th style="width:30px">Durum:</th>
                  <td>{{$data->durum}}</td>

                </tr>

                <tr>
                  <th style="width:30px">Resim:</th>
                  <td>{{$data->resim}}</td>

                </tr>

                <tr>
                  <th style="width:30px">Oluşturma Zamanı:</th>
                  <td>{{$data->created_at}}</td>

                </tr>

                <tr>
                  <th style="width:30px">Güncelleme Zamanı:</th>
                  <td>{{$data->updated_at}}</td>

                </tr>
              </tbody></table>

            </div>

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

    </div><!-- /.content-wrapper -->

@endsection

