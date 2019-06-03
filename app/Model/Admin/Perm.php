<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Perm extends Model
{
    protected $table = 'perm';

    protected $primaryKey = 'id';

    public $timestamps = false;
    
    protected $guarded = [];

    
}
