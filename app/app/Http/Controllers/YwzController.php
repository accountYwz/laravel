<?php

namespace App\Http\Controllers;

use App\Models\OpenChannelInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
class YwzController extends Controller
{
    public function index()
    {
        $res = (new OpenChannelInfo())->perPaginate(['status'=>1],['name','id'],2,1);
        echo json_encode($res);
    }

    public function redis()
    {

        echo 'redis';
        Redis::set('name','ywz1111');
        $a = Redis::get('name');
        echo $a;

    }

}
