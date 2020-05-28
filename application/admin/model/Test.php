<?php

namespace app\admin\model;

use think\Model;

class Test extends Model
{
    //
    protected $table = 'shop_test';
    //定义时间戳字段名;
    protected $createTime = false;
    protected $updateTime = false;
}
