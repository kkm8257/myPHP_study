



<?php
    //$title="HOME";  //include안에 보면 title을 $title로 해놨음
  
    //home과달리 title을 설정하지 않은경우

    include("header/header2.php");
    require("function/function.php");
    
    //그러면 include와 require의 차이가무엇인가?
    //include는 해당 파일이 없거나 문제가있으면 그 부분만 오류를 출력하고
    //뒷 코드는 무사 실행을 한다

    //require은 해당 부분이 오류발생시 치명오류로 여기고 뒷 코드를 실행하지않는다.
    //주료 db와 연동해서 작업하거나 func관련 작업할 경우 사용



    //include를 두번 (예를들어 헤더부분인경우) 쓰면 두번 호출

    //include_once는 한번만 수행한다. include_once를 두번해도 한번밖에 호출안함

    //require은 같은 것을 두번 수행하면 오류가 뜬다.

    //require도 require_once로 수행하는게 안전(두번 써도 한번 사용된다.)

    //결론적으로 include와 require는 크게 차이는 없어보이지만
    //once를 안쓰는 경우 차이는 분명히 존재함


    echo "hihi<br>";    
    
    f1();



?>

<?php
    include('footer/footer.php');


?>
    
