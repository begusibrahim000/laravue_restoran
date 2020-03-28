<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>@yield('title') | Restoran</title>
	{{-- css default | bootstrap --}}
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome/css/all.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

	{{-- id untuk instan vue --}}
	<section id="restoran">
		<div class="wrapper">
			{{-- NAVBAR --}}
			{{-- navbar 1 --}}
			@if(session()->get('akunCustomer'))
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
				  <a class="navbar-brand" href="#">Download posq mobile app</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav" style="margin-left: auto;">
				    	<li class="nav-item" style="margin-right: 500px;">
				    		<a class="nav-link" href="#"><i class="fas fa-stop fa-lg"></i></a>
				    	</li>
				    	<li class="nav-item">
				    		<a class="nav-link" href="#">Kritik & Saran</a>
				    	</li>
				    	<li class="nav-item">
				    		<a class="nav-link" href="#">Hubungi Kami</a>
				    	</li>
				    	<li class="nav-item">
				    		<a class="nav-link" href="#">Pusat Bantuan</a>
				    	</li>
				    </ul>
				  </div>
				</nav>
				{{-- akrhi navbar 1 --}}

				{{-- navbar 2 --}}
				<nav class="navbar navbar-expand-lg navbar-primary bg-primary">
				  <a class="navbar-brand" href="#" style="color:black;">Restoran</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <form class="form-inline my-2 my-lg-0" style="margin-left: 350px;">
				      <input class="form-control mr-sm-2" type="search" placeholder="Opsi Tambahan" aria-label="Search" style="padding-left: 100px;padding-right: 150px;">
				      <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
				    </form>
				    <ul class="navbar-nav">
				    	<li class="nav-item">
				    		<a class="nav-link" href="#" style="color:black;"><i class="fas fa-sliders-h fa-lg ml-2"></i> Filter</a>
				    	</li>
				    	<li class="nav-item" style="margin-left: 400px;">
				    		<a class="nav-link" href="#" style="color:black;"><i class="far fa-bell fa-lg fa-spin"></i></a>
				    	</li>
				    </ul>
				  </div>
				</nav>
				{{-- akrhi navbar 2 --}}
			{{-- AKHIR NAVBAR --}}

			{{-- SIDEBAR --}}
			<div class="row">
				<div class="col-md-2">
					<sidebar-component></sidebar-component>
				</div>
			@endif
			{{-- Akhir Kondisi --}}
				<div class="col-md-8">
					{{-- ISI CONTENT --}}
					<div class="container mt-5">
						@yield('content')
					</div>
					{{-- AKHIR ISI CONTENT --}}
				</div>
			</div>
			{{-- AKHIR SIDEBAR --}}
		</div>
	</section>
	{{-- akhir id untuk instan vue --}}

	{{-- script default --}}
	<script src="{{asset('js/app.js')}}"></script>
	{{-- script font awesome --}}
	<script src="{{asset('font-awesome/js/all.js')}}"></script>
	{{-- script popup cantik --}}
	<script src="{{asset('sweetalert/sweetalert2.all.js')}}"></script>
	{{-- script pribadi | custom --}}
	@yield('myScript')
</body>
</html>