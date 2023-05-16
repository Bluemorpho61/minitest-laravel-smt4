<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class HomeController extends Controller
{
    public function index()
    {
         if (Auth::id()){
            $tipe_user=Auth::user()->tipe_user;
            if ($tipe_user==0){
                return view('dashboard');
            } elseif ($tipe_user==1){
                return view('admin.dashboard');
            }else{
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
}
