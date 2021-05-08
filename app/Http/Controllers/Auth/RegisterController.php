<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Referral;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'address' => ['required', 'string', 'max:255'],
           
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
    
     return User::create([
            'address' => $data['address'],
        ]);
    }

    public function signup(Request $request){
        $check = User::where('address',$request['address'])->first();
    if ($check) {
        
         return redirect()->back()->withErrors([
                'first_name' => 'This Wallet Address Already Store In Our Record.',
            ]);
        
    }


        $new = new User;
        $new->address = $request['address'];
        $new->save();

        return redirect()->back()->withErrors([
                 'first_name' => 'This Wallet Address Store In Our Record & Thanks.',
             ]);
    }

    public function getformsignupref($ref)
    {
        return view('referralregister')->with('ref',$ref);
    }


        public function signupref(Request $request ,$ref){

        if ($ref) {

    $checkref = User::where('address',$ref)->first();
    if ($checkref) {
         $check = User::where('address',$request['address'])->first();
    if ($check) {
         return redirect()->back()->withErrors([
                'first_name' => 'This Wallet Address Already Store In Our Record.',
            ]);
    }
     $new = new User;
        $new->address = $request['address'];
        $new->save();

        $pick_id_of_ref = $checkref->id;
        $pick_id_of_makeaccount = $new->id;
        $new_referral_record = new Referral;
        $new_referral_record->pick_id_of_makeaccount = $pick_id_of_makeaccount;
        $new_referral_record->pick_id_of_ref = $pick_id_of_ref;
        $new_referral_record->save();
        $update_bal_of_ref_user = User::where('id',$pick_id_of_ref)->update(['balance' => 500]);
         return redirect()->back()->withErrors([
                 'first_name' => 'This Wallet Address Store In Our Record & Thanks.',
             ]);
    }else{
        return redirect()->back()->withErrors([
                'first_name' => 'Your Referral Wallet Address Not Found In Our Record.',
            ]);
    }


        }
    $check = User::where('address',$request['address'])->first();
    if ($check) {
         return redirect()->back()->withErrors([
                'first_name' => 'This Wallet Address Already Store In Our Record.',
            ]);
        
    }
        $new = new User;
        $new->address = $request['address'];
        $new->save();

        return redirect()->back()->withErrors([
                 'first_name' => 'This Wallet Address Store In Our Record & Thanks.',
             ]);
    }
}


