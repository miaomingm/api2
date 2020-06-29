<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class TestController extends Controller
{
    public function info()
    {
        $key = '1910';
        $data = $_GET['data'];
        $sign = $_GET['sign'];

        //验证签名，使用与发送相同的签名算法
        $local_sign = sha1($data.$key);
        if($sign==$local_sign){
            echo "验签成功";
        }else{
            echo "验签失败";
        }
    }

    /**
    *接收数据
     */
    public function receive(){
        echo '<pre>';print_r($_GET);echo '</pre>';  //接收url参数
        echo '<pre>';print_r($_POST);echo '</pre>';  //接收url参数
    }

    /**
     *接收post数据
     */
    public function receivePost(){
        //接收url参数
        echo '<pre>';print_r($_POST);echo '</pre>';  //接收url参数
    }


}