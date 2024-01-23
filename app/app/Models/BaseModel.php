<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class BaseModel extends Model
{
    /**
     * @desc:查询一条记录
     * @param $where
     * @param $select
     * @date 2024/1/10 22:35
     * @return array
     */
    public function findOne($where=[],$select=['*']){
        return self::query()->where($where)->select($select)->first()->toArray();
    }
    /**
     * @desc:查询多条记录
     * @param $where
     * @param $select
     * @date 2024/1/10 22:35
     * @return array
     */
    public function findMore($where=[],$select=['*']){
        return self::query()->where($where)->select($select)->get()->toArray();
    }

    /**
     * @description:分页查询
     * @date:2024-01-23 21:24:20
     * @param array $where
     * @param array $select
     * @param integer $page
     * @param integer $pageSize
     * @return array
     */
    public function perPaginate($where=[],$select=['*'],$page=1,$pageSize=20){
        return self::query()->where($where)->select($select)->paginate($pageSize,['*'],"page",$page)->toArray();
    }
}
