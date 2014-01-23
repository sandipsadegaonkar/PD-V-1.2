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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PD1.2_Admin_LandingPage</title>

        <script type="text/javascript" src="../javascript/jquery-1.10.1-min.js"></script>
        <script type="text/javascript" src="../javascript/jquery-1.10.2.js"></script>
        
        <link rel="stylesheet" href="../css/normalize.css">
        
        <link href="../css/master_cities.css" rel="stylesheet" type="text/css"/>
        <link href="../css/landing.css" rel="stylesheet" type="text/css"/>        
        <link href="../css/foundation.css" rel="stylesheet" type="text/css"/>  
        <link href="../css/foundation-icons.css" rel="stylesheet" type="text/css"/>  
<script type="text/javascript" src="../javascript/logout.js"></script>        
<script type="text/javascript" src="../javascript/landing.js"></script>
<script type="text/javascript" src="../javascript/master_cities.js"></script>
<script type="text/javascript" src="../javascript/master_area.js"></script>
<!--<script type="text/javascript" src="../javascript/foundation/foundation.js"></script>-->

    
</head>
<body>
  
        <!--<div style="width: 99%;height:97%;margin-left: 0px;position: fixed;border: 1px solid">-->
<!--        <div class="">-->
<div class="panel">
    <header> 
           <div class="large-12 row">
               <div class="medium-4 columns left">
                <a href="admin_landing_page.php"><img src="../images/icon.JPG" /></a>
           </div>
           <div class ="medium-4 columns right" align="right">
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
    
            <div class="row">  
                
            <div class="medium-3 columns panel left">
                 <!--Navigation-->
                 <div id="noti" class="menu_holder"> 
                    <div class="sp">
                        +
                    </div>
                    <div class="menu_header">
                        Notification
                    </div>
<!--                    <div class="notification_img">
                        1112
                    </div>-->
                </div>
                
                <div id="noti1" class="submenu_holder" > 
                        <div id="ncp" class="submenu_inner_style"> 
                          <i class="fi-flag" style="font-size:18px"></i> <span >  Client Approval</span>
                            <div class="submenu_notification">
                             3
                            </div>
                       </div>

                       <div id="noti_sp" class="submenu_inner_style"> 
                          <i class="fi-flag" style="font-size:18px"></i><span > Store Approval</span> 
                           <div class="submenu_notification">
                             5
                           </div>
                       </div>

                       <div id="noti_pa" class="submenu_inner_style"> 
                          <i class="fi-flag" style="font-size:18px"></i><span > Product Approval</span>   
                           <div class="submenu_notification">
                             1
                           </div>
                       </div>

                       <div id="noti_ra" class="submenu_inner_style"> 
                          <i class="fi-flag" style="font-size:18px"></i><span > Review Approval</span> 
                           <div class="submenu_notification">
                             2
                           </div>
                       </div>
                </div>
                
                <!--navigation-->
                
                
                <!--Catalog-->
                 <div id="cata" class="menu_holder">
                    <div class="cp1" >
                        +
                    </div>
                    <div class="menu_header">
                        Catalog
                    </div>
                 </div>
                
                
                 <div id="cata1" class="submenu_holder"> 
                    <div id="catalog_mc" class="submenu_inner_style"> 
                        <i class="fi-home"style="font-size:18px"></i><span > Master Cities</span>      
                    </div>
                    
                    <div id="catalog_ma" class="submenu_inner_style"> 
                        <i class="fi-home" style="font-size:18px"></i><span > Master Area</span>      
                    </div>
                           
                    <div id="catalog_mb" class="submenu_inner_style"> 
                        <i class="fi-home" style="font-size:18px"></i><span > Master Brand</span>
                    </div>
            
                    <div id="catalog_mcat" class="submenu_inner_style"> 
                        <i class="fi-list-thumbnails" style="font-size:18px"></i><span > Master Categories</span>      
                    </div>
    
                    <div id="catalog_mf" class="submenu_inner_style"> 
                        <i class="fi-list-thumbnails" style="font-size:18px"></i><span > Master Filters</span>      
                    </div>
    
                    <div id="catalog_pl" class="submenu_inner_style"> 
                        <i class="fi-list-thumbnails" style="font-size:18px"></i><span > Product List</span>      
                    </div>
                </div>

                <!--Catalog-->
                
                
                
                <!--Store-->
                
                <div id="stor" class="menu_holder">
                    <div class="spp" >
                        +
                    </div>
                    <div class="menu_header">
                        Store
                    </div>                    
                </div>
                                
                <div id="stor1" class="submenu_holder" > 
                    <div id="ss" class="submenu_inner_style"> 
                      <i class="fi-torso" style="font-size:18px"></i> <span >Store</span>      
                    </div>
                    <div id="store_su" class="submenu_inner_style"> 
                           <i class="fi-torso" style="font-size:18px"></i><span > Store User </span>      
                    </div>
                    <div id="ssp" class="submenu_inner_style"> 
                        <i class="fi-folder-add" style="font-size:18px"></i><span > Store Profile</span>      
                    </div>
                    <div id="sasp" class="submenu_inner_style"> 
                       <i class="fi-folder-add" style="font-size:18px"></i><span > Add Store Product </span>      
                    </div>
                </div>
                         
                <!--Store-->
                
                
                <!--System-->
                
                <div id="syst" class="menu_holder">           
                    <div class="sy" >
                        +
                    </div>
                    
                    <div class="menu_header">
                        System
                    </div>
                </div>
                
                <div  id="syst1" class="submenu_holder" > 
                    <div id="sysu" class="submenu_inner_style"> 
                         <i class="fi-torso" style="font-size:18px"></i><span > System User</span>      
                    </div>
                    <div id="sysp" class="submenu_inner_style"> 
                        <i class="fi-folder-add" style="font-size:18px"></i><span > System Profile</span>      
                    </div>
                </div>
                
                
                <!--System-->
                
                
                <!--Static Content-->
                
                <div id="static" class="menu_holder">
                    <div class="sc1" >
                        +
                    </div>
                    <div class="menu_header">
                         Static content
                    </div>                   
                </div>
                
                <div id="static1" class="submenu_holder" > 
                    <div id="scau" class="submenu_inner_style"> 
                      <i class="fi-text-color" style="font-size:18px"></i><span > About Us</span>      
                    </div>
                    <div id="scsp" class="submenu_inner_style"> 
                           <i class="fi-text-color" style="font-size:18px"></i><span > Sales & Purchase</span>      
                    </div>
                
                    <div id="sctc" class="submenu_inner_style"> 
                           <i class="fi-text-color" style="font-size:18px"></i><span > Terms & Condition</span>      
                    </div>
                    
                    <div id="scrp" class="submenu_inner_style"> 
                           <i class="fi-text-color" style="font-size:18px"></i><span > Return Policy</span>      
                    </div>
                   
                    <div id="sccu" class="submenu_inner_style"> 
                           <i class="fi-text-color" style="font-size:18px"></i><span > Contact Us</span>      
                    </div>
                    
                    <div id="scpp" class="submenu_inner_style"> 
                           <i class="fi-text-color" style="font-size:18px"></i><span > Privacy Policy </span>      
                    </div>
                                     
                    <div id="scf" class="submenu_inner_style"> 
                           <i class="fi-pencil" style="font-size:18px"></i><span > FAQ</span>      
                    </div>
                </div>
                
                                
                <!--Static Content-->
                
                
                <!--Utility-->
                
                <div id="util" class="menu_holder">
                    <div class="u1" >
                        +
                    </div>
                    <div class="menu_header">
                        Utility
                    </div>           
                </div>
      
                <div id="util1" class="submenu_holder" > 
                    <div id="udb" class="submenu_inner_style"> 
                        <i class="fi-download" style="font-size:18px"></i><span > Database Backup </span>      
                    </div>
                </div>
                             
                <!--Utility-->
                
           
        </div>
                <div class="medium-9 columns right " style="background-image: url('../images/icon.JPG');">                              
                <div class="row panel">
            <a href="admin_landing_page.php">Home</a>
            <span id="content_header"></span>
            <a><i class="fi-x right" id="content_close" style="font-size:24px;color: #258faf"></i></a>
<!--        <nav class="top-bar row small-11" data-topbar> 
            <ul class="title-area"> 
                <li class="name"> 
                    </h1> 
                </li> 
            </ul> 
            <section class="top-bar-section"> 
                 Right Nav Section  
                <ul class="right"> 
                    <li class="active">
                        <span id="content_close"><i class="fi-x-circle" style="font-size: 40px"></i></span>
                    </li> 
                </ul> 
                 Left Nav Section  
                <ul class="left"> 
                    
                    <li>
                        <a><span id="content_header">&nbsp;</span></a>
                    </li>
                    <li><a href="admin_landing_page.php">Home</a>
                    </li> 
                    
                </ul> 
            </section> 
        </nav>-->
        </div>
        <div class="row panel hide" id="content_page_body"> 

         </div>
    </div>  
                
</div>  

 </div>
       <footer>
           <div class="panel">
            <?php include 'footer.php'; ?>
         </div>  
       </footer>
   

            <!--</div>-->
   </body>
</html>

