    <?php   
    $conn = mysqli_connect("localhost","root","111111","abc_corp");
    if(!$conn){
        echo "db에 연결 값이 없습니다.".mysqli_connect_error();

    }else{
        echo "db에 접속했습니다!";
    }
    //table에서 글을 조회해야함

    $view_num=$_GET['number'];
    $sql="SELECT * FROM msg_board WHERE number={$view_num}";
    $result = mysqli_query($conn,$sql);



    ?>

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
    <h2>글 내용</h2>
    <?php
        if($row = mysqli_fetch_array($result)){

    ?>
  
    <h3>글번호 : <?=$row['number']?> / 글쓴이 : <?=$row['name']?></h3>
    <div>
        <?= $row['message']?>
    </div>

    <?php
      }
    ?>
    <a href='index.php'>메인으로 돌아가기</a>


</body>
</html>