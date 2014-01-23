<html>
    <head>
        <title>System User</title>
        <script type="text/javascript" src="../javascript/jquery-1.10.2.js"></script>
        <!--<link href="../css/master_cities.css" rel="stylesheet" type="text/css"/>-->        
        <!--<link href="../css/login.css" rel="stylesheet" type="text/css"/>-->        
        <script type="text/javascript" src="../javascript/system_profile.js"></script>
        <link href="../css/foundation-icons.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>        
    <div>
     <div class="medium radius button callout" id='add_system_profile' >
         [<span class="systemprofile_close">+</span>]Add System Profile
    </div>
    <br>
      <div class="panel hide small-9" id="system_profile_page">
         <i class="fi-clipboard-pencil" style="font-size:30px"></i> <b><h> Add System User information:</h></b>
        <hr>          
         <form data-abide id='add_System_profile_form'>   
          <div class="large-12 row collapse">
                <div class='small-4 columns left'>
                    <label class="postfix">Profile Name</label>
                </div>  
                <div class="small-8 columns right"> 
                     <input type="text" name="add_sys_profilename">
                </div>
          </div>
          <div class="large-12 row collapse">
               <div class='small-4 columns left'>
                    <label class="postfix">Access Permission</label>
                </div>  
              <div class="small-8 columns right"> 
                     <input type="text" name="add_sys_profile_lastname">
                </div>                          
          </div>
                      
          <div class="large-12 row collapse">
                <div class="small-8 columns"> 
                    <select name="add_sys_status">
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>                     
                </div>
                <div class='small-4 columns'>
                    <label class="postfix"> Status</label>
                </div>                  
          </div>                                   
         <input type="submit" value="Save changes" class='medium radius button' id="reset__sys_profile_button">            
         <input type="reset" value="reset"  class='medium radius button' id="add_sys_profile_button">                
                       
         </form>             
       </div>
         <div class="panel">
          <div>
              <div class="row"> 
               <div class="columns left">
                   <div class="callout">
                       <div class="small-3">
                           <span class="fi-folder-add" style="font-size: 45px ;"></span>
                           <div style=" width: 150px; margin-left: 40px; font-size: 20px; margin-top: -2rem;">System Profile</div>
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
             <div class="row">
             <table width='100%'id="cities_data">
               <tr>
                   
                   <th style="text-align: left;width: 60%;">
                        Profile Name
                    </th>
                    <th style="width: 20%;">
                        Status
                    </th>
                    <th style="width: 20%;">
                        Action
                    </th>
                    
             </tr>
             <tr>
                 <td style="text-align: left;">
                     
                 </td>
                 <td>
                     
                 </td>
                 <td>
                     
                 </td>
                 
             </tr>
            </table>
             </div> 
              <div class="pagination-centered row">
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