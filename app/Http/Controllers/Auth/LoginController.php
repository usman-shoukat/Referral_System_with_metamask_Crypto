<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

        public function signin(Request $request)
        {
          $first_name = $request->address;

          $user = User::where('address', $first_name)->first();

          if (!$user) {
            return redirect()->back()->withInput($request->only('first_name'))->withErrors([
                'first_name' => 'We could not find you in our database, if you think this is a mistake kindly contact the site administrators',
            ]);
          }

          Auth::login($user);
          return redirect('/home');

        }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function resetaddress()
    {
        return view('auth.passwords.email');
    }

    public function resetaddresssave(Request $request)
    {
        $id = $request['id'];
        $address = $request['address'];
        $pass_check = User::where('id' , $id)->first();
        $address_check = User::where('address' , $address)->first();
        if (!$pass_check) {
             return redirect()->back()->withInput($request->only('id'))->withErrors([
                'id' => 'We could not find you in our database.',
            ]);
        }
        if ($address_check) {
                 return redirect()->back()->withInput($request->only('id'))->withErrors([
                'first_name' => 'Please Change We find your address in our database.',
            ]);
            }
        else{
            $update_pass = User::where('id',$id)->update(['address' => $address]);
             return redirect()->route('confirm');
        }
    }

    public function confirm()
    {
        return view('auth.verify');
    }
}
