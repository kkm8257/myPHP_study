<?php

    #쿠키를 이전시간으로 돌려버림 , 그게 삭제


    $cookieName='city';
    $cookieValue="Seoul";



    setcookie($cookieName, $cookieValue ,time()-60,'/' );

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>쿠키삭제</title>
</head>
<body>

    <?php
        echo $cookieName."의 쿠키가 삭제되었습니다.";
        #쿠키확인법은 f12 application   에  Cookies 에 http 누르면 된다.
    ?>
</body>
</html>