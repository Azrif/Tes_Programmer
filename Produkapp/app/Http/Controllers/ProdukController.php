<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index(){

        $data = Produk::where('status', 'bisa dijual')->get();
        return view('index',['data'=>$data]);
    }

    public function tambah(){

        return view('tambah');
    }

    public function add(Request $request){
        DB::table('produks')->insert([
            'no' => $request->no,
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'kategori' => $request->kategori,
            'status' => $request->status
        ]);
        return redirect('/');
        }

    public function ubah($id){

        $produk = DB::table('produks')->where('id_produk',$id)->get();
        return view('ubah',['produk' => $produk]);
    }

    public function update(Request $request){

        DB::table('produks')->where('id_produk',$request->id_produk)->update([
            'no' => $request->no,
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'kategori' => $request->kategori,
            'status' => $request->status
        ]);
        return redirect('/');
    }

    public function hapus($id){
        DB::table('produks')->where('id_produk',$id)->delete();

        return redirect('/');

    }
}
