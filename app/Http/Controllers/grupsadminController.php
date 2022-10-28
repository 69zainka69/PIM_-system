<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\menus;
use App\Catalog;
use Auth;
class grupsadminController extends Controller
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
        $user = Auth::user();
        $menus = Menus::all();
        $catalog = Catalog::all();
        return view('gruptov.create', [
            'menus' => $menus,
            'user' => $user, 
            'catalog' => $catalog,
        ]);
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
       
            if($request->isActive == 'on'){
                $isActive = 1;
            }else{
                $isActive = 0;
            }
    
        $new_grupsatrib = new Catalog(array(
            'id' => $request->code,
            'name' => $request->name,
            'description' => $request->description,
            'delete' => '0',
            'code' => $request->code,
            'modified_at' => $created_at,
            'sort_order' => '0',
            'created_by_id' => 1,
            'modified_by_id' => null,
            'is_active' => $isActive,
            'owner_user_id' => 1,
            'assigned_user_id' => 1,
            'name_en_us' => $request->nameEnUs,
            'description_en_us' => $request->descriptionEnUs,
        )); 
        $new_grupsatrib->save();
        $new_grupsatrib = $new_grupsatrib->fresh();

      

        return redirect()->back()->withSuccess('успішно додано');
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
        $catalog = Catalog::all();
        $product = Product::where('catalog_id', $id)->get();
        $group = Catalog::where('id', $id)->get();
        return view('grups.edit',[
            'product' =>$product,
            'catalog' => $catalog,
            'menus' => $menus,
            'user' => $user,
            'group' => $group,

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
            $catalog = Catalog::where('id', $id)->first();
            
            $catalog->name = $request->name;
            $catalog->save();
            return redirect()->back()->withSuccess('Назву групи товарів успішно змінено!');
        }
        if (isset($request->name_en_us)) {
            $catalog = Catalog::where('id', $id)->first();
            $catalog->name_en_us = $request->name_en_us;
            $catalog->save();
            return redirect()->back()->withSuccess('Назву групи товарів успішно змінено!');
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
