<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grupsatrib extends Model
{
	protected $table = 'attribute_group';
    protected $fillable = ['name', 'id', 'description', 'deleted', 'code', 'modified_at', 'sort_order', 'created_by_id', 'modified_by_id', 'is_active', 'owner_user_id', 'assigned_user_id', 'name_uk_ua', 'description_uk_ua'];
    //
}
