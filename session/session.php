
<?php
#세션은 항상 문서의 최상단에 쓰는게 좋다.

    session_start();//세션시작
    $_SESSION['City'] = 'Seoul';  #City 라는 세션에 값을 Seoul을 주었다
    $_SESSION['gu']='Jongro';
    



?>

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
        echo '세션이 등록되었습니다.<br>';
        if(!isset($_SESSION['City'])){
            echo '세션이 없습니다.<br>';
        }else{
            echo $_SESSION['City']."라는 세션이 등록되어있습니다.<br>";

            print_r($_SESSION);
            #변수를 , 사람이 알아볼수 있게끔 표현해주는 함수
            #위에같은경우  모든 세션의 정보를 연관 배열 형태로 출력
            #php.ini 를 열어서  session.save_path 를찾으면
            #세션이 저장된 경로를 찾을수 있다
            #여기서는 session.save_path = "C:/Bitnami/WAMPST~1.1-0/php/tmp" 라고 나옴
            #폴더에서 세션파일을 열면(vsc로)  실제로 읽을 수 가 있음
            
        }



    ?>
</body>
</html>