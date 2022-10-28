<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
class searchprodController extends Controller
{
    public function searchprod(Request $request){
       $onswer = '';
	if(isset($request->cat)){
	    $cat = $request->cat;
	    if(isset($request->name)){
	$search = $request->name;
	$datas = product::where('product_family_id', $cat)->where('name', 'like', "%".$search."%")->get();
	    foreach($datas as $item){
		$onswer .= '<option value="'.$item->mpn.'">'.$item->name.'</option>';
		}
	}
	    if(isset($request->kod)){
	    $search = $request->kod;
	$datas = product::where('product_family_id', $cat)->where('id', 'like', "%".$search."%")->get();
	    foreach($datas as $item){
	    $onswer .='<option value="'.$item->mpn.'">'.$item->name.'</option>';
    }
}
	return $onswer;
    }
if(isset($request->word)){
    $search = $request->word;
   $datas = product::where('name', 'like', "%".$search."%")->get();
   foreach($datas as $item){
    $onswer .= '<option value="'.$item->mpn.'">'.$item->name.'</option>';
   }
  
   return  $onswer;
}
if(isset($request->words)){
    $search = $request->words;
   $datas = product::where('name', 'like', "%".$search."%")->get();
   foreach($datas as $item){
    $onswer .= '<option value="'.$item->mpn.'">'.$item->name.'</option>';
   }
  
   return  $onswer;
}
    }
}
