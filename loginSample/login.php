<?php

    $title = "Login";
    include('header.php');
    require_once("functions.php");

    //$_SERVER['REQUEST_METHOD] 메소드방식 알아내기
    //$_SERVER['USER_AGENT'] 브라우저 종류
    //$_SERVER['SERVER_NAME']사이트도메인
    //$_SERVER['PHP_SELF'] 사이트의 경로 (도메인 제외)

    /*
    if($_SERVER['REQUEST_METHOD']=='POST'){
        output($_POST);  //function에 있는 함수이용 print_r  $_POST는 포스트로 넘어온 것을 말함
        //submit 버튼에도 name값을 주면 post로 같이넘어오는데 이때 값은 value가 넘어온다
    
    }
    */

    if(isset($_POST['login'])){
       // output($_POST);  //위와 동일한 방식

       //이메일형식을 지켰는지 확인하기위한 필터 사용

        $email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
        if($email==false){
            $status="이메일 형식에 맞게 작성하세요";
        }


    }



?>

<form action = "" method="POST">

<!--action에 아무것도안넣으면 새로고침하면서 자기 페이지로 값을 전송
    그래서 위에 if문들이 수행되는거임

-->

    <p>
        <label for="email"></label>
        <input type="text" id="email" name="email">
    </p>
    <p>
        <label for="password"></label>
        <input type="password" id="password" name="password">
    </p>
        <p>
        <input type="submit" name="login" value="Login">
    </p>


</form>

<div class="error">
    <p>
        <?php
            if(isset($status)){
                echo $status;
            }

        ?>


    </p>


</div>


<?php

    include("footer.php");


?>

