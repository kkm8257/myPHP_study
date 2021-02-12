
<?php
#세션은 항상 문서의 최상단에 쓰는게 좋다.

    session_start();//세션시작


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

        //session_unset();//세션을 모두 버림 (tmp폴더에서 파일이 남아있으나 공백임)
        session_destroy(); //세션의 모든 변수를 삭제 (tmp폴더에서 파일이 삭제됨)

        //php.net 에서 session_destroy 검색

        print_r($_SESSION);


    ?>
</body>
</html>