<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\productasset;
use App\Asset;
use App\menus;
use App\Catalog;
use App\Brand;
use Auth;
class ProductController extends Controller
{
     public function list(Request $request){
        $paginate = 25;
        $user = Auth::user();
	$producer = explode(',', $user['user_grups']);
        $menus = Menus::all();
        $group_id = Auth::user()->group_id;
        $brands = Brand::all();
        $allcataloges = Catalog::all();

       foreach($brands as $itembrandd){
        $brandiscode = $itembrandd->code;
        $brandis[$brandiscode] = $itembrandd->name;
       }
        foreach($allcataloges as $catvi){
            $namescat = $catvi->name;
            $idcat = $catvi->code;
            $cataloge[$idcat] = $namescat;
        }
        if(isset($request->searchproduct)){
        $search = $request->searchproduct;
        $product = Product::where('name', 'like', "%".$search."%")->paginate($paginate);
        $allcount = count(Product::all());
    }   elseif(isset($request->searchcode)){
        $search = $request->searchcode;
        $product = Product::where('id', 'like', "%".$search."%")->paginate($paginate);
        $allcount = count(Product::all());
    }
        elseif(isset($request->searchbrand)){
        $search = $request->searchbrand;
        $product = Product::where('brand_id', $search)->paginate($paginate);
        $allcount = count(Product::where('brand_id', $search)->get());
    }   elseif(isset($request->searchzak)){
        $search = $request->searchzak;
        $product = Product::where('producer', $search)->paginate($paginate);
        $allcount = count(Product::where('producer', $search)->get());
    }elseif(isset($request->orderBy)){
	if($request->orderBy == 'price'){
	$product = Product::orderBy('price', 'ASC')->paginate($paginate);
    }
	if ($request->orderBy == 'nodesc'){
            $product = Product::where('long_description', null)->paginate($paginate);
        }

        if ($request->orderBy == 'name'){
            $product = Product::orderBy('name', 'ASC')->paginate($paginate);
        }
        if ($request->orderBy == 'last'){
            $product = Product::orderBy('created_at', 'DESC')->paginate($paginate);
        }
    }else{
        
                $allcount = count(Product::all());
                $product = Product::orderBy('created_at', 'desc')->paginate($paginate);
            }
$id = 0;

foreach($product as $vi){
    $ids = $vi->mpn;
    $asset = Productasset::Where('product_id', $ids)->Where('is_main_image', 1)->first();
        if(isset($asset['asset_id']) && $asset['asset_id'] != null){
            $as_id = $asset['asset_id'];
            $img = Asset::Where('id', $as_id)->first();
            $img_name = $img->name;
            $images[$ids] = $img_name;
        }
        
        
    $id=$id+1;

}
if(isset($images)){}else{
    $images = null;
}
if($request->ajax()){
    if($request->search){
    $search = $request->search;
    $catalog = Catalog::where('name', 'like', "%".$search."%")->get();
    return view('ajax.catalog',[
        'catalog' => $catalog,
        
    ])->render();
}
if(isset($request->searchproduct)){
   
    return view('ajax.order-by',[
        'product' => $product,
        'cataloge' => $cataloge,
        'brandis' => $brandis,
	'images' => $images,
    ])->render();
}
elseif(isset($request->searchbrand)){
   
    return view('ajax.order-by',[
        'product' => $product,
        'cataloge' => $cataloge,
        'brandis' => $brandis,
	'images' => $images,
    ])->render();
}
elseif(isset($request->searchzak)){
    return view('ajax.order-by',[
        'product' => $product,
        'cataloge' => $cataloge,
        'brandis' => $brandis,
	'images' => $images,
    ])->render();
}elseif(isset($request->searchcode)){
   
    return view('ajax.order-by',[
        'product' => $product,
        'cataloge' => $cataloge,
        'brandis' => $brandis,
    ])->render();
}

elseif(isset($request->orderBy)){
    return view('ajax.order-by',[
	'cataloge' => $cataloge,
	'product' => $product,
	'brandis' => $brandis,
	'images' => $images,
])->render();
}
}else{
    $catalog = Catalog::all();


        
        $count_prod = count($product);
        return view('numens.list', [
            'product' => $product,
            'images' => $images,
            'count' => $count_prod,
            'menus' => $menus,
            'catalog' => $catalog,
            'allcount' => $allcount,
            'brands' => $brands,
            'producer' => $producer,
            'cataloge' => $cataloge,
            'brandis' => $brandis,
        ]);
    }
    }

    public function showCategory(Request $request, $category_id){
        $id = 0;
        $menus = Menus::all();
        $catalog = Catalog::all();
        $group_id = Auth::user()->group_id;
        $user = Auth::user();
        $paginate = 25;
        $brands = Brand::all();
	$producer = explode(',', $user['user_grups']);
        $allcataloges = catalog::all();
       foreach($brands as $itembrandd){
        $brandiscode = $itembrandd->code;
        $brandis[$brandiscode] = $itembrandd->name;
       }
        foreach($allcataloges as $catvi){
            $namescat = $catvi->name;
            $idcat = $catvi->code;
            $cataloge[$idcat] = $namescat;
        }
        if($request->ajax()){
	    if(isset($request->orderBy)){
        
    	    if ($request->orderBy == 'price'){
            $product = Product::Where('product_family_id', $category_id)->orderBy('price', 'ASC')->paginate($paginate);
    		    }

    	    if ($request->orderBy == 'nofoto'){
            $product = Product::Where('product_family_id', $category_id)->orderBy('price', 'ASC')->paginate($paginate);
    		    }

    	    if ($request->orderBy == 'nodesc'){
            $product = Product::Where('product_family_id', $category_id)->where('long_description', null)->paginate($paginate);
    		    }

    	    if ($request->orderBy == 'name'){
            $product = Product::Where('product_family_id', $category_id)->orderBy('name', 'ASC')->paginate($paginate);
    		    }
    	    if ($request->orderBy == 'last'){
            $product = Product::Where('product_family_id', $category_id)->orderBy('created_at', 'DESC')->paginate($paginate);
    		    }
    }if(isset($request->searchcode)){
 $search = $request->searchcode;
        $product = Product::where('product_family_id', $category_id)->where('id', 'like', "%".$search."%")->paginate($paginate);
        $allcount = count(Product::all());	    
}if(isset($request->searchproduct)){
        $search = $request->searchproduct;
        $product = Product::Where('product_family_id', $category_id)->where('name', 'like', "%".$search."%")->paginate($paginate);
        $allcount = count(Product::Where('product_family_id', $category_id)->where('name', 'like', "%".$search."%")->get());
    }if(isset($request->searchzak)){
        $search = $request->searchzak;
        $product = Product::Where('product_family_id', $category_id)->where('producer', $search)->paginate($paginate);
        $allcount = count(Product::Where('product_family_id', $category_id)->where('producer', $search)->get());
    }if(isset($request->searchbrand)){
        $search = $request->searchbrand;
        $product = Product::Where('product_family_id', $category_id)->where('brand_id', $search)->paginate($paginate);
        $allcount = count(Product::Where('product_family_id', $category_id)->where('brand_id', $search)->get());
    }
	if($request->search){
    $search = $request->search;
    $catalog = Catalog::where('name', 'like', "%".$search."%")->get();
	return view('ajax.catalog', [
	'catalog' => $catalog,
    ])->render();
	}
        if($request->ajax()){
            $allcount = count(Product::Where('product_family_id', $category_id)->get());
            foreach($product as $vi){
                $ids = $vi->mpn;
                $asset = Productasset::Where('product_id', $ids)->Where('is_main_image', 1)->first();
                    if(isset($asset['asset_id']) && $asset['asset_id'] != null){
                        $as_id = $asset['asset_id'];
                        $img = Asset::Where('id', $as_id)->first();
                        $img_name = $img->name;
                        $images[$ids] = $img_name;
                    }
                    
                $id=$id+1;
            
            }
            if(isset($images)){}else{
                $images = null;
            }
            return view('ajax.order-by',[
                'allcount' => $allcount,
                'product' => $product,
                'images' => $images,
                'cataloge' =>  $cataloge,
                'brandis' => $brandis,
            ])->render();
        }
           
}else{
    if($group_id!=null){
        $product = Product::Where('producer', $group_id)->paginate($paginate);
        }else{
        $product = Product::Where('product_family_id', $category_id)->paginate($paginate);
        }
        $allcount = count(Product::Where('product_family_id', $category_id)->get());
        foreach($product as $vi){
            $ids = $vi->mpn;
            $asset = Productasset::Where('product_id', $ids)->Where('is_main_image', 1)->first();
                if(isset($asset['asset_id']) && $asset['asset_id'] != null){
                    $as_id = $asset['asset_id'];
                    $img = Asset::Where('id', $as_id)->first();
                    $img_name = $img->name;
                    $images[$ids] = $img_name;
                }
                
            $id=$id+1;
        
        }
        if(isset($images)){}else{
            $images = null;
        }
        return view('numens.showlist',[
            'product' =>$product,
            'images' => $images,
            'user'=>$user,
            'catalog' => $catalog,
            'allcount' => $allcount,
            'menus' => $menus,
            'category_id' => $category_id,
            'brands' => $brands,
            'producer' => $producer,
            'cataloge' => $cataloge,
            'brandis' => $brandis,
        ]);
    }
}
}
