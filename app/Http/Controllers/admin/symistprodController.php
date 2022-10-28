<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\menus;
use App\associatedproduct;
use Auth;
use App\grupsatrib;
use App\Catalog;
use App\product;
use App\association;

class symistprodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $paginate = 50;
        $user = Auth::user();
        $menus = Menus::all();
        if(isset($request->searchproduct)){
            $search = $request->searchproduct;
            $association = associatedproduct::where('main_product_id', 'like', "%".$search."%")->get();
            return view('association.orderby',[
                'association' => $association,
                
            ])->render();
        }else{
   
        $association = associatedproduct::orderBy('created_at', 'desc')->paginate($paginate);
       
        return view('association.product', [
            'menus' => $menus,
            'association' => $association,
            
        ]);
    }
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
        $association = association::OrderBy('name', 'ASC')->get();
        return view('association.create', [
            'menus' => $menus,
            'user' => $user,
            'catalog' => $catalog,
            'association' => $association,
           
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
	    if(isset($request->symproduct)){
	$sym = $request->symproduct;
	    }
	    if(isset($request->synkod)){
	$sym = $request->synkod;
	    }
	$num = $request->num;
	$symista = $request->symista;

	if($request->full == 'on'){
	    $allsymist = associatedproduct::where('main_product_id', $sym)->get();
		$ai = 0;
	if(count($allsymist)>0){
		    foreach($allsymist as $val){
			$tosymest[$ai]['sym'] = $val['related_product_id'];
			$tosymest[$ai]['asoc'] = $val['association_id'];
		$ai++;
		}


			foreach($tosymest as $vi){
			$newassoc = new associatedproduct(array(
		    'id' => $num.$vi['asoc'].$vi['sym'],
		    'deleted' => '0',
		    'association_id' => $vi['asoc'],
		    'main_product_id' => $num,
		    'related_product_id' => $vi['sym'],
		    'created_by_id' => '1',
		    'backward_associated_product_id' => $vi['sym'].$vi['asoc'].$num,
));
		$newassoc->save();
		$newassoc = $newassoc->fresh();
		$newass = new associatedproduct(array(
		    'id' => $vi['sym'].$vi['asoc'].$num,
		    'deleted' => '0',
		    'association_id' => $vi['asoc'],
		    'main_product_id' => $vi['sym'],
		    'related_product_id' => $num,
		    'created_by_id' => '1',
		    'backward_associated_product_id' => $num.$vi['asoc'].$vi['sym'],
    ));
		$newass->save();
		$newass = $newass->fresh();
			}
}
	}
$newassoc = new associatedproduct(array(
		    'id' => $num.$symista.$sym,
		    'deleted' => '0',
		    'association_id' => $symista,
		    'main_product_id' => $num,
		    'related_product_id' => $sym,
		    'created_by_id' => '1',
		    'backward_associated_product_id' => $sym.$symista.$num,
));
		$newassoc->save();
		$newassoc = $newassoc->fresh();
		$newass = new associatedproduct(array(
		    'id' => $sym.$symista.$num,
		    'deleted' => '0',
		    'association_id' => $symista,
		    'main_product_id' => $sym,
		    'related_product_id' => $num,
		    'created_by_id' => '1',
		    'backward_associated_product_id' => $num.$symista.$sym,
    ));
		$newass->save();
		$newass = $newass->fresh();

			return redirect()->back()->withSuccess('Сумісність успішно додано!');

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
    public function destroy(Request $request, $id)
    {
	$id = $request->prod;
	$sym = $request->toprod;
	$symist = associatedproduct::where('main_product_id', $id)->where('related_product_id', $sym)->first();
	$symist->delete();

return redirect()->back()->withSuccess('Сумісність успішно видалено!');
    }
}
