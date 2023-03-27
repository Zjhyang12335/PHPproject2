<?php
require './data/stu_data.php';
require './library/function.php';/* 引入函数定义文件 */
date_default_timezone_set("PRC");

$id = isset($_GET['id']) ? $_GET['id'] : 0;// 获取地址栏传递的get参数

$name = $info[$id]['name'];// 
$birth = $info[$id]['birth'];
$xuehao = $info[$id]['snum'];
$xueke = $info[$id]['subject'];
$sex = $info[$id]['sex'];
//年龄
list($stu_y,$stu_m,$stu_d) = explode('-',$birth);
$age = getAge($stu_y, $stu_m, $stu_d);
// $birth =  $stu_y.'-'.$stu_m.'-'.$stu_d;
//性别
$seximg = getSeximg($sex);
/* 星座 */
$constlist = getConst($stu_m, $stu_d);
$const = $constlist[0];
$lev = $constlist[1];
//定义学生个性标签
$label = '勇敢,低调,直率,执着,善良,乐活族,手机控,90后';
//分割学生个性标签
$labels = explode(',',$label);
shuffle($labels);
$ran = rand(1,8);

require './view/Layout.html';