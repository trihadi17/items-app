<?php

namespace App\Http\Controllers;

use App\Models\Rak;
use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use App\Models\Gudang;
use App\Models\Satuan;
use App\Models\Klasifikasi;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $barang = Barang::count();
        $satuan = Satuan::count();
        $klasifikasi = Klasifikasi::count();
        $rak = Rak::count();
        $gudang = Gudang::count();
        $barangmasuk = BarangMasuk::count();
        $barangkeluar = BarangKeluar::count();
        $user = User::count();

        return view('pages.admin.dashboard.dashboard',compact('barang','satuan','klasifikasi','rak','gudang','barangmasuk','barangkeluar','user'));
    }
}
