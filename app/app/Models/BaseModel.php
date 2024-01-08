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
     * 插入一条记录
     *
     * @param array $data 记录数据
     * @return int 影响行数
     */
//    public function create(array $data)
//    {
//        return $this->create($data);
//    }

    /**
     * 批量插入记录
     *
     * @param array $data 记录数据数组
     * @return int 影响行数
     */
    public function createMany(array $data)
    {
        return $this->insert($data);
    }

}
