<?php 

    $name = 'ósama'. '<br>';
    echo $name;
    // sleep(5); // بالثواني
    // usleep(5000000); // بالمايكرو ثانيه
    // time_sleep_until(time() + 5);
    echo 'sorry forget to say hi' . '<br>';

    $x = uniqid();
    // $x = uniqid('script1_' , true);
    echo $x . '<br>';
    var_dump($x) . '<br>';

    $file = 'hala.txt';
    // @fopen($file , r) or exit('this file is not defined') . '<br>'; 
    echo '3sh';

    
    foreach(filter_list() as $filters){     // بطبع هنا كل الفلترات اللي عندي
        echo $filters . '<br>';
    }

  
?>

     <form action="filter.php" method="POST">
                <input type="text" name="text">
                <input type="submit" value="Send">
            </form>