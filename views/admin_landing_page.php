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
        <link href="../css/landing.css" rel="stylesheet" type="text/css"/>        
        
<script type="text/javascript" src="../javascript/logout.js"></script>        
<script type="text/javascript" src="../javascript/landing.js"></script>
<script type="text/javascript" src="../javascript/master_cities.js"></script>
<script type="text/javascript" src="../javascript/master_area.js"></script>

    
</head>
<body>
  
        <!--<div style="width: 99%;height:97%;margin-left: 0px;position: fixed;border: 1px solid">-->
        <div class="panel">
       
       <header> 
           <div>
               <div class="admin_landing_header_logo">
                <a href="admin_landing_page.php"><img src="../images/icon.JPG" /></a>
           </div>
           
           <div class ="admin_landing_header_body"align="right">
               <div>
                    <span>Welcome&nbsp;,&nbsp;<a href="#"><?=$username?></a>&nbsp;</span>
                    <span class="small radius button" id='logout' >Logout</span>
               </div>
               
               <div class="admin_landing_header_body_lastlogin">
                   <span>Last Login: <?=$last?> </span>                    
               </div>
                
           </div>
           </div>
           <img src="../images/line.jpg" width="100%"/>
       </header>

            <nav>
                <div id="noti" class="menu_style"> 
                    <div class="sp" style="border: 0px solid; margin-top: 0.3rem; margin-left: 0.2rem;">
                        +
                    </div>
                    <div style="border: 0px solid; width: 8rem; margin-top: -1rem; margin-left: 1.2rem;">Notification</div>
                    <div class="notification_img" style="border: 0px solid; width: 1.5rem; margin-top: -1.6rem; margin-left: 10rem;">
                        11
                    </div>
                </div>
                
                <div id="noti1" class="submenu_style" > 
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
            </nav>
            
                
       <div >
      
        
       
       
               

       <div id="cata" class="menu_style">
             <table>
                 <tr>
                     <td>  
                             <div class="cp1" >+</div>
                         </td>
                     <td style="width: 100%;">
                         <span>Catalog</span>
                     </td>
                    </tr>
             </table>
           <div id="menu_effect1" ></div>
       </div>
    <div id="cata1" class="submenu_style"> 
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
                             <div class="spp" >+</div>
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
           <div id="menu_effect2" ></div>
       </div>
         <div id="stor1" class="submenu_style" > 
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
                             <div class="sy" >+</div>
                         </td>
                         <td >
                              <span>System </span>
                         </td>
<!--                         <td>
                               <div style="width:20px;height:22px; border: 1px solid;color: red">
                               </div>
                        </td>-->
                   </tr>
           </table>
           <div id="menu_effect3" ></div>
       </div>
       <div  id="syst1" class="submenu_style" > 
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
                        <div class="sc1" >+</div>
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
           <div id="menu_effect4" ></div>
       </div>
       <div id="static1" class="submenu_style" > 
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
                             <div class="u1" >+</div>
                     </td>
                     <td>
                            <span>Utility</span>
                     </td>
<!--                         <td>
                              <div style="width:20px;height:22px; border: 1px solid;color: red">
                               </div>
                        </td>-->
                </tr>
           </table>
           <div id="menu_effect5" ></div>
       </div>
      
       <div id="util1" class="submenu_style" > 
                 <div id="udb" class="submenu_inner_style"> 
                   <span >Database Backup </span>      
                 </div>
       </div>
         
  <br/>
 
  </div>
            
            
<!--/*****************************************************************************************************/-->
  
<!--<table border="1">
        <tr>
            <td>

   <div >
      
        <div id="noti" class="menu_style"> 
                 <table>
                     <tr>
                         <td>  
                         <div class="sp" >+</div>
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
            <div id="menu_effect" ></div>
       </div>
       
       <div id="noti1" class="submenu_style" > 
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
                             <div class="cp1" >+</div>
                         </td>
                     <td style="width: 100%;">
                         <span>Catalog</span>
                     </td>
                    </tr>
             </table>
           <div id="menu_effect1" ></div>
       </div>
    <div id="cata1" class="submenu_style"> 
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
                             <div class="spp" >+</div>
                         </td>
                          <td style="width: 100%;">
                             <span>Store</span>
                          </td>
                           <td>
                                <div style="width:20px;height:22px; border: 1px solid;color: red">
                                 </div>
                           </td>
                      </tr>
              </table>
           <div id="menu_effect2" ></div>
       </div>
         <div id="stor1" class="submenu_style" > 
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
                             <div class="sy" >+</div>
                         </td>
                         <td >
                              <span>System </span>
                         </td>
                         <td>
                               <div style="width:20px;height:22px; border: 1px solid;color: red">
                               </div>
                        </td>
                   </tr>
           </table>
           <div id="menu_effect3" ></div>
       </div>
       <div  id="syst1" class="submenu_style" > 
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
                        <div class="sc1" >+</div>
                    </td>
                    <td style="width: 100%;">
                         <span> Static content </span>
                    </td>
                    <td>
                        <div style="width:20px; height:22px; border:1px solid;color: red ">
                        </div>
                         </td>
                </tr>
           </table>
           <div id="menu_effect4" ></div>
       </div>
       <div id="static1" class="submenu_style" > 
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
                             <div class="u1" >+</div>
                     </td>
                     <td>
                            <span>Utility</span>
                     </td>
                         <td>
                              <div style="width:20px;height:22px; border: 1px solid;color: red">
                               </div>
                        </td>
                </tr>
           </table>
           <div id="menu_effect5" ></div>
       </div>
      
       <div id="util1" class="submenu_style" > 
                 <div id="udb" class="submenu_inner_style"> 
                   <span >Database Backup </span>      
                 </div>
       </div>
         
  <br/>-->
 
  </div> 
          
            
            </td>
            <td >
     <div>
       
          <!--<img src="../images/icon.JPG" height="400px" width="100%" style="opacity: 0.2; position: relative; top: 0px; left: 0px; z-index: -1;" >-->  
        <div> 
            <table width="100%">
                <tr>
                    <td width="80%">
            
                       &nbsp;&nbsp; <a href="admin_landing_page.php">Home</a>
                <span id="content_header" align="left"></span>                
                    </td>
                    <td align="right">
<!--            <img src="../images/User.png" style="width: 20px; height: 20px; margin-top: 2px;"/>
            <img src="../images/Down.ico" style="width: 20px; height: 20px;margin-top: 5px;"/>-->
            <img src="../images/Close.ico"  id="content_close"/>
                    </td>
                </tr>
            </table>
        </div>
       
        <div id="content_page" > 
            
        </div>
        
          
 
      </div>                
        </td>
        </tr>
   </table>
       <footer>
         <div>
            <?php include 'footer.php'; ?>
         </div>  
       </footer>
    </div>
            <!--</div>-->
   </body>
</html>

