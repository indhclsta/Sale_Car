<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class JenisMobil extends Controller
{
    function JenisMobil(){
        $mobil = Mobil::get();
        
        return view('Jenis_Mobil', compact('mobil'));
    }
    function JenisMobilC(){
        $mobilC = Mobil::get();
        
        return view('Jenis_MobilC', compact('mobilC'));
    }
    function create(){
        return view('Create_Mobil');
    }
    function menu(){
        return view('Menu');
    }
    function menuC(){
        return view('menuC');
    }
    public function delete($id) {
        // Mencari mobil berdasarkan nama
        $mobil = Mobil::where('id', $id)->first();
    
        // Memeriksa apakah mobil ditemukan
        if ($mobil) {
            // Menghapus mobil dari database
            $mobil->delete();
        } else {
            // Jika mobil tidak ditemukan, bisa menambahkan logika lain jika diperlukan
            // Misalnya, mengembalikan pesan error atau redireksi
        }
    
        // Mengarahkan kembali ke rute JenisMobil
        return redirect()->route('JenisMobil');
    }
    
    public function submit2(Request $request) {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('image'), $imageName);

        $mobil = new Mobil();
        $mobil->img = $imageName;  // Menyimpan nama gambar ke dalam database
        $mobil->nama = $request->nama;
        $mobil->deskripsi = $request->deskripsi;
        
        $mobil->save();
        return redirect()->route('JenisMobil');
    }
}
