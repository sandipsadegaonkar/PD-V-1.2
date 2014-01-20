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
	<meta charset="utf-8"/>
	<title>PD1.2_Admin_Login</title>
<!--    <link rel="shortcut icon" href="images/Logo.jpg" type="image/x-icon"/>
    <link href="css/index.css" rel="stylesheet" type="text/css"/>-->
    <link href="css/login.css" rel="stylesheet" type="text/css"/>
    <link href="css/foundation-icons.css" rel="stylesheet" type="text/css"/>
<!--    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>-->
<!--    <script type="text/javascript" src="javascript/login.js"></script>-->
    <!--<script type="text/javascript" src="javascript/jquery-1.10.1-min.js"></script>
    <script type="text/javascript" src="javascript/index.js"></script>-->
</head>
<body> 
   <br>
   
   <div class="panel">
        <br>
        <center><img src="images/icon.jpg" /></center>
        <br>
        <center><img src="images/line.jpg"/></center>
        <p id="error"></p>
        <br>
        <div class="panel">
        <center>    <div class="large-4">
        <div class="row collapse">
    <div class="small-9 columns">
        <input type="text" placeholder="Username" id="user"></input>
    </div>
    <div class="small-3 columns">
        <span class="postfix"><div class="fi-torso "></div>></span>
    </div>
        </div>
            </div>
            <div class="large-4">
        <div class="row collapse">
    <div class="small-9 columns">
        <input type="text" placeholder="Password" id="pass"></input>
    </div>
    <div class="small-3 columns">
        <span class="postfix"><div class="fi-key" ></div>></span>
    </div>
        </div></div>
<div class="large-4">
        <div class="row collapse">
            <input type="checkbox" id="remember" value="Remember_me" /><span>&nbsp;Remember me on this computer</span>
        </div></div>
            <div class='small radius button' id='reset'>Reset</div>
        <div class='small radius button' id='login'>Login</div>
        </center>
        </div>
        <br>
        <center><img src="images/line.jpg"/></center>
        <br><br><br>
        <center><div class="home_text" style="font-size: 15px">
                <a id='for' href="javascript:click()"><span class="f">Did you forget your password?</span></a>
        </div></center>
        <br/>
        <div class="forget" style="width: 100%;height: 90px;display: none;background-color:#aabbcc;margin-top: -85px">
            <div align="right"><img src="images/Close.ico" height="15px" width="15px" id="close" style="cursor: pointer"/></div>
<!--            <center>
                <table>
                    <tr>
                        <th align='right' class="home_text">
                            Email ID :
                        </th>
                        <td>
                            <input type="text" placeholder="Email" id='email'/>
                        </td>
                        <td>
                            <div class='small radius button' id="ok" style="border-radius: 5px;cursor: pointer;">Submit</div>
                        </td>
                        </tr><tr>
                            <td colspan="3" align="center">
                            <img id="process" src="images/process.gif" style="width: 30px;height: 30px;display: none">
                        </td>
                      
                    </tr>
                    
                </table>
            </center>-->
            <div class="row">
        <center>    
            <div class="large-4">
        <div class="row collapse">
    <div class="small-9 columns">
        <input type="text" placeholder="Username" id="user"></input>
    </div>
    <div class="small-3 columns">
        <span class="postfix"><div class="fi-torso "></div>></span>
    </div>
        </div>
            </div>
<div class="large-4">
        <div class="row collapse">
            <div class='small radius button' id="ok" style="border-radius: 5px;cursor: pointer;">Submit</div>
        </div></div>
        </center>
        </div>
            
        </div>
            
    </div>  
<!--   <div class="row collapse">
    <div class="small-9 columns">
        <input type="text" placeholder="small-9.columns"></input>
    </div>
    <div class="small-3 columns">
        <span class="postfix">.com</span>
    </div>-->

</div>
				        
</body>
</html>

