<?php

namespace App\Http\Controllers;
use App\Withdraw;
use App\User;
use Illuminate\Http\Request;
use Validator;
use DataTables;
class WithdrawController extends Controller
{
    public function store(Request $request)
    {
      $user = User::where('id',auth()->user()->id)->first();
      
        if($request->name > $user->balance){
        
        return response()->json(['erors' => 'Your Amount Greater Then Your Balance.']);

        }
        $rules = array(
            'name'    =>  'required',
        );
        $balance =  $user->balance -$request->name; 
              $userbalcut = User::where('id',auth()->user()->id)->update(['balance' => $balance]);


        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'name'        =>  $request->name,
            'userid'         =>  $request->userid,
            'action1'         =>  $request->action1
        );

        Withdraw::create($form_data);

        return response()->json(['success' => 'successfully.']);

        
    }
    
   public function index(Request $request)
    {
        if($request->ajax())
        {
            $data = Withdraw::with('user')->where('userid' , auth()->user()->id)->get();
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                    })
                    ->make(true);
        }
        return view('home');
    }
}
