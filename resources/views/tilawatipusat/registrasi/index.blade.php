
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Potenza - Job Application Form Wizard with Resume upload and Branch feature">
    <meta name="author" content="Ansonika">
    <title>Pendaftaran | Tilawati</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset('images/tilawati-blue.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('tilawatipusat/registrasi/img/apple-touch-icon-57x57-precomposed.png')}}">
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
	
	{{-- <nav>
		<ul class="cd-primary-nav">
			<li><a href="index.html" class="animated_link">Version 1</a></li>
			<li><a href="index-2.html" class="animated_link">Version 2</a></li>
			<li><a href="index-3.html" class="animated_link">Version 3</a></li>
			<li><a href="index-4.html" class="animated_link">File Attachment demo</a></li>
			<li><a href="about.html" class="animated_link">About Us</a></li>
			<li><a href="contacts.html" class="animated_link">Contact Us</a></li>
			<li><a href="#0" class="animated_link">Purchase Template</a></li>
		</ul>
	</nav> --}}
	<!-- /menu -->
	<div class="container-fluid">
	    <div class="row row-height">
	        <div class="col-xl-4 col-lg-4 content-left">
				<div class="content-left-wrapper">
	                {{-- <a href="index.html" id="logo"><img src="img/logo.png" alt="" width="45" height="45"></a>
	                <div id="social">
	                    <ul>
	                        <li><a href="#0"><i class="icon-facebook"></i></a></li>
	                        <li><a href="#0"><i class="icon-twitter"></i></a></li>
	                        <li><a href="#0"><i class="icon-google"></i></a></li>
	                        <li><a href="#0"><i class="icon-linkedin"></i></a></li>
	                    </ul>
	                </div> --}}
	                <!-- /social -->
	                <div><?php date_default_timezone_set('Asia/Jakarta'); $date=$diklat->tanggal;?>
	                    <figure>
							<img src="{{asset('images/tilawati-white.png')}}" alt="" style="max-width: 200px; max-height: 100px">
						</figure>
	                    <h2 style="text-transform: uppercase">{{ $diklat->program->name }}</h2>
	                    <p>Diadakan oleh {{ $diklat->cabang->name }} - {{ $diklat->cabang->kabupaten->nama }} 
						<br/>Pada Tanggal {{ Carbon\Carbon::parse($date)->isoFormat('D MMMM Y') }}</p>
	                    {{-- <a href="#0" class="btn_1 rounded yellow">Periksa data anda</a>
	                    <a href="#start" class="btn_1 rounded mobile_btn yellow">Periksa data anda</a> --}}
						<a href="#" target="_blak" class=" text-white" style="width: 120px; margin-bottom: 10px"><i class="icon-facebook"></i> </a> 
						<a href="#" target="_blak" class=" text-white" style="width: 120px;margin-bottom: 10px"><i class="icon-youtube"></i> </a> 
						<a href="#" target="_blak" class=" text-white" style=" width: 120px"><i class="icon-instagram"></i> </a> 
						<a href="#" target="_blak" class=" text-white" style=" width: 120px"><i class="icon-twitter"></i> </a> 
	                </div>
	                <div class="copy">© 2021 Tilawati Pusat Nurul Falah</div>
	            </div>
	            <!-- /content-left-wrapper -->
	        </div>
	        <!-- /content-left -->
	        <div class="col-xl-8 col-lg-8 content-right" id="start">
	            <div id="wizard_container">
					<?php
						$tgl1 = $diklat->tanggal;// pendefinisian tanggal awal
						$tgl2 = date('Y-m-d', strtotime('+6 days', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
						$sekarang = date('Y-m-d');
					?>
					@if ($sekarang >= $tgl2)
						<div class="card">
							<div class="card-body text-center">
								<h3>Pendaftaran Sudah Ditutup!</h3>
							</div>
						</div>
					@else
						<div id="top-wizard">
							<span id="location"></span>
							<div id="progressbar"></div>
						</div>
						<form id="wrapped" method="POST" enctype="multipart/form-data">@csrf
							<input id="website" name="website" type="text" value="">
							<!-- Leave for security protection, read docs for details -->
							<div id="middle-wizard">

								<div class="step">
									<h2 class="section_title">Data Diri</h2>
									<h3 class="main_question">Personal info / Biodata</h3>
									
									<div class="form-group">
										<label for="name">Nama Lengkap</label>
										<input type="text" name="name" id="name" class="form-control required" onchange="getVals(this, 'name_field');" required>
									</div>
									<div class="form-group">
										<label for="email">Email Address</label>
										<input type="email" name="email" id="email" class="form-control required" onchange="getVals(this, 'email_field');" required>
									</div>
									<div class="form-group">
										<label for="phone">Phone</label>
										<input type="number" name="phone" id="phone" onchange="getVals(this, 'phone_field');" class="form-control required">
									</div>
									@if ($diklat->keterangan == 'santri')
										<div class="form-group">
											<select id="sel_lembaga" style="text-transform: lowercase" name="sel_lembaga" class="form-control required" required>
												<option value=""><i class="text-danger">Pilih Asal Lembaga</i></option>
											</select>
										</div>
									@endif
									<hr>
									<div class="row">
										<div class="form-group text-center col-12 col-xl-12">
											<small>Tempat & Tanggal Lahir</small>
										</div>
										<div class="form-group col-12 col-xl-12">
											<select name="sel_kab" id="sel_kab" class="form-control select2 required" required>
												<option value=""> Cari & Pilih Kab / Kota</option>
											</select>
											<?php $kab = App\Models\Kabupaten::select('nama')->get()?>
											{{-- <label for="kabs">Kabupaten / Kota</label>
											<input type="text" class="form-control" name="kabukota" id="kabs" list="kab" required>
											<datalist id="kab">
												@foreach ($kab as $kabu)
													<option>{{$kabu->nama}}</option>
												@endforeach
											</datalist> --}}
										</div>
										<div class="form-group col-12 col-xl-12">
											<input type="date" name="tgllahir" id="tgllahir" class="form-control required">
										</div>
									</div>
								</div>
								<!-- /step-->

								<div class="step">
									<h2 class="section_title">Domisili</h2>
									<h3 class="main_question">Alamat lengkap sesuai KTP</h3>
									<div class="row">
										<div class="form-group col-12 col-xl-12">
											<input type="hidden" id="diklat_id" name="pelatihan_id" value="{{ $diklat->id }}">
										</div>
										
										<div class="form-group col-12 col-xl-6">
											<select name="provinsi_id" id="mySelect" class="form-control" required>
												<option value="">1* Provinsi</option>
												@foreach ($dt_props2 as $item)
												<option value="{{ $item->id }}">{{ $item->nama }}</option>
												@endforeach
											</select>
										</div>
										<div class="form-group col-12 col-xl-6">
											<select id="kabupaten_id" name="kabupaten_id" class="form-control" required>
												<option value="">2* Kabupaten / Kota</option>
											</select>
										</div>
										<div class="form-group col-12 col-xl-6">
											<select id="kecamatan_id" name="kecamatan_id" class="form-control" required>
												<option value="">3* Kecamatan</option>
											</select>
										</div>
										<div class="form-group col-12 col-xl-6">
											<select id="kelurahan_id" name="kelurahan_id" class="form-control " required>
												<option value="">4* Kelurahan</option>
											</select>
										</div>
										<div class="form-group col-12 col-xl-12">
											<label for=""><i class="text-danger">*</i> Alamat Lengkap Sesuai Domisili / KTP</label>
											<textarea name="alamat" class="form-control text-capitalize" id="" cols="30" rows="5" required></textarea>
										</div>
									</div>
								</div>
								<!-- /step-->

								<div class="step">
									<h2 class="section_title">Dokumen Persyaratan</h2>
									<h3 class="main_question">Lampirkan dokumen persyaratan yang diminta</h3>
									@if ($registrasi->count() !== 0)
										@foreach ($registrasi as $item)
										<div class="form-group add_bottom_30 add_top_20">
											<input type="hidden" name="registrasi_id[]" value="{{ $item->id }}">
											<label style="text-transform: uppercase">{{ $item->name }}</label>
											<div class="fileupload">
												<input type="file" name="fileupload[]" accept="{{ $item->jenis }}" class="required">
												<br><small>(Jenis File: {{ $item->jenis }})</small>
											</div>
										</div>
										@endforeach
										<label class="custom">Data yang anda unggah sudah sesuai dengan persyaratan ?</label>
										<div class="form-group radio_input">
											<label class="container_radio mr-3">Yes
												<input type="radio" name="remotely_full_time" value="Yes" class="required">
												<span class="checkmark"></span>
											</label>
										</div>
									@else
										<label class="custom">Tidak ada permintaan dokumen khusus. pilih "Yes" dan lanjutkan ke tahap berikutnya</label>
										<div class="form-group radio_input">
											<label class="container_radio mr-3">Yes
												<input type="radio" name="remotely_full_time" value="Yes" class="required">
												<span class="checkmark"></span>
											</label>
										</div>
									@endif
								</div>
								<!-- /step-->

								<div class="submit step" id="end">
									<div class="summary">
										<div class="wrapper">
											<h3>Hai!, <span id="name_field"></span><br> </h3>
											<p>Anda akan menerima pesan melalui whatsapp pada nomor <strong id="phone_field"></strong> setelah data anda kami konfirmasi</p>
										</div>
										<div class="text-center">
											<div class="form-group terms">
												<label class="container_check">Tolong setujui <a href="#" data-toggle="modal" data-target="#terms-txt">kondisi dan persyaratan </a> sebelum anda mendaftar
													<input type="checkbox" name="terms" value="Yes" class="required">
													<span class="checkmark"></span>
												</label>
											</div>
										</div>
									</div>
								</div>
								<!-- /step last-->

							</div>
							<!-- /middle-wizard -->
							<div id="bottom-wizard">
								<button type="button" name="backward" class="backward">Prev</button>
								{{-- <button type="button" name="forward" class="forward">Next</button> --}}
								<input type="button" id="next" name="forward" class="forward btn btn-success" value="Next">
								<button type="submit" name="process" class="submit">Submit</button>
							</div>
							<!-- /bottom-wizard -->
						</form>
					@endif

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
	
	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Kondisi dan Persyaratan</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<ul>
						<li>1. Pastikan data yang anda isikan adalah benar</li>
						<li>2. Lengkapi dokumen persyaratan terkait pada tahap 3 (tiga)</li>
						<li>3. Periksa pesan dari whatsapp kami terkait status pendaftaran anda</li>
						<li>4. Baca alasan kenapa pendaftaran anda gagal melalui pesan whatsapp yang dikirim</li>
						<li>5. Bergabung ke group whatsapp yang tertaut di pesan pada poin ke 3. apabila pendaftaran anda disetujui</li>
					</ul>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	
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
<script>
	$(document).ready(function(){
		var txtlen; var phonetxtln; var formatphone;
		$('#sel_country').select2({
			placeholder: 'Cari / Pilih Negara',
			ajax: {
				url: "{{route('negara')}}",
				dataType: 'json',
				delay: 250,
				processResults: function (data) {
				return {
					results:  $.map(data, function (item) {
						return {
							text: item.id_country,
							text: item.country_name,
							id: item.id_country
						}
					})
				};
			},
				cache: true
			}
		});

		$('#sel_kab').select2({
			placeholder: 'Kab / kota asal',
			ajax: {
				url: "{{route('kabupaten')}}",
				dataType: 'json',
				delay: 250,
				processResults: function (data) {
				return {
					results:  $.map(data, function (item) {
						return {
							text: item.id,
							text: item.nama,
							id: item.id
						}
					})
				};
			},
				cache: true
			}
		});

		$('#sel_lembaga').select2({
			placeholder: 'Asal lembaga',
			ajax: {
				url: "{{route('lembaga')}}",
				dataType: 'json',
				delay: 250,
				processResults: function (data) {
				return {
					results:  $.map(data, function (item) {
						return {
							text: item.id,
							text: item.name,
							id: item.id
						}
					})
				};
				},
				cache: true
			}
		});
		// $(function() {
		// $('#nik').keyup(function() {
		//     txtlen = $(this).val().length;
		//     var txtlennospace = $(this).val().replace(/\s+/g, '').length;
		// 		if (txtlen <= 16 || txtlen >= 16) {
		// 			$('#next').val('Jumlah NIK Tidak Sesuai '+txtlen+' dari 16 Digit');
		// 			$('#next').attr('disabled','disabled');
		// 		}
		// 		if(txtlen == 16){
		// 			$('#next').val('next');
		// 			$('#next').attr('disabled',false);
		// 		}
		// 	});
		// });
		$(function() {
			$('#phone').keyup(function() {
				phonetxtln = $(this).val().length;
				formatphone = $(this).val().substr(0,2);
				if (formatphone !== 08) {
					if (phonetxtln < 12 || phonetxtln > 13) {
						$('#next').val(''+phonetxtln+' Digit dari 12 / 13 Digit & dengan awalan 08' );
						$('#next').attr('disabled','disabled');
					}else if (phonetxtln == 12 || phonetxtln == 13){
						$('#next').val('Phone Number wajib dengan 08' );
						$('#next').attr('disabled','disabled');
					}
				}if(formatphone == 08) {
					if (phonetxtln < 12 || phonetxtln > 13) {
						$('#next').val('Phone Number '+phonetxtln+' dari 12 / 13 Digit' );
						$('#next').attr('disabled','disabled');
					}else if (phonetxtln == 12 || phonetxtln == 13){
						$('#next').val('next');
						$('#next').attr('disabled',false);
					}
				}
			});
		});

	$('select[name="provinsi_id"]').on('change', function() {
			//mencari kota/kab dari provinsi 3 tingkat
			var provinsi_id = $(this).val();
			
			if(provinsi_id) {
				
				$.ajax({
					url: '/fetch/' + provinsi_id,
					type: "GET",
					dataType: "json",
					success:function(data) {                     
						$('select[name="kabupaten_id"]').empty();
						$.each(data, function(key, value) {
						$('select[name="kabupaten_id"]').append('<option value="'+ key +'">'+ value +'</option>');
						});
						
						var a = $( "#kabupaten_id option:selected" ).val();
						
						if(a) {
						$.ajax({
								url: '/fetch2/' + a,
								type: "GET",
								dataType: "json",
								success:function(data) {                      
									$('select[name="kecamatan_id"]').empty();
									$.each(data, function(key, value) {
									$('select[name="kecamatan_id"]').append('<option value="'+ key +'">'+ value +'</option>');
									});
									
									var x = $( "#kecamatan_id option:selected" ).val();
									
									if(x) {
									$.ajax({
											url: '/fetch3/' + x,
											type: "GET",
											dataType: "json",
											success:function(data) {                      
												$('select[name="kelurahan_id"]').empty();
												$.each(data, function(key, value) {
												$('select[name="kelurahan_id"]').append('<option value="'+ key +'">'+ value +'</option>');
												});
												
												var x = $( "#kelurahan_id option:selected" ).val();
												
											}
										});
									}else{
										$('select[name="kelurahan_id"]').empty().disabled();
									}
								}
							});
						}else{
							$('select[name="kecamatan_id"]').empty().disabled();
						}
					}
				});
			}else{
				$('select[name="kabupaten_id"]').empty().disabled();
			}
		});

		$('select[name="kabupaten_id"]').on('change', function() {
			//mencari kecamatan dari kota/kab 2 tingkat
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
						
						var x = $( "#kecamatan_id option:selected" ).val();
						
						if(x) {
							$.ajax({
								url: '/fetch3/' + x,
								type: "GET",
								dataType: "json",
								success:function(data) {                      
									$('select[name="kelurahan_id"]').empty();
									$.each(data, function(key, value) {
									$('select[name="kelurahan_id"]').append('<option value="'+ key +'">'+ value +'</option>');
									});
									
									var x = $( "#kelurahan_id option:selected" ).val();
									
								}
							});
						}else{
							$('select[name="kelurahan_id"]').empty().disabled();
						}
					}
				});
			}else{
				$('select[name="kecamatan_id"]').empty().disabled();
			}
		});
		
		$('select[name="kecamatan_id"]').on('change', function() {
			//mencari kelurahan dari kecamatan
			var kecamatan_id = $(this).val();
			
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
						
					}
				});
			}else{
				$('select[name="kelurahan_id"]').empty().disabled();
			}
		});
	})
	
</script>
</body>
</html>