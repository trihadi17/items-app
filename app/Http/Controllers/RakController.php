<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rak;
use App\Http\Requests\RakRequest;
use Illuminate\Support\Facades\DB;

class RakController extends Controller
{
  public function index(){
        // Get Data
        $rak = Rak::all();

        return view('pages.admin.rak.index', compact('rak'));
    }

    public function create(){
        return view('pages.admin.rak.create');
    }

    public function store(RakRequest $request){
        try {
            // memulai proses
            DB::beginTransaction();

            // proses
            $credentials = [
                'rak' => $request->rak,
                'deskripsi' => $request->deskripsi
            ];

            Rak::create($credentials);

            // commit semua proses, ketika operasi telah selesai
            DB::commit();

            return redirect('/rak');
        } catch (\Throwable $e) {
            // batalkan semua proses
            DB::rollBack();

            return back();
        }
    }

    public function edit($id){
        $rak = Rak::find($id);

        return view('pages.admin.rak.edit',compact('rak'));
    }

    public function update(RakRequest $request, $id){
        try {
            DB::beginTransaction();

            // get data
            $rak = Rak::find($id);

            // request
            $credentials = [
                'rak' => $request->rak,
                'deskripsi' => $request->deskripsi
            ];

            // update
            $rak->update($credentials);

            DB::commit();

            return redirect('rak');
        } catch (\Throwable $e) {
            DB::rollBack();

            return back();
        }
    }

    public function show($id){
        $rak = Rak::find($id);

        return view('pages.admin.rak.show',compact('rak'));
    }

    public function destroy($id){
        try {
            DB::beginTransaction();

            $rak = Rak::find($id);

            if (!$rak) {
                return redirect('/rak')->with('error', 'Data tidak ditemukan');
            }

            $rak->delete();

            DB::commit();

            return redirect('/rak')->with('success','Data rak berhasil dihapus');
        } catch (\Throwable $e) {
            DB::rollBack();
            return redirect('/rak')->with('error', 'Terjadi kesalahan, silahkan coba lagi');
        }
    }
}
