<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    
<?php

$a="hi";

    function myFunc(){

        $var= 10;
        echo "{$var}";

    }
    myFunc();
    //echo "{$var}";  오류 발생 

    //////////////////////////////////////////

    $var2 = 20;

    function myFunc2(){

    
        //echo "{$var2}";
        //밖에서 썻지만 , 안에서 쓰려면 global 선언 필요

        global $var2;//이렇게 써주면 이제부터 전역(global변수)이다

        echo "<br>${var2}";
        echo "<br>{$GLOBALS['var2']}";
        //전역변수는 GLOBALS라는 배열에 내부적으로 저장이되는데 , 변수명이 index번호가 되어
        //그 index 번호를 통해 값을 가져오는 방법도 있다.


    }
    myFunc2();


?>



</body>
</html>