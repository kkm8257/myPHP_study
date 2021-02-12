<?php

    #setCookie 에는  이름 , 값 , 만기 날짜 , 경로    가 필요함

    $cookieName='city';
    $cookieValue="Seoul";


    #만기 날짜 사용시 ,  php에서 현재시간을 내보내는건 time() 
    # 60초만 유지되게 하고싶으면 time()+60

    #'/' 는 이 파일이 있는 루트 를 말함

    setcookie($cookieName, $cookieValue ,time()+60,'/' );


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>쿠키 테스트</title>
</head>
<body>

    <h1>쿠키 체크하기</h1>
    <?php

        #등록된 쿠키는 $_COOKIE[name] 으로 확인한다.

        #달러사인 언더스코어로 되어있는것들  $_GET, $_POST , $_COOKIE, $_SESSION 
        #이런 것들은 슈퍼글로벌 변수다.



        if(isset($_COOKIE[$cookieName])){
            echo $cookieName.'의 쿠키는 생성되었습니다';
            echo '생성된 값은 '.$_COOKIE[$cookieName].'입니다.';

            #처음 접속하면 쿠키가 생성되니까 , 맨처음에는 없음 새로고침하면 보임
        }
        else{
            echo $cookieName.'의 쿠키는 생성되지 않았습니다.';
 

        }


    ?>
    
</body>
</html>