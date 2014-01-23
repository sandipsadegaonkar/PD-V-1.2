<?php
?>
<html>
    <head>
        <title>Add Store </title>
         <script type="text/javascript" src="../javascript/jquery-1.10.2.js"></script>
         <script type="text/javascript" src="../javascript/jquery-1.10.1-min.js"></script>
         <script type="text/javascript" src="../javascript/store.js"></script>
       <link href="../css/foundation_store.css" rel="stylesheet" type="text/css"/>
       <link href="../css/foundation-icons.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
                    <div class="medium radius button callout" id='add_store' >
                          [<span class="add_store_b">+</span>]Add Store
                    </div>
                  <br>
                 <div class="panel hide small-9" id="add_store1">
                            <i class="fi-clipboard-pencil" style="font-size:30px"></i><b><h> Add store information:</h></b>
                            <hr>
                             <form data-abide id='login_form'>
                            <div class="large-12 row collapse">
                                <div class="small-9 columns"> 
                                    <select name="agency_name" id="add_store_agency_name_list">
                                         <option>All </option>
                                         <option>All</option>
                                         <option>All</option>
                                        <option>All</option>
                                    </select></div>
                                <div class='small-3 columns'>
                                    <label class="postfix"> Agency Name</label></div>
                            </div>
                          <div class="large-12 row collapse">
                                <div class="small-9 columns">
                                    <select name="country_list" id="add_store_counry_List">
                                        <option>All </option>
                                         <option>All</option>
                                         <option>All</option>
                                        <option>All</option>
                                  </select></div>
                                 <div class='small-3 columns'>
                                     <label class="postfix"> Country</label></div>
                          </div>
                          <div class="large-12 row collapse">
                              <div class="small-9 columns">
                               <select name="city_list" id="add_store_city_List">
                                         <option>All </option>
                                         <option>All</option>
                                         <option>All</option>
                                        <option>All</option>
                               </select></div>
                              <div class='small-3 columns'>
                                  <label class="postfix"> City</label></div>
                          </div>
                          <div class="large-12 row collapse">
                              <div class="small-9 columns">
                             <select name="area_list" id="add_store_area_List">
                                         <option>Area List</option>
                                         <option>All </option>
                                         <option>All</option>
                                         <option>All</option>
                                        <option>All</option>
                                   </select>  </div>
                                <div class='small-3 columns'>
                                    <label class="postfix"> Area List</label></div>
                          </div>
                          <div class="large-12 row collapse">
                              <div class="small-9 columns">
                               <input type="text" name="store_name" placeholder="Store Name" id="add_store_store_name">
                              </div>
                                <div class='small-3 columns'>
                                    <label class="postfix"> Store Name </label></div>
                          </div>
                          <div class="large-12 row collapse">
                              <div class="small-9 columns">
                                <input type="text" name="addcity_longitude" placeholder="Longitude" id="add_store_longitude">
                              </div>
                                 <div class='small-3 columns'>
                                     <label class="postfix">Longitude</label></div>
                          </div>
                         <div class="large-12 row collapse">
                              <div class="small-9 columns">
                              <input type="text" name="addstore_latitude" placeholder="Latitude" id="add_store_latitude">  
                              </div>
                               <div class='small-3 columns'>
                                   <label class="postfix"> Latitude </label></div>
                          </div>
                          <div class="large-12 row collapse">
                              <div class="small-9 columns">
                               <select name="status_list" id="add_store_status_list">
                                         <option>Active</option>
                                         <option>Inactive </option>
                               </select></div>
                               <div class='small-3 columns'>
                                   <label class="postfix">Status </label></div>
                          </div>
                          <div class="large-12 columns">
                               <button type="submit" class='medium radius button' id="add_store_save_changes">Save Changes </button>
                               <button type="submit" class='medium radius button' id="add_store_reset">Reset </button>
                          </div>
                             </form>
                        </div>
                        <div class="panel">
                            <div> 
                              <div class="row"> 
                                 <div class="columns left">
                                     <div class="callout">
                                          <div>
                                              <span class="fi-folder-add" style="font-size: 45px ;"></span>
                                               <div style=" width: 100px; margin-left: 40px; font-size: 20px; margin-top: -2rem;">Store </div>
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
                                Store Name 
                            </th>
                            <th>
                                Agency 
                            </th>
                            <th>
                                City
                            </th>
                            <th>
                                Area 
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
	
         </div>   
      
                
</body>
</html>                    
        

    
