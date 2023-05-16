<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $tipe_user = Auth::user()->tipe_user;
            if ($tipe_user == 0) {
                return view('dashboard', ['id_user' => Auth::id()]);
            } elseif ($tipe_user == 1) {
                return view('admin.dashboard');
            } else {
                return redirect()->back();
            }
        }
    }

    public function showArticle()
    {
        return view('subcontent.isi-artikel');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function homepage()
    {
        $konten = DB::table('articles')->join('users', 'users.id', '=', 'articles.user_id')
            ->select('articles.judul_artikel AS judul', 'users.name AS pengarang','articles.isi_artikel AS isi','articles.tanggal AS tanggal')->get();
        return view('landing',['konten'=>$konten]);
    }
}
