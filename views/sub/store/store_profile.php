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
               <div class="medium radius button callout" id='store_proflie' >
                [<span class="add_profile_b">+</span>]Add Profile    
              </div>
               <br>
                <div class="panel hide small-9" id="store_proflie1" >
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
                            
                          <div class="large-12 row collapse">
                                <div class="small-9 columns">
                                      <select name="store_profile_agency_list1" id="store_profile_status_list">
                                         <option>Active</option>
                                         <option>Inactive</option>
                                   </select> </div>
                               <div class='small-3 columns'><label class="postfix"> Status </label></div>
                          </div>
                             <button type="submit" class='medium radius button' id="add_profile_save_changes">Save Changes </button>
                               <button type="submit" class='medium radius button' id="add_profile_reset">Reset </button> 
                          </form>
                </div>
                <div class="panel">
                            <div> 
                              <div class="row"> 
                                 <div class="columns left">
                                     <div class="callout">
                                          <div>
                                              <span class="fi-folder-add" style="font-size: 45px ;"></span>
                                               <div style=" width: 150px; margin-left: 40px; font-size: 20px; margin-top: -2rem;">Store Profile </div>
                                         </div>
                                     </div>        
                                     <div class="medium-4 columns" style="margin-top: -32px;">
                                         <div class="row collapse">
                                             <div class="small-3 columns">
                                                  <span class="prefix"> <i class="fi-magnifying-glass" style="font-size: 24px; padding-top: 5px"></i>
                                                    </span>
                                             </div>
                                             <div class="small-9 columns">
                                                    <input type="text" placeholder="Search" id="add_store_search"></input>
                                             </div>
                                         </div>                           
                                    </div>                       
                            </div>
                     </div>
                          <div class="row">
                         <div class="small-2 columns left">
                         <select name="records_per_page">
                              <option>5</option>
                              <option>10</option>
                              <option>15</option>
                              <option>20</option>                              
                          </select>                      
                        </div>
                        <div style="font-size: 16px;">Records per page</div>
                     </div>
                      </div>                     
                <div>
                     <table width="100%">
                        <tr>
                            <th>
                                Profile  Name 
                            </th>
                            <th>
                                Agency 
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                                Action
                            </th>
                             
                        </tr>
                       </table> 
                </div>
                <br>
       
                <div class="pagination-centered">
                        <ul class="pagination">
                             <li class="arrow"><a href="">&laquo;</a></li>
                               <li class=""><a href="">Pervious</a></li>
                                <li class="unavailable"><a href="">1</a></li>
                                <li><a href="" class="">Next</a></li>
                                <li class="arrow"><a href="">&raquo;</a></li>
                          </ul>
                </div>
	
   </body>
                   
</html>