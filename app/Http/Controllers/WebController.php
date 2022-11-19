<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Font;
use App\Models\User;
use App\Models\Order;
use App\Models\Otherimage;
use Auth;
use DB;
use Cookie;
use PDF;

class WebController extends Controller
{
   
    public function index()
    {
        if(Auth::user()){
         $role = Auth::user()->type;
         if($role == 'admin'){
         
             return view('admin.dashboard');
         }        
            
        } 
        $this->change_user();
        $product = Product::where('type','!=','print')->where('status',1)->get();
           return view('index',compact('product'));
    }
           
    public function change_user(){
        if(Auth::user()){
          if (Cookie::get('cart')) {
               $cokkie_id = Cookie::get('cart');
               $auth_user = Auth::user()->id;
               $cart =  Cart::where('user_id',$cokkie_id)->update(array('user_id'=>$auth_user));
            }
        }
    }
    public function about()
    {
        $this->change_user();
        return view('about-us');
    }


    public function walldecals()
    { 
        $product = Product::where('type','vector')->where('status',1)->get();
        $this->change_user();
        return view('vector-walldecals',compact('product'));
    }


    public function walldecals_details($id)
    {
        $product = Product::where('id',$id)->first();
        $images = Otherimage::where(array('product_id'=>$product->id,'type'=>'walldecal'))->get();   
        $this->change_user();
        return view('vector-walldecals-details',compact('product','images'));
    }


    public function decals()
    {
        $product = Product::where('type','walldecal')->where('status',1)->get();
        $this->change_user();
        return view('wall-decals',compact('product'));
    }

    public function decals_details($id)
    {
        $product = Product::where('id',$id)->first();  
        $images = Otherimage::where(array('product_id'=>$product->id,'type'=>'walldecal'))->get(); 
        $this->change_user();      
        return view('wall-decals-details',compact('product','images'));
    }

 

    public function wallpaper()
    {
        $product = Product::where('type','wallpaper')->where('status',1)->get();
        $this->change_user();
        return view('wallpaper',compact('product'));
    }

   public function wallpaper_details($id)
    {
        $product = Product::where('id',$id)->first();  
        $images = Otherimage::where(array('product_id'=>$product->id,'type'=>'walldecal'))->get();
        $this->change_user();      
        return view('wallpaper-details',compact('product','images'));
    }

    public function babycards()
    {
        $product = Product::where('type','babycard')->where('status',1)->get();
        $this->change_user();
        return view('baby-cards',compact('product'));
    }

    public function baby_cards_details($id)
    {
        $product = Product::where('id',$id)->first();   
        $images = Otherimage::where(array('product_id'=>$product->id,'type'=>'walldecal'))->get();  
        $font = Font::where('status',1)->get();
        $this->change_user();
        return view('baby-cards-details',compact('product','images','font'));
    }

    public function prints()
    {
        $product = Product::where('type','print')->first(); 
        $font = Font::where('status',1)->get();
        $this->change_user(); 
        return view('prints', compact('product','font'));
    }

    public function dashboard(){
       $user = User::where('id',Auth::user()->id)->first();
       $order = array();
        if(Auth::user()){
              $order = Order::where('user_id',Auth::user()->id)->orderBy('id','DESC')->paginate(10);
        }
        return view('dashboard',compact('user','order'));
    }


    public function shipping()
    {
        return view('shipping');
    }

    public function faq()
    {
        return view('faq');
    }

    public function terms()
    {
        return view('term-conditions');
    }

    public function contact()
    {
        return view('contact');
    }

    public function inovice($id){
        $order = Order::where('id',$id)->first();
        $html = view('invoice',compact('order'));  
        $pdf = PDF::loadHTML($html);

        return $pdf->download('invoice.pdf'); 
    }

    public function statelist(Request $request) {

        $input = $request->all();
        $states = DB::table('states')->where('country_id', $input['country_id'])->get()->toArray();
        if (count($states)) {
            $message = 'Success';
            return Response()->json($states);
        }
    }

    public function viewdd($id){
        $order = Order::where('id',$id)->first();
        return view('emails.myTestMail',compact('order'));
    }

    // public function citylist(Request $request) {

    //     $input = $request->all();
    //     $city = Cities::where('state_id', $input['state_id'])->get()->toArray();
    //     if (count($city)) {
    //         $message = 'Success';
    //         return Response()->json($city);
    //     } else {
    //         $message = 'Data not found';
    //         return Response()->json($city);
    //     }
    // }
}
