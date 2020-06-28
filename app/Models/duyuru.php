<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class duyuru extends Model
{
    protected $table ="duyuru";
    protected $fiillable=[
    
        'baslik','yazi'

    ];
}
