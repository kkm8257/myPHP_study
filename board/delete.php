<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
</head>
<body>


    <h1>게시판</h1>
    <h2>삭제 결과</h2>
<ul>

    <?php   
        
    $conn = mysqli_connect("localhost","root","111111","abc_corp");
    

    if(!$conn){
        echo "db에 연결 값이 없습니다.".mysqli_connect_error();

    }else{
        echo "db에 접속했습니다!";
    }
    //table에서 글을 조회해야함

    $user_delnum=$_POST['delnum'];


    $sqlDel="DELETE FROM msg_board WHERE number= $user_delnum";
    $result = mysqli_query($conn,$sqlDel);


    //위에가 지우기 끝
    //아래는 지운이후 재 조회

     $sql="SELECT * FROM msg_board";
    $result = mysqli_query($conn,$sql);
    $list='';

    while($row=mysqli_fetch_array($result)){
        //php에서 문자열안에서 변수출력은 {} 사용
        $list=$list."<li>{$row['number']} : <a href=\"view.php?number={$row['number']}\">{$row['name']}</a></li>";
       
    }
        echo $list;

        mysqli_close($conn);
    ?>

</ul>
<?php
    echo $user_delnum."번쨰 데이터 삭제";
?>


    <a href='index.php'>메인으로 돌아가기</a>



</body>
</html>