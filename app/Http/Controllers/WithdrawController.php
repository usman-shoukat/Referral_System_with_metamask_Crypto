<?php

namespace App\Http\Controllers;
use App\Withdraw;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        Withdraw::create($request->all());
        return json_encode(array(
            "statusCode"=>200
        ));
    }
}
