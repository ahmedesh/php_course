<?php
// this is comment
/* this is comment */
# this is comment

    $var1       =   'variable1';
    $var2       =   'variable2';
    $var3       =      false   ;
    $var4       =   100;
    $var5       =   100.5;
    $var6       =   null;
    $var7       =   array(
        'A' => 'val1',
        'B' => 'val2',
        'C' => 'val3',
    );
    $var8       =   fopen('osama.txt' , 'r');
    $homePage   =   'php variable' ;
    $heading    =   'welcome to' . " " . $var1 . " and " . $var2;
    $brief      =   'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores quae';
    echo 'gettype' . ': ' ; echo gettype($var1); echo '<br>';
    echo 'variable-dump' . ': '; echo var_dump($var1); echo '<br>';
    echo 'gettype' . ': ' ; echo gettype($var3); echo '<br>';
    echo 'variable-dump' . ': ' ; echo var_dump($var3); echo '<br>';
    echo 'gettype' . ': ' ; echo gettype($var4); echo '<br>';
    echo 'variable-dump' . ': ' ; echo var_dump($var4); echo '<br>';
    echo 'gettype' . ': ' ; echo gettype($var5); echo '<br>';
    echo 'variable-dump' . ': ' ; echo var_dump($var5); echo '<br>';
    echo 'gettype' . ': ' ; echo gettype($var6); echo '<br>';
    echo 'variable-dump' . ': ' ; echo var_dump($var6); echo '<br>';
    echo 'gettype' . ': ' ; echo gettype($var7); echo '<br>';
    echo 'variable-dump' . ': ' ; echo var_dump($var7); echo '<br>';
    echo 'gettype' . ': ' ; echo gettype($var8); echo '<br>';
    echo 'variable-dump' . ': ' ; echo var_dump($var8); echo '<br>';
    if($var5>$var4){
        echo 'good <br>';
    }
    else{
        echo 'bad <br>';
    }
    define('firstName' , 'ahmed' , true);
    echo FIRSTNAME . '<br>';
    echo __DIR__ . '<br>';
    echo __FILE__ . '<br>';
    echo __LINE__ . '<br>';
    echo PHP_INT_MAX . '<br>';
    const lasstName = 'ali';
    echo lasstName . '<br>';

echo 2 ** 10 . '<br>';    // 2 اس 10 

$currency = 2;
$currency += 2.5 ;
$currencyName = ' Rial Saudi';
$currency .= $currencyName;
echo $currency . '<br>';

$a = 100;
$b = 100;
echo $a == $b . '<br>';

$siteTheme = 'Main';
  if($siteTheme == 'Main'){
      $css = 'main.css';
  }
  else{
      $css = 'white.css';
  }
  $myincrement = null;
  echo ++$myincrement . '<br>';
  $myincrement2 = 'AZA';
  echo ++$myincrement2 . '<br>';

//   $file = @fopen('ali.txt' , 'r') or die('this file is not found');
// array and for-loop
setcookie('ads' , 'love' , time()+3600 , '/');

$maincolor = '#fff';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo $_POST['color'];
    $maincolor = $_POST['color'];
    setcookie('Background', '$maincolor' , time()+3600 , '/');   // بسجلها ف كوكي عشان لما اعمل رفريش للصفحه ميجبش اللون الاساسي لا يجيب اخر لون انا عملته
}
    if(isset($_COOKIE['Background'])){
        $body = $_COOKIE['Background'];
    }
    else{
        $body = $maincolor;
    }


    session_start();
    $_SESSION['userName'] = 'ahmed ads';
    $_SESSION['favFood'] = 'pizza';
    echo "<a style='color:red' href='page2.php'> page2 </a>";
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
include 'counter.php';
 echo '<a style="color:red" href = "login.php" > login </a> ';
    ?>

<!DOCTYPE html>

<html>
    <head>
    <meta charset='UTF-8'>
        <title> <?php echo $homePage; ?> </title>
        <link rel='stylesheet' href="<?php echo $css ;?>">
    </head>

        <body style="background-color:<?php echo $body ; ?>">
            <form action= "<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
            <input type='color' name ='color'>
            <input type='submit' value='choose'>
</form>
            
        <?php echo "
        <h1> $heading </h1>
            <p> $heading  $brief </p>
       " ?>

       <select name='year'>
            <?php 
            for($year = 1900 ; $year <= 2015 ; $year++){
                echo '<option>' . $year . '</option>';
            }
            ?>
       </select>

       <?php $langs = array('html' , 'css' , 'javascript' , 'Ajax' , 'paython' , 'Ruby');
                 echo '<ul>';
            for($i = 1 ; $i <= count($langs)-1 ; $i++){
                echo '<li>' . $langs[$i] . '</li>';
            } 
           echo '</ul>';
           ?>
 <?php 
            for($i = 1 ; $i <=5 ; $i++){
                echo $i . '<br>';
            }
            ?> 
          
        <?php 
        $i = 1;
            for( ;  ; ){
                if($i > 5){
                break;
            }
                echo $i . '<br>';
                $i++;
            }
            ?>
       
            <?php 
                $i = 1;
                while($i<=5){
                    echo $i . '<br>';
                    $i++;
                }
            ?>
            <?php 
                $numbers = array('1' => 'one',
                                 '2' => 'two',
                                 '3' => 'three',
                                 '4' => 'four');
                foreach ($numbers as $key => $value){
                    echo $key . ' => ' . $value . '<br>' ;
                }
            ?>
        <?php 
                function optionYear($start , $end){
                   echo '<select>';
                    for($Year = $start ; $Year <= $end ; $Year++)
                    echo "<option value= '$Year'>" . $Year * 2 . '</option>';
                   echo '</select>';
                }
                optionYear(1750 , 2000);
                optionYear(1980 , 2000);

                $workers = array('ali' , 'mohamed' , 'yousef' , 'fadey' , 'ramy' ,'walid');
                $workers [0] = 'waheed'; // كدا هستبدلي اسم علي ب اسم وحيد
                $workers [] = 'rady';  // بضيف علي ال array اللي فوق يعني عادي
                echo "<pre>";
                print_r($workers);
                 echo "</pre>";
                 print_r($workers{1} . '<br>');

                 $search = in_array('walid' , $workers);
                    echo $search . '<br>';
                

                $search1 = array_search('ramy' , $workers);
                echo $search1 . '<br>';

                $search2 = array_key_exists(2 , $workers);
                echo $search2 . '<br>' ;


                 $workers1 [3] = 'ahmed';
                 $workers1 [] = 'fares';
                 $workers1 [1] = 'eyad';
                 $workers1 [] = 'noran';
                 $workers1 [] = 'hor'; 
                echo "<pre>";
                print_r($workers1);
                 echo "</pre>";
                 echo $workers1{4};

                 $langs = array('html' , 'html5' , 'css' , 'css3' , 'js');
                 $langs [] = 'bootstrap';
                 echo '<ul>';
                 foreach($langs as $value){
                     echo '<li>' . $value . '</li>';
                 }
                 echo '</ul>';


                 $langs = array('kotlin' , 'java' , 'andriod' , 'ios' , 'javafx');
                 $langs [] = 'react-native';
                 echo '<ol>';
                 for($value = 0 ; $value < count($langs) ; $value++){
                     echo '<li>' . $langs[$value] . '</li>';
                 }
                 echo '</ol>';


                 $diet = array('egg' , 'meat' , array('fish' , 'meal' , 'burger' , 'pizza' , 'caw'), 'salad' , 'chesses' ,'fruites');
                $diet [0] = 'rice'; // كدا هستبدلي اسم علي ب اسم وحيد
                $diet [] = 'soup';  // بضيف علي ال array اللي فوق يعني عادي
                echo "<pre>";
                print_r($diet);
                 echo "</pre>";
                 print_r($diet[2][2]);
 

                 $diet = array('one' => array('salad','chesses'),
                               'two' =>  array('egg','meat'),
                               'three' => array('fish','meal'),
                               'four' => array('burger','pizza' , array('five' => 'farawla',
                                                                         'six' =>'banana')),
                );
                 echo "<pre>";
                 print_r($diet);
                  echo "</pre>";
                  print_r($diet['four'][2]['five']);
// Sort Associative Array

                //   asort($diet);
                //   arsort($diet);
                //   ksort($diet);
                  krsort($diet);
                  echo "<pre>";
                 print_r($diet);
                  echo "</pre>";
                             

// add item from array
                  $add_item = array(1 , 'abdo' , 'salem' , 'rady' ,'fawzy');
                  echo '<pre>';
                  print_r($add_item);
                  echo '</pre>';

                  $add_item[] = 'adel';             // بضيف العناصر فالاخر خالص
                  echo '<pre>';
                  print_r($add_item);
                  echo '</pre>';

                  array_push($add_item , 'aml' , 'rahma');     // بضيف العناصر فالاخر خالص
                  echo '<pre>';
                  print_r($add_item);
                  echo '</pre>';

                  array_unshift($add_item , 'eyad' , 'omar');     // بضيف العناصر فالاول
                  echo '<pre>';
                  print_r($add_item);
                  echo '</pre>';
// remove item from array
                  array_shift($add_item);     // بشيل اول عنصر فالمصفوفه
                  echo '<pre>';
                  print_r($add_item);
                  echo '</pre>';

                  array_pop($add_item);     //  بشيل اخر عنصر فالمصفوفه 
                  echo '<pre>';
                  print_r($add_item);
                  echo '</pre>';

// Sort indexed Array

// sort($add_item);
  rsort($add_item , SORT_STRING);
echo '<pre>';   
print_r($add_item);
echo '</pre>';
                  $reversed = array_reverse($add_item);   // بيعكس ترتيب العناصر بتاعه المصفوفه ايا كان ترتيبها اي هيعكسها 
                  shuffle($reversed);      // كل مره تحمل فيها الصفحه بيعمل ترتيب عشوائي للعناصر
                  echo '<pre>';   
                print_r($reversed);
                echo '</pre>';
                  
 // array_fill
            $Array_Fill = array_fill(2 , 5 , 'ali');
            echo '<pre>';
            print_r($Array_Fill);
            echo '</pre>';     
            
            $Array_Fill = array_fill(-2 , 5 , array_fill(5 , 5 , 'ali'));
            echo '<pre>';
            print_r($Array_Fill);
            echo '</pre>';  
// array_sum
            $Array_Sum = array( 'ahmed' , 2 , 5 , 10 , 4.6 );
            $myArray_Sum = array_sum($Array_Sum);
            echo '<pre>';
            print_r($Array_Sum);
            print_r('myArray_Sum is: ' . $myArray_Sum . '<br>');
            echo '</pre>';  

// Array Random
            $ArrayRandom = array('ahmed' , 'abdalazim' , 'ahmed' , 'nour' , 'abdalazim' , 'fadrid');
            $RandomKey = array_rand($ArrayRandom , 2);
            echo '<pre>';
            print_r($RandomKey);
            echo '</pre>';
            print_r( $ArrayRandom[$RandomKey[0]] . "<br>");
            print_r( $ArrayRandom[$RandomKey[1]] . "<br>");

            $Array_Unique = array_unique($ArrayRandom);
            echo '<pre>';
            print_r($Array_Unique);
            echo '</pre>';

   // Explode 
                    $Explode = 'home - about - services - news - debug';
                    $Explode_Array = explode(' - ' , $Explode);
                    echo '<pre>';
                    print_r($Explode_Array);
                    echo '</pre>';

                    for($i = 0 ; $i < count($Explode_Array) ; $i++){
                        echo "<link rel='stylesheet' href='css/" . $Explode_Array[$i] . ".css'>"; 
                    }

                    $str_split = str_split($Explode , 3);
                    echo '<pre>';
                    print_r($str_split);
                    echo '</pre>'; 

                    $chunk_split = chunk_split($Explode , 3 , ' @ ');
                    echo '<pre>';
                    print_r($chunk_split);
                    echo '</pre>'; 

// Implode & join
                    $Implode = array('home' , 'about' , 'services' , 'news' , 'debug');
                    $ImplodeArray = join(' ' , $Implode); // == $ImplodeArray = implode(' ' , $Implode);
                    echo '<pre>';
                    print_r($ImplodeArray);
                    echo '</pre>';

// str_replace
                        $myReplace = 'I love php because php is very useful and php is famous ';

                        $str_replace = str_replace( 'php' , 'js' , $myReplace , $i);
                        echo '<pre>';
                        echo $str_replace . 'and count = ' . $i ;
                        echo '</pre>';

                        $str_replace = str_replace( array('php' , 'because' , 'useful' , '') , array('js' , 'as' , 'important') , $myReplace , $i);
                        echo '<pre>';
                        echo $str_replace . 'and count = ' . $i ;
                        echo '</pre>';

                        $myReplace =  explode(' ' , $myReplace);
                        echo '<pre>';
                        print_r($myReplace);
                        echo '</pre>';

                        $str_replace = str_replace( 'php' , 'js' , $myReplace , $i);
                        echo '<pre>';
                        print_r( $str_replace); 
                        echo 'and count = ' . $i ;
                        echo '</pre>';

                        $str_replace = str_replace( array('php' , 'because' , 'useful' , '') , array('js' , 'as' , 'important') , $myReplace , $i);
                        echo '<pre>';
                        print_r( $str_replace) ;
                        echo 'and count = ' . $i ;
                        echo '</pre>';
                       
                        $Str_Repeat = 'osama';
                        echo str_repeat($Str_Repeat , 4) ;
                        echo '<br>';
                        echo str_shuffle($Str_Repeat);
                        echo '<br>';
                        echo strlen($Str_Repeat) . '<br>';

                $Slashes = "<i> i </i> <b> love </b>  <a href='php.net'>php.net</a> ";
                echo $Slashes . '<br>';
                echo addslashes($Slashes) . '<br />';
                echo stripslashes($Slashes) . '<br />';
                echo strip_tags($Slashes , '<i><a>') . '<br />';

                $case = "hello ahmed how & \n old \x0B\x0B\x0B are you?";
                echo nl2br($case) . '<br>';
                echo strtoupper($case) . '<br>';
                echo strtolower($case) . '<br>';
                echo ucfirst($case) . '<br>';
                echo lcfirst($case) . '<br>';
                echo ucwords($case) . '<br>';

                $tirmed = trim($case , 'helo you');
                echo $tirmed . '<br>';
                echo var_dump($tirmed) . '<br> <br>' ;

                echo str_word_count($case , 0 , '&') . "<br>";
                echo '<pre>';
                print_r(str_word_count($case , 1 , '&')) . "<br>";
                echo '</pre>';
                echo '<pre>';
                print_r(str_word_count($case , 2 , '&')) . "<br>";
                echo '</pre>';


                $link = "name=ahmed & age=21 & city=abuhammad & lastNAme=ahmed";
                parse_str($link);
                echo $age;
                parse_str($link , $myLinkArray);
                echo '<pre>';
                print_r($myLinkArray);
                echo '</pre>';
                echo strpos($link ,'ahmed' , 4 ) . '<br />';
                echo stripos($link ,'Ahmed' ) . '<br />';
                echo strrpos($link ,'ahmed' ) . '<br />';
                echo strripos($link ,'Ahmed' ) . '<br />';

                echo strstr($link , '21') . '<br />';
                echo strchr($link , '21' , true) . '<br />';
                echo stristr($link , 'AHmeD') . '<br />';
                echo substr($link , 0 , 4) . '<br / >';
                echo substr($link , -5 , 5) . '<br / >';
                echo substr($link , -5 , -5) . '<br / >';
                echo substr_count($link , 'ahmed' ) . '<br />';
                

                $strr1 = "zphp";
                $strr2 = "php2";
                echo strcmp($strr1 , $strr2) . '<br />';
                echo strncmp($strr1 , $strr2 , 4) . '<br />';
                echo strrev($strr2) . '<br />';
                echo substr_compare($strr1 , $strr2 , 0);
                include 'global.php';
                    echo $global . '<br />';
                    echo 'hello' . '<br />';
                include_once 'global.php';
                    echo $global . '<br />';
                    echo 'hello' . '<br />';
                require 'global.php';
                    echo $global . '<br />';
                    echo 'hello' . '<br />';
                require_once 'global.php';
                    echo $global . '<br />';
                    echo 'hello' . '<br />';

// switch
                        $browser = 'Firefox';
                        switch($browser){
                            case 'Google Chrom':
                                case 'Firefox':
                                echo 'your favourit browser are Google Chrom & Firefox' . '<br />' ;
                                echo 'google chrom & Firefox are the best browser';
                        break;

                        case 'Internet Explorer':
                            echo 'your favourit browser is Internet Explorer' . '<br />';
                    break;

                    case 'Opera':
                        echo 'your favourit browser is Opera' . '<br />';
                break;

                 default:
                  echo 'your favourit browser is not here' . '<br />';
                        }
                        echo  '<br />';
 
                        echo __FILE__ . '<br />';             // هيطبع مسار الملف
                        echo __Dir__ . '<br />';    // ==  echo dirname(__FILE__) . '<br />';   هيطبع مسار الفولدر

                        $file = 'D:\Web\php\php-xampp\htdocs\php-course/osama.txt';
                        if(file_exists($file)){
                            echo 'this [ ' . $file . ' ] is exist' . '<br />';
                            if(is_writable($file)){
                                file_put_contents($file , ' & added with php file put contents');
                            }
                            else{
                                file_put_contents($file , ' & added with php file put contents');   
                            }
                            // include_once('osama.txt');
                        }
                        else{
                            echo 'this [ ' . $file . ' ] not exist' . '<br />';
                            // file_put_contents($file , 'created and added with php file put contents');
                        }
                        $folder = '3sh';
                        mkdir($folder);
                        if(is_dir($folder)){
                            rmdir($folder);
                            echo 'this Directory ' . $folder . ' is deleted' . '<br />';
                        }
                        else{
                            echo 'there\'s no directory with this name' . '<br />';
                        }
                        
                        $folder2 = 'Ads';
                        $directory = __DIR__ . '/Ads/';
                        if(is_dir($folder2)){
                            echo 'this Directory ' . $folder2 . ' is exists' . '<br />';
                            echo file_put_contents( $directory . 'ads.txt' , 'this is your file ads hello' , FILE_APPEND | LOCK_EX) . '<br />';

                            chmod( $directory . 'ads.txt' , 0444);   // un writable
                            chmod( $directory . 'ads.txt' , 0755);   // is writable
                        }
                        else{
                            mkdir($folder2);
                            echo 'this Directory ' . $folder2 . ' is created' . '<br />';
                        }

                    // include_once dirname(__FILE__) . '/../inc.php' . '<br />';
                    // include_once __dir__ . '/../inc.php';
                    echo dirname(__FILE__) . '\Ads' . '<br />';
                    echo dirname(__FILE__ , 3) . '<br />';
                    echo __FILE__ . '<br />';
                    echo basename(__FILE__) . '<br />';
                    echo basename(__FILE__ , '.php') . '<br />';
                    if( basename(__FILE__ , '.php') == 'osama'){
                        echo 'good your file is ready now' . '<br />';
                    }
                echo __FILE__ .'<br />';
    echo  __DIR__ . '/Ads/get.txt'. '<br />';
                echo file_get_contents(__DIR__ . '/Ads/get.txt' , false , null , 0 ,11) . '<br />';

                if(!copy(__DIR__ . '/Ads/get.txt' , __DIR__ . '/Ads/get_new.txt')){
                    echo 'sorry file not copied' . '<br />';
                }
                else{
                    echo 'file is allready copied' . '<br />';
                }
                copy(__DIR__ . '/Ads/get_New.txt' , __DIR__ . '/Get_New.txt');
                    
                echo __FILE__ . '<br />';
                echo basename(__FILE__) . '<br / >';


                        echo '<pre>';
                        print_r(pathinfo(__FILE__)) . '<br />';
                                echo '</pre>';

                        echo '<pre>';
                        print_r(pathinfo(__FILE__ , PATHINFO_DIRNAME)) . '<br />';
                                echo '</pre>';

                        echo '<pre>';
                        print_r(pathinfo(__FILE__ , PATHINFO_BASENAME)) . '<br />';
                                echo '</pre>';

                        echo '<pre>';
                        print_r(pathinfo(__FILE__ , PATHINFO_FILENAME)) . '<br />';
                        echo '</pre>';

                        echo '<pre>';
                        print_r(pathinfo(__FILE__ , PATHINFO_EXTENSION)) . '<br />';
                        echo '</pre>';

                        $path = pathinfo(__FILE__);
                        echo $path['dirname'] . '<br>';

                        $path = pathinfo(__FILE__);
                        echo $path['basename'] . '<br>';

                        $path = pathinfo(__FILE__);
                        echo $path['filename'] . '<br>';

                        $path = pathinfo(__FILE__);
                        echo $path['extension'] . '<br>';

                        // unlink('unlink.txt');
                        // echo __FILE__;

                        // unlink(__DIR__ . '/3sh/3sh.txt');
                        // rmdir(__DIR__ . '/3sh/New folder');
                        // rmdir('3sh');

                        $directory = __DIR__ . '/Ads';
                        $scandir = scandir($directory);
                        echo '<pre>';
                        print_r($scandir);
                        echo '</pre>';

                       $Handle = fopen('read.txt' , 'r+');
                      //  $fileRead = fread($Handle , 15);
                          $fileRead = fread($Handle , filesize('read.txt')) . '<br>';
                          echo $fileRead;
                          fseek($Handle , 2);
                          fwrite($Handle , 'a');
                          fseek($Handle , -4 , SEEK_END );
                          fwrite($Handle , 'z');
                        //   $write = fwrite($Handle , 'this is my brothers');

                       $name = 'ads';
                        function testFunc(){
                            // $name = 'osama';
                            // echo $name . '<br>';
                            
                            echo $GLOBALS['name'] . '<br>';
                            $GLOBALS['name'] = '3sh';
                        }
                        testFunc();
                        echo $name . '<br>';

                        echo $_SERVER['SERVER_ADDR'] . '<br>';
                        echo $_SERVER['SERVER_ADDR'] . '<br>';
                        echo $_SERVER['HTTP_REFERER'] . '<br>';
                        echo $_SERVER['SERVER_PORT'] . '<br>';
                        echo $_SERVER['DOCUMENT_ROOT'] . '<br>';
                        echo $_SERVER['SERVER_PROTOCOL'] . '<br>';
                        echo $_SERVER['SERVER_SOFTWARE'] . '<br>';

                       
                    if(count($_COOKIE) > 1){
                        echo 'Good The Cookies are enabled for this website' . '<br>';
                    }
                    else{
                        echo 'sorry this cookie is not enabled for this website' . '<br>';
                    }
                    
                    echo time()+86400 . '<br>';

                    echo '<pre>';
                    print_r($_COOKIE) . '<br>';
                    echo '</pre>'; 

                       
            ?>
            <a href="<?php echo $_SERVER['PHP_SELF']; ?>"> click </a>

            <form action="control.php" method="GET">
                <input type="text" name="username">
                <input type="password" name="password">
                <input type="submit" value="login">
                <a href='sleep.php'> sleep </a>
            </form>

            
        </body>
</html>
