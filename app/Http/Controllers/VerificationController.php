<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;
use App\Models\VerifyUser;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

use \App\Mail\ForgotPassword;
use \App\Models\User;
use \App\Models\Admin;
use \App\Models\Pegawai;
use \App\Models\Guru;

class VerificationController extends Controller
{
    function sendVerify(Request $request) {
    	if( auth()->guard('siswa')->check() ) {
			$result = VerifyUser::create([
				'email' => auth()->guard('siswa')->user()->email,
				'token' => Str::random(32),
				'kode_verifikasi' => random_int(100000, 999999),
    		]);

    		if(!$result) {
	    		return response()->json([
	    			'success' => false,
	    			'error' => true,
	    			'title' => 'Ups, maaf!',
	    			'html' => "Ada sedikit permasalahan di sistem. Mohon coba lagi beberapa saat!",
	    		]);
    		} else {
    			$data = array( 
    				'email' => auth()->guard('siswa')->user()->email,
    				'from' => config('mail.from.address'), 
    				'from_name' => config('mail.from.name'), 
    				'token' => $result->token,
	    			'kode_verifikasi' => $result->kode_verifikasi,
    				'url' => URL::to("/verify/enter-code?token={$result->token}"),
    				'ip' => $request->ip()
    			);
	    		$send = Mail::send( 'mail.forgot-password', $data, function( $message ) use ($data)
				{
				    $message->to( $data['email'] );
				    $message->from( $data['from'], $data['from_name'] );
				    $message->subject( 'Reset Kata Sandi' );
				});
		
	    		if(count(Mail::failures()) > 0) {
		    		return response()->json([
		    			'success' => false,
		    			'error' => true,
		    			'title' => 'Ups, maaf!',
		    			'html' => "Ada sedikit permasalahan di sistem. Mohon cek beberapa kesalahan dibawah!",
		    			'errors' => Mail::failures(),
		    		]);
	    		} else {
		    		return response()->json([
		    			'success' => true,
		    			'error' => false,
		    			'title' => 'Berhasil!',
		    			'html' => "Silahkan cek email <strong>" . auth()->guard('siswa')->user()->email . "</strong> dan klik verifikasikan sekarang!",
		    		]);
	    		}
    		}
    	} elseif( auth()->guard('admin')->check() ) {
			$result = VerifyUser::create([
				'email' => auth()->guard('admin')->user()->email,
				'token' => Str::random(32),
				'kode_verifikasi' => random_int(100000, 999999),
    		]);

    		if(!$result) {
	    		return response()->json([
	    			'success' => false,
	    			'error' => true,
	    			'title' => 'Ups, maaf!',
	    			'html' => "Ada sedikit permasalahan di sistem. Mohon coba lagi beberapa saat!",
	    		]);
    		} else {
    			$data = array( 
    				'email' => auth()->guard('admin')->user()->email,
    				'from' => config('mail.from.address'), 
    				'from_name' => config('mail.from.name'), 
    				'token' => $result->token,
	    			'kode_verifikasi' => $result->kode_verifikasi,
    				'url' => URL::to("/verify/enter-code?token={$result->token}"),
    				'ip' => $request->ip()
    			);
	    		$send = Mail::send( 'mail.forgot-password', $data, function( $message ) use ($data)
				{
				    $message->to( $data['email'] );
				    $message->from( $data['from'], $data['from_name'] );
				    $message->subject( 'Reset Kata Sandi' );
				});
		
	    		if(count(Mail::failures()) > 0) {
		    		return response()->json([
		    			'success' => false,
		    			'error' => true,
		    			'title' => 'Ups, maaf!',
		    			'html' => "Ada sedikit permasalahan di sistem. Mohon cek beberapa kesalahan dibawah!",
		    			'errors' => Mail::failures(),
		    		]);
	    		} else {
		    		return response()->json([
		    			'success' => true,
		    			'error' => false,
		    			'title' => 'Berhasil!',
		    			'html' => "Silahkan cek email <strong>" . auth()->guard('admin')->user()->email . "</strong> dan klik verifikasikan sekarang!",
		    		]);
	    		}
    		}
    	} elseif( auth()->guard('pegawai')->check() ) {
			$result = VerifyUser::create([
				'email' => auth()->guard('pegawai')->user()->email,
				'token' => Str::random(32),
				'kode_verifikasi' => random_int(100000, 999999),
    		]);

    		if(!$result) {
	    		return response()->json([
	    			'success' => false,
	    			'error' => true,
	    			'title' => 'Ups, maaf!',
	    			'html' => "Ada sedikit permasalahan di sistem. Mohon coba lagi beberapa saat!",
	    		]);
    		} else {
    			$data = array( 
    				'email' => auth()->guard('pegawai')->user()->email,
    				'from' => config('mail.from.address'), 
    				'from_name' => config('mail.from.name'), 
    				'token' => $result->token,
	    			'kode_verifikasi' => $result->kode_verifikasi,
    				'url' => URL::to("/verify/enter-code?token={$result->token}"),
    				'ip' => $request->ip()
    			);
	    		$send = Mail::send( 'mail.forgot-password', $data, function( $message ) use ($data)
				{
				    $message->to( $data['email'] );
				    $message->from( $data['from'], $data['from_name'] );
				    $message->subject( 'Reset Kata Sandi' );
				});
		
	    		if(count(Mail::failures()) > 0) {
		    		return response()->json([
		    			'success' => false,
		    			'error' => true,
		    			'title' => 'Ups, maaf!',
		    			'html' => "Ada sedikit permasalahan di sistem. Mohon cek beberapa kesalahan dibawah!",
		    			'errors' => Mail::failures(),
		    		]);
	    		} else {
		    		return response()->json([
		    			'success' => true,
		    			'error' => false,
		    			'title' => 'Berhasil!',
		    			'html' => "Silahkan cek email <strong>" . auth()->guard('pegawai')->user()->email . "</strong> dan klik verifikasikan sekarang!",
		    		]);
	    		}
    		}
    	} elseif( auth()->guard('guru')->check() ) {
			$result = VerifyUser::create([
				'email' => auth()->guard('guru')->user()->email,
				'token' => Str::random(32),
				'kode_verifikasi' => random_int(100000, 999999),
    		]);

    		if(!$result) {
	    		return response()->json([
	    			'success' => false,
	    			'error' => true,
	    			'title' => 'Ups, maaf!',
	    			'html' => "Ada sedikit permasalahan di sistem. Mohon coba lagi beberapa saat!",
	    		]);
    		} else {
    			$data = array( 
    				'email' => auth()->guard('guru')->user()->email,
    				'from' => config('mail.from.address'), 
    				'from_name' => config('mail.from.name'), 
    				'token' => $result->token,
	    			'kode_verifikasi' => $result->kode_verifikasi,
    				'url' => URL::to("/verify/enter-code?token={$result->token}"),
    				'ip' => $request->ip()
    			);
	    		$send = Mail::send( 'mail.forgot-password', $data, function( $message ) use ($data)
				{
				    $message->to( $data['email'] );
				    $message->from( $data['from'], $data['from_name'] );
				    $message->subject( 'Reset Kata Sandi' );
				});
		
	    		if(count(Mail::failures()) > 0) {
		    		return response()->json([
		    			'success' => false,
		    			'error' => true,
		    			'title' => 'Ups, maaf!',
		    			'html' => "Ada sedikit permasalahan di sistem. Mohon cek beberapa kesalahan dibawah!",
		    			'errors' => Mail::failures(),
		    		]);
	    		} else {
		    		return response()->json([
		    			'success' => true,
		    			'error' => false,
		    			'title' => 'Berhasil!',
		    			'html' => "Silahkan cek email <strong>" . auth()->guard('guru')->user()->email . "</strong> dan klik verifikasikan sekarang!",
		    		]);
	    		}
    		}
    	} elseif($request->only('email')) {
    		$email  			= $request->only('email');
    		$search['user']  	= User::where('email', $email['email']);
    		$search['admin'] 	= Admin::where('email', $email['email']);
    		$search['pegawai'] 	= Pegawai::where('email', $email['email']);
    		$search['guru'] 	= Guru::where('email', $email['email']);

    		if(
    			$search['user']->count() > 0 OR
    			$search['admin']->count() > 0 OR
    			$search['pegawai']->count() > 0 OR
    			$search['guru']->count() > 0
    		) {
				$result = VerifyUser::create([
					'email' => $email['email'],
					'token' => Str::random(32),
					'kode_verifikasi' => random_int(100000, 999999),
	    		]);

	    		if(!$result) {
		    		return response()->json([
		    			'success' => false,
		    			'error' => true,
		    			'title' => 'Ups, maaf!',
		    			'html' => "Ada sedikit permasalahan di sistem. Mohon coba lagi beberapa saat!",
		    		]);
	    		} else {
	    			$data = array( 
	    				'email' => $email['email'],
	    				'kode_verifikasi' => $result->kode_verifikasi,
						'from' => config('mail.from.address'), 
						'from_name' => config('mail.from.name'), 
	    				'token' => $result->token,
	    				'url' => URL::to("/verify/enter-code?token={$result->token}"),
	    				'ip' => $request->ip()
	    			);
		    		$send = Mail::send( 'mail.forgot-password', $data, function( $message ) use ($data)
					{
					    $message->to( $data['email'] );
					    $message->from( $data['from'], $data['from_name'] );
					    $message->subject( 'Reset Kata Sandi' );
					});
    		
		    		if(count(Mail::failures()) > 0) {
			    		return response()->json([
			    			'success' => false,
			    			'error' => true,
			    			'title' => 'Ups, maaf!',
			    			'html' => "Ada sedikit permasalahan di sistem. Mohon cek beberapa kesalahan dibawah!",
			    			'errors' => Mail::failures(),
			    		]);
		    		} else {
			    		return response()->json([
			    			'success' => true,
			    			'error' => false,
			    			'title' => 'Berhasil!',
			    			'html' => "Silahkan cek email <strong>" . $data['email'] . "</strong> dan klik verifikasikan sekarang!",
			    		]);
		    		}
	    		}
    		} else {
	    		return response([
	    			'success' => true,
	    			'error' => false,
	    			'data' => false
	    		]);
    		}
    	} else {
    		return response([
    			'success' => true,
    			'error' => false,
    			'data' => false
    		]);
    	}

    }
}
