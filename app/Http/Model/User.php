<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table="user";
    protected $primaryKey="user_id";//设置主键
    public $timestamps=false;//禁掉时间轴
}
