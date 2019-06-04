<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role as BaseRole;

class Role extends BaseRole
{
    use SoftDeletes;

    /**
     * Author: Vijay  <1937832819@qq.com>
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'status', 'guard_name', 'created_at'
    ];

    /**
     * Author: Vijay  <1937832819@qq.com>
     * @var array
     */
    public static $guard_name_list = [
        'admin', 'home'
    ];

    /**
     * @var array
     */
    public static $delete = [
        0 => '正常',
        1 => '软删除',
        2 => '全部'
    ];

    /**
     * Description:
     * User: Vijay
     * Date: 2019/6/4
     * Time: 22:50
     * @param array $attributes
     * @return \Illuminate\Database\Eloquent\Model|BaseRole
     */
    public static function create(array $attributes = [])
    {
        dd('未完成');
        DB::beginTransaction();
        //创建角色
        $info = parent::create($attributes); // TODO: Change the autogenerated stub
        DB::rollBack();
        DB::commit();
    }
}
