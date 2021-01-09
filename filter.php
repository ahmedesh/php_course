<?php 

        $input = $_POST['text'];
        // echo $input .'<br>';
        // echo filter_var($input , FILTER_SANITIZE_STRING);
      
        $option = array(
            'options' => array( 
            'min_range' => 1 ,
            'max_range' => 999
            ),
            'flags' => FILTER_FLAG_ALLOW_OCTAL
        );
      $goodInput = filter_var($input , FILTER_SANITIZE_NUMBER_INT , $option);
      echo 'Main Input = ' . $input . '<br>';
      echo 'Input after sanitize = ' . $goodInput . '<br>';

        if(filter_var($input , FILTER_VALIDATE_INT , $option)){     // بيفحص هو رقم ولا لا  
            echo 'Good the ' . $goodInput . ' your integer between 1-999' . '<br>';
        }
        else{
            echo 'Sorry the ' . $goodInput . ' your integer must be between 1-999' . '<br>';
        }

        // if(filter_var($input , FILTER_VALIDATE_EMAIL)){   // بيفحص لو ايميل ولا لا
        //     echo 'Good the ' . $input . ' you entered is Email';
        // }
        // else{
        //     echo 'Sorry the ' . $input . ' you entered is not Email';
        // }


        // if(filter_var($input , FILTER_VALIDATE_IP , FILTER_FLAG_IPV6)){   // بيفحص لو ipv6 ولا لا
        //     echo 'Good the ' . $input . ' you entered is IPV6';
        // }
        // else{
        //     echo 'Sorry the ' . $input . ' you entered is not IPV6';
        // }
        
        // date(format , timeStamp);
        echo date('Y-m-d') . '<br>';
        echo date_default_timezone_get() . '<br>';
        
            echo date('Y-m-d h:i:s a') . '<br>';
            $nextMonth = time() + (17*24*60*60);
            echo date( 'Y-m-jS h:i:s:u G a' , $nextMonth) . '<br>';

            echo date('Y') . '<br>';
            echo date('F') . '<br>';
            echo date('d') . '<br>';
            echo date('Y,M,D') . '<br>';
            echo date('Y,M,l') . '<br>';
            echo date('Y , jS') . '<br>';

            $myTime =  time() + (3*365*24*60*60) ;
            echo $myTime . '<br>';
            $myTime2 = strtotime('+3year') ;
            $myTime3 = strtotime('now') ;
            $myTime4 = strtotime('tomorrow') ;
            $myTime5 = strtotime('+1week 2day 9hours') ;
            echo $myTime2 . '<br>' ;
            echo $myTime3 . '<br>' ;
            echo $myTime4 . '<br>' ;
            echo $myTime5 . '<br>' ;
            echo date('Y-m-d h:i:s a' , $myTime2) . '<br>';
            echo date('Y-m-d h:i:s a' , $myTime3) . '<br>';
            echo date('Y-m-d h:i:s a' , $myTime4) . '<br>';
            echo date('Y-m-d h:i:s a' , $myTime5) . '<br>';
           
            phpinfo();
            echo f;
            error_reporting(0);
            echo num;


        ?>