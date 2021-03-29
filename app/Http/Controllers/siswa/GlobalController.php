<?php

namespace App\Http\Controllers\siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth, DB;

class GlobalController extends Controller
{
	function dataDiri() {
        if(auth()->guard('siswa')->check()) {
            return response()->json([
                'user' => Auth::guard('siswa')->user(),
                'biodata' => Auth::guard('siswa')->user()->biodata_siswa()->first(),
            	'foto' => Auth::guard('siswa')->user()->foto_profil()->first(),
        	]);
        } else {
            return response(['data' => false], 401);
        }
	}
}
