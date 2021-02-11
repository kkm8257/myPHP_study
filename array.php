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

//$배열이름 = array();
$fruits= array();
$fruits[0]='apple';
$fruits[1]='banana';
$fruits[2]='orange';

#echo $fruits[0];


#isset은 괄호안의 값이 세팅이 되어있으면 true
#isset에 여러개를 확인도가능

#isset(변수명,변수명)   

    if(isset($fruits[3])){  #3번인덱스 값이 없으니까 안나옴
        echo $fruits[3]; 
    }
    else{
        echo "과일세팅필요";
    }

echo "---------------------------------------------</br>";

    $fruits2=array('apple','banana','orange');

    for($i =0 ; $i<count($fruits2); $i++){

        echo $fruits2[$i]."</br>";

        }


echo "---------------------------------------------</br>";


    foreach($fruits2 as $item){  //fruits안의 값 각각을 item으로  두고 for문을 쓰겠다.

        echo $item."<br>";

    }

echo "---------------------------------------------</br>";

    #연관 배열 Associative Array
    $prices = array();
    $prices['apple']=1000;
    $prices['banana']=2000;
    $prices['orange']=3000;

    foreach($prices as $key => $price){

        #prices 배열의 인덱스에 $key값으로 넣어서 나온 값을 $price라고 할것이다.
        #즉 $key값을 넣어서 나온 결과값이 $price 다 라는 얘기

        echo $key." __ ".$price."<br>";


    }


?>

</body>
</html>