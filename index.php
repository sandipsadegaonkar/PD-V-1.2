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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/app.css">
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
    
    <div id="t1" class="panel row">
  
            <!--<div id='content' class="row" style='width:960px;height:550px;'>-->
                  <?php include 'views/admin_login.php';?>
            <!--</div>-->  
            <hr/>
        <!--<div class="row" style="width: 960px">-->
                 <?php include 'views/footer.php'; ?>
            <!--</div>-->
        
    </div>                
<!--    <div class="panel">
        
    </div>	           -->
</body>
</html>

