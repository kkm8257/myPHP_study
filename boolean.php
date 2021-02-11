<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$result=1<3; #true 저장. 1이 3보다 작은지 boolean으로 체크
echo $result."<br>"; #1을 출력(true는 1로 출력)


$result2=1>3; #false 저장. 1이 3보다 큰지 boolean으로 체크
echo $result2."<br>"; #false 는 출력도안함


$result3=1>3;
echo ($result3==false)."<br>"; #result3이 false이면 참 -> true 1 출력




?>

</body>
</html>