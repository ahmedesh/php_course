<?php

 // $admin = array('osama','hassan','ali');
                        // $userName = $_GET['username'];
                        // if(in_array($userName , $admin)){
                        //     echo 'wlcome' . $userName . 'to control panel for admin';
                        // }
                        // else{
                        //     echo 'sorry this username is not exisit';
                        // }

                        $admin = array("osama","hassan","ali");
                        $userName = $_GET['username'];
                        if(in_array($userName , $admin)){
                            echo 'wlcome ' . $userName . ' to control panel for admin';
                        }
                        else{
                            echo 'sorry this username is not exisit';
                        }
                        ?>