<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Satuan;
use App\Http\Requests\SatuanRequest;
use Illuminate\Support\Facades\DB;

class SatuanController extends Controller
{
    public function index(){
        // Get Data
        $satuan = Satuan::all();

        return view('pages.admin.satuan.index', compact('satuan'));
    }

    public function create(){
        return view('pages.admin.satuan.create');
    }

    public function store(SatuanRequest $request){
        try {
            // memulai proses
            DB::beginTransaction();

            // proses
            $credentials = [
                'satuan' => $request->satuan,
                'deskripsi' => $request->deskripsi
            ];

            Satuan::create($credentials);

            // commit semua proses, ketika operasi telah selesai
            DB::commit();

            return redirect('/satuan');
        } catch (\Throwable $e) {
            // batalkan semua proses
            DB::rollBack();

            return back();
        }
    }

    public function edit($id){
        $satuan = Satuan::find($id);

        return view('pages.admin.satuan.edit',compact('satuan'));
    }

    public function update(SatuanRequest $request, $id){
        try {
            DB::beginTransaction();

            // get data
            $satuan = Satuan::find($id);

            // request
            $credentials = [
                'satuan' => $request->satuan,
                'deskripsi' => $request->deskripsi
            ];

            // update
            $satuan->update($credentials);

            DB::commit();

            return redirect('satuan');
        } catch (\Throwable $e) {
            DB::rollBack();

            return back();
        }
    }

    public function show($id){
        $satuan = Satuan::find($id);

        return view('pages.admin.satuan.show',compact('satuan'));
    }

    public function destroy($id){
        try {
            DB::beginTransaction();

            $satuan = Satuan::find($id);

            if (!$satuan) {
                return redirect('/satuan')->with('error', 'Data tidak ditemukan');
            }

            $satuan->delete();

            DB::commit();

            return redirect('/satuan')->with('success','Data satuan berhasil dihapus');
        } catch (\Throwable $e) {
            DB::rollBack();
            return redirect('/satuan')->with('error', 'Terjadi kesalahan, silahkan coba lagi');
        }
    }
}
