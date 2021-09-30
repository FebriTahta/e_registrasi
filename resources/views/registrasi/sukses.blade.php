<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('images/tilawati-blue.png') }}" type="image/x-icon">
    <title>Registrasi - Tilawati</title>
    <meta property="og:title" content="Registrasi"/><?php date_default_timezone_set('Asia/Jakarta'); $tgl = Carbon\Carbon::parse($data->tanggal)->isoFormat('dddd, D MMMM Y') ?>
    <meta property="og:description" content="Registrasi {{$data->program->name}} - {{ $tgl }}"/>
    <meta property="og:image" itemprop="image" content="{{ asset('images/tumbreg.jpeg') }}">
    <!-- Stylesheets -->
    <!-- Vendor css -->
    <link rel="stylesheet" href="{{asset('src/vendors/@mdi/font/css/materialdesignicons.min.css')}}">

    <!-- Base css with customised bootstrap included -->
    <link rel="stylesheet" href="{{asset('src/css/miri-ui-kit-free.css')}}">

    <!-- Stylesheet for demo page specific css -->
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}">
    <!-- Select2 -->
    {{-- <link href="{{URL::asset('tilawatipusat/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('tilawatipusat/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('tilawatipusat/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('tilawatipusat/libs/bootstrap-touchspin/bootstrap-touchspin.min.css')}}" rel="stylesheet" /> --}}

<style>
.form-control {
    border-radius: 0;
    box-shadow: none;
    border-color: #d2d6de
}

.select2-hidden-accessible {
    border: 0 !important;
    clip: rect(0 0 0 0) !important;
    height: 1px !important;
    margin: -1px !important;
    overflow: hidden !important;
    padding: 0 !important;
    position: absolute !important;
    width: 1px !important
}

.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
}

.select2-container--default .select2-selection--single,
.select2-selection .select2-selection--single {
    border: 1px solid #d2d6de;
    border-radius: 0;
    padding: 6px 12px;
    height: 34px
}

.select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #aaa;
    border-radius: 4px
}

.select2-container .select2-selection--single {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    height: 28px;
    user-select: none;
    -webkit-user-select: none
}

.select2-container .select2-selection--single .select2-selection__rendered {
    padding-right: 10px
}

.select2-container .select2-selection--single .select2-selection__rendered {
    padding-left: 0;
    padding-right: 0;
    height: auto;
    margin-top: -3px
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: 28px
}

.select2-container--default .select2-selection--single,
.select2-selection .select2-selection--single {
    border: 1px solid #d2d6de;
    border-radius: 0 !important;
    padding: 6px 12px;
    height: 40px !important
}

.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 26px;
    position: absolute;
    top: 6px !important;
    right: 1px;
    width: 20px
}
</style>    
</head>
<body class="login-page">
    <header class="miri-ui-kit-header header-no-bg-img header-navbar-only">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container">
                <a class="navbar-brand" href="#" style="min-width: 100px"><img src="{{asset('images/tilawati-white.png')}}" alt="logo"> | Tilawati</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#miriUiKitNavbar"
                    aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="mdi mdi-menu"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="miriUiKitNavbar">
                    <div class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#modalprosedur"></span>Prosedur Pendaftaran</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">Syarat & Ketentuan</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                Status
                            </a>
                            <div class="dropdown-menu dropdown-menu-right text-center">
                                <a href="#" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-shape-outline"></i>Cek Status</a>
                                <a href="#" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-lock-outline"></i>Ubah Data</a>
                                <a href="#" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-shield-account-outline"></i>Informasi</a>
                            </div>
                        </li> --}}
                        <li class="nav-item">

                            <a class="nav-link nav-icon icon-fb" href="https://www.facebook.com/pes.nurulfalah"><i class="mdi mdi-facebook-box"></i></a>

                            <a class="nav-link nav-icon icon-twitter" href="https://twitter.com/pes_nfsby"><i class="mdi mdi-twitter-box"></i></a>
 
                            <a class="nav-link nav-icon icon-insta" href="https://instagram.com/pesantren_nurul_falah"><i class="mdi mdi-instagram"></i></a>

                            <a class="nav-link nav-icon icon-youtube" href="https://youtube.com/channel/UC1Xkdp_DKN0hJL85UWxH_Gg"><i class="mdi mdi-youtube"></i></a>
                            
                        </li>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <center style="padding: 3%;">
        <div class="card" style="width: 650px; max-width: 100%; margin-bottom: 20px;">
            <img src="https://tilawatipusat.com/image_flyer/{{$data->pelatihan->flyer->image}}" style="width: 100%; height: auto;" alt="">
        </div>
    </center>
    <div class="modal fade" id="modalprosedur" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-body">
					<ol>
                        <h5><li>Mengisi form pendaftaran</li></h5>
                        <h5><li>Siapkan dokumen persyaratan jika diminta seperti "Infaq" dll</li></h5>
                        <h5><li>Tunggu data anda dikonfirmasi oleh bendahara tilawati pusat 1x24 jam</li></h5>
                        <h5><li>Anda akan menerima pesan melalui whatsapp setelah data anda dikonfirmasi</li></h5>
                        <h5><li>Bergabung pada group whatsapp yang terlampir pada pesan</li></h5>
                    </ol>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
    <footer>
        <div class="container">
            <nav class="navbar navbar-dark bg-transparent navbar-expand footer-navbar d-block d-sm-flex text-center">
                <span class="navbar-text">&copy; IT & Administrasi Tilawati Pusat 2021.</span>
                <div class="navbar-nav ml-auto justify-content-center">
                    <a class="nav-link nav-icon icon-fb" href="https://www.facebook.com/pes.nurulfalah"><i class="mdi mdi-facebook-box"></i></a>

                    <a class="nav-link nav-icon icon-twitter" href="https://twitter.com/pes_nfsby"><i class="mdi mdi-twitter-box"></i></a>
 
                    <a class="nav-link nav-icon icon-insta" href="https://instagram.com/pesantren_nurul_falah"><i class="mdi mdi-instagram"></i></a>

                    <a class="nav-link nav-icon icon-youtube" href="https://youtube.com/channel/UC1Xkdp_DKN0hJL85UWxH_Gg"><i class="mdi mdi-youtube"></i></a>
                </div>
            </nav>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    {{-- <script src="{{asset('src/vendors/jquery/dist/jquery.min.js')}}"></script> --}}
    <script src="{{asset('src/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('src/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('/tilawatipusat/libs/select2/select2.min.js')}}"></script>
    <script>
        function save() {
            $('#daftar').val('Memproses Pendaftaran....');
        }
        function hanyaAngka(evt) {
		    var charCode = (evt.which) ? evt.which : event.keyCode
		    if (charCode > 31 && (charCode < 48 || charCode > 57))
		    return false;
		    return true;
		}
        $(document).ready(function(){
            var total = $('#total').val();
            console.log(total);
            $('#negara_id').select2({
                placeholder: 'Asal Negara',
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

            $('select[name="negara_id"]').on('change', function() {
                var negara = $(this).val();
                $.ajax({
					url: '/phone-code-daftar-negara/' + negara,
					type: "GET",
					dataType: "json",
					success:function(data) {                      
                        document.getElementById("kode1").value = data.phonecode;
                        
					}
				});
            });
            $('#pos').keyup(function(){
                postxtln    = $(this).val().length;
                if (postxtln !== 5) {
                    document.getElementById('kodepos').style.display="";
                    document.getElementById('kodepos').innerHTML = 'wajib terdiri dari 5 angka';
                    $('#daftar').attr('disabled','disabled');
                    $('#daftar').addClass('btn btn-danger');
                    $('#daftar').val('Kesalahan Input');
                }else{
                    document.getElementById('kodepos').style.display = "none";
                                $('#daftar').removeClass('btn btn-danger');
                                $('#daftar').addClass('btn btn-success');
                                $('#daftar').attr('disabled',false);
                                $('#daftar').val('Daftar!');
                }
            })
            $('#phone').keyup(function() {
				phonetxtln  = $(this).val().length;
				formatphone = $(this).val().substr(0,1);
                notnumber   = $('#phone').val();
                if (formatphone != 8) {
                    document.getElementById('kodephone').style.display = "";
                    document.getElementById('kodephone').innerHTML = 'format nomor diawali angka 8';
                    $('#daftar').attr('disabled','disabled');
                    $('#daftar').addClass('btn btn-danger');
                    $('#daftar').val('Kesalahan Input');
                }else{
                    document.getElementById('kodephone').style.display = "none";
                    if (phonetxtln > 12) {
                    document.getElementById('kodephone').style.display = "";
                    document.getElementById('kodephone').innerHTML = 'format nomor lebih dari 12 digit';
                    $('#daftar').attr('disabled','disabled');
                    $('#daftar').addClass('btn btn-danger');
                    $('#daftar').val('Kesalahan Input');
                    }else{
                        if (phonetxtln < 10) {
                        document.getElementById('kodephone').style.display = "";
                        document.getElementById('kodephone').innerHTML = 'format nomor kurang dari 10 digit';
                        $('#daftar').attr('disabled','disabled');
                        $('#daftar').addClass('btn btn-danger');
                        $('#daftar').val('Kesalahan Input');
                        }else{
                            if (isNaN(notnumber)) {
                                document.getElementById('kodephone').style.display = "";
                                document.getElementById('kodephone').innerHTML = 'hanya boleh format angka';
                                $('#daftar').attr('disabled','disabled');
                                $('#daftar').addClass('btn btn-danger');
                                $('#daftar').val('Kesalahan Input');
                            }else{
                                document.getElementById('kodephone').style.display = "none";
                                $('#daftar').removeClass('btn btn-danger');
                                $('#daftar').addClass('btn btn-success');
                                $('#daftar').attr('disabled',false);
                                $('#daftar').val('Daftar!');
                            }
                        }
                    }
                }
            });

            $('#phone1').keyup(function() {
				phonetxtln  = $(this).val().length;
				formatphone = $(this).val().substr(0,1);
                notnumber   = $('#phone1').val();
                document.getElementById('kodephone1').style.display = "none";
                    if (phonetxtln > 12) {
                    document.getElementById('kodephone1').style.display = "";
                    document.getElementById('kodephone1').innerHTML = 'format number cant be more than 12 digit';
                    $('#daftar').attr('disabled','disabled');
                    $('#daftar').addClass('btn btn-danger');
                    $('#daftar').val('Wrong Input');
                    }else{
                        if (phonetxtln < 10) {
                        document.getElementById('kodephone1').style.display = "";
                        document.getElementById('kodephone1').innerHTML = 'format number cant be less than 10 digit';
                        $('#daftar').attr('disabled','disabled');
                        $('#daftar').addClass('btn btn-danger');
                        $('#daftar').val('Wrong Input');
                        }else{
                            if (isNaN(notnumber)) {
                                document.getElementById('kodephone1').style.display = "";
                                document.getElementById('kodephone1').innerHTML = 'only format number';
                                $('#daftar').attr('disabled','disabled');
                                $('#daftar').addClass('btn btn-danger');
                                $('#daftar').val('Wrong Input');
                            }else{
                                document.getElementById('kodephone1').style.display = "none";
                                $('#daftar').removeClass('btn btn-danger');
                                $('#daftar').addClass('btn btn-success');
                                $('#daftar').attr('disabled',false);
                                $('#daftar').val('Daftar!');
                            }
                        }
                    }
            })

            // default hidden negara lain
            var ya = $('#ya').val();
            if (ya == 1) {
                document.getElementById("nonid").style.display = "none";
            }else{
                document.getElementById("nonid").style.removeProperty( 'display' );
            }

            var file_size = 0;
            var lebih = 0;
            for (let x = 0; x < total; x++) {
                $('#inputGroupFile02'+x).on('change',function(){
                    //get the file name
                    var fileName = $(this).val();
                    //replace the "Choose a file" label
                    
                    //data
                    for(var i=0; i< $(this).get(0).files.length; ++i){
                        var file1 = $(this).get(0).files[i].size;
                        if(file1){
                            $(this).next('.custom-file-label').html(fileName);
                        }
                    }
                });

                $('#inputGroupFile02'+x).on('change',function(){
                    
                });   
            }
        })
    </script>
    <script>
        function myFunction() {
            document.getElementById("id").style.removeProperty( 'display' );
            document.getElementById("nonid").style.display = "none";
            console.log('kelihatan');
            $('#tmptlahir').attr('disabled',false);
            $('#tgllahir').attr('disabled',false);
            $('#kode').attr('disabled',false);
            $('#phone').attr('disabled',false);
            $('#pos').attr('disabled',false);
            $('#kabupaten_id').attr('disabled',false);
            $('#kecamatan_id').attr('disabled',false);
            $('#kelurahan_id').attr('disabled',false);
            $('#alamat').attr('disabled',false);
        }
        function myFunction2() {
            document.getElementById("nonid").style.removeProperty( 'display' );
            document.getElementById("id").style.display = "none";
            $('#tmptlahir').attr('disabled','disabled');
            $('#tgllahir').attr('disabled','disabled');
            $('#kode').attr('disabled','disabled');
            $('#phone').attr('disabled','disabled');
            $('#pos').attr('disabled','disabled');
            $('#kabupaten_id').attr('disabled','disabled');
            $('#kecamatan_id').attr('disabled','disabled');
            $('#kelurahan_id').attr('disabled','disabled');
            $('#alamat').attr('disabled','disabled');
            console.log('hilang');
        }
        function disbuttom() {
            $('#daftar').attr('disabled','disabled');
            $('#daftar').val('Proses Mendaftar...');
        }
    </script>
    <script>
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
    </script>
    <script>
            $('#kabupaten_id').select2({
                // placeholder: 'Kab / kota asal',
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
            $('#tmptlahir').select2({
                // placeholder: 'Kab / kota asal',
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
            $('#kecamatan_id').select2({
                // placeholder: 'Kab / kota asal',
            });
            $('#kelurahan_id').select2({
                // placeholder: 'Kab / kota asal',
            });
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('images/tilawati-blue.png') }}" type="image/x-icon">
    <title>Registrasi - Tilawati</title>
    <meta property="og:title" content="Registrasi"/><?php date_default_timezone_set('Asia/Jakarta'); $tgl = Carbon\Carbon::parse($diklat->tanggal)->isoFormat('dddd, D MMMM Y') ?>
    <meta property="og:description" content="Registrasi {{$diklat->program->name}} - {{ $tgl }}"/>
    <meta property="og:image" itemprop="image" content="{{ asset('images/tumbreg.jpeg') }}">
    <!-- Stylesheets -->
    <!-- Vendor css -->
    <link rel="stylesheet" href="{{asset('src/vendors/@mdi/font/css/materialdesignicons.min.css')}}">

    <!-- Base css with customised bootstrap included -->
    <link rel="stylesheet" href="{{asset('src/css/miri-ui-kit-free.css')}}">

    <!-- Stylesheet for demo page specific css -->
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}">
    <!-- Select2 -->
    {{-- <link href="{{URL::asset('tilawatipusat/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('tilawatipusat/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('tilawatipusat/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('tilawatipusat/libs/bootstrap-touchspin/bootstrap-touchspin.min.css')}}" rel="stylesheet" /> --}}

<style>
.form-control {
    border-radius: 0;
    box-shadow: none;
    border-color: #d2d6de
}

.select2-hidden-accessible {
    border: 0 !important;
    clip: rect(0 0 0 0) !important;
    height: 1px !important;
    margin: -1px !important;
    overflow: hidden !important;
    padding: 0 !important;
    position: absolute !important;
    width: 1px !important
}

.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
}

.select2-container--default .select2-selection--single,
.select2-selection .select2-selection--single {
    border: 1px solid #d2d6de;
    border-radius: 0;
    padding: 6px 12px;
    height: 34px
}

.select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #aaa;
    border-radius: 4px
}

.select2-container .select2-selection--single {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    height: 28px;
    user-select: none;
    -webkit-user-select: none
}

.select2-container .select2-selection--single .select2-selection__rendered {
    padding-right: 10px
}

.select2-container .select2-selection--single .select2-selection__rendered {
    padding-left: 0;
    padding-right: 0;
    height: auto;
    margin-top: -3px
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: 28px
}

.select2-container--default .select2-selection--single,
.select2-selection .select2-selection--single {
    border: 1px solid #d2d6de;
    border-radius: 0 !important;
    padding: 6px 12px;
    height: 40px !important
}

.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 26px;
    position: absolute;
    top: 6px !important;
    right: 1px;
    width: 20px
}
</style>    
</head>
<body class="login-page">
    <header class="miri-ui-kit-header header-no-bg-img header-navbar-only">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container">
                <a class="navbar-brand" href="#" style="min-width: 100px"><img src="{{asset('images/tilawati-white.png')}}" alt="logo"> | Tilawati</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#miriUiKitNavbar"
                    aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="mdi mdi-menu"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="miriUiKitNavbar">
                    <div class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#modalprosedur"></span>Prosedur Pendaftaran</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">Syarat & Ketentuan</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                Status
                            </a>
                            <div class="dropdown-menu dropdown-menu-right text-center">
                                <a href="#" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-shape-outline"></i>Cek Status</a>
                                <a href="#" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-lock-outline"></i>Ubah Data</a>
                                <a href="#" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-shield-account-outline"></i>Informasi</a>
                            </div>
                        </li> --}}
                        <li class="nav-item">

                            <a class="nav-link nav-icon icon-fb" href="https://www.facebook.com/pes.nurulfalah"><i class="mdi mdi-facebook-box"></i></a>

                            <a class="nav-link nav-icon icon-twitter" href="https://twitter.com/pes_nfsby"><i class="mdi mdi-twitter-box"></i></a>
 
                            <a class="nav-link nav-icon icon-insta" href="https://instagram.com/pesantren_nurul_falah"><i class="mdi mdi-instagram"></i></a>

                            <a class="nav-link nav-icon icon-youtube" href="https://youtube.com/channel/UC1Xkdp_DKN0hJL85UWxH_Gg"><i class="mdi mdi-youtube"></i></a>
                            
                        </li>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <center style="padding: 3%;">
        
        @if ($diklat->groupwa == null)
            <div class="card" style="width: 650px; max-width: 100%; height: 500px; margin-bottom: 20px;">
                <div class="card-body text-center text-danger">
                    <h5 style="color: red">PENDAFTARAN BELUM SIAP DIBUKA</h5>
                </div>
            </div>
        @else
            @if ($diklat->flyer == null)
            @else
            <div class="card" style="width: 650px; max-width: 100%; margin-bottom: 20px;">
                <img src="https://tilawatipusat.com/image_flyer/{{$diklat->flyer->image}}" style="width: 100%; height: auto;" alt="">
            </div>
            @endif
            @if ($alertFm = Session::get('success'))
                <div class="card card-body" style="width: 650px; max-width: 100%; margin-bottom: 20px;">
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $alertFm }}</strong>
                    </div>
                </div>
                <hr>
            @endif
            @if ($alertFm = Session::get('error'))
                <div class="card card-body" style="width: 650px; max-width: 100%; margin-bottom: 20px;">
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $alertFm }}</strong>
                    </div>
                </div>
                <hr>
            @endif
            @if ($alertFm = Session::get('info'))
                <div class="card" style="width: 650px; max-width: 100%; margin-bottom: 20px;">
                    <div class="card-body">
                        <div class="alert alert-info alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $alertFm }}</strong>
                        </div>
                    </div>
                </div>
                <hr>
            @endif
            @if ($alertFm = Session::get('warning'))
                <div class="card" style="width: 650px; max-width: 100%; margin-bottom: 20px;">
                    <div class="card-body">
                        <div class="alert alert-warning alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $alertFm }}</strong>
                        </div>
                    </div>
                </div>
                <hr>
            @endif
            <div class="card text-center" style="width: 650px; max-width: 100%; padding: 15px;">
                <div class="card-body">
                    <P>TERIMAKASIH TELAH MENDAFTAR PADA</P>
                    <h5>{{$data->program->name}}</h5><br>
                    <span>{{\Carbon\Carbon::parse($data->tanggal)->isoFormat('D MMMM Y');}}</span>
                </div>
                <div class="card-body">
                    <p>SILAHKAN BERGABUNG PADA GROUP WHATSAPP BERIKUT</p>
                    <a href="{{$data->pelatihan->groupwa}}"> {{$data->pelatihan->groupwa}}</a>
                    <small>atau bisa dengan klick tombol begabung dibawah ini</small>
                    <a class="btn btn-success" href="{{$data->pelatihan->groupwa}}">BERGABUNG</a>
                </div>
            </div>
        @endif
    </center>
    <div class="modal fade" id="modalprosedur" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-body">
					<ol>
                        <h5><li>Mengisi form pendaftaran</li></h5>
                        <h5><li>Siapkan dokumen persyaratan jika diminta seperti "Infaq" dll</li></h5>
                        <h5><li>Tunggu data anda dikonfirmasi oleh bendahara tilawati pusat 1x24 jam</li></h5>
                        <h5><li>Anda akan menerima pesan melalui whatsapp setelah data anda dikonfirmasi</li></h5>
                        <h5><li>Bergabung pada group whatsapp yang terlampir pada pesan</li></h5>
                    </ol>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
    <footer>
        <div class="container">
            <nav class="navbar navbar-dark bg-transparent navbar-expand footer-navbar d-block d-sm-flex text-center">
                <span class="navbar-text">&copy; IT & Administrasi Tilawati Pusat 2021.</span>
                <div class="navbar-nav ml-auto justify-content-center">
                    <a class="nav-link nav-icon icon-fb" href="https://www.facebook.com/pes.nurulfalah"><i class="mdi mdi-facebook-box"></i></a>

                    <a class="nav-link nav-icon icon-twitter" href="https://twitter.com/pes_nfsby"><i class="mdi mdi-twitter-box"></i></a>
 
                    <a class="nav-link nav-icon icon-insta" href="https://instagram.com/pesantren_nurul_falah"><i class="mdi mdi-instagram"></i></a>

                    <a class="nav-link nav-icon icon-youtube" href="https://youtube.com/channel/UC1Xkdp_DKN0hJL85UWxH_Gg"><i class="mdi mdi-youtube"></i></a>
                </div>
            </nav>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    {{-- <script src="{{asset('src/vendors/jquery/dist/jquery.min.js')}}"></script> --}}
    <script src="{{asset('src/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('src/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('/tilawatipusat/libs/select2/select2.min.js')}}"></script>
</body>
</html>
