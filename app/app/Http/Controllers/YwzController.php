<?php

namespace App\Http\Controllers;

use App\Models\OpenChannelInfo;
use Illuminate\Http\Request;

class YwzController extends Controller
{
    public function index()
    {
        $model = new OpenChannelInfo();
        $data = [
            'name' => 'test',
            'appkey' => 111111,
            'status' => 1,
        ];
        $model->create($data);
    }
}
