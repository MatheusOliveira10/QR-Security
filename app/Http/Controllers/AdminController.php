<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('indexadmin');
    }

    public function perfil()
    {
        return view('perfiladmin', array('user' => Auth::user()) );
    }

    public function avatar(Request $request)
    {
        if($request->hasFile('avatar'))
        {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize('300', '300')->save( public_path('uploads/avatars/' . $filename) );
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('perfiladmin', array('user' => Auth::user()) );
    }
}
