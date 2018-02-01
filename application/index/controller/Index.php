<?php
namespace app\index\controller;
use \think\Controller;
class Index extends Controller
{
    public function index()
    {
    	//引入sdk的微信接口文件
    	require_once(APP_PATH.'../extend/WxPay/lib/WxPay.Api.php');
        //微信支付测试
        $input = new \WxPayUnifiedOrder();
        //商品描述
        $input->setBody('测试商品');
        //设置订单号
        $input->setOut_trade_no(date('YmdHis'));
        //设置异步通知地址（支付成功的回调地址）
        $input->SetNotify_url("localhost/index.php/index/index/index1");
        //设置订单金额(单位：分)
        $input->setTotal_fee(1);
        // 设置交易类型
        $input->setTrade_type("NATIVE");
        //设置商品id
        $input->setProduct_id(1234567890);
        	//调用统一下单api
        $result = \WxpayAPI::unifiedOrder($input);
        // dump($result);
        //生成二维码图片
        $code_url = $result['code_url'];
        // dump($code_url);
        $image = "<img src='http://paysdk.weixin.qq.com/example/qrcode.php?data=".urlencode($code_url)."'>";
        echo $image;
        dump(urlencode($code_url));

    }

    public function index1()
    {
    	//引入sdk的微信接口文件
    	require_once(APP_PATH.'../extend/WxPay/lib/WxPay.Api.php');
    	$msg = '';
    	if(\WxPayApi::notify(function($result){
    		dump($msg);
    	},$msg)){
    		//验证成功
    		//处理$result的数据
    	}else{
    		//验证失败，输出错误消息
    		echo " $msg";
    	}
    	
    }
}
