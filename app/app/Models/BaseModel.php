<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class BaseModel extends Model
{
    //插入一条记录
    //批量插入
   //更新一条、多条记录
    //删除一条、多条记录
    //分页
    //laravel插入一条记录
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

    public function perPaginate($where=[],$select=['*'],$page=1,$pageSize=20){
        return self::query()->where($where)->select($select)->paginate($pageSize,['*'],"page",$page)->toArray();
    }
    /**
     * 插入一条记录
     *
     * @param array $data 记录数据
     * @return int 影响行数
     */
//    public function save(array $data)
//    {
//        return self::save($data);
//    }
//
//    /**
//     * 批量插入记录
//     *
//     * @param array $data 记录数据数组
//     * @return int 影响行数
//     */
//    public function createMany(array $data)
//    {
//        return $this->insert($data);
//    }

}
