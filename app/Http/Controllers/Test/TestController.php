<?php

namespace App\Http\Controllers\Test;

use App\Model\TestModel;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function test(){
        $data = TestModel::get();
        var_dump($data);
    }

    public function curl1(){
        $url = 'https://www.baidu.com';
        //初始化
        $ch = curl_init($url);
        //参数
        curl_setopt($ch, CURLOPT_HEADER, 0);
        //执行
        curl_exec($ch);
        //关闭
        curl_close($ch);
    }

    public function accessToken(){
        $appid = 'wxb8bc960e43858757';
        $appsecret = '8ba592f5b60366f44c762fb86df47b89';
        $url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.$appid.'&secret='.$appsecret;

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $res = curl_exec($ch);

        curl_close($ch);
        $res = json_decode($res,true);
        return $res;
    }

    public function cuPost(){
        $url = 'http://vm.1810.lumen.com/user/register';
        $postData = [
            'name' => 'shuai',
            'pwd' => 123123,
        ];
        //初始化
        $ch = curl_init($url);
        //参数
        curl_setopt($ch,CURLOPT_PORT,0); //指定 提交是post
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0); //TRUE返回返回到变量  FALSE到浏览器页面
        curl_setopt($ch,CURLOPT_POSTFIELDS,$postData); //传输POSRT数据
        //执行
        curl_exec($ch);
        //错误信息
        $errno = curl_errno($ch);
        $error = curl_error($ch);
        var_dump($errno);
        var_dump($error);
        //关闭
        curl_close($ch);
    }

    //注册接口
    public function register(Request $request){
        print_r($_POST);exit;
        $name = $request->input('name');
        $pwd = $request->input('pwd');
        var_dump($name);
        var_dump($pwd);
        exit;
        if(empty($name)){ return '账号不能为空'; } if(empty($pwd)){ return '密码不能为空'; }  //判断账号密码不能为空
        $data = TestModel::where('name',$name)->first();
        $data = json_decode($data,true);
        if($data){
            return '账号已存在 请从新输入账号';
        }else{
            $arr = [
                'name' => $name,
                'pwd' => $pwd
            ];
            $res = TestModel::insertGetId($arr);
            if($res){
                return '注册成功';
            }else{
                return '注册失败';
            }
        }
    }

    //创建自定义菜单
    public function menu(){
        $accessToken = $this->accessToken();
        $url = 'https://api.weixin.qq.com/cgi-bin/menu/create?access_token='.$accessToken['access_token'];

        //初始化
        $ch = curl_init($url);
        $postData = [
            'button' => [
                [
                    "name"=>"表白",
                    "sub_button"=>[
                        [
                            "type"=>"click",
                            "name"=>"♥查表白♥",
                            "key"=>"selectWhite"
                        ],
                        [
                            "type"=>"click",
                            "name"=>"♥发表白♥",
                            "key"=>"sendWhite"
                        ],
                        [
                            "type"=>"click",
                            "name"=>"点击3",
                            "key"=>"s"
                        ]
                    ]
                ],
                [
                    "name"=>"优惠卷",
                    "sub_button"=>[
                        [
                            "type"=>"view",
                            "name"=>"领取优惠卷",
                            "url"=>"http://1809a.ytw00.cn/discounts"
                        ],
                        [
                            "type"=>"view",
                            "name"=>"展示我的优惠卷",
                            "url"=>"http://1809a.ytw00.cn/award"
                        ],
                        [
                            "type"=>"click",
                            "name"=>"点击3",
                            "key"=>"s"
                        ]
                    ]
                ],
                [
                    "name"=>"答题",
                    "sub_button"=>[
                        [
                            "type"=>"click",
                            "name"=>"点击答题",
                            "key"=>"Answer"
                        ],
                        [
                            "type"=>"click",
                            "name"=>"我的成绩",
                            "key"=>"Achievement"
                        ],
                        [
                            "type"=>"click",
                            "name"=>"点击3",
                            "key"=>"s"
                        ]
                    ]
                ]
            ]
        ];
        $postData = json_encode($postData,JSON_UNESCAPED_UNICODE);
        //参数
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,0);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$postData); //传输POSRT数据
        //执行
        curl_exec($ch);
        //错误信息
        /*$errno = curl_errno($ch);
        $error = curl_error($ch);
        var_dump($errno);
        var_dump($error);*/
        //关闭
        curl_close($ch);
    }

    //加密
    public function encryption(){
        $data = "shuaisha1";
        $method = 'AES-128-CBC';
        $key = '1';
        $options = OPENSSL_RAW_DATA;
        $iv = 'qwertyuiopasdfgh';
        $res = openssl_encrypt($data,$method,$key,$options,$iv);
        $url = 'http://vm.1810.lumen.com/user/decode';
        $client = new Client();
        $r = $client->request('POST', $url, [
            'body' => $res
        ]);
        echo $r->getBody();
    }

    //非对称加密
    public function rsa(){
        $str = '北京天安门';
        $key = openssl_get_privatekey('file://'.storage_path('keys/rsa_private_key.pem'));
        openssl_private_encrypt($str,$string,$key);
//        var_dump($key);die;
        $url = 'http://vm.1810.lumen.com/user/rsa';
        $client = new Client();
        $request = $client ->request('POST',$url,[
            'body' => $string
        ]);
        $data = $request->getBody();
        echo $data;
    }
    //签名加密
    public function st(){
        $data = [
            'name' => 'lisi',
            'sex'  => 'nan',
            'age'  => '20',
            'tell' => '13400110011',
        ];
        ksort($data);
        $str = '';
        foreach ($data as $k=>$v){
            $str .= $k .'=' .$v .'&';
        }
        $str = rtrim($str,'&');
        openssl_sign($str,$sign,openssl_get_privatekey('file://'.storage_path('keys/rsa_private_key.pem')));
        $sign = base64_encode($sign);
        $data['sign'] = $sign;
        $url = 'http://vm.1810.lumen.com/user/st';
        $client = new Client();
        $request = $client->request('POST',$url,[
            'form_params' => $data
        ]);
        $res = $request->getBody();
        echo $res;


    }
    //zhifu
    public function pay(){

        $data = [
            'subject'       =>'大乐透',
            'out_trade_no'  =>'70501111111S001111119',
            'total_amount'  =>'9.00',
            'product_code'  => 'QUICK_WAP_WAY',
        ];
        $data = json_encode($data,JSON_UNESCAPED_UNICODE);
        $data2 =[
            'app_id'    => '2016091900551120',
            'method'    => 'alipay.trade.wap.pay',
            'charset'   => 'utf-8',
            'sign_type' => 'RSA2',
            'timestamp' => date('Y-m-d H:i:s'),
            'version'   => '1.0',
            'biz_content' => $data,
        ];
        ksort($data2);
//        var_dump($data2);die;
        $str = "";
        foreach ($data2 as $k => $v ){
            $str .= $k .'='.$v.'&';
        }
        $str = rtrim($str,'&');
        $key = openssl_get_privatekey('file://'.storage_path('keys/rsa_private_key.pem'));
        openssl_sign($str,$sign,$key,OPENSSL_ALGO_SHA256);
        $sign = base64_encode($sign);
        /*$pukey = openssl_get_publickey('file://'.storage_path('keys/rsa_public_key.pem'));
        $e=openssl_verify($str,base64_decode($sign),$pukey);
        var_dump($e);die;*/
        /*$res = openssl_error_string();
        var_dump($res);die;*/
        $data2['sign'] = $sign;
        $url = 'https://openapi.alipaydev.com/gateway.do';
        $a = '?';
        foreach ($data2 as $key => $value){
            $a.=$key .'='.urlencode($value).'&';
        }
        $a = rtrim($a,'&');
        $url = $url.$a;

        header('refresh:2;url='.$url);

    }
}
