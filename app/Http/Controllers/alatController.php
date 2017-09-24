<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\alat;
use Illuminate\Support\Facades\Input;

class alatController extends Controller
{
    public function index(){
	    $data['alat'] = Alat::all();
	    return view('Alat.alat')->with($data);
    }
    public function add(){
    	 return view('Alat.add');
    }
    public function save(){
    	$a = new Alat;
    	$a ->nama_alat = Input::get('nama_alat');
    	$a ->jumlah_alat = Input::get('jumlah_alat');
    	$a ->gambar_alat = Input::get('gambar_alat');
    	$a->save();

    	return redirect(url('alat'));
    }
    public function edit($id){
      $alat = alat::find($id);
      return view('alat.edit', ['alat' => $alat]);
    }
    public function update(){

    }

}
