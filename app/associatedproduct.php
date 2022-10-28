<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class associatedproduct extends Model
{
	protected $table = 'associated_product'; 
    protected $fillable = ['id','association_id','main_product_id', 'deleted','related_product_id','modified_at','created_by_id','modified_by_id', 'backward_associated_product_id'];
    //
}
