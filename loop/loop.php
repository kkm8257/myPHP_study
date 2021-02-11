<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Loop</h1>

<h2>while</h2>
<?php
    $i=0;
    while($i<5){
        echo "{$i}<br>";
        $i++;
    }


?>

<h2>do/while</h2>
<?php
    $i=0;

    do{
        echo "{$i}<br>";
        $i++;
    }while($i<5);

?>

<h2>for</h2>

<?php

    for($i=0;$i<5;$i++){

          echo "{$i}<br>";

    }

?>

<h2>foreach</h2>
<?php

#foreach(배열 as 값){}

$arr=array(0,1,2,3,4);

foreach($arr as $item){

    echo "{$item}<br>";

}


?>

<h2>연관배열</h2>

<?php

    $scores=array(
    
        '국어' => 80,
        '영어' => 85,
        '수학' => 90
        
    );

    foreach($scores as $key => $score){

        echo "{$key} ___ {$score}<br>";

    }


?>


 


</body>
</html>