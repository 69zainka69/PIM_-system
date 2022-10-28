<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
	protected $table = 'catalog'; 
    protected $fillable = ['is_active','id','name', 'name_en_us', 'updated_at', 'created_at', 'description', 'description_en_us', 'deleted','created_by_id','assigned_user_id', 'code','modified_at'];
    //
}
