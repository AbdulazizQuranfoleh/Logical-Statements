<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loops</title>
</head>
<body>
<?php
$years=2013;

if($years%4==0)
    echo "It is  a leap year";
    else
        echo"It is not a leap year";
    echo"<br>";

    
$wither=27;
if($wither<20){
    echo"the wither so cooled";
}else
echo"the wither soo hot";
echo"<br>";
$firstInteger = 2;
$secondlnteger = 2;
if($firstInteger===$secondlnteger){
    echo$firstInteger=($secondlnteger+$firstInteger)*3;
}
echo"<br>";
$firstInteger = 10;
$secondlnteger = 10;
$sum=($firstInteger+$secondlnteger);
if($sum>=30){
    echo"true";
}else
echo "false";
echo"<br>";
$z=20;
if($z<=0){
    echo"false";
}else
echo $z*3;
echo"<br>";

$a=50;
if($a<=50&&20<=$a){
    echo"true";
}
echo"<br>";

largest(1, 5, 9);
function largest($x, $y, $z) {
    $max = $x;
    if ($x >= $y && $x >= $z)
      $max = $x;
    elseif ($y >= $x && $y >= $z)
      $max = $y;
    else 
      $max = $z;
    echo "Largest number among $x, $y and $z is: $max";
    echo"<br>";
  }
$index=270;
if($index>=50)
    echo($index*2.5);
else if($index===100&&$index<=50)
echo($index*5);
else if($index===100&&$index<=250)
echo($index*6.20);
else if($index>=250)
echo($index*7.50);
echo"<br>";
$first_num = 20;
$second_num = 90;
$operator = "Add";
if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($operator) {
        case "Add":
            $result = $first_num + $second_num;
            echo $result ;
            break;
            case "Subtract":
                $result = $first_num - $second_num;
                echo $result ;
                break;
                case "Multiply":
                    $result = $first_num * $second_num;
                    echo $result ;
                    break;
                    case "Divide":
                        $result = $first_num / $second_num;
                        echo $result ;
    }
}
echo"<br>";
$age=15;
if($age<=18)
echo("is no eligible to vote");
else
echo("is eligible to vote");
echo"<br>";
$number=-60;
if($number===0){
    echo"zero";
}else if($number<0){  echo"negative";}else if($number>0){echo"positive";}
echo"<br>";
$range=50;
if($range<60)
echo "f";
elseif($range<=70)
echo "D";
elseif($range<=80)
echo "C";
elseif($range<=90)
echo "B";
elseif($range<=100)
echo "A";
echo"<br>";
?>
</body>
</html>