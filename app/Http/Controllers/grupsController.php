<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\productasset;
use App\Asset;
use App\menus;
use App\Brand;
use App\Catalog;
use App\producttocategory;
use App\associatedproduct;
use App\productatribvalue;
use App\atribute;
use Auth;
class grupsController extends Controller
{
    public function list(Request $request){
        $paginate = 25;
        $user = Auth::user();
        $menus = Menus::all();
        if($request->ajax()){
        if(isset($request->orderBy)){
            $search = $request->orderBy;
           
            $catalog = Catalog::where('name', 'like', "%".$search."%")->get();
            
                return view('ajax.searchgroup',[
                    'catalog' => $catalog,
                    
                ])->render();
            
}}else{
        $catalog = Catalog::orderBy('created_at', 'desc')->paginate($paginate);
        $count = count(Catalog::all());
        return view('grups.list', [
            'menus' => $menus,
            'catalog' => $catalog,
            'count' => $count,
        ]);
    }
       // return view('home');
    }
}
