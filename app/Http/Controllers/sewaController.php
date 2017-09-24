<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sewa;
use Illuminate\Support\Facades\Input;

class sewaController extends Controller
{
    public function index(){
	    $data['sewa'] = Sewa::all();
	    return view('Sewa.sewa')->with($data);
    }
    public function add(){
    	 return view('Sewa.add');
    }
    public function save(){
    	$a = new Sewa;
    	$a ->nama_sewa = Input::get('nama_sewa');
    	$a ->tanggal_sewa = Input::get('tanggal_sewa');
    	$a ->batas_sewa = Input::get('batas_sewa');
    	$a ->alamat_sewa = Input::get('alamat_sewa');
    	$a ->no_sewa = Input::get('no_sewa');
    	$a->save();

    	return redirect(url('sewa'));
    }
    public function edit($id){
      $sewa = sewa::find($id);
      return view('sewa.edit', ['sewa' => $sewa]);
    }
    public function update(){

    }

  public function destroy($id){
    $sewa = sewa::find($id);
    $sewa->delete();

    return redirect('sewa');
  }

}
