<?php

namespace App\Model\Home;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    //
    protected $table = 'comments';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $guarded = [];
}
