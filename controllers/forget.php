<?php
    $email=$_REQUEST['email'];
    if(preg_match("/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/", $email))
    {
        echo "invalid email id.";
    }
    else
    {
        echo "true";
    }
?>
