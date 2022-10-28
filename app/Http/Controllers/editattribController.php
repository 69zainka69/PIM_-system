<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productatribvalue;
use App\atribute;
class editattribController extends Controller
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
		$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		function generate_string($input, $strength = 16) {
		$input_length = strlen($input);
		$random_string = '';
		for($i = 0; $i < $strength; $i++) {
			$random_character = $input[mt_rand(0, $input_length - 1)];
			$random_string .= $random_character;
		}
	 
		return $random_string;
	}
		function translit($s) {
  $s = (string) $s; // преобразуем в строковое значение
  $s = trim($s); // убираем пробелы в начале и конце строки
  $s = function_exists('mb_strtolower') ? mb_strtolower($s) : strtolower($s); // переводим строку в нижний регистр (иногда надо задать локаль)
  $s = strtr($s, array('а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>'', 'і'=>'i', 'ї'=>'ii', 'є'=>'e', ' ','_'));
  return $s; // возвращаем результат
}
	    if(isset($request->site)){

		$datas = date('Y-m-d H:i:s');;
		$lid = generate_string($permitted_chars,20);
		$isfilter = '';
		$site = $request->site;
		$product = $request->product;
		$nameatr = $request->nameatrib;
		if($request->isfilte == 'on'){
			$isfilter = 'filter';
		}
		$namelat = translit($nameatr);
	    $new_atribute = new atribute(array(
		'id' => $site.$namelat,
		'name' => $nameatr,
		'type' => 'text',
		'created_by_id' => '1',
		'attribute_group_id' => $site,
		'code' => $site.$namelat,
		'owner_user_id' => '1',
		'assigned_user_id' => '1',
		'is_multilang' => '1',
		'unique' => '0',
		'is_sorted' => '0',
		'type_value_ids' => $isfilter,
		'prohibited_empty_value' => '0',
		'virtual_product_field' => '0',
		'default_scope' => 'Global',
		'default_is_required' => '0',
		'updated_at' => $datas,
		'sort_order_in_attribute_group' => '1',
		'name_en_us' => $nameatr,
));
	    $new_atribute->save();
	    $new_atribute = $new_atribute->fresh();

	    $new_val = new productatribvalue(array(
		'id' => $lid,
		'deleted' => '0',
		'product_id' => $product,
		'attribute_id' =>$site.$namelat,
		'created_by_id' => '1',
		'owner_user_id' => '1',
		'assigned_user_id' => '1',
		'is_required' => '0',
		'scope' => 'Global',
		'is_inherit_assigned_user' => '0',
		'is_inherit_owner_user' => '0',
		'is_inherit_teams' => '0',
		'language' => 'en_US',
		'text_value' => '',
		'bool_value' => '0',
		'attribute_type' => 'text',
		'main_language_id' => '213',
));
	    $new_val->save();
	    $new_val = $new_val->fresh();
return redirect()->back()->withSuccess('Атрибут створено!');


	    }else{

        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	
	$idt = generate_string($permitted_chars, 20);
	$prod = $request->prod;
	if(isset($request->all)){
	$inprod = productatribvalue::where('product_id', $prod)->get();
	foreach($inprod as $atribin){
	    $atrin[] = $atribin['attribute_id'];
	}
	$cat = $request->cat;
	$allatr = atribute::where('attribute_group_id', $cat)->get();
	foreach($allatr as $vi){
	$tt=0;
	    $ids = generate_string($permitted_chars, 20);
	    $id = ucfirst($vi['code']);
	    $id = str_replace('ат', 'АТ', $id);
if(isset($atrin)){
foreach($atrin as $nameatrin){
    if($nameatrin = $id){
	$tt == 1;
    }
}}else{ $tt=1; }
    if($tt>0){
	$new_atr = new productatribvalue(array(
	'id' => $ids,
	'delete' => '0',
	'product_id' => $prod,
	'attribute_id' => $id,
	'created_by_id' => '1',
	'owner_user_id' => '1',
	'assigned_user_id' => '1',
	'is_required' => '0',
	'scope' => 'Global',
	'channel_id' => '',
	'is_inherit_assigned_user' => '0',
	'is_inherit_owner_user' =>'0',
	'is_inherit_teams' => '0',
	'language' => 'en_US',
	'text_value' => ' ',
	'bool_value' => '0',
	'attribute_type' => 'text',

));
	$new_atr->save();
	$new_atr = $new_atr->fresh();
	}
	}}}
	return redirect()->back()->withSuccess('Aтрибути оновлені');
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
	if($request->filters){
	    if($request->filter == "on"){
	    $filter = 'filter';
	}else{
	    $filter = '';
	    }
	$nn = atribute::where('id', $id)->first();
	$nn->type_value_ids = $filter;
	$nn->save();
	return redirect()->back()->withSuccess('Атрибут змінено успішно!'); 

	}


	$atrib = $request->atrib;

        if (isset($request->prod)) {
        $prod_id = $request->prod;
        $item = productatribvalue::where('product_id', $prod_id)->where('attribute_id', $id)->where('language', 'en_US')->first();
        $item->text_value = $atrib;
        $item->save();
        
        return redirect()->back()->withSuccess('Значення атрибуту успішно змінено!');
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
