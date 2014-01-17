<?php
    $email=$_REQUEST['email'];
    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        echo "invalid email id.";
    }
    else
    {
        echo "true";
    }
?>
