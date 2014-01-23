<?php 
session_start();   
     if(isset($_SESSION['user_id']))
     {                
         header("Location: views/admin_landing_page.php");                   
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
<!--    <link rel="shortcut icon" href="images/Logo.jpg" type="image/x-icon"/>
    <link href="css/index.css" rel="stylesheet" type="text/css"/>-->
<link href="css/foundation.css" rel="stylesheet" type="text/css"/>
    <link href="css/foundation-icons.css" rel="stylesheet" type="text/css"/>
    <!--<link href="css/foundation.css" rel="stylesheet" type="text/css"/>-->
    <script type="text/javascript" src="javascript/foundation/foundation.js"></script>
    
<!--    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>-->
<!--    <script type="text/javascript" src="javascript/login.js"></script>-->
    <!--<script type="text/javascript" src="javascript/jquery-1.10.1-min.js"></script>
    <script type="text/javascript" src="javascript/index.js"></script>-->
</head>
<body> 
    
   <div class="row" id="log">
        <br>
        <center><img src="images/icon.jpg" /></center>
        <br>
        <center><img src="images/line.jpg"/></center>
        <p align="center" id="error" style="color:#9E0C0F"></p>
        <br>
        <center>
            <!--<form data-abide="ajax">-->
        <div class="row" id="admin_login">
            <div class="large-4 medium-4">
        <div class="row collapse">
    <div class="small-9 columns name-field">
        <input type="text" placeholder="Username" id="user" required pattern="[a-zA-Z]+" name="user"></input>
        
    </div>
    <div class="small-3 columns">
        <span class="postfix"><i class="fi-torso" style="font-size: 24px"></i></span>
    </div>
        </div>
            </div>
            <div class="large-4 medium-4">
        <div class="row collapse">
    <div class="small-9 columns password-field">
        <input type="password" placeholder="Password" id="pass" required pattern="[a-zA-Z]+" name="pass"></input>
 
    </div>
    <div class="small-3 columns">
        <span class="postfix"><div class="fi-key" style="font-size: 24px"></div>></span>
    </div>
        </div></div>
<div class="large-4">
        <div class="row collapse">
            <input type="checkbox" id="remember" value="Remember_me" name="remember"/><span>&nbsp;Remember me on this computer</span>
        </div></div>
            <div class='small radius button' id='reset'>Reset</div>
            <!--<button type="reset" id='reset' class="small radius">Reset</button>-->
        <div class='small radius button' id='login'>Login</div>
        <!--<button type="submit" id='login' class="small radius">Login</button>-->
        </div>
                <!--</form>-->
        </center>
        <br>
        <center><img src="images/line.jpg"/></center>
        <br><br>
        <center><div class="text-center" style="font-size: 15px">
                <a id='for' href="javascript:click()"><span class="f">Did you forget your password?</span></a>
        </div>
     <br> <br><br>
        <div class="forget panel" style="width: 100%;height: 120px;display: none;background-color:#aabbcc;margin-top: -85px">
            <div align="right"><img src="images/Close.ico" height="15px" width="15px" id="close" style="cursor: pointer"/></div>
           
            <table style="background-color: #aabbcc;border: 0px;margin-top: -10px"><tr><td>
            <div class="large-4 medium-4" style="width: 500px">
        <div class="row collapse">
    <div class="small-9 columns">
        <input type="text" placeholder="example@sample.com" id="email" ></input>
    </div>
    <div class="small-3 columns">
        <span class="postfix"><div class="fi-mail" style="font-size: 24px"></div></span>
    </div>
        </div>
            </div>
                    </td><td>
        <div class='small radius button' id="ok">Submit</div>
                    </td>
                </tr>
            </table>
       
            
        </div>
            
    </div>  
    
   <br>	        
</body>
</html>

