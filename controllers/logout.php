<?php

session_start();


$user=$_SESSION['user_id'];
$con=  mysql_connect("localhost","root","");
if($con)
{
    mysql_select_db("pd");
   
    $last=  mysql_query("update login set lastlog='".  date("D, d-M-Y, H:i:s")."' where user='".$user."'");
    if($last)
    {
        session_destroy();
        echo 1;
    }
 else {
        echo 0;    
    }
}
?>
