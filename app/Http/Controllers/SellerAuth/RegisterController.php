<?php

namespace App\Http\Controllers\SellerAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSellerData;
use App\Seller;

class RegisterController extends Controller
{
    public function register(StoreSellerData $request){
        $validated = $request->validated();
        
        $validated['password'] = bcrypt($validated['password']);

        $seller = Seller::create($validated);
        // Move file 
        if($request->has('reg_cert') && $request->has('com_cert') ){
            // File path 
            $cert_path = public_path()."/uploads/".$seller->id."/";
            // Get registeration certification 
            $reg_cert = $request->file('reg_cert');
            $reg_name = time()."_reg.".$reg_cert->getClientOriginalExtension();
            $reg_cert->move($cert_path, $reg_name);
            $seller->reg_cert = "/uploads/".$seller->id."/".$reg_name;
            
            // Get commericial certification 
            $com_cert = $request->file('com_cert');
            $com_name = time()."_com.".$com_cert->getClientOriginalExtension();
            $com_cert->move($cert_path, $com_name);
            $seller->com_cert = "/uploads/".$seller->id."/".$com_name;
            $seller->save();
        }

        return response(["status"=>trans('seller.dataSaved')]);
    }   
}
