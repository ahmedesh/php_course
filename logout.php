<?php 

session_start();
session_unset(); // بتعمل كلير للسيشن
session_destroy(); // بتدمر السيشن
print_r($_SESSION);

?>