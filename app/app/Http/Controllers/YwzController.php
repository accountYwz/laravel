<?php

namespace App\Http\Controllers;

use App\Models\OpenChannelInfo;
use Illuminate\Http\Request;
use Illuminate\Redis\Connections\PredisConnection;
use Illuminate\Support\Facades\Redis;
use Illuminate\Redis\Connections\Connection;
use Predis\Client;
use SimpleXMLIterator;
use App\Service\Cache\SingletonRedisService;
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

        $redis = new Client();
        $redis->set('foo', 'bar');

        $singletonRedis = SingletonRedisService::getInstance();
        $redis = $singletonRedis->set();
        $redis->set('foo', 'bar111');
        $res = $redis->get('foo');
        var_dump($res);
    }

}
