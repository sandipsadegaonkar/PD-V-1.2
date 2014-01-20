<?php    
//    if(empty($_SESSION['page_id']))
//    {  
//        $_SESSION['page_id']='view/admin_login.php';
//        
//    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Admin_Login</title>
<!--	<link rel="shortcut icon" href="images/Logo.jpg" type="image/x-icon"/>
	<link href="css/index.css" rel="stylesheet" type="text/css"/>
        <link href="css/home.css" rel="stylesheet" type="text/css"/>-->
<link href="css/foundation.css" rel="stylesheet"></link>
        <script type="text/javascript" src="javascript/jquery-1.10.1-min.js"></script>
        <script type="text/javascript" src="javascript/jquery-1.10.2.js"></script>
<script type="text/javascript" src="javascript/login.js"></script>
</head>
<body>

    <div id="t1" style="width: 960px;height: 550px;margin: 0px auto 0px auto;">
  
            <div id='content' style='width:960px;height:550px;'>
                  <?php include 'views/admin_login.php';?>
            </div>
        <br>
        <center><div style="width: 500px;height: 30px;text-align: center" >
                 <?php include 'views/footer.php'; ?>
            </div> </center>
    </div>
                
	           
</body>
</html>

