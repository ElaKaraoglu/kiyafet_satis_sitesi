@extends('layouts.front')

@section('content')
<div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">ÜRÜNLER</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
        @foreach($data as $rs)
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img src="{{asset('Storage/'.$rs->resim)}}" style="height:450px;">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">{{$rs->ad}}</h6>
                        <div class="d-flex justify-content-center">
                            <h6> {{$rs->fiyat}}TL</h6><h6 class="text-muted ml-2"></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="/product/{{$rs->id}}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Detay</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
