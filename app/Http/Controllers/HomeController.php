<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\menus;
use App\Catalog;
use App\atribute;
use App\productasset;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
	$producer = explode(',', $user['user_grups']);
        $menus = Menus::all();
        $group_id = Auth::user()->group_id;
	$price = Auth::user()->price;
       if($group_id!=null){
	    if($price == "all"){
        $product = Product::Where('producer', $group_id)->get();
	    }
	    if($price == "price"){
	$product = Product::Where('producer', $group_id)->where('price', "<>", 0)->get();
	    }
        foreach($product as $itemp){
            $id = $itemp['mpn'];   
            if($itemp['price']<1){
                $oranges[$id]['price'] = $itemp['price'];
            }
        if($itemp['long_description_en_us']==''){
            $oranges[$id]['long_description_en_us'] = $itemp['long_description_en_us'];
        }
        if($itemp['long_description']==''){
            $oranges[$id]['long_description'] = $itemp['long_description'];
        }
          $assets = productasset::Where('product_id',  $id)->get();
            $count_asset = count($assets);
            if($count_asset<1){
                $oranges[$id]['asset'] = '0';
            }
        }
      
	}
    

else{
	if($price=="all"){
        $product = Product::all();
       }
	if($price=="price"){
	$product = Product::where('price', "<>", 0)->get();
	}
        foreach($product as $itemp){
            $id = $itemp['mpn'];
            if($itemp['price']<1){
                $oranges[$id]['price'] = $itemp['price'];
            }
        if($itemp['long_description_en_us']==''){
            $oranges[$id]['long_description_en_us'] = $itemp['long_description_en_us'];
        }
        if($itemp['long_description']==''){
            $oranges[$id]['long_description'] = $itemp['long_description'];
        }
                if($itemp['product_family_id']=='Site_008' || $itemp['product_family_id']=='Site_009' || $itemp['product_family_id']=='Site_010' || $itemp['product_family_id']=='Site_011' || $itemp['product_family_id']=='Site_013' || $itemp['product_family_id']=='Site_014' || $itemp['product_family_id']=='Site_015' || $itemp['product_family_id']=='Site_018' || $itemp['product_family_id']=='Site_023' ||  $itemp['product_family_id']=='Site_031' || $itemp['product_family_id']=='Site_032' || $itemp['product_family_id']=='Site_033' || $itemp['product_family_id']=='Site_034' || $itemp['product_family_id']=='Site_065'){
          $assets = productasset::Where('product_id',  $id)->get();
            $count_asset = count($assets);
                
                    if($count_asset<1){
                        $oranges[$id]['asset'] = '0';
                    }
                } 
        }
       
    }
    $redi=0;
    $orangei=0;
    foreach($oranges as $vit){
	    if($price == 'all'){
        if(count($vit)>3){
            $redi++;
        }else{
            $orangei++;
        }
    }
	    if($price == 'price'){
	    if(count($vit)>2){
		$redi++;
	}else{
	    $orangei++;
	    }
    }
}
    
    $orange = $orangei*100/count($product);
    $red = $redi*100/count($product);
    $green = (count($product)-count($oranges))*100/count($product);
   
    $attrib = count(atribute::all());
        $catalog = count(Catalog::all());
        $count_prod = count($product);
        return view('home.index', [
            'product' => $product,
            'count' => $count_prod,
            'count_cat' =>  $catalog,
            'menus' => $menus,
            'attrib' => $attrib,
            'green' => (int)$green,
            'red' => (int)$red,
            'orange' => (int)$orange,
            'producer' => $producer,
        ]);
       // return view('home');
    }
}
