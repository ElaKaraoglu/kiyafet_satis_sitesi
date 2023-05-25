<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">

            <div class="pull-center info">
                @auth
            <a href="#" class="d-block">{{Auth::user()->name}}</a>
                <a href="{{route('adminlogout')}}" class="d-block">Çıkış</a>
                @endauth
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Panel</li>
            <li >
                <a href="/admin/siparis_index">
                    <i class="fa fa-dashboard"></i> <span>Siparişler</span>
                </a>

            </li>

            <li >
                <a href="/admin/category">
                    <i class="fa fa-th"></i> <span>Kategoriler</span>
                </a>

            </li>
            <li >
                <a href="/admin/product">
                    <i class="fa fa-th"></i> <span>Ürünler</span>
                </a>

            </li>

                

            </li>


            <li class="header">LABELS</li>
            <li><a href="{{route('admin.setting')}}"><i class="fa fa-circle-o text-danger"></i> Ayarlar</a></li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
