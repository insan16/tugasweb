<?php
 
namespace App\Http\Controllers;
 
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class PegawaiController extends Controller
{
	public function index()
	{
    	$pegawai = Pegawai::paginate();
        return view('backend.pegawai',[
            "pegawai"=>$pegawai
        ]);
	}
    
    public function cari(Request $request)
{
	// menangkap data pencarian
	$cari = $request->cari;
 
 	// mengambil data dari table pegawai sesuai pencarian data
	$pegawai = DB::table('pegawai')
	->where('pegawai_nama','like',"%".$cari."%")
	->paginate();
 
    	// mengirim data pegawai ke view index
	return view('index',['pegawai' => $pegawai]);
 
}
}