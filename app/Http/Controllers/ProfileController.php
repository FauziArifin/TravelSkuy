<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }

    public function update(Request $request)
    {
        if ((Hash::check($request->password, Auth::user()->password)) && (Hash::check($request->password2, Auth::user()->password))) {
            User::where('id', Auth::user()->id)->update([
                'name' => $request->name,
                'nohp' => $request->nohp
            ]);
            return redirect('/profile')->with('status', 'Profil berhasil diupdate');
        } else {
            return redirect('/profile')->with('status', 'Profil gagal diupdate');
        };
    }

    //Guide Tour
    public function indexGuider()
    {
        return view('/Guider/profileGuider');
    }

    public function updateGuider(Request $request)
    {
        // $user = User::find($id);
        // $hasher = app('hash');
        if ((Hash::check($request->password, Auth::user()->password)) && (Hash::check($request->password2, Auth::user()->password))) {
            User::where('id', Auth::user()->id)->update([
                'name' => $request->name,
                'nohp' => $request->nohp
            ]);
            return redirect('/profileGuider')->with('status', 'Profil berhasil diupdate');
        } else {
            return redirect('/profileGuider')->with('status', 'Profil gagal diupdate');
        };
    }
}
