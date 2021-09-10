
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Potenza - Job Application Form Wizard with Resume upload and Branch feature">
    <meta name="author" content="Ansonika">
    <title>pendaftaran | gagal</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset('tilawatipusat/registrasi/img/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('tilawatipusat/registrasi/img/apple-touch-icon-72x72-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('tilawatipusat/registrasi/img/apple-touch-icon-114x114-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('tilawatipusat/registrasi/img/apple-touch-icon-144x144-precomposed.png') }}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('tilawatipusat/registrasi/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('tilawatipusat/registrasi/css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('tilawatipusat/registrasi/css/style.cs') }}s" rel="stylesheet">
	<link href="{{ asset('tilawatipusat/registrasi/css/vendors.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('tilawatipusat/registrasi/css/custom.css') }}" rel="stylesheet">
	<!-- Select2 -->
    <link href="{{URL::asset('tilawatipusat/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('tilawatipusat/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('tilawatipusat/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('tilawatipusat/libs/bootstrap-touchspin/bootstrap-touchspin.min.css')}}" rel="stylesheet" />
	<!-- MODERNIZR MENU -->
	<script src="{{ asset('tilawatipusat/registrasi/js/modernizr.js') }}"></script>

</head>

<body>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->
	
	<div class="container-fluid">
	    <div class="row row-height">
	        <div class="col-xl-4 col-lg-4 content-left">
	            <div class="content-left-wrapper">
	                <!-- /social -->
	                <div><?php date_default_timezone_set('Asia/Jakarta'); $date=$diklat->tanggal;?>
	                    <figure></figure>
	                    <h2 style="text-transform: uppercase">{{ $diklat->program->name }}</h2>
	                    <p>Diadakan oleh {{ $diklat->cabang->name }} - {{ $diklat->cabang->kabupaten->nama }} 
						<br/>Pada Tanggal {{ Carbon\Carbon::parse($date)->isoFormat('D MMMM Y') }}</p>
	                    <a href="#0" class="btn_1 rounded yellow">Periksa data anda</a>
	                    <a href="#start" class="btn_1 rounded mobile_btn yellow">Periksa data anda</a>
	                </div>
	                <div class="copy">© 2021 Tilawati Pusat Nurul Falah</div>
	            </div>
	            <!-- /content-left-wrapper -->
	        </div>
	        <!-- /content-left -->
	        <div class="col-xl-8 col-lg-8 content-right" id="start">
	            <div id="wizard_container">
	                <div>
	                    <div class="text-center" style="text-transform: uppercase">
							<h5>Hai!, {{ $peserta->name }}</h5>
						</div>
						<hr>
						<div class="form-group text-center">
							<p>Anda sudah terdaftar namun data anda belum kami konfirasi! </p><span> Silahkan tunggu & periksa pesan whatsapp yang dikirimkan ke nomor  <b>{{$peserta->telp}}</b> </span><br>
						</div>
	                </div>
	                <!-- /top-wizard -->
	            </div>
	            <!-- /Wizard container -->
	        </div>
	        <!-- /content-right-->
	    </div>
	    <!-- /row-->
	</div>
	<!-- /container-fluid -->

	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- /cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- /cd-overlay-content -->

	{{-- <a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a> --}}
	<!-- /menu button -->
	
	<!-- COMMON SCRIPTS -->
	<script src="{{ asset('tilawatipusat/registrasi/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('tilawatipusat/registrasi/js/common_scripts.min.js') }}"></script>
	<script src="{{ asset('tilawatipusat/registrasi/js/velocity.min.js') }}"></script>
	<script src="{{ asset('tilawatipusat/registrasi/js/common_functions.js') }}"></script>
	<script src="{{ asset('tilawatipusat/registrasi/js/file-validator.js') }}"></script>
	<!-- Wizard script-->
	<script src="{{ asset('tilawatipusat/registrasi/js/func_2.js') }}"></script>
    <!-- Script Select2-->
    <script src="{{URL::asset('/tilawatipusat/libs/select2/select2.min.js')}}"></script>
    <script src="{{URL::asset('/tilawatipusat/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{URL::asset('/tilawatipusat/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{URL::asset('/tilawatipusat/libs/bootstrap-touchspin/bootstrap-touchspin.min.js')}}"></script>
    <script src="{{URL::asset('/tilawatipusat/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
</body>
</html>