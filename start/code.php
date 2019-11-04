<?php
// 1.初始化变量
$img_w=70;//初始化验证码的宽
$img_h=30;//初始化验证码的高
$char_len=5;//初始化验证码的长度
$font=20;//初始化验证码的字体大小

// 2.生成验证码的码值
$char=array_merge(range('A', 'Z'),range('a', 'z'),range(1, 9));
$rand_keys=array_rand($char,$char_len);//随机获取char_len个码值的键
if ($char_len==1){
    $rand_keys=array($rand_keys);
}
shuffle($rand_keys);//打乱随机获取的码值的数组
$code='';//根据键获取对应的码值，并拼接成字符串
foreach ($rand_keys as $key){
    $code .=$char[$key];
}
@session_start();//保存
$_SESSION['captcha_code']=$code;

//3.为验证码图片设置背景色
$img=imagecreatetruecolor($img_w, $img_h);//生成画布
$bg_color=imagecolorallocate($img, 0xcc, 0xcc, 0xcc);//为画布生成颜色
imagefill($img, 0, 0, $bg_color);//设置画布背景色

//4.为验证码图片设置干扰元素
for ($i=0;$i<=300;$i++){
    //随机为画布分布颜色
    $color=imagecolorallocate($img, mt_rand(0,255), mt_rand(0,255), mt_rand(0,255));
    //在$img上随机绘制一个点
    imagesetpixel($img, mt_rand(0,$img_w), mt_rand(0,$img_h), $color);
}

//5.为验证图片绘制边框
$rect_color=imagecolorallocate($img, 0xff, 0xff, 0xff);//为验证码边框分配颜色
imagerectangle($img, 0, 0, $img_w-1, $img_h-1, $rect_color);

//6.生成验证码
//设定字符串颜色
$str_color=imagecolorallocate($img, mt_rand(0,100), mt_rand(0,100), mt_rand(0,100));
//根据设定的字体获取单个字母的宽和高
$font_w=imagefontwidth($font);
$font_h=imagefontheight($font);
//验证码的码值总宽度=单个字符宽度*字符个数
$str_w=$font_w*$char_len;
//将码值写入验证码图片中
imagestring($img, $font, ($img_w-$str_w)/2, ($img_h-$font_h)/2, $code, $str_color);

//7.输出验证码图片
header('content-type:image/png');//设置输出验证码的格式
imagepng($img);//输出验证码
imagedestroy($img);//销毁画布


?>