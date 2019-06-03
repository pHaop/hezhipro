<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
     /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'user_admin';

    protected $primaryKey = 'id';

    public $timestamps = false;
    
    protected $guarded = [];

    public function user_role()
    {
        return $this->belongsToMany('App\Model\Admin\Role','admin_role', 'userid', 'roleid');
    }
}
