<html>
    <head>
        <title>Master_Cities</title>
        <script type="text/javascript" src="../javascript/jquery-1.10.2.js"></script>
        <!--<link href="../css/master_cities.css" rel="stylesheet" type="text/css"/>-->        
        <!--<link href="../css/login.css" rel="stylesheet" type="text/css"/>-->        
        <script type="text/javascript" src="../javascript/master_cities.js"></script>
        <link href="../css/foundation-icons.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>        
    <div>
     <div class="medium radius button callout" id='add_cities' >
         [<span class="addcities_close">+</span>]Add City
    </div>
    <br>
      <div class="panel hide small-9" id="Master_addcities">
         <i class="fi-clipboard-pencil" style="font-size:30px"></i> <b><h> Add City information:</h></b>
        <hr>          
         <form data-abide id='add_cities_form'>   
          <div class="large-12 row collapse">
                <div class="small-9 columns"> 
                     <input type="text" name="addcity_country">
                </div>
                <div class='small-3 columns'>
                    <label class="postfix"> Country</label>
                </div>                  
          </div>
          <div class="large-12 row collapse">
                <div class="small-9 columns"> 
                     <input type="text" name="addcity_state">
                </div>
                <div class='small-3 columns'>
                    <label class="postfix"> State</label>
                </div>                  
          </div> 
          <div class="large-12 row collapse">
                <div class="small-9 columns"> 
                     <input type="text" name="addcity_city">
                </div>
                <div class='small-3 columns'>
                    <label class="postfix"> City</label>
                </div>                  
          </div> 
          <div class="large-12 row collapse">
                <div class="small-9 columns"> 
                     <input type="text" name="addcity_longitude">
                </div>
                <div class='small-3 columns'>
                    <label class="postfix"> Longitude</label>
                </div>                  
          </div>  
          <div class="large-12 row collapse">
                <div class="small-9 columns"> 
                     <input type="text" name="addcity_latitude">
                </div>
                <div class='small-3 columns'>
                    <label class="postfix">Latitude</label>
                </div>                  
          </div>  
          
            
              <input type="submit" value="Add" class='medium radius button' id="reset_cities_button">            
              <input type="reset" value="reset"  class='medium radius button' id="add_cities_button">                
                       
         </form>             
       </div>
         <div class="panel">
          <div>
              <div class="row"> 
               <div class="columns left">
                   <div class="callout">
                       <div>
                           <span class="fi-folder-add" style="font-size: 45px ;"></span>
                            <div style=" width: 100px; margin-left: 40px; font-size: 20px; margin-top: -2rem;">Cities</div>
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
          <div>
            <table width='100%'id="cities_data">
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
     </div>               
   </body>
</html>