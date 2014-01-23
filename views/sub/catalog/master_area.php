<html>
    <head>
        <title>Master_Area</title> 
        <!--<link href="../css/master_area.css" rel="stylesheet" type="text/css"/>-->
        <script type="text/javascript" src="../javascript/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="../javascript/jquery-1.10.1-min.js"></script>
        <script type="text/javascript" src="../javascript/master_area.js"></script>
    </head>
    <body>
        
<!--        <div class="">
                  <span class='addarea_button_img' id='add_area' style="border-radius: 5px;cursor: pointer;">[<span class="addarea_close" style="cursor: pointer;">+</span>]Add Area</span>
           </div>-->
<div class="medium radius button callout" id='add_area' >
                         [<span class="addarea_close">+</span>]Add Area  
                    </div>
                 <br>
                 <div class="panel small-9 hide" id="Master_addarea">                  
              <i class="fi-clipboard-pencil" style="font-size:30px"></i> <b><h> Add Area information:</h></b>
        <hr>        
        <form data-abide id='add_cities_form'>   
          <div class="large-12 row collapse">
                <div class="small-9 columns"> 
                     <select name="city">
                                <option>Pune</option>
                                <option>Mumbai</option>                      
                            </select>
                </div>
                <div class='small-3 columns'>
                    <label class="postfix"> City Name</label>
                </div>                  
          </div>
          <div class="large-12 row collapse">
                <div class="small-9 columns"> 
                    <input type="text" name="addarea_name" placeholder="Area Name">
                </div>
                <div class='small-3 columns'>
                    <label class="postfix"> Area Name</label>
                </div>                  
          </div> 
         
          <div class="large-12 row collapse">
                <div class="small-9 columns"> 
                    <input type="text" name="addcity_longitude" placeholder="Longitude">
                </div>
                <div class='small-3 columns'>
                    <label class="postfix"> Longitude</label>
                </div>                  
          </div>  
          <div class="large-12 row collapse">
                <div class="small-9 columns"> 
                    <input type="text" name="addcity_latitude" placeholder="Latitude">
                </div>
                <div class='small-3 columns'>
                    <label class="postfix">Latitude</label>
                </div>                  
          </div>
            <div class="large-12 row collapse">
                <div class="small-9 columns"> 
                   <select name="status">
                                   <option>Active</option>
                                   <option>Inactive</option>                      
                              </select>
                </div>
                <div class='small-3 columns'>
                    <label class="postfix">Status</label>
                </div>                  
          </div> 
          
               <button type="reset" id='reset_cities_button' class="medium radius">Reset</button>                                                                                 
               <button type="submit" id='add_cities_button' class="medium radius">Add</button>                                                         
           
         </form>
                   </div>
<!-- ******************************************************************************** -->
               <div class="panel">      
               <div>
            <div class="row"> 
               <div class="columns left">
                   <div class="callout">
                       <div>
                           <span class="fi-folder-add" style="font-size: 45px ;"></span>
                            <div style=" width: 100px; margin-left: 40px; font-size: 20px; margin-top: -2rem;">Area</div>
                       </div>
                   </div>        
                   <div class="medium-4 columns" style="margin-top: -32px;"><div class="row collapse">
                            <div class="small-3 columns">
                             <span class="prefix"> <i class="fi-magnifying-glass" style="font-size: 24px; padding-top: 5px"></i>
                             </span>
                            </div><div class="small-9 columns">
                            <input type="text" placeholder="Search"></input></div></div>                           
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
                    <table width="100%">
                        <tr>
                            <th>
                                Country
                            </th>
                            <th>
                                State
                            </th>
                            <th>
                                City
                            </th>
                            <th>
                                Latitude
                            </th>
                            <th>
                                Longitude
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
    </body>
</html>