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
		<div id="wizard_container">

            <div id="top-wizard">
                <div id="progressbar"></div>
            </div>
            <!-- /top-wizard -->
            <form id="wrapped" method="POST" action="{{route('new_registrasi')}}" enctype="multipart/form-data">@csrf
                <input id="website" name="website" type="text" value="">
                <!-- Leave input above for security protection, read docs for details -->
				<input type="hidden" name="pelatihan_id" value="{{$diklat->id}}">
                <div id="middle-wizard">
					<div class="step">
						<div class="title">
							<img src="https://tilawatipusat.com/image_flyer/{{$diklat->flyer->image}}" style="width: 100%; height: auto;" alt="">
							<p>_</p>
                            <h5>{{strtoupper($diklat->program->name)}}</h5>
                            <small>{{Carbon\Carbon::parse($diklat->tanggal)->isoFormat('dddd, D MMMM Y')}}</small>
							@if ($diklat->sampai_tanggal !== null)
							<small>- {{Carbon\Carbon::parse($diklat->sampai_tanggal)->isoFormat('dddd, D MMMM Y')}}</small>
							@endif
                        </div><hr>
					</div>
                    <div class="step">
                        <div class="title">
                            <h5>NAMA LENGKAP SESUAI KTP</h5>
                            <small>Pastikan nama dengan gelar anda ditulis dengan benar</small>
                        </div><hr>
                        <div class="row">
                            <div class="form-floating col-md-8" style="margin-bottom: 5px">
                                <input type="text" id="name" name="name" class="form-control required" style="text-transform: uppercase">
                                <label for="name">Nama Lengkap</label>
                            </div>
                            <div class="form-floating col-md-4" style="margin-bottom: 5px">
                                <input type="text" id="gelar" name="gelar" class="form-control">
                                <label for="gelar">Gelar Akademik : S.Pd</label>
                            </div>
                        </div>
                    </div>

                    <div class="step">
                        <div class="title">
                            <h5>NO. WHATSAPP AKTIF</h5>
                            <small>patikan nomor anda terhubung dengan whatsapp dan aktif</small>
                        </div><hr>
                        <div class="row">
							<code id="kodephone" class="text-danger"></code>
                            <div class="form-floating form-group col-md-12">
                                <input type="number" pattern="[0-9]*" inputmode="numeric" id="phone" onkeypress="return hanyaAngka(event)" name="phone" class="form-control required">
                                <label for="phone">Contoh : 081329146514</label>
                            </div>
                        </div>
                    </div>

                    <div class="step">
                        <div class="title">
                            <h5>TEMPAT & TANGGAL LAHIR</h5>
                            <small>pastikan tempat dan tanggal lahir anda sudah sesuai</small>
                        </div><hr>
                        <div class="row">
                            <div class="form-floating col-md-12" style="margin-bottom: 10px">
                                <select name="tmptlahir" data-width="100%" id="tmptlahir" class="form-control required" style="font-size: 12px"  >
                                    <option value=""></option>
                                </select>
                                <label for="tmptlahir"><small>KOTA / KABUPATEN</small></label>
                            </div>
							
                            <div class="form-floating col-4 col-md-4">
                                <input id="tgl"  type="number" min="0" step="5" max="31" class="form-control required">
                                <label for="tgl">Ex: 1 - 31</label>
                            </div>
                            <div class="form-floating col-4 col-md-4">
                                <div class="form-floating">
                                    <select class="form-select required" style="font-size: 12px" id="bln" name="bln" aria-label="Room type">
                                        {{-- <option value selected>Please select</option> --}}
                                        <option value=""></option>
                                        <option value="01"><small>Januari</small></option>
										<option value="02"><small>Februari</small></option>
										<option value="03"><small>Maret</small></option>
										<option value="04"><small>April</small></option>
										<option value="05"><small>Mei</small></option>
										<option value="06"><small>Juni</small></option>
										<option value="07"><small>Juli</small></option>
										<option value="08"><small>Agustus</small></option>
										<option value="09"><small>September</small></option>
										<option value="10"><small>Oktober</small></option>
										<option value="11"><small>November</small></option>
										<option value="12"><small>Desember</small></option>
                                    </select>
                                    <label for="bln"><small>Bulan</small></label>
                                </div>
                            </div>
                            <div class="form-floating col-4 col-md-4">
                                <input type="text" id="thn" min="1970" max="2015" name="thn" class="form-control required">
                                <label for="thn">Ex: 1996</label>
                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /Step -->

                    <div class="step">
                        <div class="title">
                            <h5>ALAMAT TEMPAT TINGGAL</h5>
                            <small>alamat lengkap tempat tinggal sesuai ktp</small>
                        </div><hr>
                        <div class="row">
                            <div class="form-floating form-group col-md-12" style="margin-bottom: 10px">
								<select name="kabupaten_id" data-width="100%" id="kota" class="form-control required" style="font-size: 12px"  >
                                    <option value=""></option>
                                </select>
                                <label for="kabupaten_id"><small>1. KOTA / KABUPATEN</small></label>
                            </div>
							<div class="form-floating form-group col-md-12" id="block_kecamatan" >
								<select name="kecamatan_id" data-width="100%" id="kecamatan" class="form-control required" style="font-size: 12px; text-transform: uppercase"  >
                                    <option value=""></option>
                                </select>
                                <label for="kecamatan_id"><small>2. KECAMATAN</small></label>
                            </div>
							<div class="form-floating form-group col-md-12" id="block_kelurahan" >
								<select name="kelurahan_id" data-width="100%" id="kelurahan" class="form-control required" style="font-size: 12px; text-transform: uppercase"  >
                                    <option value=""></option>
                                </select>
                                <label for="kelurahan_id"><small>3. KELURAHAN</small></label>
                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /Step -->

					<div class="step">
                        <div class="title">
                            <h5>DETAIL ALAMAT</h5>
                            <small>alamat (nama jalan) untuk pengiriman syahadah / modul</small>
                        </div><hr>
                        <div class="row">
							<small style="margin-bottom: 5px">
								@if ($diklat->jenis == 'diklat')
                                    Alamat Pengiriman Syahadah (nama jalan)
								@else
									Alamat (nama jalan)
                                @endif 
							</small>
                            <div class="form-floating form-group col-md-12" style="margin-bottom: 10px">
                                <textarea name="alamat" id="alamat" cols="30" class="form-control required" rows="2"></textarea>
								<label for="alamat">Contoh : Jl. Imam Bonjol Block M / No.21</label>
                            </div>
							@if ($diklat->jenis == "diklat")
								<small style="margin-bottom: 5px">Alamat pengiriman modul</small>
								<div class="form-floating form-group col-md-12" style="margin-bottom: 10px">
									<textarea name="alamatx" id="alamatx" cols="30" class="form-control" rows="2"></textarea>
									<label for="alamatx">Contoh : jika sama boleh dikosongi</label>
								</div>
							@endif
                        </div>
                    </div>

                    <div class="step">
                        <div class="title">
                            <h5>DOKUMEN PERSYARATAN</h5>
                            <small>unggah foto / gambar</small>
                        </div><hr>
                        <div class="row">
							<input type="hidden" id="total" value="{{$registrasi->count()}}">
                            @foreach ($registrasi as $key=>$item)
								<div class="form-floating form-group col-md-12" style="margin-bottom: 10px">
									<input type="hidden" name="registrasi_id[]" value="{{ $item->id }}">
									<small for="syarat"><i class="text-danger">*</i> {{$item->name}}</small>
									<div class="input-group">
										<div class="custom-file" style="max-height: 40px;">
											<input type="hidden" id="key" value="{{$key}}">
											<input type="file" name="fileupload[]" accept="{{ $item->jenis }}" class="custom-file-input" id="inputGroupFile02{{$key}}" style="max-height: 45px;" required/>
											<label class="custom-file-label" for="inputGroupFile02" style="max-height: 45px;">Pilih File</label>
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
							<img src="https://tilawatipusat.com/image_flyer/{{$diklat->flyer->image}}" style="width: 100%; height: auto;" alt="">
							-
							<h5>TAHAP AKHIR</h5>
							<small>pastikan data yang sudah anda inputkan benar</small>
						</div><hr>
						<div class="row">
							<div class="form-floating col-md-12" style="margin-bottom: 10px">
								<div class="row">
									<div class="col-2 col-md-2">
										<small>NAMA</small>
									</div>
									<div class="col-1 col-md-1">
										<small>:</small>
									</div>
									<div class="col-9 col-md-9">
										<small style="text-transform: uppercase" id="set_name"></small><small id="set_gelar"></small>
									</div>
									<div class="col-2 col-md-2">
										<small>WA</small>
									</div>
									<div class="col-1 col-md-1">
										<small>:</small>
									</div>
									<div class="col-9 col-md-9">
										<small id="set_phone"></small>
									</div>
									<div class="col-2 col-md-2">
										<small>TTL</small>
									</div>
									<div class="col-1 col-md-1">
										<small>:</small>
									</div>
									<div class="col-9 col-md-9">
										<input type="hidden" style="border: none" name="tgl_pisah" id="set_tgl_val">
										<small id="set_tmptlahir"></small><small id="set_tgl"></small><small id="set_bln"></small><small id="set_thn"></small>
									</div>
								</div>
								<small>-</small>
								<div class="row">
									<div class="col-2 col-md-2">
										<small>ALAMAT</small>
									</div>
									<div class="col-1 col-md-1">
										<small>:</small>
									</div>
									<div class="col-9 col-md-9">
										<small id="set_alamat"> </small>
										<small id="set_kelurahan"> </small>
										<small id="set_kecamatan"> </small> 
										<small id="set_kabupaten"></small>
									</div>
								</div>
							</div>
						</div>

					</div>

                </div>
                <!-- /middle-wizard -->

                <div id="bottom-wizard">
					<code id="perbaiki" style="display: none">ISI NOMOR TELEPHONE ANDA DENGAN BENAR UNTUK KE TAHAP SELANJUTNYA</code><br>
                    <button style="margin-bottom: 10px" type="button" name="backward" id="kembali" class="backward btn_1 btn-sm">KEMBALI</button>
					<button style="margin-bottom: 10px" class="btn_2 btn-sm" href="#modal-help" id="modal_h">PANDUAN</button>
                    <button style="margin-bottom: 10px" type="button" name="forward" id="daftar" class="forward btn_1 ciao btn-sm">LANJUT</button>
                    <button style="margin-bottom: 10px" type="submit" name="process" class="submit btn_1 btn-sm">DAFTAR!</button>
                </div>
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
	
<!-- COMMON SCRIPTS -->
<script src="{{asset('newregis/js/common_scripts.min.js')}}"></script>
<script src="{{asset('newregis/js/common_functions.js')}}"></script>
<script src="{{asset('newregis/assets/validate.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{asset('select2-develop/dist/js/select2.js')}}"></script>
<script>
// format telp
$('#phone').keyup(function() {
	phonetxtln  = $(this).val().length;
	formatphone = $(this).val().substr(0,1);
	formatphone2= $(this).val().substr(0,2);
	notnumber   = $('#phone').val();
	document.getElementById('kodephone').style.display = "none";
	if (formatphone2 != 08) {
        document.getElementById('kodephone').style.display = "";
        document.getElementById('kodephone').innerHTML = '#SALAH -> format nomor diawali angka 08';
		document.getElementById('perbaiki').style.display = "";
        $('#daftar').attr('disabled','disabled');
		$('#kembali').attr('disabled','disabled');
        // $('#daftar').addClass('btn btn-danger');
        $('#daftar').val('Kesalahan Input');
    }else{
		if (phonetxtln > 13) {
		document.getElementById('kodephone').style.display = "";
		document.getElementById('kodephone').innerHTML = '#SALAH -> nomor lebih dari 13 digit';
		document.getElementById('perbaiki').style.display = "";
		$('#daftar').attr('disabled','disabled');
		$('#kembali').attr('disabled','disabled');
		// $('#daftar').addClass('btn btn-danger');
		$('#daftar').val('Kesalahan Input');
		}else{
			if (phonetxtln < 11) {
			document.getElementById('kodephone').style.display = "";
			document.getElementById('kodephone').innerHTML = '#SALAH -> nomor kurang dari 11 digit';
			document.getElementById('perbaiki').style.display = "";
			$('#daftar').attr('disabled','disabled');
			$('#kembali').attr('disabled','disabled');
			// $('#daftar').addClass('btn btn-danger');
			$('#daftar').val('Kesalahan Input');
			}else{
				if (isNaN(notnumber)) {
					document.getElementById('kodephone').style.display = "";
					document.getElementById('kodephone').innerHTML = '#SALAH -> hanya boleh format angka';
					document.getElementById('perbaiki').style.display = "";
					$('#daftar').attr('disabled','disabled');
					$('#kembali').attr('disabled','disabled');
					// $('#daftar').addClass('btn btn-danger');
					$('#daftar').val('Kesalahan Input');
				}else{
					document.getElementById('kodephone').style.display = "none";
					document.getElementById('perbaiki').style.display = "none";
					$('#daftar').removeClass('btn btn-danger');
					// $('#daftar').addClass('btn btn-success');
					$('#daftar').attr('disabled',false);
					$('#kembali').attr('disabled',false);
					$('#daftar').val('Daftar!');
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
// kecamatan berdasarkan kabupaten / kota
$('select[name="kabupaten_id"]').on('change', function() {
	var kabupaten_id = $(this).val();

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
				var kab = $( "#kecamatan option:selected" ).val();
				console.log(kab);
				if(kab) {
					$.ajax({
						url: '/fetch3/' + kab,
						type: "GET",
						dataType: "json",
						success:function(data) {                      
							$('select[name="kelurahan_id"]').empty();
							$.each(data, function(key, value) {
							$('select[name="kelurahan_id"]').append('<option value="'+ key +'">'+ value +'</option>');
							});
									
							var kel = $( "#kelurahan option:selected" ).val();
							$.ajax({
								url: '/nama_kelurahan/' + kel,
								type: "GET",
								dataType: "json",
								success:function(data) {                      
									console.log(data.nama);
									document.getElementById("set_kelurahan").innerHTML = ", "+data.nama;
								}
							});
									
						}
					});
					$.ajax({
						url: '/nama_kecamatan/' + kab,
						type: "GET",
						dataType: "json",
						success:function(data) {                      
							console.log(data.nama);
							document.getElementById("set_kecamatan").innerHTML = ", "+data.nama;
						}
					});
				}else{
					$('select[name="kelurahan_id"]').val("");
				}
			}
		});
	}else{
		$('select[name="kecamatan_id"]').empty().disabled();
	}
})

$('select[name="kecamatan_id"]').on('change', function() {
	var kecamatan_id = $(this).val();
	// document.getElementById('block_kelurahan').style.display="";

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
				var x = $( "#kelurahan_id option:selected" ).val();
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
$('#gelar').on('change',function () {
	var y = this.value;	
	console.log(y);
	document.getElementById("set_gelar").innerHTML = '.'+y;
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
</body>
</html>