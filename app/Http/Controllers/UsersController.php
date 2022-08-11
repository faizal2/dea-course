<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\ARticles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; //hash Password
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login_form()
    {
        return view('login');
    }
    public function login_action(Request $request)
    {
        $users = Users::where('username', $request->username)->first();
        if ($users == null) {
            return redirect()->back()->with('error', 'Maaf Username dan Password Salah !');
        }
        $db_password = $users->password;
        $hash_password = Hash::check($request->password, $db_password);
        if ($hash_password) {
            //update token
            $users->token = Str::random(20);
            $users->save();
            Session::put('token', $users->token);
            return to_route('dashboard_index');
        } else {
            return redirect()->back()->with('error', 'Maaf Username dan Password Salah !');
        }
    }

    public function dashboard_index()
    {
        $articles = ARticles::get();
        if (Session::has('token')) {
            $Users = Users::where('token', Session::get('token'))->first();
            return view('Dashboard/index', [
                'title' => 'DASHBOARD CUY',
                'users' => $Users,
                'articles' => $articles
            ]);
        } else {
            return redirect()->back();
        }
    }

    public function dashboard_logout(Request $request)
    {
        Users::where('token', $request->token)->update([
            'token' => NULL
        ]);
        Session::pull('token');
        return to_route('login_form');
    }
    public function article_delete(Request $request)
    {
        Articles::find($request->id)->delete();
        return redirect()->back()->with('message', 'Data Berhasil Terhapus !!');
    }
    public function article_add(Request $request)
    {
        $request->validate([
            'title' => ['required', 'max:255', 'min:5'],
            'description' => ['required'],
            'tag' => ['nullable'],
        ]);
        if ($request->status == 'Edit') {
            Articles::where('id', $request->id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'tag' => $request->tag,
            ]);
            return to_route('dashboard_index')->with('message', 'Data Berhasil di Edit !!');
        }
        if ($request->status == 'Add') {
            Articles::create([
                'title' => $request->title,
                'description' => $request->description,
                'tag' => $request->tag,
            ]);
            return redirect()->back()->with('message', 'Data Berhasil Tersimpan !!');
        }
    }
    public function article_edit($id)
    {
        $article = ARticles::find($id);
        $Users = Users::where('token', Session::get('token'))->first();
        return view('Dashboard/edit', [
            'title' => 'EDIT ARTIKEL',
            'users' => $Users,
            'article' => $article
        ]);
    }
}
