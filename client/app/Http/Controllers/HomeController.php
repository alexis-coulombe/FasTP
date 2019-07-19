<?php

namespace App\Http\Controllers;

use App\Ftp;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Index
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function index(){
        $cookie = json_decode(Cookie::get('ftp'));
        $path = session('path');

        if(!$cookie){
            return redirect('/connect');
        }

        $conn = Ftp::instance(['host' => $cookie->host, 'port' => $cookie->port]);

        if(!$conn){
            return redirect('/connect');
        }

        if (ftp_login($conn, $cookie->username, $cookie->password)) {
            ftp_pasv($conn, true);
            if($path){
                ftp_chdir($conn, $path);
                $file_list = ftp_nlist($conn, $path);
            } else {
                $file_list = ftp_nlist($conn, '/');
            }
            return view('index')->with('file_list', $file_list)
                                      ->with('conn', $conn);
        } else {
            return redirect('/connect')->withErrors('Credentials are invalid');
        }
    }
}
