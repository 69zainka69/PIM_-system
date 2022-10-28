<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producttocategory extends Model
{
protected $table = 'product_category';
    protected $fillable = ['category_id', 'updated_at', 'created_at'];
    //
}
