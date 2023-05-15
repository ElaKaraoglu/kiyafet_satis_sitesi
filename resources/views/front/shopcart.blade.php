@extends('layouts.front')



@section('content')

        <div class="row">
            <aside class="col-lg-9">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-borderless table-shopping-cart">
                            <thead class="text-muted">
                                <tr class="small text-uppercase">
                                    <th scope="col" width="120">Ürün</th>

                                    <th scope="col" width="120">Adet</th>
                                    <th scope="col" width="120">Fiyat</th>

                                    <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                                </tr>
                            </thead>
                            <tbody>
                             @foreach($datalist as $rs)
                                <tr>
                                    <td>
                                        <figure class="itemside align-items-center">
                                            <div class="aside"><img src="{{Storage::url($rs->resim)}}" class="img-sm"></div>
                                            <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true">{{$rs->ad}}</a>
                                                <p class="text-muted small">{{$rs->beden}} </p>
                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td> <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>

                                        </select> </td>
                                    <td>
                                        <div class="price-wrap"> <var class="price">{{$rs->fiyat}} TL</var>  </div>
                                    </td>
                                    <td class="text-right d-none d-md-block"> <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip" data-abc="true"> <i class="fa fa-heart"></i></a> <a href="/shopcart/destroy/{{$data->urun_id}}" class="btn btn-light" data-abc="true"> Sil</a> </td>
                                </tr>
                           @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </aside>
            <aside class="col-lg-3">
                <div class="card mb-3">

                </div>
                <div class="card">
                    <div class="card-body">


                        <dl class="dlist-align">
                            <dt>Total:</dt>
                            <dd class="text-right text-dark b ml-3"><strong>{{$total}} TL</strong></dd>
                        </dl>
                        <hr> <a href="/" class="btn btn-out btn-primary btn-square btn-main" data-abc="true"> Alışverişe Devam Et </a> <a href="/order/store/{{$data->id}}"  class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Alışverişi Tamamla</a>
                    </div>
                </div>
            </aside>
        </div>

@endsection
