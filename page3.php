<?php

session_start();
echo 'Hello ' . $_SESSION['userName'] . ' you are in page3' . '<br />';
echo 'Your favourite food is ' . $_SESSION['favFood'] . '<br />';
$_SESSION['favFood'] = 'Creep';  // Modify Session
echo 'Your favourite food is ' . $_SESSION['favFood'] . '<br />';
echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    echo '<a href="logout.php">Exit </a>';
?>