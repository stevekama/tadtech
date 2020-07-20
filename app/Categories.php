<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    // Bring in table name
    protected $table = "categories";

    // primary key 
    public $primaryKey = "id";

    // Timestamps
    public $timestamps = true;
}