<?php


 

// session_start() 함수는 세션 아이디가 이미 존재하는지를 확인하고,
// 존재하지 않으면 새로운 아이디를 만듭니다.

// 만약 이미 존재하는 세션 아이디가 있을 때는 원래 있던 세션 변수를 다시 불러와서 사용할 수 있도록 합니다.

    session_start();

    require_once('config.php');
    require_once('functions.php');
    
    ensure_user_is_authenticated(); //어드민으로 들어오긴했는데
    //관리자정보와 일치하는지 확인

    echo $_SESSION['email'];


    //세션을 지우는 2가지방법

    //unset($_SESSION['NAME'])
    //$_SESSION['NAME'] =''  빈값넣기
    
    //세션비우기
    //session_unset(); //세션배열의 모든값 삭제




?>

<a href="logout.php">logout</a>

<?php

    include('footer.php');

?>

