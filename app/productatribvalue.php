<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productatribvalue extends Model
{
	protected $table = 'product_attribute_value';
    protected $fillable = ['id', 'text_value', 'updated_at', 'created_at', 'product_id', 'deleted', 'attribute_id', 'created_by_id', 'owner_user_id', 'assigned_user_id', 'is_required', 'scope', 'channel_id', 'is_inherit_assigned_user', 'is_inherit_owner_user', 'is_inherit_teams', 'language', 'bool_value', 'attribute_type'];
}
