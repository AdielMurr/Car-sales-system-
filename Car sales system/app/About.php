<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about'; 
    protected $fillable = ['owner_name', 'shop_name', 'description', 'hours', 'phone', 'address', 'email', 'fax', 'gmap', 'shop_img' ];

}
