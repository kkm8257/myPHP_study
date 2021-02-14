
<!--

https://dev.mysql.com/doc/refman/8.0/en/connecting-disconnecting.html
연결방법 참고

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>글쓰기</h1>
    <form action="insert.php" method="post">
        <p>
            <label for="name">이름 : </label>
            <input type="text" id="name" name="name">
        </p>
        <p>
            <label for="message">메시지 : </label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </p>
        <input type="submit" value="글쓰기">
    </form>    
</body>
</html>