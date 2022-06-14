<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class DashController extends Controller
{
    
    public function index() {
        $this->middleware('auth');
        $barangs = Barang::paginate(20);
        return view('dashboard', compact('barangs'));
    }
}
