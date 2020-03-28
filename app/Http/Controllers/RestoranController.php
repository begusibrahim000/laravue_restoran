<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestoranController extends Controller
{
    // memanggil halaman utama / login
    public function index() {
    	return view('index');
    }

    // memanggil halaman restoran yang berhasil login
    public function restoran() {
    	return view('restoran');
    }


    // logic login di simpan di middleware
    public function login(Request $r) {
    	$akunCustomer = [
    		'email' => $r->email,
    		'password' => $r->password,
    	];
    	session(['akunCustomer' => $akunCustomer]);
    	return redirect('/restoran');
    }

    // logic logout
    public function logout() {
    	session()->flush();
    	return redirect('/');
    }

    // ========== RESTORAN ===================
    public function tambahOpsi() {
        return view('tambahOpsi');
    }

    public function tambahKeProduk() {
        return view('tambahKeProduk');
    }
}
