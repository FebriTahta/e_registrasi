<?php

namespace App\Http\Controllers;
use App\Models\Kota;
use App\Models\City;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Cabang;
use App\Models\Program;
use App\Models\Pelatihan;
use App\Models\Provinsi;
use App\Models\Country;
use App\Models\Kepala;
use App\Models\Jenjang;
use App\Models\Lembaga;
use App\Models\Phonegara;
use DB;
use Illuminate\Http\Request;

class SubController extends Controller
{
//1-3 daerah    
    public function fetch($id){
        $city = Kabupaten::where('provinsi_id',$id)->pluck('nama','id');
        return json_encode($city);
    }

    public function fetch2($id){
        $city = Kecamatan::where('kabupaten_id',$id)->pluck('nama','id');
        return json_encode($city);
    }

    public function fetch3($id){
        $city = Kelurahan::where('kecamatan_id',$id)->pluck('nama','id');
        return json_encode($city);
    }
    public function fetch5($id){
        $cb = Cabang::find($id);
        return json_encode($cb);
    }
    public function fetch6($id){
        $cb = Provinsi::find($id);
        return json_encode($cb);
    }
    public function fetch7($id){
        $cb = Kabupaten::find($id);
        return json_encode($cb);
    }
//nama kepala
    public function fetch4($id)
    {
        $data = Kepala::find($id);
        return json_encode($data);
    }
//nama cabang
    public function fetch8($id)
    {
        $data = Cabang::find($id);
        return json_encode($data);
    }

    public function fetchpp($id){
        $pelatihan = Pelatihan::where("program_id", $id)->with('program','cabang')->get();
        return json_encode($pelatihan);
    }

    public function hapuscabang(Request $request)
    {
        $id = $request->id;
        User::where('cabang_id', $id)->delete();
        $cb = Cabang::find($id);
        $ncb= $cb->name;
        $cb->delete();
        return redirect()->back()->with('danger', 'Cabang ( '.$ncb.' ) Telah Dihapus Dari Sistem');
    }

    public function hapusjenjang(Request $request)
    {
        $id = $request->id;
        Jenjang::find($id)->delete();
        return redirect()->back()->with('danger', 'jenjang tersebut telah dihapus');
    }

// negara
    public function fetch_negara(Request $request)
    {
        $data = [];

        if($request->has('q')){
            $search = $request->q;
            $data = Phonegara::select('id','country_name','phonecode')
            		->where('country_name','LIKE','%' .$search . '%')
                    ->orWhere('phonecode', 'LIKE', '%' .$search . '%')
            		->get();
        }else{
            $data = Phonegara::select('country_name','phonecode','id')->get();
        }
        return response()->json($data);
    }
// phone negara
    public function fetch_phonenegara($id)
    {
        $data = Phonegara::find($id);
        return json_encode($data);
    }

// kabupaten
    public function fetch_kabupaten(Request $request)
    {
        $data = [];

        if($request->has('q')){
            $search = $request->q;
            $data = Kabupaten::select('id','nama')
                    ->where('id','LIKE','%' .$search . '%')
                    ->orWhere('nama', 'LIKE', '%' .$search . '%')
                    ->get();
        }else{
            $data = Kabupaten::select('id','nama')->get();
        }
        return response()->json($data);
    }

    public function fetch_lembaga(Request $request)
    {   
        $data = [];

        if($request->has('q')){
            $search = $request->q;
            $data = Lembaga::where('status','Aktif')->select('id','name')
                    ->where('id','LIKE','%' .$search . '%')
                    ->orWhere('name', 'LIKE', '%' .$search . '%')
                    ->get();
        }
        else{
            $data = Lembaga::where('status','Aktif')->orderBy('tahunmasuk','desc')->select('id','name')->get();
        }
        return response()->json($data);
    }
}