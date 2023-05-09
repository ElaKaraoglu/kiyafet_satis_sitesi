@extends('layouts.adminbase')
@section('title')
    Admin Paneli
@endsection

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               Ayarlar

            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('admin.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Ayarlar</li>
            </ol>
        </section>
 <form action="{{route('admin.setting.update')}}" role="form" method="post" enctype="multipart/form-data">
                @csrf
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
            <div >
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs" style="background-color: burlywood;">
              <li class="" ><a href="#tab_1"style="background-color:burlywood;" data-toggle="tab" aria-expanded="false">Genel</a></li>
              <li class="active"><a href="#tab_2"style="background-color: burlywood;" data-toggle="tab" aria-expanded="true">Smtp Email</a></li>
              <li class="active" ><a href="#tab_3"style="background-color: burlywood;" data-toggle="tab" aria-expanded="true">Sosyal Medya</a></li>
              <li class="active" ><a href="#tab_4" style="background-color: burlywood;"data-toggle="tab" aria-expanded="true">Hakkımızda</a></li>
              <li class="active" ><a href="#tab_5"style="background-color: burlywood;" data-toggle="tab" aria-expanded="true">Temasa Geçin</a></li>
              <li class="active"><a href="#tab_6"style="background-color: burlywood;" data-toggle="tab" aria-expanded="true">Refaranslar</a></li>
              <li class="pull-right"><a href="https://www.free-css.com/free-css-templates" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane" id="tab_1">

              <div class="box">



              <div class="box-body">
                <input type="hidden",id="id" name="id" value="{{$data->id}}" class="form-control">

                <div class="form-group">
                  <label for="exampleInputEmail1">Ad:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$data->ad}}">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Anahtar Kelimeler:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="keywords"value="{{$data->keywords}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Açıklama:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="description" value="{{$data->aciklama}}">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Şirket:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="company" value="{{$data->sirket}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Adres:</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$data->adres}}" name="address">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Telefon:</Kelimelerlabel>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$data->telefon}}" name="phone">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email:</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$data->email}}" name="email">

                </div>

                <div class="form-group">
                  <label>Durumu</label>
                  <select class="form-control" name="status" value="{{$data->durum}}">
                    <option>False</option>
                    <option>True</option>

                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">İkon:</label>
                  <input type="file" id="exampleInputFile", name="icon" value="{{$data->ikon}}">

                </div>

              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Güncelle</button>
              </div>

          </div>
          </div>

              <!-- ------------------------TAB2-------------------------------------------------------- -->

              <div class="tab-pane active" id="tab_2">
              <div class="box">


    @csrf

  <div class="box-body">
    <div class="form-group">
      <label for="exampleInputEmail1">Smtp Server:</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="name"value="{{$data->smtpserver}}">
    </div>


    <div class="form-group">
      <label for="exampleInputEmail1">Smtp Email:</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="description" value="{{$data->smtpemail}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Smtppassword:</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="price" value="{{$data->smtppassword}}">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Smtpport:</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="color" value="{{$data->smtpport}}">
    </div>


  </div>
  <div class="box-footer">
    <button type="submit" class="btn btn-primary">Güncelle</button>
  </div>

</div>

  </div>


<!-- --------------------------------- TAB3---------------------------------------------------------->

              <div class="tab-pane active" id="tab_3">
              <div class="box">


    @csrf

  <div class="box-body">
    <div class="form-group">
      <label for="exampleInputEmail1">Fax:</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$data->fax}}">
    </div>


    <div class="form-group">
      <label for="exampleInputEmail1">Facebook:</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="description" value="{{$data->facebook}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Instagram:</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="price" value="{{$data->instagram}}">
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Twitter:</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="color" value="{{$data->twitter}}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Youtube:</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="color" value="{{$data->youtube}}">
    </div>

  </div>
  <div class="box-footer">
    <button type="submit" class="btn btn-primary">Güncelle</button>
  </div>

</div>

  </div>

<!-- -----------------------------------tab4----------------------------------------------->
              <div class="tab-pane active" id="tab_4">
              <div class="box">
            <div class="box-header">
              <h3 class="box-title">Bootstrap WYSIHTML5 <small>Simple and fast</small></h3>
              <div class="pull-right box-tools">
                <button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body pad">

                <ul class="wysihtml5-toolbar" style=""><li class="dropdown">
  <a class="btn btn-default dropdown-toggle " data-toggle="dropdown">
    <span class="glyphicon glyphicon-font"></span>
    <span class="current-font">Normal text</span>
    <b class="caret"></b>
  </a>
  <ul class="dropdown-menu">
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="div" tabindex="-1" href="javascript:;" unselectable="on">Normal text</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1" tabindex="-1" href="javascript:;" unselectable="on">Heading 1</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2" tabindex="-1" href="javascript:;" unselectable="on">Heading 2</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h3" tabindex="-1" href="javascript:;" unselectable="on">Heading 3</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h4" tabindex="-1" href="javascript:;" unselectable="on">Heading 4</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h5" tabindex="-1" href="javascript:;" unselectable="on">Heading 5</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h6" tabindex="-1" href="javascript:;" unselectable="on">Heading 6</a></li>
  </ul>
</li>
<li>
  <div class="btn-group">
    <a class="btn  btn-default" data-wysihtml5-command="bold" title="CTRL+B" tabindex="-1" href="javascript:;" unselectable="on">Bold</a>
    <a class="btn  btn-default" data-wysihtml5-command="italic" title="CTRL+I" tabindex="-1" href="javascript:;" unselectable="on">Italic</a>
    <a class="btn  btn-default" data-wysihtml5-command="underline" title="CTRL+U" tabindex="-1" href="javascript:;" unselectable="on">Underline</a>
  </div>
</li>
<li>
  <div class="btn-group">
    <a class="btn  btn-default" data-wysihtml5-command="insertUnorderedList" title="Unordered list" tabindex="-1" href="javascript:;" unselectable="on"><span class="glyphicon glyphicon-list"></span></a>
    <a class="btn  btn-default" data-wysihtml5-command="insertOrderedList" title="Ordered list" tabindex="-1" href="javascript:;" unselectable="on"><span class="glyphicon glyphicon-th-list"></span></a>
    <a class="btn  btn-default" data-wysihtml5-command="Outdent" title="Outdent" tabindex="-1" href="javascript:;" unselectable="on"><span class="glyphicon glyphicon-indent-right"></span></a>
    <a class="btn  btn-default" data-wysihtml5-command="Indent" title="Indent" tabindex="-1" href="javascript:;" unselectable="on"><span class="glyphicon glyphicon-indent-left"></span></a>
  </div>
</li>
<li>
  <div class="bootstrap-wysihtml5-insert-link-modal modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <a class="close" data-dismiss="modal">×</a>
          <h3>Insert link</h3>
        </div>
        <div class="modal-body">
          <input value="http://" class="bootstrap-wysihtml5-insert-link-url form-control">
          <label class="checkbox"> <input type="checkbox" class="bootstrap-wysihtml5-insert-link-target" checked="">Open link in new window</label>
        </div>
        <div class="modal-footer">
          <a class="btn btn-default" data-dismiss="modal">Cancel</a>
          <a href="#" class="btn btn-primary" data-dismiss="modal">Insert link</a>
        </div>
      </div>
    </div>
  </div>
  <a class="btn  btn-default" data-wysihtml5-command="createLink" title="Insert link" tabindex="-1" href="javascript:;" unselectable="on">
    <span class="glyphicon glyphicon-share"></span>
  </a>
</li>
<li>
  <div class="bootstrap-wysihtml5-insert-image-modal modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <a class="close" data-dismiss="modal">×</a>
          <h3>Insert image</h3>
        </div>
        <div class="modal-body">
          <input value="http://" class="bootstrap-wysihtml5-insert-image-url form-control">
        </div>
        <div class="modal-footer">
          <a class="btn btn-default" data-dismiss="modal">Cancel</a>
          <a class="btn btn-primary" data-dismiss="modal">Insert image</a>
        </div>
      </div>
    </div>
  </div>
  <a class="btn  btn-default" data-wysihtml5-command="insertImage" title="Insert image" tabindex="-1" href="javascript:;" unselectable="on">
    <span class="glyphicon glyphicon-picture"></span>
  </a>
</li>
</ul>
<textarea class="textarea" style="width: 100%; height:100px;" value="{{$data->hakkımızda}}"></textarea>

            </div>
            <div class="box-footer">
    <button type="submit" class="btn btn-primary">Güncelle</button>
  </div>
          </div>

                   </div>
<!-- -----------------------------------tab5----------------------------------------------->

              <div class="tab-pane active" id="tab_5">
              <div class="box">
            <div class="box-header">
              <h3 class="box-title">Bootstrap WYSIHTML5 <small>Simple and fast</small></h3>
              <div class="pull-right box-tools">
                <button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body pad">

                <ul class="wysihtml5-toolbar" style=""><li class="dropdown">
  <a class="btn btn-default dropdown-toggle " data-toggle="dropdown">
    <span class="glyphicon glyphicon-font"></span>
    <span class="current-font">Normal text</span>
    <b class="caret"></b>
  </a>
  <ul class="dropdown-menu">
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="div" tabindex="-1" href="javascript:;" unselectable="on">Normal text</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1" tabindex="-1" href="javascript:;" unselectable="on">Heading 1</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2" tabindex="-1" href="javascript:;" unselectable="on">Heading 2</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h3" tabindex="-1" href="javascript:;" unselectable="on">Heading 3</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h4" tabindex="-1" href="javascript:;" unselectable="on">Heading 4</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h5" tabindex="-1" href="javascript:;" unselectable="on">Heading 5</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h6" tabindex="-1" href="javascript:;" unselectable="on">Heading 6</a></li>
  </ul>
</li>
<li>
  <div class="btn-group">
    <a class="btn  btn-default" data-wysihtml5-command="bold" title="CTRL+B" tabindex="-1" href="javascript:;" unselectable="on">Bold</a>
    <a class="btn  btn-default" data-wysihtml5-command="italic" title="CTRL+I" tabindex="-1" href="javascript:;" unselectable="on">Italic</a>
    <a class="btn  btn-default" data-wysihtml5-command="underline" title="CTRL+U" tabindex="-1" href="javascript:;" unselectable="on">Underline</a>
  </div>
</li>
<li>
  <div class="btn-group">
    <a class="btn  btn-default" data-wysihtml5-command="insertUnorderedList" title="Unordered list" tabindex="-1" href="javascript:;" unselectable="on"><span class="glyphicon glyphicon-list"></span></a>
    <a class="btn  btn-default" data-wysihtml5-command="insertOrderedList" title="Ordered list" tabindex="-1" href="javascript:;" unselectable="on"><span class="glyphicon glyphicon-th-list"></span></a>
    <a class="btn  btn-default" data-wysihtml5-command="Outdent" title="Outdent" tabindex="-1" href="javascript:;" unselectable="on"><span class="glyphicon glyphicon-indent-right"></span></a>
    <a class="btn  btn-default" data-wysihtml5-command="Indent" title="Indent" tabindex="-1" href="javascript:;" unselectable="on"><span class="glyphicon glyphicon-indent-left"></span></a>
  </div>
</li>
<li>
  <div class="bootstrap-wysihtml5-insert-link-modal modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <a class="close" data-dismiss="modal">×</a>
          <h3>Insert link</h3>
        </div>
        <div class="modal-body">
          <input value="http://" class="bootstrap-wysihtml5-insert-link-url form-control">
          <label class="checkbox"> <input type="checkbox" class="bootstrap-wysihtml5-insert-link-target" checked="">Open link in new window</label>
        </div>
        <div class="modal-footer">
          <a class="btn btn-default" data-dismiss="modal">Cancel</a>
          <a href="#" class="btn btn-primary" data-dismiss="modal">Insert link</a>
        </div>
      </div>
    </div>
  </div>
  <a class="btn  btn-default" data-wysihtml5-command="createLink" title="Insert link" tabindex="-1" href="javascript:;" unselectable="on">
    <span class="glyphicon glyphicon-share"></span>
  </a>
</li>
<li>
  <div class="bootstrap-wysihtml5-insert-image-modal modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <a class="close" data-dismiss="modal">×</a>
          <h3>Insert image</h3>
        </div>
        <div class="modal-body">
          <input value="http://" class="bootstrap-wysihtml5-insert-image-url form-control">
        </div>
        <div class="modal-footer">
          <a class="btn btn-default" data-dismiss="modal">Cancel</a>
          <a class="btn btn-primary" data-dismiss="modal">Insert image</a>
        </div>
      </div>
    </div>
  </div>
  <a class="btn  btn-default" data-wysihtml5-command="insertImage" title="Insert image" tabindex="-1" href="javascript:;" unselectable="on">
    <span class="glyphicon glyphicon-picture"></span>
  </a>
</li>
</ul>
<textarea class="textarea" style="width: 100%; height:100px;" value="{{$data->contact}}"></textarea>
</form>
            </div>
            <div class="box-footer">
    <button type="submit" class="btn btn-primary">Güncelle</button>
  </div>
          </div>
              </div>

<!-- -----------------------------------tab6----------------------------------------------->
              <div class="tab-pane active" id="tab_6">
              <div class="box">
            <div class="box-header">
              <h3 class="box-title">Bootstrap WYSIHTML5 <small>Simple and fast</small></h3>
              <div class="pull-right box-tools">
                <button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body pad">

                <ul class="wysihtml5-toolbar" style=""><li class="dropdown">
  <a class="btn btn-default dropdown-toggle " data-toggle="dropdown">
    <span class="glyphicon glyphicon-font"></span>
    <span class="current-font">Normal text</span>
    <b class="caret"></b>
  </a>
  <ul class="dropdown-menu">
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="div" tabindex="-1" href="javascript:;" unselectable="on">Normal text</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1" tabindex="-1" href="javascript:;" unselectable="on">Heading 1</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2" tabindex="-1" href="javascript:;" unselectable="on">Heading 2</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h3" tabindex="-1" href="javascript:;" unselectable="on">Heading 3</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h4" tabindex="-1" href="javascript:;" unselectable="on">Heading 4</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h5" tabindex="-1" href="javascript:;" unselectable="on">Heading 5</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h6" tabindex="-1" href="javascript:;" unselectable="on">Heading 6</a></li>
  </ul>
</li>
<li>
  <div class="btn-group">
    <a class="btn  btn-default" data-wysihtml5-command="bold" title="CTRL+B" tabindex="-1" href="javascript:;" unselectable="on">Bold</a>
    <a class="btn  btn-default" data-wysihtml5-command="italic" title="CTRL+I" tabindex="-1" href="javascript:;" unselectable="on">Italic</a>
    <a class="btn  btn-default" data-wysihtml5-command="underline" title="CTRL+U" tabindex="-1" href="javascript:;" unselectable="on">Underline</a>
  </div>
</li>
<li>
  <div class="btn-group">
    <a class="btn  btn-default" data-wysihtml5-command="insertUnorderedList" title="Unordered list" tabindex="-1" href="javascript:;" unselectable="on"><span class="glyphicon glyphicon-list"></span></a>
    <a class="btn  btn-default" data-wysihtml5-command="insertOrderedList" title="Ordered list" tabindex="-1" href="javascript:;" unselectable="on"><span class="glyphicon glyphicon-th-list"></span></a>
    <a class="btn  btn-default" data-wysihtml5-command="Outdent" title="Outdent" tabindex="-1" href="javascript:;" unselectable="on"><span class="glyphicon glyphicon-indent-right"></span></a>
    <a class="btn  btn-default" data-wysihtml5-command="Indent" title="Indent" tabindex="-1" href="javascript:;" unselectable="on"><span class="glyphicon glyphicon-indent-left"></span></a>
  </div>
</li>
<li>
  <div class="bootstrap-wysihtml5-insert-link-modal modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <a class="close" data-dismiss="modal">×</a>
          <h3>Insert link</h3>
        </div>
        <div class="modal-body">
          <input value="http://" class="bootstrap-wysihtml5-insert-link-url form-control">
          <label class="checkbox"> <input type="checkbox" class="bootstrap-wysihtml5-insert-link-target" checked="">Open link in new window</label>
        </div>
        <div class="modal-footer">
          <a class="btn btn-default" data-dismiss="modal">Cancel</a>
          <a href="#" class="btn btn-primary" data-dismiss="modal">Insert link</a>
        </div>
      </div>
    </div>
  </div>
  <a class="btn  btn-default" data-wysihtml5-command="createLink" title="Insert link" tabindex="-1" href="javascript:;" unselectable="on">
    <span class="glyphicon glyphicon-share"></span>
  </a>
</li>
<li>
  <div class="bootstrap-wysihtml5-insert-image-modal modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <a class="close" data-dismiss="modal">×</a>
          <h3>Insert image</h3>
        </div>
        <div class="modal-body">
          <input value="http://" class="bootstrap-wysihtml5-insert-image-url form-control">
        </div>
        <div class="modal-footer">
          <a class="btn btn-default" data-dismiss="modal">Cancel</a>
          <a class="btn btn-primary" data-dismiss="modal">Insert image</a>
        </div>
      </div>
    </div>
  </div>
  <a class="btn  btn-default" data-wysihtml5-command="insertImage" title="Insert image" tabindex="-1" href="javascript:;" unselectable="on">
    <span class="glyphicon glyphicon-picture"></span>
  </a>
</li>
</ul>
<textarea class="textarea" style="width: 100%; height:100px;" value="{{$data->referanslar}}"></textarea>

            </div>
            <div class="box-footer">
    <button type="submit" class="btn btn-primary">Güncelle</button>
  </div>
          </div>
              </div>
            </div>
          </div>
        </div>
            </div><!-- /.box -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
</form>
@endsection

