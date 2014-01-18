<?php 
session_start();
$con=mysql_connect("localhost","root","");
if($con)
{
    mysql_select_db("pd");
    $res=  mysql_query("select * from login where user='".$_SESSION['user_id']."'");
    if($row = mysql_fetch_array($res))
    {
        $last=$row[2];
    }
}
if(isset($_SESSION['user_id']))
{
    $username=$_SESSION['user_id'];

}
else
{
    header("Location: ../index.php");
}

?>
<html lang="en">
<head>
	<title>PD1.2_Admin_LandingPage</title>
                <script type="text/javascript" src="../javascript/jquery-1.10.1-min.js"></script>
        <script type="text/javascript" src="../javascript/jquery-1.10.2.js"></script>
        <link href="../css/master_cities.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="../javascript/logout.js"></script>
<link href="../css/landing.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="../javascript/landing.js"></script>
<script type="text/javascript" src="../javascript/master_cities.js"></script>
<script type="text/javascript" src="../javascript/master_area.js"></script>
    <!--<script
    type="text/javascript" src="javascript/jquery-1.10.1-min.js"></script>
    <script type="text/javascript" src="javascript/index.js"></script>-->

</head>
<body>
  
        <!--<div style="width: 99%;height:97%;margin-left: 0px;position: fixed;border: 1px solid">-->                
   <div style="width:990px;height: auto; margin: 0px auto 0px auto;box-shadow: 4px 4px 5px #000000;-webkit-box-shadow: -1px 3px 9px 7px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 3px 9px 7px rgba(0,0,0,0.75);
box-shadow: -1px 3px 9px 7px rgba(0,0,0,0.75);"id="GridScroll" class="grid_scroll">
       <table border="0">
           <tr>
               <td><a href="admin_landing_page.php"><img src="../images/icon.JPG" style="width: 174px; height: 95px;"/></a>
           </td>
           <td style="width: 100%" align="left">
               <div style="width: 99%;height: 95px;margin-right: 0px;">
           
        <table border="0" width="100%" height="100%" cellspacing="0px" cellpadding="0px">
            <tr align="right">
                <td width="90%">
                    <span style=" font-size: 18px; font-family: sans-serif;">Welcome&nbsp;,&nbsp;<a href="#"><?=$username?></a>&nbsp;</span>
                    <!--<img src="../images/User.png" style="width: 30px; height: 35px;padding-bottom: 0px"/>-->
                </td>
                <td width="10%" >
                   <span class='button_img' id='logout' style="border-radius: 5px;cursor: pointer;">Logout</span>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="right" style="padding-top: 0px">
                    <span style="padding-top: 0px; font-size: 12px;" >Last Login: <?=$last?> </span>
                </td>
            </tr>
        </table>
       </div>
           </td>
       </tr>
       </table> 
       <center><img src="../images/line.jpg" style="width:100%"/></center>
   <table style="height: 80%;padding:auto auto auto auto">
        <tr>
            <td>

   <div style="width: 200px;height:99%; border: 1px solid;">
      
        <div id="noti" class="menu_style"> 
                 <table>
                     <tr>
                         <td>  
                         <div class="sp" style="width:10px;height: 20px;cursor: pointer;">+</div>
                         </td>
                             <td width="100%">
                                 <span>Notification</span>
                            </td>
                            <td align="right">
                                <div class="notification_img">
                                    11
                                </div>
                            </td>
                      </tr>

                 </table>
            <div id="menu_effect" style="border: 1px solid;width:0px;height:30px;background-color:#b14926;margin-top: -27px;margin-left: -1px;opacity: 0.5"></div>
       </div>
       
       <div id="noti1" class="submenu_style" style="display: none;"> 
                 <div id="ncp" class="submenu_inner_style"> 
                   <span > Client Approval</span>
                     <div class="submenu_notification">
                      3
                     </div>
                 </div>
            <div id="noti_sp" class="submenu_inner_style"> 
                   <span > Store Approval</span> 
                    <div class="submenu_notification">
                      5
                     </div>
                 </div>
            <div id="noti_pa" class="submenu_inner_style"> 
                   <span > Product Approval</span>   
                    <div class="submenu_notification">
                      1
                     </div>
                 </div>
            <div id="noti_ra" class="submenu_inner_style"> 
                   <span > Review Approval</span> 
                    <div class="submenu_notification">
                      2
                     </div>
                 </div>
       </div>
               

       <div id="cata" class="menu_style">
             <table>
                 <tr>
                     <td>  
                             <div class="cp1" style="width:10px;height: 20px;cursor: pointer;">+</div>
                         </td>
                     <td style="width: 100%;">
                         <span>Catalog</span>
                     </td>
                    </tr>
             </table>
           <div id="menu_effect1" style="border: 1px solid;width:0px;height:30px;background-color:#b14926;margin-top: -27px;margin-left: -1px;opacity: 0.5"></div>
       </div>
    <div id="cata1" class="submenu_style" style="display: none;"> 
                 <div id="catalog_mc" class="submenu_inner_style"> 
                   <span > Master Cities</span>      
                 </div>
            <div id="catalog_ma" class="submenu_inner_style"> 
                   <span >Master Area</span>      
                 </div>
            <div id="catalog_mb" class="submenu_inner_style"> 
                   <span >Master Brand</span>      
                 </div>
            <div id="catalog_mcat" class="submenu_inner_style"> 
                   <span >Master Categories</span>      
                 </div>
         <div id="catalog_mf" class="submenu_inner_style"> 
                   <span >Master Filters</span>      
                 </div>
         <div id="catalog_pl" class="submenu_inner_style"> 
                   <span >Product List</span>      
                 </div>
       </div>
       <div id="stor" class="menu_style">
              <table>
                     <tr>
                         <td>  
                             <div class="spp" style="width:10px;height: 20px;cursor: pointer;">+</div>
                         </td>
                          <td style="width: 100%;">
                             <span>Store</span>
                          </td>
<!--                           <td>
                                <div style="width:20px;height:22px; border: 1px solid;color: red">
                                 </div>
                           </td>-->
                      </tr>
              </table>
           <div id="menu_effect2" style="border: 1px solid;width:0px;height:30px;background-color:#b14926;margin-top: -27px;margin-left: -1px;opacity: 0.5"></div>
       </div>
         <div id="stor1" class="submenu_style" style="display: none;"> 
                 <div id="ss" class="submenu_inner_style"> 
                   <span >Store</span>      
                 </div>
            <div id="store_su" class="submenu_inner_style"> 
                   <span >Store User </span>      
                 </div>
             <div id="ssp" class="submenu_inner_style"> 
                   <span >Store Profile</span>      
                 </div>
             <div id="sasp" class="submenu_inner_style"> 
                   <span >Add Store Product </span>      
                 </div>
       </div>
       <div id="syst" class="menu_style">
           <table>
                  <tr>
                          <td>  
                             <div class="sy" style="width:10px;height: 20px;cursor: pointer;">+</div>
                         </td>
                         <td style="width: 100%;">
                              <span>System </span>
                         </td>
<!--                         <td>
                               <div style="width:20px;height:22px; border: 1px solid;color: red">
                               </div>
                        </td>-->
                   </tr>
           </table>
           <div id="menu_effect3" style="border: 1px solid;width:0px;height:30px;background-color:#b14926;margin-top: -27px;margin-left: -1px;opacity: 0.5"></div>
       </div>
       <div  id="syst1" class="submenu_style" style="display: none;"> 
                 <div id="sysu" class="submenu_inner_style"> 
                   <span >System User</span>      
                 </div>
            <div id="sysp" class="submenu_inner_style"> 
                   <span >System Profile</span>      
                 </div>
       </div>
       <div id="static" class="menu_style">
           <table>
                <tr>
                    <td>  
                        <div class="sc1" style="width:10px;height: 20px;cursor: pointer;">+</div>
                    </td>
                    <td style="width: 100%;">
                         <span> Static content </span>
                    </td>
<!--                    <td>
                        <div style="width:20px; height:22px; border:1px solid;color: red ">
                        </div>
                         </td>-->
                </tr>
           </table>
           <div id="menu_effect4" style="border: 1px solid;width:0px;height:30px;background-color:#b14926;margin-top: -27px;margin-left: -1px;opacity: 0.5"></div>
       </div>
       <div id="static1" class="submenu_style" style="display: none;"> 
                 <div id="scau" class="submenu_inner_style"> 
                   <span >About Us</span>      
                 </div>
            <div id="scsp" class="submenu_inner_style"> 
                   <span >Sales & Purchase</span>      
                 </div>
           <div id="sctc" class="submenu_inner_style"> 
                   <span >Terms & Condition</span>      
                 </div>
           <div id="scrp" class="submenu_inner_style"> 
                   <span >Return Policy</span>      
                 </div>
           <div id="sccu" class="submenu_inner_style"> 
                   <span >Contact Us</span>      
                 </div>
           <div id="scpp" class="submenu_inner_style"> 
                   <span >Privacy Policy </span>      
                 </div>
           <div id="scf" class="submenu_inner_style"> 
                   <span >FAQ</span>      
                 </div>
       </div>
       <div id="util" class="menu_style">
           <table>
                 <tr>
                     <td>  
                             <div class="u1" style="width:10px;height: 20px;cursor: pointer;">+</div>
                     </td>
                     <td style="width: 100%;">
                            <span>Utility</span>
                     </td>
<!--                         <td>
                              <div style="width:20px;height:22px; border: 1px solid;color: red">
                               </div>
                        </td>-->
                </tr>
           </table>
           <div id="menu_effect5" style="border: 1px solid;width:0px;height:30px;background-color:#b14926;margin-top: -27px;margin-left: -1px;opacity: 0.5"></div>
       </div>
      
       <div id="util1" class="submenu_style" style="display: none;"> 
                 <div id="udb" class="submenu_inner_style"> 
                   <span >Database Backup </span>      
                 </div>
       </div>
         
  <br/>
 
  </div> 
          
            
            </td>
            <td style="width: 100%">
     <div style="width: 99%;height:99%;border: 1px solid;padding-top: 0px; background-image:url('../images/icon.jpg');background-repeat: no-repeat;background-position: center;">
       
          <!--<img src="../images/icon.JPG" height="400px" width="100%" style="opacity: 0.2; position: relative; top: 0px; left: 0px; z-index: -1;" >-->  
        <div  style="width: 100%;height: 30px;border-bottom:1px solid;padding-top: 0px;"> 
            <table width="100%">
                <tr>
                    <td width="80%" style="font-size: 18px;">
            
                       &nbsp;&nbsp; <a href="admin_landing_page.php">Home</a>
                <span id="content_header" align="left" style="font-size: 18px;"></span>                
                    </td>
                    <td align="right">
<!--            <img src="../images/User.png" style="width: 20px; height: 20px; margin-top: 2px;"/>
            <img src="../images/Down.ico" style="width: 20px; height: 20px;margin-top: 5px;"/>-->
            <img src="../images/Close.ico" style="width: 20px; height: 20px;margin-top: 5px; margin-right: 5px" id="content_close"/>
                    </td>
                </tr>
            </table>
        </div>
       
        <div id="content_page" style="width: 100%;height:94%;border-bottom:1px solid;padding-top: 0px; background-color: #ffffff;display: none;"> 
            
        </div>
        
          
 
      </div>                
        </td>
        </tr>
   </table>
   <div style="width: 100%;height: 30px;" >
                 <?php include 'footer.php'; ?>
            </div>      
    </div>
            <!--</div>-->
   </body>
</html>

