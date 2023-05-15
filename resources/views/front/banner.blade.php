<!-- banner section start -->
<div class="banner_section layout_padding">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="banner_taital">Örgü <br>Ürünleri</h1>
                            <p class="banner_text">Ncididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                            <div class="read_bt"><a href="#">Buy Now</a></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="banner_img"  style="max-width: 550px;height: 400px;margin-top: 5px;width: 415px;"><img src="{{asset('assets')}}\images\anaresimbanner.png"></div>
                        </div>
                    </div>
                </div>
            </div>
            @foreach($sliderdata as $srs)
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1 class="banner_taital"></h1>
                            <p class="banner_text"></p>
                            <div class="read_bt"><a href="#">Buy Now</a></div>
                        </div>

                        <div class="col-sm-6">
                            <div class="banner_img"><img src="{{Storage::url($srs->resim)}}" style="max-width: 500px;height: 400px;margin: 0px;width: 430px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div><?php
