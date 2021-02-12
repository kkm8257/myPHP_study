<?php

$title='login';
    include_once('../include/header/header2.php');
    require_once('../include/function/function.php');


?>


<?php
    $name=$_POST["userName"];
    $email=$_POST["userEmail"];
    echo $name."님의 입력한 이메일은 ".$email."입니다.";
?>

<?php


    include_once('../include/footer/footer.php');
?>