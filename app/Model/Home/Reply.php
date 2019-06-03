<?php

namespace App\Model\Home;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    //
    protected $table = 'reply';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $guarded = [];
}
