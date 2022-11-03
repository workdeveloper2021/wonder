<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use App\Models\Otherimage;
use App\Models\Font;
use App\Models\Giftcard;
use Illuminate\Http\Request;
use DB;
use Cookie;
use Auth;
use FORM;
use URL;
class CheckoutController extends Controller
{
   
    public function index(Request $request)
    {   
        $user_id =0;
        $cart = array();
        if(Auth::user()){
           $user_id = Auth::user()->id;
           if (Cookie::get('cart')) {
               $cokkie_id = Cookie::get('cart');
               $auth_user = Auth::user()->id;
               $cart =  Cart::where('user_id',$cokkie_id)->update(array('user_id'=>$auth_user));
            }
        }else{
           $user_id = Cookie::get('cart');
        }


        $cart =  Cart::with('products')->where('user_id',$user_id)->get();
        $countries = DB::table('countries')->get();
        return view('checkout',compact('countries','cart'));
    }


    public function applygiftcard(Request $request){
        $code = $request->code;
        $amt = $request->amt;
        $giftcode = Giftcard::where('giftcode',$code)->first();
        if($giftcode !=''){
            if($giftcode->type =='fixed'){
                $discount = $giftcode->amount;
                $amount = $amt+$discount;
            }else{
                $discount = ($amt*$giftcode->amount)/100;
                $amount = $amt+$discount;
            }
          echo json_encode(array('discount' => $discount,'amount' =>$amount));
        }else{
           echo 'failed'; 
        }
    }

}