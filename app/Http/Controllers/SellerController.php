<?php

namespace App\Http\Controllers;
use Auth;
use App\Ad;
use App\Sector;
use App\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function __construct()
    {
        $this->middleware('sellerAuth');
    }

    public function dash(){
        return view('seller.dashboard');
    }

    public function all_ads(){
        $ads =  Ad::paginate(5);
        return view('seller.ads.all',compact('ads'));
    }

    public function create_form(){
        $sectors = Sector::all();
        return view('seller.ads.submit_ad', compact('sectors'));
    }

    public function save_ad(Request $request){
        // return $this->validate_ad($request);
        return "Under Working";
    }

    protected function validate_ad($request){
        return $this->validate($request->all(), [
            "title" => 'required|string|min:5',
            "expire_date" => 'required|date',
            "price" => 'required|number',
            "discount" => 'required',
            "images.*" => 'required|mimes:jpg,jpeg,png,gif',
            "desc" => '',
            "save" => "Save Ad",
            "sector_id" => "1",
            "location" => '',
            "city" => '',
            "county" => '',
            "state" => '',
            "street" => '',
            "phone" => '',
            
        ]);
    }
    public function profile(){
      $id = Auth::guard('seller')->user()->id;
      $seller = Seller::find($id);
      return view('seller.profile',['seller'=>$seller]);
    }

    public function logout(Request $request){
        Auth::guard('seller')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->guest(url( '/' ));
    }
}
