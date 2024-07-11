<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\BarangMasukRequest;
use App\Models\History;
use Illuminate\Support\Facades\Auth;

class BarangMasukController extends Controller
{
    public function index(){
        $barangMasuk = BarangMasuk::with('barang')->get();

        return view('pages.admin.barang_masuk.index',compact('barangMasuk'));
    }

    public function create(){
        $barang = Barang::all();

        return view('pages.admin.barang_masuk.create',compact('barang'));
    }

    public function store(BarangMasukRequest $request){
        try {
            DB::beginTransaction();

            // find barang dan update (mengurangi stok)
            $findBarang = Barang::where('kd_barang', $request->kd_barang)->first();

            if (!$findBarang) {
                return redirect('/barang-masuk/create')->with('error', 'Data tidak ditemukan');
            }

            // proses
            $barangMasuk = BarangMasuk::create([
                'kd_transaksi' => 'TMSK' . mt_rand(0,100) . $request->kd_barang,
                'kd_barang' => $request->kd_barang,
                'quantity' => $request->quantity,
                'user_id' => Auth::user()->user_id,
            ]);
            
            // kurangi stok
            $findBarang->update([
                'stok' => $findBarang->stok + $request->quantity,
            ]);

            // insert data ke history table
            $history = History::create([
                'kd_barang' => $request->kd_barang,
                'quantity' => $request->quantity,
                'status' => 'Barang Masuk',
                'user_id' => Auth::user()->user_id,
            ]);

            // commit semua proses
            DB::commit();

            return redirect('/barang-masuk/create')->with('success', 'Data berhasil ditambahkan');
        } catch (\Throwable $e) {
            DB::rollback();

            return redirect('/barang-masuk/create')->with('error', 'Terjadi kesalahan, silahkan coba lagi');
        }
    }

    public function show($id){
        $barangMasuk = BarangMasuk::with('barang','user')->find($id);

        return view('pages.admin.barang_masuk.show',compact('barangMasuk'));
    }
}
