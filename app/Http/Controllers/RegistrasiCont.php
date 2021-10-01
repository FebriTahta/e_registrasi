<?php

namespace App\Http\Controllers;
use App\Models\Program;
use App\Models\Registrasi;
use App\Models\Filepeserta;
use App\Models\Pelatihan;
use App\Models\Peserta;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use Carbon\Carbon;
use DataTables;
use Mail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RegistrasiCont extends Controller
{
    public function index(Request $request,$slug_diklat)
    {
        
        $diklat = Pelatihan::where('slug', $slug_diklat)->first();
        $dt_props2 = Provinsi::all();
        return $diklat;
        $registrasi = Registrasi::where('program_id',$diklat->program_id)->get();
        return view('registrasi.regis',compact('diklat','dt_props2','registrasi'));
        // return view('tilawatipusat.registrasi.index',compact('diklat','dt_props2','registrasi'));
    }

    public function syarat(Request $request)
    {
        return view('tilawatipusat.registrasi.syarat');
    }

    public function registrasi(Request $request)
    {
        $telp           = $request->kode.$request->phone;
        $telp1          = $request->kode1.$request->phone1;
        $dpp            = $request->pelatihan_id;
        $dp             = Peserta::where('pelatihan_id',$dpp)->where('name',$request->name)->where('telp',$telp)->first();
        $dp1            = Peserta::where('pelatihan_id',$dpp)->where('name',$request->name)->where('telp',$telp1)->first();
        $diklat         = Pelatihan::where('id', $request->pelatihan_id)->first();
        $tanggal        = $diklat->tanggal;
        $kabupaten_kota = Kabupaten::where('id',$request->kabupaten_id)->first();
        $tempatlahir    = Kabupaten::where('id',$request->tmptlahir)->first();
        $tempatlahir1   = Kabupaten::where('id',$request->tmptlahir1)->first();
        $slug           = Str::slug($request->name.'-'.$diklat->program->name.'-'.
                          Carbon::parse($tanggal)->isoFormat('D-MMMM-Y').'-'.$diklat->cabang->name.'-'.
                          $diklat->cabang->kabupaten->nama);
        // cek negara
        $negara         = $request->country;
        $luar_negri     = $request->negara_id;
        if ($negara == 1) {
            # code...
            $kode_negara= 175;
            #indonesia
            if ($dp == null) {
                # code...
                if($request->hasfile('fileupload') !== null)
                {
                    $peserta                = Peserta::updateOrCreate(
                        [
                            'id'            => $request->id
                        ],
                        [
                            'nik'           => $request->nik,
                            'phonegara_id'  => $kode_negara,
                            'pelatihan_id'  => $request->pelatihan_id,
                            'program_id'    => $diklat->program_id,
                            'cabang_id'     => $diklat->cabang->id,
                            'lembaga_id'    => $request->lembaga_id,
                            'provinsi_id'   => $kabupaten_kota->provinsi_id,
                            'kabupaten_id'  => $kabupaten_kota->id,
                            'kecamatan_id'  => $request->kecamatan_id,
                            'kelurahan_id'  => $request->kelurahan_id,
                            'slug'          => $slug,
                            'tanggal'       => $tanggal,
                            'name'          => $request->name,
                            'tmptlahir'     => $tempatlahir->nama,
                            'tgllahir'      => $request->tgllahir,
                            'alamat'        => $request->alamat,
                            'alamatx'       => $request->alamatx,
                            'kota'          => $kabupaten_kota->nama,
                            'telp'          => $request->kode.$request->phone,
                            'pos'           => $request->pos,
                            'email'         => $request->email,
                            'bersyahadah'   => $request->bersyahadah,
                            'jilid'         => $request->jilid,
                            'kriteria'      => $request->kriteria,
                            'munaqisy'      => $request->munaqisy,
                            'status'        => '0',
                        ]
                    );
                    #code
                    // if($request->hasfile('fileupload'))
                
                    foreach($request->file('fileupload') as $key=>$image)
                    {
                        $name=$image->getClientOriginalName();
                        $image->move(public_path().'/file_peserta/', $name.$peserta->name);  // your folder path
                        $data_file_name[] = $name.$peserta->name;
                        $data = array(
                                'peserta_id'    => $peserta->id,
                                'registrasi_id' => $request->registrasi_id[$key],
                                'file'          => $name.$peserta->name,
                                'status'        => '0',
                            );
                        Filepeserta::insert($data);
                    }
                    // OneSignal Push Notification
                    $content      = array(
                        "en" => 'Mendaftar Pada : '.ucfirst($peserta->program->name)
                    );
                    $heading = array(
                                "en" => strtoupper($peserta->name)
                            );
                
                    $fields = array(
                        'app_id' => "b1a541c7-d7c4-4ad9-84f8-21e87df7dffd",
                        'included_segments' => array(
                            'Subscribed Users'
                        ),
                        
                        'url' => "https://konfirmasi.tilawatipusat.com",
                        'contents' => $content,
                        'headings' => $heading
                    );
                    
                    $fields = json_encode($fields);
                    
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
                    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                        'Content-Type: application/json; charset=utf-8',
                        'Authorization: Basic NTY3NjdlYmQtN2Q1Yy00NzIzLTg3N2ItYWZmMzI4ZTYyZWNl'
                    ));
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                    curl_setopt($ch, CURLOPT_HEADER, FALSE);
                    curl_setopt($ch, CURLOPT_POST, TRUE);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                    
                    $response = curl_exec($ch);
                    curl_close($ch);

                    if ($diklat->jenis == 'webinar') {
                        # code...
                        // return redirect()->back()->with('success','TERIMAKASIH TELAH MENDAFTAR, SILAHKAN BERGABUNG PADA GROUP WA BERIKUT -> '.$diklat->groupwa.' #CATATAN GROUP HANYA UNTUK PESERTA YANG SUDAH MELAKUKAN PENDAFTARAN. ', $response);
                        return redirect('/pendaftaran-diklat-sukses/'.$peserta->slug);
                    }else{
                        return redirect()->back()->with('success','TERIMAKASIH TELAH MENDAFTAR. ANDA AKAN MENERIMA PESAN WHATSAPP DARI KAMI SETELAH DATA ANDA KAMI VERIFIKASI', $response);
                    }
                
                }else{
                        // tidak ada gambar dokumen bukti persyaratan
                        return redirect()->back()->with('error', 'Mohon Isi Dokumen Persyaratan dengan benar / pastikan anda dalam koneksi yang stabil & jangan unggah foto dengan ukuran yang terlalu besar');
                    }

                
            } else {
                # code...
                if ($dp->status == '0') {
                    # code...
                    // return redirect('/pendaftaran-peserta-diklat-terdaftar/'.$diklat->program->id.'/'.$diklat->id.'/'.$dp->id);
                    return redirect()->back()->with('warning','Nomor anda telah terdaftar dengan nama : '.$request->name.'. Data anda sedang dalam proses VERIFIKASI. Tunggu notifikasi melalui Pesan Whatsapp Otomatis dari Kami');
                }elseif($dp->status == '2'){
                    return redirect()->back()->with('error', 'Pendaftaran anda ditolak karena data anda / dokumen persyaratan anda tidak sesuai');
                }
            }
        }else{
            
            $kode_negara= $luar_negri;

            #luar negri
            if ($dp1 == null) {
                # code...
                $peserta                = Peserta::updateOrCreate(
                    [
                        'id'            => $request->id
                    ],
                    [
                        'nik'           => $request->nik,
                        'phonegara_id'  => $kode_negara,
                        'pelatihan_id'  => $request->pelatihan_id,
                        'program_id'    => $diklat->program_id,
                        'cabang_id'     => $diklat->cabang->id,
                        'lembaga_id'    => $request->lembaga_id,
                        // 'provinsi_id'   => $kabupaten_kota->provinsi_id,
                        // 'kabupaten_id'  => $kabupaten_kota->id,
                        // 'kecamatan_id'  => $request->kecamatan_id,
                        // 'kelurahan_id'  => $request->kelurahan_id,
                        'slug'          => $slug,
                        'tanggal'       => $tanggal,
                        'name'          => $request->name,
                        'tmptlahir'     => $tempatlahir1->nama,
                        'tgllahir'      => $request->tgllahir1,
                        'alamat'        => $request->alamat1,
                        // 'kota'          => $request->nama,
                        'telp'          => $request->kode1.$request->phone1,
                        'pos'           => $request->zip,
                        'email'         => $request->email,
                        'bersyahadah'   => $request->bersyahadah,
                        'jilid'         => $request->jilid,
                        'kriteria'      => $request->kriteria,
                        'munaqisy'      => $request->munaqisy,
                        'status'        => '0',
                    ]
                );
                #code
                if($request->hasfile('fileupload'))
                {
                    foreach($request->file('fileupload') as $key=>$image)
                    {
                        $name=$image->getClientOriginalName();
                        $image->move(public_path().'/file_peserta/', $name.$peserta->name);  // your folder path
                        $data_file_name[] = $name.$peserta->name;
                        $data = array(
                                'peserta_id'    => $peserta->id,
                                'registrasi_id' => $request->registrasi_id[$key],
                                'file'          => $name.$peserta->name,
                                'status'        => '0',
                            );
                        Filepeserta::insert($data);    
                    }
                }
                return redirect()->back()->with('success','Terimakasih telah mendaftar. Anda akan menerima notifikasi melalui pesan "whatsapp" setelah data anda kami VERIFIKASI');
            } else {
                # code...
                if ($dp->status == '0') {
                    # code...
                    // return redirect('/pendaftaran-peserta-diklat-terdaftar/'.$diklat->program->id.'/'.$diklat->id.'/'.$dp->id);
                    return redirect()->back()->with('info','Nomor anda telah terdaftar dengan nama : '.$request->name.'. Data anda sedang dalam proses VERIFIKASI. Tunggu notifiaski melalui pesan "whatsapp" setelah data anda kami VERIFIKASI');
                }elseif($dp->status == '2'){
                    return redirect()->back()->with('error', 'Pendaftaran anda ditolak karena data anda / dokumen persyaratan anda tidak sesuai');
                }
            }
        }
        
    }

    public function data_syarat(Request $request)
    {
        if(request()->ajax())
        {
            $data   = Program::with('registrasi');
                return DataTables::of($data)
                    ->addColumn('registrasi', function ($data) {
                        if ($data->registrasi->count()==0) {
                            # code...
                            return '<span class="badge badge-danger">kosong</span>';
                        } else {
                            # code...
                            foreach ($data->registrasi as $key => $value) {
                                # code...
                                $x[] = 
                                    '<a href="#" class="text-white badge" style="background-color: rgb(112, 150, 255)" data-toggle="modal" data-target=".bs-example-modal-penilaian-update"
                                    data-id="'.$value->id.'" 
                                    data-program_id="'.$value->program_id.'"
                                    data-name="'.$value->name.'"
                                    data-jenis="'.$value->jenis.'">'.$value->name.'</a>';
                            }
                            return implode(" - ", $x);
                        }
                    })
                    ->addColumn('option', function ($data) {
                        $btn = ' <button class="btn btn-sm btn-primary" data-toggle="modal" data-target=".bs-example-modal-kategori-quran"
                        data-id="'.$data->id.'"><i class="fa fa-plus"></i> Persyaratan</button>';
                        return $btn;
                    })
                ->rawColumns(['registrasi','option'])
                ->make(true);
        }
    }

    public function submit_syarat(Request $request)
    {
        $program_id = $request->program_id;
        Registrasi::updateOrCreate(
            [
              'id' => $request->id
            ],
            [
                'program_id' => $program_id,
                'name' => $request->name,
                'jenis' => $request->jenis
            ]
        );
        return response()->json(
            [
              'success' => 'Persyaratan Baru Berhasil Ditambahkan!',
              'message' => 'Persyaratan Baru Berhasil Ditambahkan!'
            ]
        );
    }

    public function delete(Request $request){
        $id = $request->id;
        Registrasi::find($id)->delete();
        return response()->json(
            [
              'success' => 'Syarat Berhasil Dihapus!',
              'message' => 'Syarat Berhasil Dihapus!'
            ]
        );
    }

    public function sukses(Request $request, $program_id, $diklat_id,$peserta_id){
        
        $diklat = Pelatihan::where('id', $diklat_id)->first();
        $peserta = Peserta::where('id',$peserta_id)->first();
        return view('tilawatipusat.registrasi.sukses',compact('diklat','peserta'));
    }

    public function terdaftar(Request $request, $program_id, $diklat_id,$peserta_id){
        $diklat = Pelatihan::where('id', $diklat_id)->first();
        $peserta = Peserta::where('id',$peserta_id)->first();
        return view('tilawatipusat.registrasi.terdaftar',compact('diklat','peserta'));
    }

    public function konfirmasi(Request $request, $program_id, $diklat_id)
    {
        $diklat = Pelatihan::where('id', $diklat_id)->first();
        
        return view('tilawatipusat.bendahara.konfirmasi',compact('diklat'));
    }

    public function data_calon_peserta(Request $request, $diklat_id)
    {
        if(request()->ajax())
        {
            $data   = Peserta::where('pelatihan_id', $diklat_id)->with('kabupaten','filepeserta')->where('status',0);
                return DataTables::of($data)
                        ->addColumn('kabupaten', function ($data) {
                            return $data->kabupaten->nama;
                        })
                        ->addColumn('tgllahir', function ($data) {
                            $a = Carbon::parse($data->tgllahir)->isoFormat('D MMMM Y');
                            return $a;
                        })
                        ->addColumn('check',function($data){
                            foreach ($data->filepeserta as $key => $value) {
                                # code...
                                $btn[] = '<span class="btn btn-sm btn-success" data-id="'.$value->id.'"
                                data-name="'.$value->registrasi->name.'" 
                                data-file="'.asset('/file_peserta/'.$value->file).'" data-toggle="modal" data-target="#terms-file"
                                ><i class="mdi mdi-clipboard-list-outline">.</i>'.$value->registrasi->name.'</span>';
                            }
                            
                            return implode(" ", $btn);
                        })
                        ->addColumn('konfirmasi',function($data){
                            if ($data->status == 0) {
                                # code...
                                $ok = '<span class="btn btn-sm btn-warning">menunggu</span>';
                            }
                            return $ok;
                        })
                ->rawColumns(['kabupaten','tgllahir','check','konfirmasi'])
                ->make(true);
        }
    }

    public function regis_sukses($slug_peserta)
    {
        $data = Peserta::where('slug',$slug_peserta)->first();
        return view('registrasi.sukses',compact('data'));
    }
}
