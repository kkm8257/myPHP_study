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

    print $user_name."<br>";
    print $user_msg;

    mysqli_close($conn);
    print "<hr/><a href='index.html'>메인화면으로 이동하기</a>";


?>