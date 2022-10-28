<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\productasset;
use App\Asset;
use App\attachment;
class ImageUploadController extends Controller
{

    public function imageUploadPost(Request $request)
    {
			function generate_string($input, $strength = 16) {
		$input_length = strlen($input);
		$random_string = '';
		for($i = 0; $i < $strength; $i++) {
			$random_character = $input[mt_rand(0, $input_length - 1)];
			$random_string .= $random_character;
		}
	 
		return $random_string;
	}
		$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('/upload/files/06lsx/xjzn3/8tonu/3itw6/zwvcd/lwxu4/'), $imageName);

       $new_product_image = "/upload/files/06lsx/xjzn3/8tonu/3itw6/zwvcd/lwxu4/".$imageName;


if($request->glav == 'on'){
$glav = 1;
}else{
$glav = 0;
}

		$id = generate_string($permitted_chars, 20);
		$id_file = generate_string($permitted_chars, 20);
$new_asset = new productasset(array(
   'asset_id' => $id,
   'product_id' => $request->number,
   'deleted' => '0',
   'sorting' => '0',
   'chennel' => '',
   'is_main_image' => $glav,
   'main_image_for_channel' => '[]',
   ));
       $new_file = new attachment(array(
        'id' => $id_file,
        'name' => $imageName,
        'deleted' => '0',
        'type' => 'image/jpeg',
        'size' => '23624',
        'role' => 'Attachment',
        'storage' => 'UploadDir',
        'storage_file_path' => '06lsx/xjzn3/8tonu/3itw6/zwvcd/lwxu4',
        'global' => '0',
        'related_id' => $id,
        'related_type' => 'Asset',
	'created_by_id' => '1',
	'field' => 'file',
	'md5'=> '',
	'private' => '0',
       ));
       $new_image = new Asset(array(
        'id' => $id,
        'name' => $imageName,
        'img' => $new_product_image,
        'delete' => '0',
        'height' => '1024',
        'width' => '1024',
        'color_space' => 'SRGB',
        'color_depth' => '8',
        'orientation'=> 'Landscape',
        'is_active' => '1',
        'tags' => '[]',
        'description' => '',
        'type' => '["Gallery Image"]',
        'size' => '23.1',
        'size_unit' => 'kb',
        'created_by_id' => '1',
        'modified_by_id' => null,
        'file_id' => $id_file,
        'library_id' => '1',
        'description_en_us' => '',
        'sort_order' => null,


     ));
         $new_image->save();
	 $new_file->save();
	$new_asset->save(); 
         return redirect()->back()->withSuccess('Зображення до номенклатури успішно додано!');


   
    }
    public function imageUpload()
    {
        return view('ajax.imageUpload');
    }
	public function destroy($id){

	return redirect()->back()->withSuccess('Зображення успішно видалено!');
	}
}
