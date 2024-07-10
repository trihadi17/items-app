<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Barang;
use App\Models\Satuan;
use App\Models\Klasifikasi;
use App\Http\Requests\BarangRequest;
use App\Models\Gudang;
use App\Models\Rak;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index(){

        $barang = Barang::with('satuan','klasifikasi', 'rak', 'gudang')->get();

        return view('pages.admin.barang.index',compact('barang'));
    }

    public function create(){
        $satuan = Satuan::all();
        $klasifikasi = Klasifikasi::all();
        $rak = Rak::all();
        $gudang = Gudang::all();

        return view('pages.admin.barang.create',compact('satuan','klasifikasi','rak','gudang'));
    }

    public function store(BarangRequest $request){
        try {
            DB::beginTransaction();

            //proses
            $credentials = [
                'kd_barang' => $request->kd_barang,
                'barang' => $request->barang,
                'deskripsi' => $request->deskripsi,
                'kd_satuan' => $request->kd_satuan,
                'kd_klasifikasi' => $request->kd_klasifikasi,
                'kd_rak' => $request->kd_rak,
                'kd_gudang' => $request->kd_gudang,
                'stok' => $request->stok,
                'user_id' => Auth::user()->user_id,
            ];
            
            Barang::create($credentials);

            // commit semua proses, ketika operasi telah selesai
            DB::commit();

            return redirect('/barang/create')->with('success', 'Data berhasil ditambahkan');;
        } catch (\Throwable $e) {
            // batalkan semua proses
            DB::rollBack();

            return redirect('/barang/create')->with('error', 'Terjadi kesalahan, silahkan coba lagi');
        }
    }

    public function show($id){
        $barang = Barang::with('satuan','klasifikasi','rak','gudang','user')->find($id);
        

        return view('pages.admin.barang.show',compact('barang'));
    }

    public function edit($id){
        $barang = Barang::find($id);
        
        $satuan = Satuan::all();
        $klasifikasi = Klasifikasi::all();
        $rak = Rak::all();
        $gudang = Gudang::all();

        return view('pages.admin.barang.edit',compact('barang','satuan','klasifikasi','rak','gudang'));
    }

    public function update(BarangRequest $request, $id){
        try {
            DB::beginTransaction();

            // get data
            $barang = Barang::find($id);

            // proses request
            $credentials = [
                'kd_barang' => $request->kd_barang,
                'barang' => $request->barang,
                'deskripsi' => $request->deskripsi,
                'kd_satuan' => $request->kd_satuan,
                'kd_klasifikasi' => $request->kd_klasifikasi,
                'kd_rak' => $request->kd_rak,
                'kd_gudang' => $request->kd_gudang,
                'stok' => $request->stok,
                'user_id' => Auth::user()->user_id,
            ];

            // update
            $barang->update($credentials);

            DB::commit();

            return redirect('/barang')->with('success','Data berhasil diubah');
        } catch (\Throwable $e) {
            DB::rollBack();

            return back()->with('error', 'Terjadi kesalahan, silahkan coba lagi');
        }
    }

    public function destroy($id){
        try {
            DB::beginTransaction();

            $barang = Barang::find($id);

            if (!$barang) {
                return redirect('/barang')->with('error', 'Data tidak ditemukan');
            }

            $barang->delete();

            DB::commit();

            return redirect('/barang')->with('success','Data barang berhasil dihapus');
        } catch (\Throwable $e) {
            DB::rollBack();
            return redirect('/barang')->with('error', 'Terjadi kesalahan, silahkan coba lagi');
        }
    }
}
