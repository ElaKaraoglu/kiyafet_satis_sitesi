@extends('layouts.front')

@section('content')
<div class="container">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
				</div>

			</div>
			<div class="about">
				<h3>MNG Giyim Üyesi </h3>
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
    <form href="/user/update/{{$data->id}}" role="form" method="post">
	<div class="card-body">
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2 text-primary">Üye Bilgileri</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="fullName">Ad</label>
					<input type="text" class="form-control" id="fullName" value="{{$data->name}}" placeholder="Enter full name">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Soyad</label>
					<input type="email" class="form-control" id="eMail" placeholder="Enter email ID" value="{{$data->last_name}}" >
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone">Telefon</label>
					<input type="text" class="form-control" id="phone" placeholder="Enter phone number" value="{{$data->telefon}}" >
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="website">Email</label>
					<input type="url" class="form-control" id="website" placeholder="Website url" value="{{$data->email}}" >
				</div>
			</div>
		</div>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mt-3 mb-2 text-primary">Adres</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">

                <textarea id="w3review" name="w3review" rows="4" cols="50" >
                       {{$data->address}}
</textarea>
				</div>
			</div>

		</div>
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="text-right">
					<button href="/" type="button" id="submit" name="submit" class="btn btn-secondary">Çıkış</button>
					<button  type="submit" id="submit" name="submit" class="btn btn-primary">Update</button>
				</div>
			</div>
		</div>
	</div>
</form>
</div>
</div>
</div>
</div>
@endsection
