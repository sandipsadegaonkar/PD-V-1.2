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
    <link href="css/home.css" rel="stylesheet" type="text/css"/>
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="../javascript/login.js"></script>
    <!--<script type="text/javascript" src="javascript/jquery-1.10.1-min.js"></script>
    <script type="text/javascript" src="javascript/index.js"></script>-->
    <style>
        .ui-effects-transfer { border: 2px solid gray; }     
    </style>
</head>
<body> 
   <br>
   
   <div class="ui-widget-content ui-corner-all" style="width: 500px; margin: 0px auto 0px auto;margin-top: 5px;box-shadow: 4px 4px 5px #000000;-webkit-box-shadow: -1px 3px 9px 7px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 3px 9px 7px rgba(0,0,0,0.75);
box-shadow: -1px 3px 9px 7px rgba(0,0,0,0.75);">
        <br>
        <center><img src="images/icon.jpg" style="width: 174px; height: 95px;"/></center>
        <br>
        <center><img src="images/line.jpg" style="width: 500px"/></center>
        <p style="text-align: center;font-family: Calibri;font-size: 18px;width: 500px;height: 30px;margin: 0px auto 0px auto; color: Red;" id="error"></p>
        <br>
        <center>
            <table cellspacing="10px">
                <tr>
                    <th align="right" class="home_text">
                        User Name: 
                    </th>
                    <td>                             
     <input type="text" id="user" placeholder="username" class="home_text" style="box-shadow: 3px 3px 5px #000000;"/>
               </td>
                </tr>
                <tr>
                    <th align="right" class="home_text">
                        Password: 
                    </th>
                    <td>
                        <input type="password" id="pass" placeholder="Password" class="home_text" style=" box-shadow: 3px 3px 5px #000000;"/>
                    </td>
                </tr>
             
                <tr>
                    <td colspan="2" align="center">
                        <input type="checkbox" id="remember" value="Remember_me" /><span style="font-size: 15px;font-family: Calibri;">Remember me on this computer</span>
                    </td>
                </tr>
               
                <tr>
                    <td></td>
                    <td align="left">
                        <div class='button_img' id='reset' style="border-radius: 5px;cursor: pointer;">Reset</div>
                        <div class='button_img' id='login' style="border-radius: 5px;cursor: pointer;">Login</div>
                    </td>
                </tr>
            </table>
            
        </center>
        <br>
        <center><img src="images/line.jpg" style="width: 500px"/></center>
        <br><br><br>
        <center><div class="home_text" style="font-size: 15px">
                <a id='for' href="javascript:click()"><span class="f">Did you forget your password?</span></a>
        </div></center>
        <br/>
        <div class="forget" style="width: 100%;height: 90px;display: none;background-color:#aabbcc;margin-top: -85px">
            <div align="right"><img src="images/Close.ico" height="15px" width="15px" id="close" style="cursor: pointer"/></div>
            <center>
                <table>
                    <tr>
                        <th align='right' class="home_text">
                            Email ID :
                        </th>
                        <td>
                            <input type="text" placeholder="Email" id='email' class="home_text" style="width: 200px"/>
                        </td>
                        <td>
                            <div class='button_img' id="ok" style="border-radius: 5px;cursor: pointer;">Submit</div>
                        </td>
                        </tr><tr>
                            <td colspan="3" align="center">
                            <img id="process" src="images/process.gif" style="width: 30px;height: 30px;display: none">
                        </td>
                      
                    </tr>
                    
                </table>
            </center>
            
        </div>
            
    </div>   
</body>
</html>

