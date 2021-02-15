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
    <h2>글 목록</h2>
<ul>

    <?php   
        
    $conn = mysqli_connect("localhost","root","111111","abc_corp");
    

    if(!$conn){
        echo "db에 연결 값이 없습니다.".mysqli_connect_error();

    }else{
        echo "db에 접속했습니다!";
    }
    //table에서 글을 조회해야함

    $sql="SELECT * FROM msg_board";
    $result = mysqli_query($conn,$sql);
    // echo 값을 그대로 출력
    // print 값을 그대로 출력
    //print_r 배열, 객체 모양을 그대로 출력
    //var_dump 상세하게 출력

    // print_r($result);

    $list='';

    //mysqli_fetch_array select 쿼리의 결과값을 인자로 사용하며
    //한번에 한개의 데이터 행을 배열의 형태로 가져온다.
    //더이상 배열의 형태로 반환할 데이터가 없을때까지 true를 반환

    while($row=mysqli_fetch_array($result)){
        //php에서 문자열안에서 변수출력은 {} 사용
        $list=$list."<li>{$row['number']} : <a href=\"view.php?number={$row['number']}\">{$row['name']}</a></li>";
       
    }
        echo $list;
    ?>

</ul>

    <hr>
        <p>
            <a href="write.php">글쓰기</a>
        </p>
    <h2>글 검색</h2>   
    <form action="search_result.php" method="post">
        <h3>검색할 메시지 번호를 입력하세요.</h3>
        <p>
            <label for="search">키워드 : </label>
            <input type="text" id="search" name="skey">
        </p>
        <input type="submit" value="검색">
    </form>
    <hr>
    <h2>글 삭제</h2>   
    <form action="delete.php" method="post">
        <h3>삭제할 메시지 번호를 입력하세요.</h3>
        <p>
            <label for="msgdel">번호 : </label>
            <input type="text" id="msgdel" name="delnum">
        </p>
        <input type="submit" value="삭제">
    </form>

</body>
</html>