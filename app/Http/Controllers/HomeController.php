<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Referral;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ref_get = Referral::with('user')->where('pick_id_of_ref' ,auth()->user()->id)->get();
        return view('home')->with('ref_get' ,$ref_get);
    }
    public function returnUser(){
    $user = Auth::user()->address;
    Javascript::put([ 'user.address' => $user ]);
    return view('public.example');
}
}
