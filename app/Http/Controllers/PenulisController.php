<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PenulisController extends Controller
{
    public function tambahArtikel()
    {
        return view('penulis.new-article');
    }

    public function postArticle(Request $request)
    {
        if ($request==null){
            return back()->withErrors(['err-post'=>'Proses Upload Gagal']);
        }else{
           return Articles::create([
                'judul_artikel' => $request['judul_artikel'],
                'isi_artikel' => $request['isi_artikel'],
                'user_id' => Auth::id(),
                'tanggal' => now()->format('d-m-y')
            ]);

        }
    }

//    Untuk Menampilkan data artikel yang akan diedit
    public function editArticle($id){
        $konten =Articles::query()->find($id);
        return view('penulis.edit-article',compact('konten'));
    }

//    Untuk mengkonfirmasi pengubahan artikel
    public function updateArtikel(Request $request,$id){
        $konten =Articles::query()->find($id);
        $konten->update($request->all());
        return redirect()->route('man-art')->with('success','Artikel telah berhasil di edit');
    }
    public function manageArticle()
    {

        $articles=DB::table('articles')->select('id','judul_artikel','tanggal','updated_at')->where('user_id','=',Auth::id())->get();
        return view('penulis.manage-article',['articles'=>$articles]);

    }
}
