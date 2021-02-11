



<?php
    $title="HOME";  //include안에 보면 title을 $title로 해놨음
    //그렇기때문에 title값을 설정하지 않고 먼저 include를 먼저 실행하면
    //오류가 발생한다.
    //그러므로 isset()함수를 이용하면 좀 더 안전함 (home2에 구현)


    include("header/header.php");

    echo "hihi";    

?>
    
</body>
</html>