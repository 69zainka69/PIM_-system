<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\menus;
use App\grupsatrib;
use App\associatedproduct;
use App\Catalog;
use Auth;
class grupsatribeditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginate = 25;
        $user = Auth::user();
        $menus = Menus::all();
       
   
        $grups = grupsatrib::orderBy('created_at', 'desc')->paginate($paginate);
        
        return view('attrib.list', [
            'menus' => $menus,
            'grups' => $grups,
            
        ]);
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
        return view('grups.create', [
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
         
        $new_grupsatrib = new grupsatrib(array(
    
            'id' => $request->code,
            'name' => $request->name,
            'description' => $request->description,
            'deleted' => '0',
            'code' => $request->code,
            'modified_at' => $created_at,
            'sort_order' => '0',
            'created_by_id' => 1, 
            'modified_by_id' => null,
            'is_active' => $isActive,
            'owner_user_id' => 1,
            'assigned_user_id' => 1, 
            'name_uk_ua' => $request->nameEnUs,
            'description_uk_ua' => $request->descriptionEnUs,
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
