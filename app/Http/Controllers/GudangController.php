<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gudang;
use App\Http\Requests\GudangRequest;
use Illuminate\Support\Facades\DB;

class GudangController extends Controller
{
   public function index(){
        // Get Data
        $gudang = Gudang::all();

        return view('pages.admin.gudang.index', compact('gudang'));
    }

    public function create(){
        return view('pages.admin.gudang.create');
    }

    public function store(GudangRequest $request){
        try {
            // memulai proses
            DB::beginTransaction();

            // proses
            $credentials = [
                'gudang' => $request->gudang,
                'deskripsi' => $request->deskripsi
            ];

            Gudang::create($credentials);

            // commit semua proses, ketika operasi telah selesai
            DB::commit();

            return redirect('/gudang');
        } catch (\Throwable $e) {
            // batalkan semua proses
            DB::rollBack();

            return back();
        }
    }

    public function edit($id){
        $gudang = Gudang::find($id);

        return view('pages.admin.gudang.edit',compact('gudang'));
    }

    public function update(GudangRequest $request, $id){
        try {
            DB::beginTransaction();

            // get data
            $gudang = Gudang::find($id);

            // request
            $credentials = [
                'gudang' => $request->gudang,
                'deskripsi' => $request->deskripsi
            ];

            // update
            $gudang->update($credentials);

            DB::commit();

            return redirect('/gudang');
        } catch (\Throwable $e) {
            DB::rollBack();

            return back();
        }
    }

    public function show($id){
        $gudang = Gudang::find($id);

        return view('pages.admin.gudang.show',compact('gudang'));
    }

    public function destroy($id){
        try {
            DB::beginTransaction();

            $gudang = Gudang::find($id);

            if (!$gudang) {
                return redirect('/gudang')->with('error', 'Data tidak ditemukan');
            }

            $gudang->delete();

            DB::commit();

            return redirect('/gudang')->with('success','Data gudang berhasil dihapus');
        } catch (\Throwable $e) {
            DB::rollBack();
            return redirect('/gudang')->with('error', 'Terjadi kesalahan, silahkan coba lagi');
        }
    }
}
