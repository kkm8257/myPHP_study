<?php

    //localhost 대신에 127.0.0.1  써도된다

    //비트나미인경우
    $conn = mysqli_connect("localhost","root","111111","abc_corp");
    

    if(!$conn){
        echo "db에 연결 값이 없습니다.".mysqli_connect_error();

    }else{
        echo "db에 접속했습니다.";
    }

    echo "<br>";

    $user_name=$_POST['name'];
    $user_msg=$_POST['message'];

    // print $user_name."<br>";
    // print $user_msg;


//https://dev.mysql.com/doc/refman/8.0/en/sql-data-manipulation-statements.html
//crud 관련 정보


    $sql = "INSERT INTO msg_board(name,message) VALUES('$user_name','$user_msg')";
    $result= mysqli_query($conn,$sql);

    //리턴값은 true or false

    if($result===false){
        echo '저장하지 못 했습니다.';
        error_log(mysqli_error($conn));//에러로그기록
    }else{

        echo '저장 성공';

    }



    mysqli_close($conn);
    print "<hr/><a href='index.html'>메인화면으로 이동하기</a>";


?>