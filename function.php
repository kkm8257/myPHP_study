<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>

<h1>function</h1>
<pre>
    function 함수이름(매개변수,,,){
    ...내용
    }
    함수이름(); 
    함수이름은 특수기호안되고 숫자시작 이안된다


    결합연산자 대신에 {} 를 사용해도된다.

    echo "hi"."hi2";
    ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
    $str="hi2";
    echo "hi{$str}";
    ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
    이런식
    
</pre>


<?php

    function sum($x,$y){

        return $x+$y;

    }

    echo sum(10,20);


    $fruits=[

        'apple',
        'mango',
        'banana',
        'orange'
    ];

    echo "<pre>";
    print_r($fruits);
    #print_r 은 변수에 대해 읽을수 있는 수준의 정보를 출력
    //[인덱스번호] = > "값"  의 형태로 출력
    echo "</pre>";

    echo "-------------------------------<br>";

    function show($array){
        echo "<pre>";
         print_r($array);
             #print_r 은 변수에 대해 읽을수 있는 수준의 정보를 출력
             //[인덱스번호] = > "값"  의 형태로 출력
        echo "</pre>";

    }

    show($fruits);
    


    ?>




</body>
</html>