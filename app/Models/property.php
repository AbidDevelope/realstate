<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class property extends Model
{
    protected $table = 'propertys';
    protected $fillable = ['property_title', 'property_type', 'property_area','price','status','address','image','description'];
}
