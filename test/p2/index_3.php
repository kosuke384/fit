<?php
//条件分岐
$value=200;
$value1=300;
if($value<=$value1){
    echo 'value1はvalueより大きい';
}else{
    echo 'valueはvalue1より少ない';
}
echo "<br>";
//条件分岐の種類
$name='man';
if($name=='man'){
    echo '男性';
}else if($name=='woman'){
    echo '女性';
}else{
    echo '不明';
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $test=90;
    if($test>80):
    ?>
    <p>合格</p>
    <?php else:?>
    <p>不合格</p>
    <?php endif;?>
</body>
</html>
<?php
$active=true;
$result=$active==true? "active":"defult";

echo $result;
echo '<br>';
date_default_timezone_set('Asia/Tokyo');
$date=date('w',);
$week=[
    'Sunday',
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday'
];
switch($week[$date]){
    case 'Sunday';
    echo '日曜日';
    break;

    case 'Monday';
    echo '月曜日';
    break;

    case 'Tuesday';
    echo '火曜日';
    break;

    case 'Wednesday';
    echo '水曜日';
    break;

    case 'Thursday';
    echo '木曜日';
    break;

    case 'Friday';
    echo '金曜日';
    break;

    case 'Saturday';
    echo '土曜日';
    break;
    default:
    echo '何曜日ですか？';
    break;
}
echo '<br>';
//論理演算
$int=20;

if($int>15&&$int<30){
    echo '15より大きく30より小さいです';
}
echo '<br>';

$sugaku=85;
$eigo=70;
if($sugaku>=80||$eigo>=80){
    echo '合格です';
}else{
    echo '不合格';
}
echo '<br>';

$x=true;

if($x){
    echo '真です';
}else{
    echo '偽です';
}
echo '<br>';

if(!$x){
    echo '偽です';
}else{
    echo '真です';
}
echo "<br>";
//繰り返し
for($i=0; $i<=10; $i++){
    echo $i.'<br>';
}

$num=0;
while($num<=7){
    echo $num.'<br>';
    $num++;
}

$week=[
    'sunday'=>'日曜日',
    'monday'=>'月曜日',
    'Tuesday'=>'火曜日',
    'Wednesday'=>'水曜日',
    'Thursday'=>'木曜日',
    'Friday'=>'金曜日',
    'Saturday'=>'土曜日'
]
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($week as $english=>$japanese): ?>
    <table>
        <tr>
            <td><?php echo $english; ?></td>
            <td><?php echo $japanese; ?></td>
        </tr>
    </table>
    <?php endforeach;?>
</body>
</html>