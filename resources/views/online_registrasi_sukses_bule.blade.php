<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Limmo - Register, Reservation, Questionare, Reviews, Quotation form Multipurpose Wizard with SMTP and HTML email support">
    <meta name="author" content="Ansonika">
    <title>PENDAFTARAN DIKLAT</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="{{asset('newregis/image/x-icon')}}">
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
        <div id="wizard_container">

            <div id="top-wizard">
                <div id="progressbar"></div>
            </div>
            <!-- /top-wizard -->
            {{-- KONTEN --}}
            <form id="wrapped">
                @if ($data->pelatihan->jenis == 'webinar')
                <div id="middle-wizard">
                <center style="padding: 3%;">
                    <div class="card" style="width: 650px; max-width: 100%; margin-bottom: 20px;">
                        <img src="https://tilawatipusat.com/image_flyer/{{$data->pelatihan->flyer->image}}" style="width: 100%; height: auto;" alt="">
                    </div>
                
                    <div class="card text-center" style="width: 650px; max-width: 100%; padding: 15px;">
                        <span>THANKYOU</span>
                        <h5>{{strtoupper($data->name)}}</h5><br>
                        <span>Your registration at <br></span>
                        <span class="text-primary">" {{strtoupper($data->program->name)}} "</span>
                        <small>{{\Carbon\Carbon::parse($data->pelatihan->tanggal)->isoFormat('D MMMM Y');}}</small>
                        <span>Has been success</span><br>
                        <span>
                            Please join to our whatsapp group with clicking button below
                        </span>
                        <br>
                        {{-- <a href="{{$data->pelatihan->groupwa}}"> {{$data->pelatihan->groupwa}}</a><br> --}}
                        {{-- <small>atau bisa dengan klik tombol begabung dibawah ini</small><br><br> --}}
                        <div class="form-group text-center">
                            <a class="btn btn-success" href="{{$data->pelatihan->groupwa}}">JOIN GROUP !</a>
                        </div>
                    </div>
                </center>
                </div>
                @else
                <div id="wrapped">
                    <div id="middle-wizard">
                    <div class="title">
                        <img src="https://tilawatipusat.com/image_flyer/{{$data->pelatihan->flyer->image}}" style="width: 100%; height: auto;" alt="">
                        <p>_</p>
                        <h5>{{strtoupper($data->pelatihan->program->name)}}</h5>
                        <small>{{Carbon\Carbon::parse($data->pelatihan->tanggal)->isoFormat('dddd, D MMMM Y')}}</small>
                        @if ($data->pelatihan->sampai_tanggal !== null)
                        <small>- {{Carbon\Carbon::parse($data->pelatihan->sampai_tanggal)->isoFormat('dddd, D MMMM Y')}}</small>
                        @endif
                    </div><hr>
                    @if ($data->status == 0)
                        <div class="konten ">
                            <div class="row">
                                <div class="col-2">
                                    <small>Hai</small>
                                </div>
                                <div class="col-1">
                                    <small>:</small>
                                </div>
                                <div class="col-9">
                                    <small>{{strtoupper($data->name)}}, {{$data->gelar}}</small>
                                </div>
                                <div class="col-2">
                                    <small>Asal</small>
                                </div>
                                <div class="col-1">
                                    <small>:</small>
                                </div>
                                <div class="col-9">
                                    <small>{{$data->kota}}</small>
                                </div>
                            </div>
                            <hr>
                            <small>Thankyou . You will recieving whatsapp mesage from us after your data is verivied
                            </small>
                            <br>
                            <small> 
                                We will process your registration data immediately
                                </small><br>
                            <small class="text-primary">
                                Please Wait & Make Sure Your WhatsApp Number is Active</small>
                        </div><br>
                        <div class="tombol">
                            {{-- <a type="button" id="screenshot" class="btn btn-sm btn-primary">Download</a> --}}
                            {{-- <a class="btn btn-sm btn-info text-white" href="#modal-help" id="modal_h">Panduan</a> --}}
                            <a style="margin-bottom: 10px; width: 130px" class="btn_2 btn-sm" href="#popup2">TUTORIAL</a>
                            <a style="margin-bottom: 10px;" class="btn_1 btn-sm" href="#popup1">JOIN GROUP AFTER RECIEVING NOTIFICATION</a>
                            {{-- <a class="btn btn-sm btn-primary text-white" href="#modal-help2" id="modal_h2">Pemberitahuan</a> --}}
                        </div>
                    @else
                        <div class="konten">
                            <small>Hi : {{$data->name}}</small><br>
                            <small>Anda Sudah Terdaftar dan Sudah Kami Kirimkan Notifikasi Melalui WhatsApp Anda. Jadi Mohon Periksa Pesan Dari Kami.</small>
                            <br>
                            <small>Terimakasih</small>
                        </div>
                    @endif
                </div>
                </div>
                @endif
            </form>
        </div>
        <!-- /Wizard container -->
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
        <h3>VIDEO PANDUAN MENGISI FORM</h3>
        {{-- <p class="mb-3">Please fill the form with your questions and<br>we will reply soon!</p> --}}
    </div>
    <div id="message-help">
        <div id="message-help2">
            <iframe src="https://www.youtube.com/embed/FVMANvZznkw"
            style="max-width: 100%; width: 720px; height: auto;" frameborder="0" allowfullscreen></iframe>
            {{-- <p>Sedang dalam tahap pembuatan video</p> --}}
        </div>
    </div>
</div>
<div id="modal-help2" class="custom-modal zoom-anim-dialog mfp-hide">
    <div class="small-dialog-header">
        
        <h3>VIDEO NOTIFIKASI SETELAH DATA DIVERIFIKASI</h3>
        {{-- <p class="mb-3">Please fill the form with your questions and<br>we will reply soon!</p> --}}
    </div>
    <div id="message-help2">
        
        <iframe src="https://www.youtube.com/embed/o1sZJaLKfys"
            style="max-width: 100%; width: 720px; height: auto;" frameborder="0" allowfullscreen></iframe>
        <p>Sedang dalam tahap pembuatan video</p>
    </div>
</div>

<div id="popup1" class="overlay">
	<div class="popup">
		<h2>NOTIFIKASI SETELAH DATA DIVERIFIKASI</h2>
		<hr>
		<a class="close" href="#">&times;</a>
		<div class="content">
			<iframe src="https://www.youtube.com/embed/o1sZJaLKfys"
            style="max-width: 100%; width: 720px; height: 400px;" frameborder="0" allowfullscreen></iframe>
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
		</div>
	</div>
</div>
<!-- /Help form Popup -->
	
<!-- COMMON SCRIPTS -->
<script src="{{asset('newregis/js/common_scripts.min.js')}}"></script>
<script src="{{asset('newregis/js/common_functions.js')}}"></script>
<script src="{{asset('newregis/assets/validate.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{asset('select2-develop/dist/js/select2.js')}}"></script>
{{-- <script>
    var el = document.getElementById('specific');
    el.addEventListener('click', function() {
        html2canvas(document.querySelector('.specific'), {
            onrendered: function(canvas) {
                // document.body.appendChild(canvas);
              return Canvas2Image.saveAsPNG(canvas);
            }
        });
    });
</script> --}}
</body>
</html>