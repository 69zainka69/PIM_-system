<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
	protected $table = 'asset';
	protected $fillable = ['id', 'name', 'deleted', 'height', 'width', 'color_space', 'color_depth', 'orientation', 'is_active', 'tags', 'description', 'modified_at', 'type', 'size', 'size_unit', 'created_by_id', 'modified_by_is', 'file_id', 'library_id', 'description_en_us', 'sort_order'];
}
