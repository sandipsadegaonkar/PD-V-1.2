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


    <!--<script
    type="text/javascript" src="javascript/jquery-1.10.1-min.js"></script>
    <script type="text/javascript" src="javascript/index.js"></script>-->

</head>
<body>
  
        <!--<div style="width: 99%;height:97%;margin-left: 0px;position: fixed;border: 1px solid">-->
        
        
   <div style="width:1000px;height: 1114px; margin: 0px auto 0px auto;margin-top: 5px;box-shadow: 4px 4px 5px #000000;-webkit-box-shadow: -1px 3px 9px 7px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 3px 9px 7px rgba(0,0,0,0.75);
box-shadow: -1px 3px 9px 7px rgba(0,0,0,0.75);"id="GridScroll" class="grid_scroll">
       <table>
           <tr>
           <td><img src="../images/icon.JPG" style="width: 174px; height: 95px;"/>
           </td>
           <td style="width: 100%" align="right">
               <div style="width: 300px;height: 95px;margin-right: 0px;">
           
        <table border="0" width="100%" height="100%" cellspacing="0px" cellpadding="0px">
            <tr align="right">
                <td width="60%">
                      <?=$username?><img src="../images/User.png" style="width: 30px; height: 35px;padding-bottom: 0px"/>
                </td>
                <td width="40%" >
                   <span class='button_img' id='logout' style="border-radius: 5px;cursor: pointer;" align="right">Logout</span>
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
       <center><img src="../images/line.jpg" style="width: 1000px"/></center>
   <table style="height: 80%;padding:auto auto auto auto">
        <tr>
            <td>

   <div style="width: 200px;height:1000px; border: 1px solid;">
       
       <div id="noti" style="width:150px;height:30px; border: 1px solid; margin-top:10px; margin-left: 20px;margin-right: 5px"> 
                 <table>
                     <tr>
                         
                         <td>  
                             <div class="sp" style="width:10px;height: 20px;cursor: pointer;">+</div>
                         </td>
                             <td style="width: 100%;cursor: pointer">
                             <span>Notification</span>
                            </td>
                            <td>
                                 <div style="width:20px;height:22px; border: 1px solid;color: red">
                                  </div>
                            </td>
                      </tr>

                 </table>
       </div>
        <div class="noti1 "style="width:150px;height:auto; border: 1px solid; margin-top:0px; margin-left: 20px;margin-right: 5px;display: none"> 
                 <div id="NCA" style="width:150px;height:30px; cursor: pointer;margin-left:15px;"margin-left:15px;"> 
                   <span > Client Approval</span>      
                 </div>
            <div id="NSA" style="width:150px;height:30px; cursor: pointer;margin-left:15px;"margin-left:15px;"> 
                   <span > Store Approval</span>      
                 </div>
            <div id="NPA" style="width:150px;height:30px; cursor: pointer;margin-left:15px;"margin-left:15px;"> 
                   <span > Product Approval</span>      
                 </div>
            <div id="NRA" style="width:150px;height:30px; cursor: pointer;margin-left:15px;"margin-left:15px;"> 
                   <span > Review Approval</span>      
                 </div>
       </div>
               

       <div id="cata" style="width:150px;height:30px; border: 1px solid; margin-top:10px; margin-left: 20px;margin-right: 5px">
             <table>
                 <tr>
                     <td>  
                             <div class="cp1" style="width:10px;height: 20px;cursor: pointer;">+</div>
                         </td>
                     <td style="width: 100%;cursor: pointer;">
                         <span>Catalog</span>
                     </td>
                     <td>
                          <div style="width:20px;height:22px; border: 1px solid;color: red">
                                  </div>
                     </td>
                </tr>
             </table>
       </div>
    <div class="cata1" style="width:150px;height:auto; border: 1px solid; margin-top:0px; margin-left: 20px;margin-right: 5px;display: none"> 
                 <div id="CMC" style="width:150px;height:30px; cursor: pointer;margin-left:15px;"margin-left:15px;"> 
                   <span > Master Cities</span>      
                 </div>
            <div id="CMA" style="width:150px;height:30px; cursor: pointer;margin-left:15px;"margin-left:15px;"> 
                   <span >Master Area</span>      
                 </div>
            <div id="CMB" style="width:150px;height:30px; cursor: pointer;margin-left:15px;"margin-left:15px;"> 
                   <span >Master Brand</span>      
                 </div>
            <div id="CMCAT" style="width:150px;height:30px; cursor: pointer;margin-left:15px;"margin-left:15px;"> 
                   <span >Master Categories</span>      
                 </div>
         <div id="CMF" style="width:150px;height:30px; cursor: pointer;margin-left:15px;"margin-left:15px;"> 
                   <span >Master Filters</span>      
                 </div>
         <div id="CPL" style="width:150px;height:30px; cursor: pointer;margin-left:15px;"margin-left:15px;"> 
                   <span >Product List</span>      
                 </div>
       </div>
       <div id="stor" style="width:150px;height:30px; border: 1px solid; margin-top:10px; margin-left: 20px;margin-right: 5px">
              <table>
                     <tr>
                         <td>  
                             <div class="spp" style="width:10px;height: 20px;cursor: pointer;">+</div>
                         </td>
                          <td style="width: 100%;cursor: pointer;">
                             <span>Store</span>
                          </td>
                           <td>
                                <div style="width:20px;height:22px; border: 1px solid;color: red">
                                 </div>
                           </td>
                      </tr>
              </table>
       </div>
         <div class="stor1" style="display: none; width:150px;height:auto; border: 1px solid; margin-top:0px; margin-left: 20px;margin-right: 5px"> 
                 <div id="SS" style="width:150px;height:30px; cursor: pointer;margin-left:15px;""> 
                   <span >Store</span>      
                 </div>
            <div id="SSU" style="width:150px;height:30px; cursor: pointer;margin-left:15px;""> 
                   <span >Store User </span>      
                 </div>
             <div id=" SSP" style="width:150px;height:30px; cursor: pointer;margin-left:15px;""> 
                   <span >Store Profile</span>      
                 </div>
             <div id="SASP" style="width:150px;height:30px; cursor: pointer;margin-left:15px;""> 
                   <span >Add Store Product </span>      
                 </div>
       </div>
       <div id="syst"style="width:150px;height:30px; border: 1px solid; margin-top:10px; margin-left: 20px;margin-right: 5px">
           <table>
                  <tr>
                          <td>  
                             <div class="sy" style="width:10px;height: 20px;cursor: pointer;">+</div>
                         </td>
                         <td style="width: 100%;cursor: pointer;">
                              <span>System </span>
                         </td>
                         <td>
                               <div style="width:20px;height:22px; border: 1px solid;color: red">
                               </div>
                        </td>
                   </tr>
           </table>
       </div>
       <div  class="syst1" style="display: none;width:150px;height:auto; border: 1px solid; margin-top:0px; margin-left: 20px;margin-right: 5px"> 
                 <div id="SYSU" style="width:150px;height:30px; cursor: pointer;margin-left:15px;""> 
                   <span >system User</span>      
                 </div>
            <div id="SYSP" style="width:150px;height:30px; cursor: pointer;margin-left:15px;""> 
                   <span >System Profile</span>      
                 </div>
       </div>
       <div id="static" style="width:150px;height:30px; border: 1px solid; margin-top:10px; margin-left: 20px;margin-right: 5px">
           <table>
                <tr>
                        <td>  
                             <div class="sc1" style="width:10px;height: 20px;cursor: pointer;">+</div>
                         </td>
                    <td style="width: 100%;cursor: pointer;">
                         <span> Static content </span>
                    </td>
                    <td>
                        <div style="width:20px; height:22px; border:1px solid;color: red ">
                        </div>
                         </td>
                </tr>
           </table>
       </div>
       <div class="static1" style="display: none; width:150px;height:auto; border: 1px solid; margin-top:0px; margin-left: 20px;margin-right: 5px"> 
                 <div id="SCAU" style="width:150px;height:30px; cursor: pointer;margin-left:15px;""> 
                   <span >About Us</span>      
                 </div>
            <div id="SCSP" style="width:150px;height:30px; cursor: pointer;margin-left:15px;""> 
                   <span >Sales & Purchase</span>      
                 </div>
           <div id="SCTC" style="width:150px;height:30px; cursor: pointer;margin-left:15px;""> 
                   <span >Terms & Condition</span>      
                 </div>
           <div id="SCRP" style="width:150px;height:30px; cursor: pointer;margin-left:15px;""> 
                   <span >Return Policy</span>      
                 </div>
           <div id="SCCU" style="width:150px;height:30px; cursor: pointer;margin-left:15px;""> 
                   <span >Contact Us</span>      
                 </div>
           <div id="SCPP" style="width:150px;height:30px; cursor: pointer;margin-left:15px;""> 
                   <span >Privacy Policy </span>      
                 </div>
           <div id="SCF" style="width:150px;height:30px; cursor: pointer;margin-left:15px;""> 
                   <span >FAQ</span>      
                 </div>
       </div>
       <div id="util" style="width:150px;height:30px; border: 1px solid; margin-top:10px; margin-left: 20px;margin-right: 5px">
           <table>
                 <tr>
                     <td>  
                             <div class="u1" style="width:10px;height: 20px;cursor: pointer;">+</div>
                         </td>
                        <td style="width: 100%;cursor: pointer;">
                            <span>Utility</span>
                        </td>
                         <td>
                              <div style="width:20px;height:22px; border: 1px solid;color: red">
                               </div>
                        </td>
                </tr>
           </table>
       </div>
       <div class="util1" style="display: none;width:150px;height:auto; border: 1px solid; margin-top:0px; margin-left: 20px;margin-right: 5px"> 
                 <div id="UDB" style="width:150px;height:30px; cursor: pointer;margin-left:15px;""> 
                   <span >Database Backup </span>      
                 </div>
       </div>
         
  
 
  </div> 
          
            
            </td>
            <td style="width: 100%">
     <div style="width: 100%;height:1000px;border: 1px solid;padding-top: 0px; background-image:url('../images/icon.jpg');background-repeat: no-repeat;background-position: center;">
         
          <!--<img src="../images/icon.JPG" height="400px" width="100%" style="opacity: 0.2; position: relative; top: 0px; left: 0px; z-index: -1;" >-->  
        <div  style="width: 100%;height: 30px;border: 1px solid;padding-top: 0px;"> 
            <table width="100%">
                <tr>
                    <td width="80%" style="font-size: 18px;">
            
                       &nbsp;&nbsp; <a href="admin_landing_page.php">Home</a>
                <span id="content_header" align="left" style="font-size: 18px;"></span>
                </span>
                    </td>
                    <td align="right">
<!--            <img src="../images/User.png" style="width: 20px; height: 20px; margin-top: 2px;"/>
            <img src="../images/Down.ico" style="width: 20px; height: 20px;margin-top: 5px;"/>-->
            <img src="../images/Close.ico" style="width: 20px; height: 20px;margin-top: 5px; margin-right: 5px" id="content_close"/>
                    </td>
                </tr>
            </table>
        </div>

        <div id="content_page" style="width: 99.90%;height:968px;border: 1px solid;padding-top: 0px; background-color: #ffffff;display: none;"> 
            
        </div>
        
          
 
      </div>
            </td></tr>
       </table>
   
    
       
    </div>
        <div style="width: 99%;height: 30px;" >
                 <?php include 'footer.php'; ?>
            </div>      <!--</div>-->
      
</body>
</html>

