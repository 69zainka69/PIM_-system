<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attachment extends Model
{
	protected $table = 'attachment';


    protected $fillable = ['id', 'name', 'updated_at', 'created_at', 'deleted', 'type','size','role','storage','storage_file_path','global',];
    //
}
