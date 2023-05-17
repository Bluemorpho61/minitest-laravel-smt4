<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function showUsers()
    {
        $users = DB::table('users')->select('users.id', 'users.name AS nama', 'users.created_at AS tanggal',
            DB::raw('COUNT(articles.id) AS jumlah'))->leftJoin('articles', 'users.id', '=', 'articles.user_id')
            ->groupBy('users.id', 'users.name')->get();
        return view('admin.submenu.lihatuser', ['users' => $users]);
    }

    public function showArticles()
    {
        $articles = DB::table('articles')->select('articles.id', 'articles.judul_artikel AS judul', 'articles.created_at AS tanggal', 'users.name AS penulis')
            ->join('users', 'users.id', '=', 'articles.user_id')->get();
        return view('admin.submenu.lihatartikel', ['articles' => $articles]);
    }

    public function lihatisiArtikel(){
        return view('admin.submenu.isi-artikel');
    }
}
