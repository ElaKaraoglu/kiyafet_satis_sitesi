<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>@yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('assets')}}/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Open+Sans:400,700&display=swap&subset=latin-ext" rel="stylesheet">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

</head>
<body>
@include('front.header')
<div class="banner_section layout_padding">



<div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="image-box bottom-padding-xs" id="asd">

                  <div class="general-img product-list bottom-padding-xs">
                    <img  width="1000" height="950" style="width: 100%; height: auto; user-select: none;"  src="{{Storage::url($data->resim)}}" >
                  </div>

                  <div class="thumblist-box bottom-padding-xs">
                    <a class="next hidden" href="#" title="" style="display: none;"><i class="fa fa-angle-right"></i></a>
                    <a class="prev hidden" href="#" title="" style="display: none;"><i class="fa fa-angle-left"></i></a>
                    <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; inset: auto; z-index: auto; margin: 0px; overflow: hidden; position: relative; width: 598px; height: 80px;"><div id="thumblist" class="thumblist" style="text-align: left; float: none; position: absolute; inset: 0px auto auto 240px; margin: 0px; width: 834px; height: 80px;">
                    </div></div>
                  </div>

				  <script>
                    var myCloud;

                    $(function(){
                      cloudZoomStart();
                    })

                    $('.thumb-link').click(function(e){
                      e.preventDefault();

                      var obj = $(this).find('img.cloudzoom-gall');

                      $('#cZoom').attr('src', obj.attr('data-image')).attr('data-cloudzoom', 'zoomImage:"' + obj.attr('data-zoom') + '"');

                      cloudZoomReset();
                    })
                    function cloudZoomStart(){
                      myCloud = new CloudZoom($('#cZoom'));
                    }

                    function cloudZoomReset(){
                      myCloud.destroy();

                      cloudZoomStart();
                    }
                  </script>

                </div>

                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">

                    <div class="evaluation-box">
                      <div class="evaluation" style="border-bottom:none;">

                        <span><h1><strong>{{$data->ad}}</strong></h1>   </span>
                      </div>
                    </div>

                    <form id="add-cart-form" class="add-cart-form sales" data-productsid="2245">

                      <div class="post product-data">

                        <div class="price-row">
                          <div id="productPrice" class="price notranslate">{{$data->fiyat}} TL</div>
                          <div class="price-tax notranslate">KDV<br>DAHİL</div>

                          <div class="clearfix"></div>
                        </div>
                        <input id="installmentPrice" type="hidden" value="160.00">

                        <div class="clearfix"></div>
                      </div>

					  <div class="product-options-table product-variants-single bottom-padding-xs">
                        <table class="table no-margin">
                          <tbody>

						  </tbody>
                        </table>
                      </div>
				      <input type="hidden" value="1" class="form-control" id="productQuantity">

                      <div class="post product-data">


                        <mark>Ürün Açıklaması: </mark> Ürün nako telden çrülmüştür boyu 100 cm eni 45 kol boyu 60 cm dir kışlıktr
                        <br>
                        <br>
                           Renk: {{$data->renk}}
                           <br>
                           Beden:{{$data->beden}}
                        <div class="clearfix"></div>
                      </div>
					  <script>
						$(document).off('click', '.add-cart');
						$(document).on('click', '.add-cart', function(e){
                          e.preventDefault();

						  var specialData = '';

						  $('#add-cart-form input.specials').each(function(){
							var obj = $(this), obj1 = obj.parent().prev().html(), obj2 = obj.val();

							if(obj2!=''){
							  specialData += '[' + obj1 + ': ' + obj2 + ']';
							}
						  });

                          objA = $(this);
                          objB = objA.attr('data-cartMode');

                          $('#icon-added').removeClass('fa-shopping-cart').addClass('fa-refresh').addClass('fa-spin');

                          $.ajax({
                            url: '/includes/theme/progressive/myCartUpdater.asp',
                            type: 'POST',
                            data: 'token=' + $.now() + '&productsID=2245&productsQty=' + $('#productQuantity').val() + '&specialData=' + encodeURIComponent(specialData),
                            success: function(data, result) {
                              var datas = data.split('/*/');

                              if(objB == 'quick'){
                                var timerID = setInterval(function(){
                                  clearInterval(timerID);

                                  window.location = '/siparis';
                                }, 800);
                              }else{
                                var timerID = setInterval(function(){
                                  clearInterval(timerID);

                                  $('.cartCount').html(datas[2]);
                                  $('#modalShoppingCart').modal('show');
                                  $('#modalShoppingCartBody').html('' + datas[1] + ' ilan sepete eklendi');
                                  $('#icon-added').removeClass('fa-refresh').removeClass('fa-spin').addClass('fa-shopping-cart');

                                  if(parseInt(datas[2]) > 0){
                                    $(".miniCart").css("display","block")
                                  }else{
                                    $(".miniCart").css("display","none")
                                  }

                                }, 400);
                              }
                            },
                            error: function(XMLHttpRequest, textStatus, errorThrown) {}
                          })
                        });
                      </script>

                    </form>
                     <br>
                     <br>
                     <br>

                    <div class="post product-advert">

                      <div id="userSell" class="button-row" data-productsid="2245">
                          <button class="btn btn-warning add-cart" type="button" data-cartmode="quick">HEMEN AL</button>
                          <button class="btn btn-success add-cart" type="button" data-cartmode="normal"><i id="icon-added" class="fa fa-shopping-cart" style="width:20px;"></i> SEPETE EKLE</button>
                        </div>
                        <div class="clearfix"></div>

                        <div style="float:left; width:250px; padding:8px 0; border-radius:5px; border:1px solid #eee; background-color:#eee; ">
          <div style="float:left; width:60px; margin-left:15px; line-height:30px;"><b>Adet</b></div>
          <div style="float:left; line-height:30px;">
           <select size="1" name="adet" style="width: 50px; height: 28px; border: 1px solid #CCCCCC">
		   <option value="1" selected="">1</option>
           <option value="2" >2</option>
           <option value="3" >3</option>

          </select>

          </div>
        </div>
                    </div>

                    <div class="modal fade" id="modalShoppingCart" tabindex="-1" role="dialog" aria-labelledby="modalShoppingCartLabel" aria-hidden="true">
                      <div class="modal-dialog">

                      </div>
                    </div>
					<script>
					  $(function(){
					    $('#cartClose').click(function(){
						  $('#modalShoppingCart').modal('hide');
						});

					    $('#goToMyCart').click(function(){
						  $('#modalShoppingCart').modal('hide');
						  var timerID = setInterval(function(){
							clearInterval(timerID);

							window.location = '/sepetim';
						  }, 800);
						});
					  });
					</script>

                  </div>
                </div>
</div>

@include('front.contact')
@include('front.footer')
</body>
</html>

