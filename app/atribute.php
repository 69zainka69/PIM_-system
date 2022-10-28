<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class atribute extends Model
{
    protected $table = 'attribute';
     protected $fillable = ['id', 'name', 'updated_at', 'created_at', 'deleted', 'type','created_by_id','attribute_group_id','code','owneruser_id', 'assigned_user_id','is_multilang','unique','is_sorted','type_value_ids','prohibited_empty_value','virtual_product_field','default_scope','default_is_required','sort_order_in_attribute_group','name_en_us', 'updated_at'];
}
