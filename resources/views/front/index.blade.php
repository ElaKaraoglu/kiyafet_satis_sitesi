@extends('layouts.front')
@section('title','$setting->keywords')
@section('description','$setting->aciklama')
@section('keywords','$setting->keywords')
@section('icon','$setting->ikon')



@section('banner')
@include('front.banner')
@endsection
@section('content')
    <div class="product_section layout_padding">
        <div class="container">
            <div class="row">

            </div>
            <div class="product_section_2 layout_padding">
            <div class="col-sm-12">
                  <h1 class="product_taital" >ÜRÜNLERİMİZ</h1>
               </div>

                <div class="row">
                    @foreach($productlist as $rs)
                    <div class="col-lg-3 col-sm-6">
                        <div class="product_box">
                            <h4 class="bursh_text">Beauty Bursh</h4>
                            <p class="lorem_text">incididunt ut labore et dolore magna aliqua. Ut enim </p>
                            <img src="{{Storage::url($rs->resim)}}" class="image_1">
                            <div class="btn_main">
                                <div class="buy_bt">
                                    <ul>

                                        <li><a href="/product/{$rs->id}">Buy Now</a></li>
                                    </ul>
                                </div>
                                <h3 class="price_text">{{$rs->fiyat}} TL</h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
