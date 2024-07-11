<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index(){
        $history = History::with('barang','user')->get();

        return view('pages.admin.history.index',compact('history'));
    }
}
