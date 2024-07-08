<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Satuan;
use Illuminate\Http\Request;
use App\Http\Requests\BarangRequest;

class BarangController extends Controller
{
    public function index(){

        $barang = Barang::with('satuan','klasifikasi', 'rak', 'gudang')->get();

        return view('pages.admin.barang.index',compact('barang'));
    }

    public function create(){
        $satuan = Satuan::all();

        return view('pages.admin.barang.create',compact('satuan'));
    }

    public function store(BarangRequest $request){

    }

    public function edit($id){
        $barang = Barang::find($id);
        $satuan = Satuan::all();

        return view('pages.admin.barang.edit',compact('barang','satuan'));
    }
}
