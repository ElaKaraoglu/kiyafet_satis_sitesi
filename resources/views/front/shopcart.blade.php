@extends('layouts.front')

<head><link href="//www.templatemonster.com/assets/css/demo-5b5cf980d234aff2af74.css" rel="stylesheet"> </head>


@section('content')
<section class="cart-sec">
         <div class="container">
            <div class="cart-page">
               <div class="row">
                  <div class="col-lg-8 col-md-7 col-sm-12">
                     <div class="cart-table">
                        <div class="row">
                           <div class="col-lg-12 col-md-12 col-sm-12">
                              <div class="table-responsive">
                                 <table class="table cart-table-borderless">
                                    <thead>
                                       <tr>
                                          <th>Item</th>
                                          <th>Name</th>
                                          <th>Price</th>
                                          <th>Qty</th>
                                          <th>Subtotal</th>
                                          <th>Status</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>
                                             <div class="cart-table-img">
                                                <div class="cart-add-image">
                                                   <img src="assets/img/product/p1.jpg" alt="cart-img">
                                                </div>
                                             </div>
                                          </td>
                                          <td>
                                             <div class="cart-table-img">
                                                <a>Cotton Women Frock</a>
                                             </div>
                                          </td>
                                          <td>
                                             <p class="mobie-cart-none">$50.0</p>
                                          </td>
                                          <td class="mobie-cart-none">
                                             <div class="product-quality">
                                                <p>
                                                   <a class="minus"><i class="ti-minus"></i></a>
                                                   <input type="text" value="1" class="qty">
                                                   <a class="add"><i class="ti-plus"></i></a>
                                                </p>
                                             </div>
                                          </td>
                                          <td class="mobie-cart-none">$50.0</td>
                                          <td class="mobie-cart-none">
                                             <a href="javascript:void(0)"><span>x</span></a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="cart-table-img">
                                                <div class="cart-add-image">
                                                   <img src="assets/img/product/p2.jpg" alt="cart-img">
                                                </div>
                                             </div>
                                          </td>
                                          <td>
                                             <div class="cart-table-img">
                                                <a>Printed Man T-shirt</a>
                                             </div>
                                          </td>
                                          <td>
                                             <p class="mobie-cart-none">$50.0</p>
                                          </td>
                                          <td class="mobie-cart-none">
                                             <div class="product-quality">
                                                <p>
                                                   <a class="minus"><i class="ti-minus"></i></a>
                                                   <input type="text" value="3" class="qty">
                                                   <a class="add"><i class="ti-plus"></i></a>
                                                </p>
                                             </div>
                                          </td>
                                          <td class="mobie-cart-none">$50.0</td>
                                          <td class="mobie-cart-none">
                                             <a href="javascript:void(0)"><span>x</span></a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <div class="cart-table-img">
                                                <div class="cart-add-image">
                                                   <img src="assets/img/product/p3.jpg" alt="cart-img">
                                                </div>
                                             </div>
                                          </td>
                                          <td>
                                             <div class="cart-table-img">
                                                <a>Cotton Women Frock</a>
                                             </div>
                                          </td>
                                          <td>
                                             <p class="mobie-cart-none">$50.0</p>
                                          </td>
                                          <td class="mobie-cart-none">
                                             <div class="product-quality">
                                                <p>
                                                   <a class="minus"><i class="ti-minus"></i></a>
                                                   <input type="text" value="2" class="qty">
                                                   <a class="add"><i class="ti-plus"></i></a>
                                                </p>
                                             </div>
                                          </td>
                                          <td class="mobie-cart-none">$50.0</td>
                                          <td class="mobie-cart-none">
                                             <a href="javascript:void(0)"><span>x</span></a>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-5 col-sm-12">
                     <div class="checkout-your-order">
                        <div class="dotted-box-order">
                           <div class="checkout-payment-title">
                              <h3>Summary</h3>
                           </div>
                           <div class="order-detail">
                              <table class="table">
                                 <tbody>
                                    <tr>
                                       <td>Sub Total</td>
                                       <td class="text-right">$150</td>
                                    </tr>
                                    <tr>
                                       <td>Shipping Cost</td>
                                       <td class="text-right">$10</td>
                                    </tr>
                                    <tr>
                                       <td>Tax</td>
                                       <td class="text-right">$10</td>
                                    </tr>
                                    <tr>
                                       <td>Tax</td>
                                       <td class="text-right">$10</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <div class="order-detail">
                              <table class="table">
                                 <tbody>
                                    <tr class="table-pt">
                                       <td>Order Total</td>
                                       <td class="text-right">$170</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <div class="checkout-btn">
                              <a class="btn" href="checkout.html">Go To Checkout</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
@endsection
