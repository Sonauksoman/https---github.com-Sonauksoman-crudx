<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apartment;
use App\Models\Cart;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;



class ApartmentController extends Controller
{
    public function formView(){
        return view('welcome');
    }
    public function saveApartment(Request $request){

        $request->validate([
            'name' => 'required|max:255',
            'flats' => 'required|numeric',
            'place' => 'required|max:50',
        ]);

        if($request->hasFile('image')=='true'){

            $extension =  $request->image->extension() ;

            $fileName=Str::random(6)."_".time()."apartment".".".$extension;

            $request->image->storeAs('images',$fileName);

        }
        $apartment= new Apartment();
        $apartment->apartment_name=$request->name;
        $apartment->no_of_flats=$request->flats;
        $apartment->place=$request->place;
        $apartment->image= $fileName;
        $apartment->save();
        return redirect('/');

    }
    public function flatView(){
       $apartments= Apartment::all();
        return view('flat',compact('apartments'));
    }
    public function findFlats(Request $request){
       return $request;
     }
     public function tableView(){
        $apartments= Apartment::all();
        return view('table',compact('apartments'));
     }
     public function delete($id){
        $apartment=Apartment::where('id',$id);
   if(! empty($apartment)){
      Storage:: delete(asset('storage/images/'. $apartment->image));
      $apartment->delete();
   }
  
        return redirect('/');
     }
     public function edit($id){
        $apartment= Apartment::find($id);
       return view('edit',compact('apartment'));
     }
     public function editSave(Request $request){
        $request->validate([
            'name' => 'required|max:255',
            'flats' => 'required|numeric',
            'place' => 'required|max:50',
        ]);
        $id=$request->id;
        $apartment= Apartment::find($id);
        $apartment->apartment_name=$request->name;
        $apartment->no_of_flats=$request->flats;
        $apartment->place=$request->place;
        $apartment->save();
        return redirect('/');

     }
     public function cart($id){
        $apartment= Apartment::find($id);
        return view('cart',compact('apartment'));
     }
     public function cartSave(Request $request){
        $cart= new Cart;
        $cart->apartment_id=$request->id;
        $cart->quantity=$request->quantity;
        $cart->save();
        return redirect('/');

     }
     public function viewCarts(){
        $carts=Cart::all();
        return view('view-cart',compact('carts'));
     }
}
