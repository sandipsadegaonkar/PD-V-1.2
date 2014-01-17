<?php
    $email=$_REQUEST['email'];
    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        echo "invalid email id.";
    }
    else
    {
        $con=  mysql_connect("localhost","root","");
        if($con)
        {
            mysql_select_db("pd");
            $result=  mysql_query("select * from login where email='".$email."'");
            if($row=  mysql_fetch_array($result))
            {
                $msg="Hello, ".$row[0]."\n Your user name:".$row[0]."\n password:".$row[1]."\nthanks";
                mail($email,"Forget Password",$msg);
                echo "true";
            }
            else
            {
                echo "email address not registered.";
            }
        }
       
    }
?>
