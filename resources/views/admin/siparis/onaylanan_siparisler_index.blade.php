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
              <h3 class="box-title">  Sipariş Listesi</h3>
            </div>
            <div class="box-body">
              <table class="table table-bordered" style="background-color:ivory">
                <tbody><tr>

                  <th>Siparis id</th>
                  <th>Müşteri Adı</th>

                  <th>Müşteri Telefonu</th>
                  <th>Müşteri Maili</th>
                  <th>Sipariş Tutarı</th>
                  <th>Sipariş Zamanı</th>
                  <th>Sipariş Durumu</th>
                  <th></th>



                </tr>

           @foreach($data as $rs)
                <tr>
                  <td>{{$rs->id}}</td>
                  <td>ad</td>
                  <td>56777</td>

                  <td>vxkbmş</td>
                  <td>{{$rs->tutar}}</td>
                  <td>{{$rs->olusturma_zamani}}</td>
                  <td>durum</td>



                  <td><a href="/admin/onaylanan_siparisler_detay/{{$rs->id}}"  class="btn btn-block btn-primary btn-xs" >Ayrıntı Gör</td>
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

    </div><!-- /.content-wrapper -->

@endsection
