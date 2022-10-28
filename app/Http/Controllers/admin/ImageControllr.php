<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Asset;
use App\productasset;
use App\attachment;


class ImageControllr extends Controller
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
        //
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
	
	$id_prod = $request->prod;
	$all = productasset::where('product_id', $id_prod)->get();
	foreach($all as $vi){
	    $product = productasset::where('product_id', $id_prod)->where('asset_id', $vi['asset_id'])->first();
	    $product->is_main_image = '0';
	    $product->save();
	}
	$ones = productasset::where('product_id', $id_prod)->where('asset_id', $id)->first();
	$ones->is_main_image = '1';
	$ones->save();
	    return redirect()->back()->withSuccess('Головне зображення оновлено!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Asset::where('id', $id)->first();
	$name = $item['name'];
    
    $item->delete();

    $prodaset = productasset::where('asset_id', $id)->first();
    $prodaset->delete();
    $attachdel = attachment::where('name', $name)->first();
    $attachdel->delete();

return redirect()->back()->withSuccess('Зображення видалено');
    

    }
}
