<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        return view('profile');
    }

    public function update(Request $request){
        User::where('id',Auth::user()->id)->update([
            'name'=>$request->name,
            'nohp'=>$request->nohp
        ]);
        return redirect('/profile');
    }
}
