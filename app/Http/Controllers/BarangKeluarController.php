<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\History;
use App\Models\BarangKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\BarangKeluarRequest;

class BarangKeluarController extends Controller
{
   public function index(){
        $barangKeluar = BarangKeluar::with('barang')->get();

        return view('pages.admin.barang_keluar.index',compact('barangKeluar'));
    }

    public function create(){
        $barang = Barang::all();

        return view('pages.admin.barang_keluar.create',compact('barang'));
    }

    public function store(BarangKeluarRequest $request){
        try {
            DB::beginTransaction();

            // find barang dan update (mengurangi stok)
            $findBarang = Barang::where('kd_barang', $request->kd_barang)->first();


            if (!$findBarang) {
                return redirect('/barang-keluar/create')->with('error', 'Data tidak ditemukan');
            }

            // proses
            $barangKeluar = BarangKeluar::create([
                'kd_transaksi' => 'TKLR' . mt_rand(0,100) . $request->kd_barang,
                'kd_barang' => $request->kd_barang,
                'quantity' => $request->quantity,
                'user_id' => Auth::user()->user_id,
            ]);
            
            // kurangi stok
            $findBarang->update([
                'stok' => $findBarang->stok - $request->quantity,
            ]);

            // insert data ke history table
            $history = History::create([
                'kd_barang' => $request->kd_barang,
                'quantity' => $request->quantity,
                'status' => 'Barang Keluar',
                'user_id' => Auth::user()->user_id,
            ]);

            // commit semua proses
            DB::commit();

            return redirect('/barang-keluar/create')->with('success', 'Data berhasil ditambahkan');
        } catch (\Throwable $e) {
            DB::rollback();

            return redirect('/barang-keluar/create')->with('error', 'Terjadi kesalahan, silahkan coba lagi');
        }
    }

    public function show($id){
        $barangKeluar = BarangKeluar::with('barang','user')->find($id);

        return view('pages.admin.barang_keluar.show',compact('barangKeluar'));
    }
}
