<?php

$title='login';
    include_once('../include/header/header2.php');
    require_once('../include/function/function.php');


?>

<form action="request.php" method="post">
    <p>
        <label for="userName">Name</label><!--Name 텍스트부분을 클릭했을때 , input부분이 활성화되려면 연결되어야한다.-->
        <input type="text" name="userName" id="userName"> <!--input의 id를 label의 for에 적어준다.-->
    </p>
    <p>
        <label for="userEmail">Email</label><!--Name 텍스트부분을 클릭했을때 , input부분이 활성화되려면 연결되어야한다.-->
        <input type="email" name="userEmail" id="userEmail"> <!--input의 id를 label의 for에 적어준다.-->
    </p>
 
    <p>
        <input type="submit"  value="로그인">
    </p>

</form>


<?php


    include_once('../include/footer/footer.php');
?>