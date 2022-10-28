<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\productasset;
use App\Asset;
use App\menus;
use App\association;
use Auth;

class symistController extends Controller
{
    public function list(Request $request){
        $paginate = 25;
        $user = Auth::user();
        $menus = Menus::all();
       
   
        $association = association::orderBy('created_at', 'desc')->paginate($paginate);
       
        return view('association.list', [
            'menus' => $menus,
            'association' => $association,
            
        ]);
    }
}
