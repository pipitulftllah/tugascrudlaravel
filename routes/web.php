<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $data = DB::table('tbl_dinas_luar')->get();
    return view('dashboard',['sss'=>$data]);
});

Route::get('/update/{id}', function ($id) {
    
    return view('update',['id'=>$id]);
    
});


Route::post('/update/{id}', function (Request $request,$id) {
    
    DB::table('tbl_dinas_luar')->where('kd_dl',$id)->update([
        'kota_tujuan'=>$request->kota_tujuan,
        'st_pulang'=>$request->st_pulang,
        'ket_pulang'=>$request->ket_pulang,
    ]);
    return redirect('/dashboard');
    
});


Route::get('/create', function () {
    return view('create');
});


Route::post('/create', function (Request $request) {
    DB::table('tbl_dinas_luar')->insert([
        'nip'=>$request->nip,
        'nama'=>$request->nama,
        'kota_asal'=>$request->kota_asal,
        'st_asal'=>$request->st_asal,
        'ket_asal'=>$request->ket_asal,
        'kota_tujuan'=>$request->kota_tujuan,
        'st_pulang'=>$request->st_pulang,
        'ket_pulang'=>$request->ket_pulang,
    ]);

    return redirect('/dashboard');
});

Route::get('/delete/{id}', function ($id) {
    DB::table('tbl_dinas_luar')->where('kd_dl',$id)->delete();
    return redirect('/dashboard');
});