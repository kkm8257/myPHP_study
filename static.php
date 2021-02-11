<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>

<h1>정적 변수</h1>

<?php

    function increment(){

        static $count = 0;  //한번 수행하고 다시 초기화 되지않음 php에서는 그런가봄
        echo "{$count}<br>";
        $count++;

    }


    increment();
    increment();
    increment();


?>

</body>
</html>