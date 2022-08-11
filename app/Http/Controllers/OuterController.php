<?php

namespace App\Http\Controllers;

use App\Models\ARticles;
use App\Models\Users;
use Illuminate\Http\Request;

class OuterController extends Controller
{
    public function index()
    {
        $articles = ARticles::get();
        return view('home', [
            'title' => 'Artikel',
            'articles' => $articles
        ]);
    }
    public function article_detail($id)
    {

        $article = ARticles::find($id);
        return view('article', [
            'title' => 'JUDUL' . $id,
            'article' => $article
        ]);
    }
    public function register_form()
    {

        return view('register', [
            'title' => 'DAFTAR AKUN'
        ]);
    }
    public function register_action(Request $request)
    {
        $request->validate([
            'username' => ['required', 'max:255'],
            'password' => ['required', 'min:8'],
        ]);
        $users = Users::where('username', $request->username)->first();
        if ($users) {
            return redirect()->back()->with('error', 'Maaf Username Sudah Digunakan !');
        }
        if ($request->password === $request->password_ulangi) {
            Users::create([
                'username' => $request->username,
                'password' => bcrypt($request->password),
            ]);
            return to_route('home');
        } else {
            return redirect()->back()->with('error', 'Maaf Konfirmasi Password tidak sama !');
        }
    }
}
