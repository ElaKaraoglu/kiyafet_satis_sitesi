@extends('layouts.adminbase')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">


            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
                <li><a href="#">Ürünler</a></li>

            </ol>
        </section>

        <div class="box">
            <div class="box-header">
              <h3 class="box-title"> </h3>
              <h3 class="box-title"> nolu Sipariş Detayı</h3>
            </div>

            <div class="box-body">
              <table class="table table-bordered" style="background-color:ivory">
                <tbody><tr>
                  <th style="width:10px">Id</th>
                  <th>Ürün Adı</th>
                  <th>Kategori Adı</th>

                  <th>Fiyat</th>
                  <th>Beden</th>
                  <th>Renk</th>
                  <th>Adet</th>
                  <th>Resim</th>

                </tr>


                <tr>
                  <td>{{$data->id}}</td>
                  <td>{{$data->geturun->ad}}</td>
                  <td>{{$data->geturun->getkategori->ad}}</td>

                  <td>{{$data->geturun->fiyat}}</td>

                  <td>{{$data->geturun->beden}}</td>
                  <td>{{$data->geturun->renk}}</td>
                  <td>{{$data->geturun->adet}}</td>


                  <td>
                  {{$data->geturun->resim}}

                  </td>


                </tr>

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

    </div><!-- /.content-wrapper -->

@endsection


