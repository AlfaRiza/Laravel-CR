<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function hitung($angka1, $angka2, $status){
        if ($status == 'perkalian') {
            $hasil = $angka1 * $angka2;
            $status = $this->predikat($hasil);
        }elseif($status == 'penjumlahan'){
            $hasil = $angka1 + $angka2;
        }elseif($status == 'pengurangan'){
            $hasil = $angka1 - $angka2;
        }else{
            $hasil = $angka1 / $angka2;
        }

        return 'hasil' . $hasil . 'status :' . $status;
    }

    public function predikat($hasil){
        if ($hasil > 10) {
            return $predikat = 'Good';
        }else{
            return $predikat = 'Bad';
        }
    }


    
    // public function create(){
    //     return view('create');
    // }

public function store(Request $request){
        $validate = $request->validate([
            'nama_awal' => 'required',
            'nama_akhir' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required'
        ]);

        $user = User::create($validate);

        return redirect('/');
    }
}
