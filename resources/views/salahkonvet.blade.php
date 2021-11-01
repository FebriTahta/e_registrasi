<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Tilawatipusat">
	<title>Registrasi - Tilawati</title>
    <meta property="og:title" content="Registrasi"/><?php date_default_timezone_set('Asia/Jakarta'); $tgl = Carbon\Carbon::parse($diklat->tanggal)->isoFormat('dddd, D MMMM Y') ?>
    <meta property="og:description" content="Registrasi {{$diklat->program->name}} - {{ $tgl }}"/>
    <meta property="og:image" itemprop="image" content="{{ asset('images/tumbreg.jpeg') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset('images/tilawati-blue.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('newregis/img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('newregis/img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('newregis/img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('newregis/img/apple-touch-icon-144x144-precomposed.png')}}">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('newregis/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('newregis/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('newregis/css/vendors.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('newregis/css/custom.css')}}" rel="stylesheet">
    <!-- CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
    <link href="{{asset('select2-develop/dist/css/select2.css')}}" rel="stylesheet" />
	<link rel="stylesheet" href="{{asset('src/css/miri-ui-kit-free.css')}}">
    <!-- Script -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
	<style>
.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 720px;
  max-width: 90%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 10px;
  right: 20px;
  transition: all 200ms;
  font-size: 20px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 70%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 90%;
  }
  .popup{
    width: 90%;
  }
}
	</style>
</head>

<body class="bg_color_gray">

<div id="preloader">
    <div data-loader="circle-side"></div>
</div><!-- /Preload -->
<div id="loader_form">
    <div data-loader="circle-side-2"></div>
</div><!-- /loader_form -->

<div class="min-vh-100 d-flex flex-column">

    <header>
        <div class="container-fluid">
            <div class="row d-flex align-items-center">
               
                <div class="col-12 text-center">
                    <a href="index.html"><img src="{{asset('nf_logo.png')}}" alt="" class="img-fluid" style="max-width: 120px"></a>
                </div>
                
            </div>
        </div>
        <!-- /container -->
    </header>
    <!-- /header -->

	<!-- /offcanvas nav -->

    <div class="container-fluid d-flex flex-column my-auto">
		@if ($diklat->groupwa == null)
		<div class="belum_siap_dibuka">
			<div class="title">
				<h5>PENDAFTARAN AKAN SEGERA DIBUKA</h5>
				<small>mohon menunggu / hubungi admin kami terkait jadwal pendaftaran</small>
			</div><hr>
		</div>
		<!-- /Step -->
		@else
		<div id="wizard_container" style="max-width: 700px">

            <div id="top-wizard">
                <div id="progressbar"></div>
            </div>
            <!-- /top-wizard -->
            <form id="wrapped" method="POST" action="{{route('new_registrasi')}}" enctype="multipart/form-data">@csrf
                <input id="website" name="website" type="text" value="">
                <!-- Leave input above for security protection, read docs for details -->
				<input type="hidden" name="pelatihan_id" value="{{$diklat->id}}">
                <div id="middle-wizzard">
                    <p class="text-danger">SALAH KONVERSI LINK. HUBUNGI ADMIN</p>
                </div>
                <!-- /middle-wizard -->

                {{-- <div id="bottom-wizard">
					<code id="perbaiki" style="display: none">ISI NOMOR TELEPHONE ANDA DENGAN BENAR UNTUK KE TAHAP SELANJUTNYA</code><br>
                    <button style="margin-bottom: 10px" type="button" name="backward" id="kembali" class="backward btn_1 btn-sm">KEMBALI</button>
                    <button style="margin-bottom: 10px" type="button" name="forward" id="daftar" class="forward btn_1 ciao btn-sm">LANJUT</button>
					<a style="margin-bottom: 10px; width: 130px" class="btn_2 btn-sm" href="#popup2">PANDUAN</a>
					{{-- <a href="#popup2" style="margin-bottom: 10px; width: 130px" class="btn2 btn-sm">panduan</a> --}}
                    <button style="margin-bottom: 10px" type="submit" name="process" class="submit btn_1 btn-sm">DAFTAR!</button>
                </div> --}}
                <!-- /bottom-wizard -->
                
            </form>
        </div>
        <!-- /Wizard container -->
		<!-- /Step -->
		@endif
        
    </div>
    <!-- /Container -->

    <footer>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <p>© 2021 | <a href="#0">Tilawati Pusat</a></p>
                </div>
                {{-- <div class="col-sm-6 text-md-end">
                    <a class="btn_help btn" href="#modal-help" id="modal_h"><i class="bi bi-question-circle"> Help</i></a>
                </div> --}}
            </div>
            <!-- /Row -->
        </div>
        <!-- /Container -->
    </footer>
    <!-- /Footer -->
</div>
<!-- /flex-column -->

<!-- Help form Popup -->
<div id="modal-help" class="custom-modal zoom-anim-dialog mfp-hide">
    <div class="small-dialog-header">
        <h3>VIDEO PANDUAN PENGISIAN FORM</h3>
        {{-- <p class="mb-3">Please fill the form with your questions and<br>we will reply soon!</p> --}}
    </div>
    <div id="message-help">
		<iframe src="https://www.youtube.com/embed/FVMANvZznkw"
            style="max-width: 100%; width: 720px; height: auto;" frameborder="0" allowfullscreen></iframe>
	</div>
</div>
<!-- /Help form Popup -->

<!-- Modal terms -->
<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
            </div>
        </div>
        <!-- /modal-content -->
    </div>
    <!-- /modal-dialog -->
</div>
<!-- /modal -->

<div id="popup1" class="overlay">
	<div class="popup">
		<h2>Syarat & Ketentuan</h2>
		<hr>
		<a class="close" href="#">&times;</a>
		<div class="content">
			Data diri yang dikirim merupakan data yang valid / benar. Apabila terdapat kesalahan pada saat
			pengisian formulir adalah murni kelalaian dari peserta.
		</div>
		<br>
		<div class="content">
			Peserta memberi izin kepada Tilawati menggunakan data diri yang diisi melalui form ini untuk guna kepentingan 
			administrasi
		</div>
		<br>
		<div class="content">
			Syarat dan ketentuan ini dapat berubah sewaktu-waktu
		</div>
	</div>
</div>
<div id="popup2" class="overlay">
	<div class="popup">
		<h2>Panduan Pengisian</h2>
		<hr>
		<a class="close" href="#">&times;</a>
		<div class="content">
			<iframe src="https://www.youtube.com/embed/Z00zSqf7VyU"
            style="max-width: 100%; width: 720px; height: 400px;" frameborder="0" allowfullscreen></iframe>
			{{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/Z00zSqf7VyU" title="YouTube video player"
			 frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
		</div>
	</div>
</div>


	
<!-- COMMON SCRIPTS -->
<script src="{{asset('newregis/js/common_scripts.min.js')}}"></script>
<script src="{{asset('newregis/js/common_functions.js')}}"></script>
<script src="{{asset('newregis/assets/validate.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{asset('select2-develop/dist/js/select2.js')}}"></script>

</body>
</html>