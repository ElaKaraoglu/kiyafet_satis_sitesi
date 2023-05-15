@php

$parentcategories=\App\Http\Controllers\HomeController::categorylist()

@endphp


<div class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-light bg-light justify-content-between"> <!-- anasayfa logosu başlığı -->
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                  <a href="index.html">Anasayfa</a>


                @foreach($parentcategories as $rs)
                <a href="index.html">{{$rs->ad}}</a>
                @endforeach





            </div>
            <span class="toggle_icon" onclick="openNav()"><img src="{{asset('assets')}}/images/toggle-icon.png"></span>
            <a class="logo" href="index.html"><img src="{{asset('assets')}}/images/logo.png"></a></a>
            <form class="form-inline ">
                <div class="login_text">
                      <div class="dropdown">


                <ul>

                <li>




                <a href="#" class="droplink"> <img src="{{asset('assets')}}/images/user-icon.png"></a>

<div class="dropdown-content">


                     <a href="/login">Giriş Yap</a>



                     <a href="/register">Kayıt Ol</a>



                   </div>
                  </li>











                        <li><a href="#"><img src="{{asset('assets')}}/images/bag-icon.png"></a></li>
                        <li><a href="#"><img src="{{asset('assets')}}/images/search-icon.png"></a></li>
                    </ul> </div>
                </div>
            </form>
        </nav>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php
