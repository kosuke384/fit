<?php

//変数の計算
$kasan=10+2;
$genzan=10-2;
$jozan=10*2;
$josan=10/2;
$joyo=10%2;

printf($kasan);
echo "<br>";
printf($genzan);
echo "<br>";
printf($jozan);
echo "<br>";
printf($josan);
echo "<br>";
printf($joyo);

//定数
const constant_str1='techup';
const constant_str2='engineer';

const constant_int1=5.1;
const constant_int2=1000;

echo constant_str1;
echo constant_str2;

echo "<br>";

echo constant_int1."<br>";
echo constant_int2."<br>";

//加算子/減算子
$a=1;
$a+=1;
echo $a."<br>";

$a=1;
$a++;
echo $a."<br>";

$a=0;
++$a;
echo $a."<br>";

$a=0;
$a++;
echo $a."<br>";

$a=5;
$a--;
echo $a."<br>";

//データ型
/*論理型*/
$bool1=true;
$bool2=false;
printf($bool1);
printf($bool2);

/*整数型*/
$int1=-1;
$int2=0;
printf($int1);
echo "<br>";
printf($int2);
echo "<br>";
/*不動小数点型*/
$float=3.14;
printf($float);
echo "<br>";
/*文字列*/
$string1='文字列';
$string2='';
printf($string1);
printf($string2);
echo "<br>";
/*配列*/
$array1=[
    'apple',
    'banana'
];
print_r($array1);
echo "<br>";
/*連想配列*/
$array2=[
    'apple'=>'リンゴ',
    'banana'=>'バナナ'
];

print_r($array2);
/*null*/
$test=null;
?>