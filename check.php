<?php
    session_start();
    $admins = array('osama' , 'ahmed' , 'sayed' , 'hassan' , 'ali');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user =  $_POST['username'];
        if(in_array($user , $admins)){
            $_SESSION['user'] = $user;
            echo 'welcome ' . $user . ' you will be admin';
        }  
        else{
            echo 'sorry ' . $user . ' you don\'t be admin';
        }  
    }
    else{
        echo 'error : you can\'t browse this page directly';
    }
?>