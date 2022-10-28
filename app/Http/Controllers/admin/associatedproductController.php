<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\associatedproduct;

class associatedproductController extends Controller
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
        $created_at = date('Y-m-d H:i:s');
        $group = $request->associationname;
        $product = $request->product;
        $symprod = $request->symproduct;
        $id = $product.'/'.$symprod;
        $backid = $symprod.'/'.$product;

        $new_ass = new associatedproduct(array(
            'id' => $id,
            'association_id' => $group,
            'main_product_id' => $product,
            'deleted' => '0',
            'related_product_id' => $symprod,
            'modified_at' => $created_at,
            'created_by_id' => 1, 
             'modified_by_id' => null,
             'backward_associated_product_id' => $backid,
        ));

        $new_ass->save();
        $new_ass = $new_ass->fresh();


        $new_as = new associatedproduct(array(
            'id' => $backid,
            'association_id' => $group,
            'main_product_id' => $symprod,
            'deleted' => '0',
            'related_product_id' => $product,
            'modified_at' => $created_at,
            'created_by_id' => 1, 
             'modified_by_id' => null,
             'backward_associated_product_id' => $id,
        ));

        $new_as->save();
        $new_as = $new_as->fresh();

        return redirect()->back()->withSuccess('успішно додана сумістність');
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
        //
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
