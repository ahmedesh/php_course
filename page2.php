<?php

session_start();
echo 'Hello ' . $_SESSION['userName'] . ' How are you' . '<br />';
echo 'Your favourite food is ' . $_SESSION['favFood'] . '<br />';
echo "<a href='page3.php'> page3 </a>";
echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    
?>