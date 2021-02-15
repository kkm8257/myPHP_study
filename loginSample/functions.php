<?php
    function output($value){

        echo '<pre>';

        print_r($value);

        echo '</pre>';

    }


    function authenticate_user($email, $password){
        if($email==USER_NAME && $password ==PASSWORD){

            return true;
        }
    }
    
    function redirect($url){

        header("Location:$url");  //해당페이지로 이동하는 함수
        //header("Location : '주소' ");  형식
        
 
    }

    function is_user_authenticated(){
        return isset($_SESSION['email']); //이메일의 값이 존재하는지
    }

    function ensure_user_is_authenticated(){
        if(!is_user_authenticated()){
            //false인경우
            //로그인페이지로 돌려보내기
            redirect('login.php');
            die();
        }

    }


?>