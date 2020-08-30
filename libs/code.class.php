<?php
namespace libs;
//验证码类
class code{
    public $type;
    public $width;
    public $height;
    public $codeLen;
    public $seed;
    public $fontSize;
    public $fontAngle;
    public $lineNum;
    public $lineWidth;
    public $pixNum;
    public $fontFile;
    function __construct(){
        global $config;
        $this->type=$config["code"]["type"]?$config["code"]["type"]:"png";
        $this->width=$config["code"]["width"]?$config["code"]["width"]:160;
        $this->height=$config["code"]["height"]?$config["code"]["height"]:50;
        $this->codeLen=$config["code"]["codeLen"]?$config["code"]["codeLen"]:4;
        $this->seed=$config["code"]["seed"]?$config["code"]["seed"]:"abcdefhjkmnprstuvwxyzABCDEFGHKMNPQRSTUVWXYZ345678";
        $this->fontSize=$config["code"]["fontSize"]?$config["code"]["fontSize"]:array("min"=>25,"max"=>35);
        $this->fontAngle=$config["code"]["fontAngle"]?$config["code"]["fontAngle"]:array("min"=>-15,"max"=>15);
        $this->lineNum=$config["code"]["lineNUm"]?$config["code"]["lineNum"]:array("min"=>2,"max"=>4);
        $this->lineWidth=$config["code"]["lineWidth"]?$config["code"]["lineWidth"]:array("min"=>1,"max"=>3);
        $this->pixNum=$config["code"]["pixNum"]?$config["code"]["pixNum"]:array("min"=>80,"max"=>150);
        $this->fontFile=$config["code"]["fontFile"]?$config["code"]["fontFile"]:"/Users/chaimengxin/Documents/php/service/mvc2/application/static/font/demo.ttc";
    }
    private function createCanvas(){
        $this->image=imagecreatetruecolor($this->width,$this->height);
        imagefill($this->image,0,0,$this->setColor());
    }
    private function setColor($type="background"){
        $r=$type=="background"?mt_rand(126,255):mt_rand(0,125);
        $g=$type=="background"?mt_rand(126,255):mt_rand(0,125);
        $b=$type=="background"?mt_rand(126,255):mt_rand(0,125);
        //设置随机值
        return imagecolorallocate($this->image,$r,$g,$b);
    }
    private function getText(){
        $str="";
        for($i=0;$i<$this->codeLen;$i++){
            $str.=$this->seed[mt_rand(0,strlen($this->seed)-1)];//下标比长度-1
        }
        return $str;
    }

    private function setText(){
        $str=$this->getText();
        $this->str=strtolower($str);
        for ($i=0;$i<$this->codeLen;$i++) {
            $size=mt_rand($this->fontSize["min"],$this->fontSize["max"]);
            $angle=mt_rand($this->fontAngle["min"],$this->fontAngle["max"]);
            $space=$this->width/($this->codeLen*2+1);
            $box=imagettfbbox($size,$angle,$this->fontFile,$str[$i]);
            imagettftext($this->image, $size, $angle, mt_rand(max($space*($i*2-1),0)+5,$space*($i*2+1)-5), ($box[0]-$box[7])+mt_rand(0,$this->height-($box[0]-$box[7])), $this->setColor("a"), $this->fontFile, $str[$i]);
        }
    }

    private function setLine(){
        $num=mt_rand($this->lineNum["min"],$this->lineNum["max"]);
        for($i=0;$i<$num;$i++){
            $x1=mt_rand(0,$this->width/2);
            $x2=mt_rand($this->width/2,$this->width);
            $y1=mt_rand(0,$this->height);
            $y2=mt_rand(0,$this->height);
            imagesetthickness($this->image,mt_rand($this->lineWidth["min"],$this->lineWidth["max"]));
            imageline($this->image,$x1,$y1,$x2,$y2,$this->setColor("a"));
        }
    }
    private function setPix(){
        $num=mt_rand($this->pixNum["min"],$this->pixNum["max"]);
        for($i=0;$i<$num;$i++){
            imagesetpixel($this->image,mt_rand(0,$this->width),mt_rand(0,$this->height),$this->setColor("a"));
        }
    }
    function out(){
        //1.指定输出的格式
        header("content-type:image/".$this->type);
        //1.创建画布
        $this->createCanvas();
        //2.设置文字
        $this->setText();
        //3.线条干扰
        $this->setLine();
        //4.像素点干扰
        $this->setPix();
        $outtype="image".$this->type;
        //5.在输出之前，写入cookie

        $_SESSION["code"]=$this->str;
//        setcookie("code",$this->str,"0","/");

        $outtype($this->image);//图片的信息
        imagedestroy($this->image);//图片的信息
    }
}
//$code=new code();
////$code->width=300;
////$code->height=100;
////$code->type="jpeg";
//$code->out();