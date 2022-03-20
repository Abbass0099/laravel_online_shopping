<?php

namespace App\Http\Controllers\SellerAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Auth;
class LoginController extends Controller
{
    public function handle(LoginRequest $request)
    {   
        $remeber = $request->has('remember') ? true: false;

        if(Auth::guard('seller')->attempt(['email'=>$request->email, 'password'=>$request->password], $remeber)){
            return response(['status'=>true, 'msg'=>'/dashboard']);
        }
        return response(['status'=>false, 'msg'=>trans('auth.failed')]);
    }
}
