<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiddlewaresApi extends Controller
{
    /**
     * This is for middleware
     */
    function nologin() {
    	if(auth()->guard('admin')->check()) {
    		return response(['type' => 'admin']);
    	} else if(auth()->guard('pegawai')->check()) {
    		return response(['type' => 'pegawai']);
    	} else if(auth()->guard('guru')->check()) {
    		return response(['type' => 'guru']);
		} else if(auth()->guard('siswa')->check()) {
    		return response(['type' => 'siswa']);
    	} else {
    		return response(['type' => false]);
    	}
    }
}
