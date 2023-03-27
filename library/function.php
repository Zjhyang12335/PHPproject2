<?php
date_default_timezone_set("PRC");
/* 计算年龄， $by,$bm,$bd分别代表出生年月日*/
function getAge($by,$bm,$bd){
    $cur_y = date('Y');
    $cur_m = date('n');
    $cur_d = date('j');
    
    $stu_y = $by;
    $stu_m = $bm;
    $stu_d = $bd;
    //年龄
    if ($stu_m > $cur_m){
        $age = $cur_y - $stu_y -1;
    }elseif ($stu_m == $cur_m && $stu_d > $cur_d){
        $age = $cur_y - $stu_y -1;
    }else {
        $age = $cur_y - $stu_y;
    }
    return $age;/* 返回年龄 */
}

function getConst($stu_m,$stu_d){
    
    //判断学生的日期是否是两位数
    if($stu_d < 10){
        $stu_d = '0'.$stu_d;
    }
    $date = "$stu_m.$stu_d";
    
    //判断星座
    $lev = '';
    if($date >=1.21 && $date <= 2.19){
        $const = '水瓶座';
        $lev = 1;
    }elseif($date>=2.20 && $date<=3.19){
        $const = '双鱼座';
        $lev=2;
    }elseif($date>=3.20 && $date<=4.19){
        $const = '白羊座';
        $lev=3;
    }elseif($date>=4.20 && $date<=5.19){
        $const = '金牛座';
        $lev=4;
    }elseif($date >=5.22 && $date <= 6.21){
        $const = '双子座';
        $lev = 5;
    }elseif($date >=6.22 && $date <= 7.22){
        $const = '巨蟹座';
        $lev = 6;
    }elseif($date >=7.23 && $date <= 8.23){
        $const = '狮子座';
        $lev = 7;
    }elseif($date >=8.24 && $date <= 9.23){
        $const = '处女座';
        $lev = 8;
    }elseif($date >=9.24 && $date <= 10.23){
        $const = '天秤座';
        $lev = 9;
    }elseif($date >=10.24 && $date <= 11.22){
        $const = '天蝎座';
        $lev = 10;
    }elseif($date >=11.23 && $date <= 12.21){
        $const = '射手座';
        $lev = 11;
    }else{
        $const = '魔羯座';
        $lev = 12;
    }
    $constlist = array($const, $lev);
    return $constlist;
}

function getSeximg($sex){
    if ($sex == '男') {
        $seximg = 'male';
    }elseif ($sex == '女') {
        $seximg = 'female';
    }
    return $seximg;
}