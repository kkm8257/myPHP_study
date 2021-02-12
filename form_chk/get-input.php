

<?php

/*
    #get방식으로 손수 넣어서 해줄것  ex) ?productid=hihi&limit=7

    $product_id=$_GET["productid"];
    $limit=$_GET["limit"];


?>

<h1>get input</h1>

<p>
<?=$product_id?> -- <?=$limit?>
</p>
*/



    echo "----------------------------";

    $product_id=filter_input(INPUT_GET,$_GET["productid"],FILTER_VALIDATE_INT);
    #GET방식에서 넘어온 값이 숫자(VALIDATE_INT) 인지 유효성검사(FILTER_INPUT)

    #filter_input(들어오는타입 , 변수명(name) , 필터에 쓸수있는 옵션 )

    $limit=filter_input(INPUT_GET,$_GET["limit"],FILTER_VALIDATE_INT);

    #결과값은 true와 false로 저장이 된다.

    #그래서 그 결과값을 통해 if문으로 관리

    if($product_id==false){
        $product_id=10;
    }
    if($limit == false){
        $limit=10;
    }

?>



<h1>get input</h1>

<p>
<?=$product_id?> -- <?=$limit?>
</p>


