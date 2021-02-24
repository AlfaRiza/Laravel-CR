<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return view('index', ['user' => $user]);
    }

    public function create(){
        return view('create');
    }

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
