<?php

namespace App\Http\Controllers;

use App\Models\OpenChannelInfo;
use Illuminate\Http\Request;

class YwzController extends Controller
{
    public function index()
    {
        $res = (new OpenChannelInfo())->perPaginate(['status'=>1],['name','id'],2,1);
        echo json_encode($res);
    }
}
