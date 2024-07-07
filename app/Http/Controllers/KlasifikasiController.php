<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klasifikasi;
use App\Http\Requests\KlasifikasiRequest;
use Illuminate\Support\Facades\DB;

class KlasifikasiController extends Controller
{
   public function index(){
        // Get Data
        $klasifikasi = Klasifikasi::all();

        return view('pages.admin.klasifikasi.index', compact('klasifikasi'));
    }

    public function create(){
        return view('pages.admin.klasifikasi.create');
    }

    public function store(KlasifikasiRequest $request){
        try {
            // memulai proses
            DB::beginTransaction();

            // proses
            $credentials = [
                'klasifikasi' => $request->klasifikasi,
                'deskripsi' => $request->deskripsi
            ];

            Klasifikasi::create($credentials);

            // commit semua proses, ketika operasi telah selesai
            DB::commit();

            return redirect('/klasifikasi');
        } catch (\Throwable $e) {
            // batalkan semua proses
            DB::rollBack();

            return back();
        }
    }

    public function edit($id){
        $klasifikasi = Klasifikasi::find($id);

        return view('pages.admin.klasifikasi.edit',compact('klasifikasi'));
    }

    public function update(KlasifikasiRequest $request, $id){
        try {
            DB::beginTransaction();

            // get data
            $klasifikasi = Klasifikasi::find($id);

            // request
            $credentials = [
                'klasifikasi' => $request->klasifikasi,
                'deskripsi' => $request->deskripsi
            ];

            // update
            $klasifikasi->update($credentials);

            DB::commit();

            return redirect('klasifikasi');
        } catch (\Throwable $e) {
            DB::rollBack();

            return back();
        }
    }

    public function show($id){
        $klasifikasi = Klasifikasi::find($id);

        return view('pages.admin.klasifikasi.show',compact('klasifikasi'));
    }

    public function destroy($id){
        try {
            DB::beginTransaction();

            $klasifikasi = Klasifikasi::find($id);

            if (!$klasifikasi) {
                return redirect('/klasifikasi')->with('error', 'Data tidak ditemukan');
            }

            $klasifikasi->delete();

            DB::commit();

            return redirect('/klasifikasi')->with('success','Data klasifikasi berhasil dihapus');
        } catch (\Throwable $e) {
            DB::rollBack();
            return redirect('/klasifikasi')->with('error', 'Terjadi kesalahan, silahkan coba lagi');
        }
    }
}
