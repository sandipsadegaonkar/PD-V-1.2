<?php
session_start();
$_SESSION['user_id']='';
$con=  mysql_connect("localhost","root","");
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
$rem=$_REQUEST['remember'];

if($con)
{
    mysql_select_db("pd");
    if($user!="" && $pass!="")
    {    
        $result=  mysql_query("select * from login where user='".$user."'");            
        $row = mysql_fetch_array($result);
        if($row[0]==$user && $row[1]==$pass)
        {                        
            if($rem)
            {                                
                setcookie('user',$user,time()+36000);
            }  
            $_SESSION['user_id']=$row[0];
            echo 'true';
        }
        else
        {         
            echo 'false';
        } 
     }
 else 
   {
        echo 'Please enter Username and Password';    
    } 
}
?>
