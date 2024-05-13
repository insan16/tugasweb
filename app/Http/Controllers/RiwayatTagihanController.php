<?php

namespace App\Http\Controllers;
use App\Models\RiwayatTagihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RiwayatTagihanController extends Controller
{
    public function index()
    {
        $riwayat_tagihan = RiwayatTagihan::get();
        return view('backend.riwayat_tagihan.index',compact('riwayat_tagihan'));
    }
    public function create()
    {
        $riwayat_tagihan = null;
        return view('backend.riwayat_tagihan.create',compact('riwayat_tagihan'));
    }
    public function store(Request $request)
    {
        RiwayatTagihan::create($request->all());
        return redirect()->route('riwayat_tagihan.index')
                        ->with('success','Data riwayat tagihan baru telah berhasil disimpan.');
    }
    public function edit(RiwayatTagihan $riwayat_tagihan)
    {
        return view('backend.riwayat_tagihan.create', compact('riwayat_tagihan'));
    }
    public function update(Request $request, RiwayatTagihan $riwayat_tagihan)
    {
        $riwayat_tagihan->update($request->all());
        return redirect()->route('riwayat_tagihan.index')
                        ->with('success','riwayat tagihan berhasil diperbarui.');
    }
    public function destroy(RiwayatTagihan $riwayat_tagihan)
    {
        $riwayat_tagihan->delete();
        return redirect()->route('riwayat_tagihan.index')
            ->with('success','Data riwayat tagihan berhasil dihapus');
    }
}
