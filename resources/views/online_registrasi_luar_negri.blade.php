<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Tilawatipusat">
	<title>Registrasi - Tilawati</title>
    <meta property="og:title" content="Registrasi"/><?php date_default_timezone_set('Asia/Jakarta'); $tgl = Carbon\Carbon::parse($diklat->tanggal)->isoFormat('dddd, D MMMM Y') ?>
    <meta property="og:description" content="Registrasi {{$diklat->program->name}} - {{ $tgl }}"/>
    @if ($diklat->flyer !== null)
		<meta property="og:image" itemprop="image" content="https://admin.nurulfalah.org/image_flyer_thumb/{{$diklat->flyer->image}}">
	@else
		<meta property="og:image" itemprop="image" content="{{ asset('images/tumbreg.jpeg') }}">
	@endif
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
				<h5 style="text-transform: uppercase">{{$diklat->program->name}} </h5>
				<small>{{Carbon\Carbon::parse($diklat->tanggal)->isoFormat('dddd, D MMMM Y')}}</small>
				@if ($diklat->sampai_tanggal !== null)
				<small>- {{Carbon\Carbon::parse($diklat->sampai_tanggal)->isoFormat('dddd, D MMMM Y')}}</small>
				@endif
				<hr>
				<p>Pendaftaran akan segera dibuka..</p>
			</div>
		</div>
		<!-- /Step -->
		@elseif ($diklat->flyer !== null)
		<div id="wizard_container" style="max-width: 700px">

            <div id="top-wizard">
                <div id="progressbar"></div>
            </div>
            <!-- /top-wizard -->
            <form id="wrapped" method="POST" action="{{route('new_registrasi_bule')}}" enctype="multipart/form-data">@csrf
                <input id="website" name="website" type="text" value="">
                <!-- Leave input above for security protection, read docs for details -->
				<input type="hidden" name="pelatihan_id" value="{{$diklat->id}}">
                <div id="middle-wizard">
					<div class="step">
						<div class="title">
							{{-- {{Carbon\Carbon::parse($diklat->tanggal)->isoFormat('D')-10}}
							{{Carbon\Carbon::now()->isoFormat('D')}} --}}
							<img src="https://admin.nurulfalah.org/image_flyer/{{$diklat->flyer->image}}" style="width: 100%; height: auto;" alt="">
							<hr>
                            <h5>{{strtoupper($diklat->program->name)}}</h5>
                            <small>{{Carbon\Carbon::parse($diklat->tanggal)->isoFormat('dddd, D MMMM Y')}}</small>
							@if ($diklat->sampai_tanggal !== null)
							<small>- {{Carbon\Carbon::parse($diklat->sampai_tanggal)->isoFormat('dddd, D MMMM Y')}}</small>
							@endif
							<br>
                        </div><hr>
						@if ($diklat->max !== null)
						<?php $seat = $diklat->max - $diklat->peserta->where('status',1)->count();?> 
							<small>Kuota Pendaftaran Tersisa : {{$seat}} (Seat) 
							</small>
						@endif
					</div>
					@if ($diklat->pendaftaran == 'ditutup')
						<h5 class="text-danger">PENDAFTARAN TELAH DITUTUP..</h5>
						<small>Mohon hubungi admin</small>
					@else
					<div class="step">
						<div class="title">
                            <h5>PILIH KEWARGANEGARAAN</h5>
                            <small>Choose where you came from</small>
                        </div><hr>
						<div class="row justify-content-center">
							<div class="col-md-6">
								<div class="list_block">
									<ul>
										<li>
											<div class="checkbox_radio_container">
												<input type="radio" id="indo" name="question_2" class="required" value="No">
												<input type="hidden" value="{{$diklat->slug}}" id="slug_diklat">
                                                <label class="radio" for="indo"></label>
												<label for="indo" class="wrapper">Indonesia</label>
											</div>
										</li>
									</ul>
								</div>
								<!-- /review_block-->
							</div>
							<div class="col-md-6">
								<div class="list_block">
									<ul>
										<li>
											<div class="checkbox_radio_container">
					                            <input type="radio" id="maybe" name="question_2" class="required" value="Maybe" checked>
					                            <label class="radio" for="maybe"></label>
					                            <label for="maybe" class="wrapper">Not Indonesian</label>
					                        </div>
										</li>
									</ul>
								</div>
								<!-- /review_block-->
							</div>
						</div>
					</div>
					@if ($diklat->program->name == 'Diklat Munaqisy Cabang')
					<div class="step">
						<div class="title">
                            <h5>ASAL CABANG</h5>
                            <small>Nama Cabang - Kota / Kabupaten</small>
                        </div><hr>
						<div class="row justify-content-center">
							<div class="col-md-12">
								<div class="list_block">
									<ul>
										<li>
											<div class="checkbox_radio_container">
												<input type="text" id="asal_cabang" name="asal_cabang" class="form-control required" style="text-transform: uppercase">
                                				<label for="asal_cabang">Asal Cabang</label>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					@endif
					<div class="step">
                        <div class="title">
                            <h5>FULL NAME</h5>
                            <small>make sure your name is correct</small>
                        </div><hr>
						{{-- <div class="row justify-content-center">
							<div class="col-md-6">
								<div class="list_block">
									<ul>
										<li>
											<div class="checkbox_radio_container">
												<input type="radio" id="no" name="question_2" class="required" value="No">
												<label class="radio" for="no"></label>
												<label for="no" class="wrapper">Indonesia</label>
											</div>
										</li>
									</ul>
								</div>
								<!-- /review_block-->
							</div>
							<div class="col-md-6">
								<div class="list_block">
									<ul>
										<li>
											<div class="checkbox_radio_container">
					                            <input type="radio" id="maybe" name="question_2" class="required" value="Maybe">
					                            <label class="radio" for="maybe"></label>
					                            <label for="maybe" class="wrapper">Not Indonesian</label>
					                        </div>
										</li>
									</ul>
								</div>
								<!-- /review_block-->
							</div>
						</div> --}}
                        <div class="row">
                            <div class="form-floating col-md-8" style="margin-bottom: 5px">
                                <input type="text" id="name" name="name" class="form-control required" style="text-transform: uppercase">
                                <label for="name">Full Name</label>
                            </div>
                            <div class="form-floating col-md-4" style="margin-bottom: 5px">
                                <input type="text" id="gelar" name="gelar" class="form-control">
                                <label for="gelar">Degree : S.Pd</label>
                            </div>
							
                        </div>
                    </div>

                    <div class="step">
                        <div class="title">
                            <h5>WHATSAPP NUMBER ACTIVE</h5>
                            <small>make sure your whatsapp number is active</small>
                        </div><hr>
                        <div class="row">
                            <div class="form-floating col-md-12" style="margin-bottom: 10px; border-bottom: #333">
                                <select name="negara" data-width="100%" id="negara" class="form-control required" style="font-size: 12px"  >
                                    <option value=""></option>
                                </select>
                                <label for="tmptlahir"><small>COUNTRY NAME</small></label>
                            </div>
							
                            
                            <div class="form-floating form-group col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" name="phonecode" id="phonecode" placeholder="select country name" class="form-control required" readonly>
                                        <label for="phone" style="font-size: 14px">Phone Code</label>
                                    </div>
                                    
                                    <div class="col-md-8">
                                        <input type="number" pattern="[0-9]*" inputmode="numeric" id="phone" onkeypress="return hanyaAngka(event)" name="phone" class="form-control required">
                                        <label for="phone" style="font-size: 14px">Example : 971152210 (without phone code)</label>
                                        <br><code id="kodephone" class="text-danger" style="font-size: 12px"></code>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="step">
                        <div class="title">
                            <h5>Place & Date Of Birth</h5>
                            <small>please fill with the correct data</small>
                        </div><hr>
                        <div class="row">
                            <div class="form-floating col-md-12" style="margin-bottom: 10px">
                                <input name="tmptlahir2" id="tmptlahir2"  type="text" class="form-control required" style="font-size: 12px">
                                <label for="tmptlahir"><small>City</small></label>
                            </div>
							
                            <div class="form-floating col-4 col-md-4">
                                <input id="tgl" onchange="tglLahir()" name="tgl"  type="number" min="0" step="5" max="31" class="form-control required">
                                <label for="tgl">Ex: 1 - 31</label>
                            </div>
                            <div class="form-floating col-4 col-md-4">
                                <div class="form-floating">
                                    <select class="form-select required" style="font-size: 12px" id="bln" name="bln" aria-label="Room type">
                                        {{-- <option value selected>Please select</option> --}}
                                        <option value=""></option>
                                        <option value="01"><small>Jan</small></option>
										<option value="02"><small>Feb</small></option>
										<option value="03"><small>Mar</small></option>
										<option value="04"><small>Apr</small></option>
										<option value="05"><small>May</small></option>
										<option value="06"><small>Jun</small></option>
										<option value="07"><small>Jul</small></option>
										<option value="08"><small>Aug</small></option>
										<option value="09"><small>Sep</small></option>
										<option value="10"><small>Oct</small></option>
										<option value="11"><small>Nov</small></option>
										<option value="12"><small>Des</small></option>
                                    </select>
                                    <label for="bln"><small>Month</small></label>
                                </div>
                            </div>
                            <div class="form-floating col-4 col-md-4">
                                <input type="text" id="thn" min="1900" max="2015" name="thn" class="form-control required">
                                <label for="thn">Ex: 1996</label>
                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /Step -->

                    

					<div class="step">
                        <div class="title">
                            <h5>DETAIL ADDRESS</h5>
                            
                        </div><hr>
                        <div class="row">
                            <div class="form-floating form-group col-md-12" style="margin-bottom: 10px">
								<input name="kota2"  type="text" class="form-control required" style="font-size: 12px">
                                <label for="kabupaten_id"><small>1. CITY</small></label>
                            </div>

							<small style="margin-bottom: 5px">
								
								Full address same as identity card
							</small>
                            <div class="form-floating form-group col-md-12" style="margin-bottom: 10px">
                                <textarea name="alamat" id="alamat" cols="30" class="form-control required" rows="2"></textarea>
								<label for="alamat">Example : Jl. Imam Bonjol Block M / No.21 Melbourne</label>
                            </div>
							{{-- @if ($diklat->program->name == "standarisasi guru al qur'an level 1" || $diklat->program->name == "standarisasi guru al qur'an level 2" || $diklat->program->name == "Diklat Guru Tahfidz" || $diklat->program->name == "Diklat Guru Terjemah Lafdziyah" ) --}}
							@if ($diklat->program->name == "standarisasi guru al qur'an level 1" || $diklat->program->name == "standarisasi guru al qur'an level 2" || $diklat->program->name == "Diklat Guru Tahfidz" || $diklat->program->name == "Diklat Guru Terjemah Lafdziyah")
								<small style="margin-bottom: 5px">Full address for book delivery</small>
								<div class="form-floating form-group col-md-12" style="margin-bottom: 10px">
									<textarea name="alamatx" id="alamatx" cols="30" class="form-control" rows="2"></textarea>
									<label for="alamatx">if same as Full address same as identity card before. don't fill this column </label>
								</div>
							@endif
                        </div>
                    </div>

                    <div class="step">
                        <div class="title">
							@if ($registrasi->count() == null)
							<h5>THERE ARE NO REQUIREMENTS DOCUMENTS</h5>
                            <small style="text-transform: uppercase">Pass this step</small>
							@else
							<h5>REQUIREMENTS DOCUMENTS</h5>
                            <small>Upload Photo / Image </small>
							@endif
                        </div><hr>
                        <div class="row">
							<input type="hidden" id="total" name="dokumen" value="{{$registrasi->count()}}">
                            @foreach ($registrasi as $key=>$item)
								<div class="form-floating form-group col-md-12" style="margin-bottom: 10px">
									<input type="hidden" name="registrasi_id[]" value="{{ $item->id }}">
									<small for="syarat"><i class="text-danger">*</i> {{$item->name}}</small>
									<div class="input-group">
										<div class="custom-file" style="max-height: 40px;">
											<input type="hidden" id="key" value="{{$key}}">
											<input type="file" name="fileupload[]" accept="{{ $item->jenis }}" class="custom-file-input" id="inputGroupFile02{{$key}}" style="max-height: 45px;" required/>
											<label class="custom-file-label" for="inputGroupFile02" style="max-height: 45px;">Choose File</label>
										</div>
									</div>
								</div>
                                <br>
                                {{-- <p id="error-message{{$key}}" class="validation-error-label"></p> --}}
                            @endforeach
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /Step -->

					<div class="submit step">
						@if ($diklat->jenis == 'diklat')
							<input type="hidden" name="status" value="0" class="required">
						@else
							<input type="hidden" name="status" value="1" class="required">
						@endif
						<div class="title">
							<img src="https://admin.nurulfalah.org/image_flyer/{{$diklat->flyer->image}}" style="width: 100%; height: auto;" alt="">
							-
							<h5>FINAL STEP</h5>
							<small>make sure your data below is correct</small>
						</div><hr>
						<div class="row">
							<div class="form-floating col-md-12" style="margin-bottom: 10px">
								<div class="row">
									<div class="col-2 col-md-2">
										<small>Name</small>
									</div>
									<div class="col-1 col-md-1">
										<small>:</small>
									</div>
									<div class="col-9 col-md-9">
										<small style="text-transform: uppercase" id="set_name"></small><small id="set_gelar"></small>
									</div>
									<div class="col-2 col-md-2">
										<small>Phone</small>
									</div>
									<div class="col-1 col-md-1">
										<small>:</small>
									</div>
									<div class="col-9 col-md-9">
										<small id="set_phone"></small>
									</div>
									<div class="col-2 col-md-2">
										<small>DoB</small>
									</div>
									<div class="col-1 col-md-1">
										<small>:</small>
									</div>
									<div class="col-9 col-md-9">
										<input type="hidden" style="border: none" name="tgl_pisah" id="set_tgl_val">
										<small id="set_tmptlahir"></small><small id="set_tgl"></small><small id="set_bln"></small><small id="set_thn"></small>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-2 col-md-2">
										<small>ALAMAT</small>
									</div>
									<div class="col-1 col-md-1">
										<small>:</small>
									</div>
									<div class="col-9 col-md-9" style="text-transform: uppercase">
										<small id="set_alamat"> </small>
										<small id="set_kelurahan"> </small>
										<small id="set_kecamatan"> </small> 
										<small id="set_kabupaten"></small>
									</div>
								</div>
								<br>
								<br>
								<div class="card" style="background-color: rgb(245, 245, 245); border: none">
									<label for="accept">
										<input type="checkbox" id="accept" name="accept" value="yes" class="required" style="margin-left: 5px">
										<small>i'am agree with  <a href="#popup1">term & condition</a></small>
									</label>
								</div>
							</div>
						</div>

					</div>
					@endif
                </div>
                <!-- /middle-wizard -->

                <div id="bottom-wizard">
					<code id="perbaiki" style="display: none">fill the phone number with the correct format</code><br>
                    <button style="margin-bottom: 10px" type="button" name="backward" id="kembali" class="backward btn_1 btn-sm">BACK</button>
                    <button style="margin-bottom: 10px" type="button" name="forward" id="daftar" class="forward btn_1 ciao btn-sm">NEXT</button>
					<a style="margin-bottom: 10px; width: 130px" class="btn_2 btn-sm" href="#popup2">TUTORIAL</a>
					{{-- <a href="#popup2" style="margin-bottom: 10px; width: 130px" class="btn2 btn-sm">panduan</a> --}}
                    <button style="margin-bottom: 10px" type="submit" name="process" class="submit btn_1 btn-sm">REGISTER!</button>
                </div>
                <!-- /bottom-wizard -->
                
            </form>
        </div>
        <!-- /Wizard container -->
		<!-- /Step -->
		@else
		<div class="belum_siap_dibuka">
			<div class="title">
				<h5 style="text-transform: uppercase">{{$diklat->program->name}} </h5>
				<small>{{Carbon\Carbon::parse($diklat->tanggal)->isoFormat('dddd, D MMMM Y')}}</small>
				@if ($diklat->sampai_tanggal !== null)
				<small>- {{Carbon\Carbon::parse($diklat->sampai_tanggal)->isoFormat('dddd, D MMMM Y')}}</small>
				@endif
				<hr>
				<p>Pendaftaran akan segera dibuka..</p>
			</div>
		</div>
		@endif
        
    </div>
    <!-- /Container -->

    <footer>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <p>© {{Carbon\Carbon::parse($diklat->tanggal)->isoFormat('Y')}} | <a href="#0">Tilawati Pusat</a></p>
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
<script>
$('#indo').click(function() {
   if($('#indo').is(':checked')) { 
		//alert("it's checked"); 
		var slug = $('#slug_diklat').val();
		console.log(slug);
		$('#bottom-wizard').css("display", "none");
		location.href = '/'+slug;
	}
});
// format telp
$('#phone').keyup(function() {
	phonetxtln  = $(this).val().length;
	formatphone = $(this).val().substr(0,1);
	formatphone2= $(this).val().substr(0,2);
	notnumber   = $('#phone').val();
	document.getElementById('kodephone').style.display = "none";
	if (formatphone == 0) {
        document.getElementById('kodephone').style.display = "";
        document.getElementById('kodephone').innerHTML = '#wrong, please dont include your phone code';
		document.getElementById('perbaiki').style.display = "";
        $('#daftar').attr('disabled','disabled');
		$('#kembali').attr('disabled','disabled');
        // $('#daftar').addClass('btn btn-danger');
        $('#daftar').val('wrong input');
    }else{
		if (phonetxtln > 13) {
		document.getElementById('kodephone').style.display = "";
		document.getElementById('kodephone').innerHTML = '#wrong, your phone number greater than 13 digit';
		document.getElementById('perbaiki').style.display = "";
		$('#daftar').attr('disabled','disabled');
		$('#kembali').attr('disabled','disabled');
		// $('#daftar').addClass('btn btn-danger');
		$('#daftar').val('wrong input');
		}else{
			if (phonetxtln < 10) {
			document.getElementById('kodephone').style.display = "";
			document.getElementById('kodephone').innerHTML = '#wrong, your phone number less than 9 digit';
			document.getElementById('perbaiki').style.display = "";
			$('#daftar').attr('disabled','disabled');
			$('#kembali').attr('disabled','disabled');
			// $('#daftar').addClass('btn btn-danger');
			$('#daftar').val('wrong input');
			}else{
				if (isNaN(notnumber)) {
					document.getElementById('kodephone').style.display = "";
					document.getElementById('kodephone').innerHTML = '#wrong, only number format!';
					document.getElementById('perbaiki').style.display = "";
					$('#daftar').attr('disabled','disabled');
					$('#kembali').attr('disabled','disabled');
					// $('#daftar').addClass('btn btn-danger');
					$('#daftar').val('wrong input');
				}else{
					document.getElementById('kodephone').style.display = "none";
					document.getElementById('perbaiki').style.display = "none";
					$('#daftar').removeClass('btn btn-danger');
					// $('#daftar').addClass('btn btn-success');
					$('#daftar').attr('disabled',false);
					$('#kembali').attr('disabled',false);
					$('#daftar').val('Register!');
				}
			}
		}
	}
});

// hannya angka
var name,tmptlahir,set_tempatlahir;
$('#phone').on('keyup', function () {
    this.value = this.value.replace(/[^0-9]/gi, '');
});
function hanyaAngka(evt) {
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
	return false;
	return true;
}
// tempat lahir
$('#tmptlahir').select2({
	ajax: {
		url: "{{route('kabupaten')}}",
		dataType: 'json',
		delay: 250,
		processResults: function (data) {
		return {
			results:  $.map(data, function (item) {
				return {
					text: item.nama,
					id: item.id,
				}
			})
		};
	},
		cache: true
	}
});
// kota / kabupaten asal
$('#kota').select2({
	ajax: {
		url: "{{route('kabupaten')}}",
		dataType: 'json',
		delay: 250,
		processResults: function (data) {
		return {
			results:  $.map(data, function (item) {
				return {
					text: item.nama,
					id: item.id
				}
			})
		};
	},
		cache: true
	}
});

$('#negara').select2({
	ajax: {
		url: "{{route('negara')}}",
		dataType: 'json',
		delay: 250,
		processResults: function (data) {
		return {
			results:  $.map(data, function (item) {
				return {
					text: item.country_name,
					id: item.id
				}
			})
		};
	},
		cache: true
	}
});

$('select[name="negara"]').on('change', function() {
	var negara = $(this).val();
	
	if(negara) {
		$.ajax({
			url: '/phone-code-daftar-negara/'+negara,
			type: "GET",
			dataType: "json",
			success:function(data) {                      
				
				 document.getElementById("phonecode").value = data.phonecode;
                 console.log(data.phonecode);
			}
		});
	}else{
		$('select[name="kelurahan_id"]').empty().disabled();
	}
})

// kecamatan berdasarkan kabupaten / kota
$('select[name="kabupaten_id"]').on('change', function() {
	var kabupaten_id = $(this).val();
	document.getElementById('block_kecamatan').style.display="";
	document.getElementById('block_kelurahan').style.display="none";
	document.getElementById('kelurahan').value="";
	if(kabupaten_id) {
		$.ajax({
			url: '/fetch2/' + kabupaten_id,
			type: "GET",
			dataType: "json",
			success:function(data) {                      
				$('select[name="kecamatan_id"]').empty();
				$.each(data, function(key, value) {
					$('select[name="kecamatan_id"]').append('<option value="'+ key +'">'+ value +'</option>');
				});
				// menampilkan hasil kecamatan awal		
				// var kab = $( "#kecamatan option:selected" ).val();
				document.getElementById('kecamatan').value="";
				// sini
				
				
				// console.log(kab);
				// if(kab) {
				// 	$.ajax({
				// 		url: '/fetch3/' + kab,
				// 		type: "GET",
				// 		dataType: "json",
				// 		success:function(data) {                      
				// 			$('select[name="kelurahan_id"]').empty();
				// 			$.each(data, function(key, value) {
				// 			$('select[name="kelurahan_id"]').append('<option value="'+ key +'">'+ value +'</option>');
				// 			});
									
				// 			var kel = $( "#kelurahan option:selected" ).val();
				// 			$.ajax({
				// 				url: '/nama_kelurahan/' + kel,
				// 				type: "GET",
				// 				dataType: "json",
				// 				success:function(data) {                      
				// 					console.log(data.nama);
				// 					document.getElementById("set_kelurahan").innerHTML = ", "+data.nama;
				// 				}
				// 			});
									
				// 		}
				// 	});
				// 	$.ajax({
				// 		url: '/nama_kecamatan/' + kab,
				// 		type: "GET",
				// 		dataType: "json",
				// 		success:function(data) {                      
				// 			console.log(data.nama);
				// 			document.getElementById("set_kecamatan").innerHTML = ", "+data.nama;
				// 		}
				// 	});
				// }else{
				// 	$('select[name="kelurahan_id"]').val("");
				// }
			}
		});
	}else{
		$('select[name="kecamatan_id"]').empty().disabled();
	}
})

$('select[name="kecamatan_id"]').on('change', function() {
	var kecamatan_id = $(this).val();
	document.getElementById('block_kelurahan').style.display="";
	if(kecamatan_id) {
		$.ajax({
			url: '/fetch3/' + kecamatan_id,
			type: "GET",
			dataType: "json",
			success:function(data) {                      
				$('select[name="kelurahan_id"]').empty();
				$.each(data, function(key, value) {
					$('select[name="kelurahan_id"]').append('<option value="'+ key +'">'+ value +'</option>');
				});
				// menampilkan hasil kecamatan awal		
				// var x = $( "#kelurahan_id option:selected" ).val();
				document.getElementById('kelurahan').value="";
			}
		});
	}else{
		$('select[name="kelurahan_id"]').empty().disabled();
	}
})

$('#name').on('change',function () {
	name = this.value;
	console.log(name);
	document.getElementById("set_name").innerHTML = name+', ';
})

$('#tmptlahir2').on('change',function () {
	w = this.value;
	console.log(w);
	document.getElementById("set_tmptlahir").innerHTML = w+', ';
})

$('#gelar').on('change',function () {
	var y = this.value;	
	console.log(y);
	document.getElementById("set_gelar").innerHTML = ''+y;
})
$('#phone').on('change',function () {
	var phone = this.value;	
	console.log(phone);
	document.getElementById("set_phone").innerHTML = phone;
})
$('#tmptlahir').on('change',function () {
	tmptlahir = this.value;
	if(tmptlahir) {
		$.ajax({
			url: '/nama_kabupaten/' + tmptlahir,
			type: "GET",
			dataType: "json",
			success:function(data) {                      
				set_tempatlahir = data.nama;
				console.log(set_tempatlahir);
				document.getElementById("set_tmptlahir").innerHTML = set_tempatlahir+" /";
			}
		});
	}
})
$('#tgl').on('change',function () {
	var tgl = this.value;
	console.log(tgl);
	if (tgl.length == 1) {
		document.getElementById("set_tgl_val").value = tgl;	
		document.getElementById("set_tgl").innerHTML = "0"+tgl+"-";
	} else {
		document.getElementById("set_tgl_val").value = tgl;
		document.getElementById("set_tgl").innerHTML = tgl+"-";
	}
})
$('#bln').on('change',function () {
	var bln = this.value;	
	console.log(bln);
	document.getElementById("set_bln").innerHTML = bln+"-";
})
$('#thn').on('change',function () {
	var thn = this.value;	
	console.log(thn);
	document.getElementById("set_thn").innerHTML = thn;
})
$('#alamat').on('change',function () {
	var alamat = this.value;	
	console.log(alamat);
	document.getElementById("set_alamat").innerHTML = alamat;
})
$('#kecamatan').on('change',function () {
	var kecamatan = this.value;
	if(kecamatan) {
		$.ajax({
			url: '/nama_kecamatan/' + kecamatan,
			type: "GET",
			dataType: "json",
			success:function(data) {                      
				console.log(data.nama);
				document.getElementById("set_kecamatan").innerHTML = ", "+data.nama;
			}
		});
	}
})
$('#kelurahan').on('change',function () {
	kelurahan = this.value;
	if(kelurahan) {
		$.ajax({
			url: '/nama_kelurahan/' + kelurahan,
			type: "GET",
			dataType: "json",
			success:function(data) {                      
				console.log(data.nama);
				document.getElementById("set_kelurahan").innerHTML = ", "+data.nama;
			}
		});
	}
})

$('#kota').on('change',function () {
	tmptlahir = this.value;
	if(tmptlahir) {
		$.ajax({
			url: '/nama_kabupaten2/' + tmptlahir,
			type: "GET",
			dataType: "json",
			success:function(data) {                      
				console.log(data.nama);
				document.getElementById("set_kabupaten").innerHTML = ", "+data.nama;
			}
		});
	}
})
var total = $('#total').val();
console.log(total);
for (var x = 0; x < total; x++) {
	$('#inputGroupFile02'+x).change(function () {
		var fileName = $(this).val();
      	console.dir(fileName)
      	$('#custom_label_'+x).html(fileName);
		$(this).next('.custom-file-label').html(fileName);
	})
}
</script>
<script>
	$(document).ready(function(){
	  $("#myBtn").click(function(){
		$("#terms-txt").modal();
	  });
	});
</script>

</body>
</html>