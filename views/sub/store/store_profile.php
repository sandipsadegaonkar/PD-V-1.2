<?php

?>
<html>
    <head>
        <title> store  Profile </title>
        
        <script type="text/javascript" src="../../../javascript/jquery-1.10.2.js"></script>
         <script type="text/javascript" src="../../../javascript/jquery-1.10.1-min.js"></script>
        <script type="text/javascript" src="../../../javascript/storeprofile.js"></script>
        <script type="text/javascript" src="../../../javascript/foundation/foundation.js"></script>
         <link href="../../../css/foundation_store.css" rel="stylesheet" type="text/css"/>
       <link href="../../../css/foundation-icons.css" rel="stylesheet" type="text/css"/>
    </head>
   <body>
               <div class="small radius button callout" id='store_proflie' >
                         [+]Add Store Profile
              </div>
               <br>
                <div class="panel" id="store_proflie1" style=" width: 500px; height: 680px ;display: none;">
                            <i class="fi-clipboard-pencil" style="font-size:30px"></i><b><h> Enter store user information:</h></b>
                          <hr>
                          <form data-abide id='login_form'>
                               <div class="large-12 row collapse">
                                <div class="small-9 columns">
                                      <select name="store_profile_agency_list1" id="store_profile_agency_list">
                                         <option>All</option>
                                         <option>All </option>
                                         <option>All</option>
                                         <option>All</option>
                                        <option>All</option>
                                   </select> </div>
                               <div class='small-3 columns'><label class="postfix"> Agency Name</label></div>
                          </div>
                           <div class="large-12 row collapse">
                                <div class="small-9 columns">
                               <input type="text" name="time_zone" id="store_profilt_name"></div>
                               <div class='small-3 columns'><label class="postfix">Profile Name</label></div>
                          </div>
                          </form>
                </div>
   </body>
                   
</html>