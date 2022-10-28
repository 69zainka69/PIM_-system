<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productasset extends Model
{
	protected $table = 'product_asset';
	protected $fillable = ['id', 'asset_id', 'product_id', 'deleted', 'sorting', 'channel', 'is_main_image', 'main_image_for_channel'];
    //
}
