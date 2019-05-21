<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'user';

    protected $primarykey = 'id';

     /**
     * 该模型是否被自动维护时间戳
     *
     * @var bool
     */
    public $timestamps = false;

     /**
     * 模型的日期字段保存格式。
     *
     * @var string
     */
    protected $dateFormat = 'U';

    const CREATED_AT = 'addtime';

     /**
     * 可以被批量赋值的属性。
     *
     * @var array
     */
   // protected $fillable = ['username','password','phone','email','person','status','addtime'];
   
   /**
     * 不可被批量赋值的属性。
     *
     * @var array
     */
     protected $guarded = ['repassword'];
}
