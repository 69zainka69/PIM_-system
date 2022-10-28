<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\product;
use App\productasset;
use App\Asset;
use App\menus;
use App\Brand;
use App\Catalog;
use App\producttocategory;
use App\associatedproduct;
use App\association;
use App\productatribvalue;
use App\atribute;
use Auth;
class ProductesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
	
        $user = Auth::user();
        $menus = Menus::all();
        $allprod = product::all();
        foreach($allprod as $itempprodu){
            $produs = $itempprodu->producer;
                $producers[$produs]= $itempprodu->producer;
        }
        $catalog = Catalog::all();
        $product = Product::where('id', $id)->get();
        $prod_id = $product[0]->mpn;
        $sites = $product[0]->product_family_id;
	$assodfulli = association::all();
	foreach($assodfulli as $assid){
	$assodfull[$assid->code] = $assid['name'];
	}
    
        $associated = associatedproduct::where('main_product_id', $prod_id)->get();
        foreach($associated as $assoded){
           
            $id_asod = $assoded->related_product_id;
            $asodprod = Product::where('id', $id_asod)->first();
            if(isset($asodprod->price)){
           $asod_pr = $asodprod->price;
           if($asod_pr>0){
            $associate[$id_asod]['association_id'] = $assoded->association_id;
            $associate[$id_asod]['related_product_id'] = $assoded->related_product_id;
            $associate[$id_asod]['name'] = $asodprod->name;
           }
        }
    }
        if(isset($associate)){

        }else{
            $associate = null;
        }

        $brand_id = $product[0]->brand_id; 

        $asset = Productasset::Where('product_id', $prod_id)->Where('is_main_image', 1)->first();
        if(isset($asset['asset_id']) && $asset['asset_id'] != null){
            $as_id = $asset['asset_id'];
            $img = Asset::Where('id', $as_id)->first();
            $img_name = $img->name;
            $image = $img_name;
        
        $assets = Productasset::Where('product_id', $prod_id)->get();
        $eid = 0;
        foreach($assets as $asse){
            $as_id = $asse['asset_id'];
            $main = $asse['is_main_image'];
            $img = Asset::Where('id', $as_id)->first();
            $img_name = $img->name;
            $images[$eid]['name'] = $img_name;
            $images[$eid]['main'] = $main;
	    $images[$eid]['id'] = $as_id;
            $eid++;
        }
    }else{
        $image = null;
        $images = null;
    }
        $brandi = Brand::Where('id', $brand_id)->get();
        $brand = $brandi[0]->name;
        $brands = Brand::all();
        $catgor_id = producttocategory::Where('product_id', $prod_id)->get();
        $category_id = $catgor_id[0]->category_id;
        $prod_categorys = catalog::where('id', $category_id)->get();
        $category_name = $prod_categorys[0]->name;
        $attributesvalue = productatribvalue::where('product_id',  $prod_id)->where('language', 'en_US')->get();
        $allcatalog = catalog::orderBy('name')->get();;
        foreach($attributesvalue as $atr){
            $atr_id = $atr['attribute_id'];
            $atrib = atribute::where('attribute_group_id', $sites)->where('id', $atr_id)->first();
            $name = $atrib->name;
	    $filter = $atrib->type_value_ids;
                $attriutesname[$atr_id]['name'] =  $name;
		$attriutesname[$atr_id]['filter'] = $filter;
	    $allval = productatribvalue::where('attribute_id', $atr_id)->get();
		foreach($allval as $atrvali){
		    $valisn = $atrvali['text_value'];
		    $attriutesname[$atr_id]['val'][$valisn] = $valisn;
		}
        }
        if(!isset($attriutesname)){
            $attriutesname = null;
        }
        $symisted = association::all();
        return view('numens.show',[
            'product' =>$product,
            'catalog' => $catalog,
            'menus' => $menus,
            'user' => $user,
            'brands' => $brands,
            'brand_id' => $brand_id,
            'brand' => $brand,
            'category_name' => $category_name,
            'associated' => $associate,
            'attributesvalue' => $attributesvalue,
            'attriutesname' => $attriutesname,
            'image' => $image,
            'images' => $images,
            'catgor_id' => $category_id,
            'allcatalog' => $allcatalog,
            'producers' => $producers,
	    'symisteds' => $symisted,
	    'assodfull' =>$assodfull,
	    'cats' => $allcatalog,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         if (isset($request->name)) {
        $product = product::where('mpn', $id)->first();
        $product->name = $request->name;
        $product->save();
        return redirect()->back()->withSuccess('Назву товару успішно змінено!');
    }
    if (isset($request->nameru)) {
        $product = product::where('mpn', $id)->first();
        $product->name_en_us = $request->nameru;
        $product->save();
        return redirect()->back()->withSuccess('Назву (ру) товару успішно змінено!');
    }
    if (isset($request->brand)) {
        $product = product::where('mpn', $id)->first();
        $product->brand_id = $request->brand;
        $product->save();
        return redirect()->back()->withSuccess('Бренд товару успішно змінено!');
    }

    if (isset($request->long_description)) {
        $product = product::where('mpn', $id)->first();
        $product->long_description = $request->long_description;
        $product->save();
        return redirect()->back()->withSuccess('Опис успішно змінено');
    }
    if (isset($request->long_description_en_us)) {
        $product = product::where('mpn', $id)->first();
        $product->long_description_en_us = $request->long_description_en_us;
        $product->save();
        return redirect()->back()->withSuccess('Опис (ru) успішно змінено');
    }
    if (isset($request->sku)) {
        $product = product::where('mpn', $id)->first();
        $product->sku = $request->sku;
        $product->save();
        return redirect()->back()->withSuccess('Код 1С успішно змінено');
    }
    if (isset($request->ean)) {
        $product = product::where('mpn', $id)->first();
        $product->ean = $request->ean;
        $product->save();
        return redirect()->back()->withSuccess('Код ТН ЗЕД успішно змінено');
    }
    if (isset($request->price)) {
        $product = product::where('mpn', $id)->first();
        $product->price = $request->price;
        $product->save();
        return redirect()->back()->withSuccess('Ціна успішно змінено');
    }
    if (isset($request->uvp)) {
        $product = product::where('mpn', $id)->first();
        $product->uvp = $request->uvp;
        $product->save();
        return redirect()->back()->withSuccess('Акційна ціна успішно змінено');
    }
    if (isset($request->catalog)) {
        $product = product::where('mpn', $id)->first();
        $product->catalog_id = $request->catalog;
        $product->product_family_id = $request->catalog;
        $product->save();
        $prodcat = producttocategory::where('product_id', $id)->first();
        $prodcat->category_id = $request->catalog;
        $prodcat->save();
        return redirect()->back()->withSuccess('Каталог успішно змінено');
    }
    if (isset($request->amount)) {
        $product = product::where('mpn', $id)->first();
        $product->amount = $request->amount;
        $product->save();
        return redirect()->back()->withSuccess('Кількість успішно змінено');
    }
    if (isset($request->producer)) {
        $product = product::where('mpn', $id)->first();
        $product->producer = $request->producer;
        $product->save();
        return redirect()->back()->withSuccess('Групe закупщиків успішно змінено');
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
