<html>
    <head>
        <title> store  user </title>
        
        <script type="text/javascript" src="../javascript/jquery-1.10.2.js"></script>
         <script type="text/javascript" src="../javascript/jquery-1.10.1-min.js"></script>
        <script type="text/javascript" src="../javascript/storeuser.js"></script>
        <script type="text/javascript" src="../javascript/foundation/foundation.js"></script>
         <link href="../css/foundation_store.css" rel="stylesheet" type="text/css"/>
       <link href="../css/foundation-icons.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
                     <div class="medium radius button callout" id='store_user' >                         
                         [<span class="add_store_user_b">+</span>]Add Store user    
                    </div>
                    <br>
                    <div class="panel hide small-9" id="store_user1">
                            <i class="fi-clipboard-pencil" style="font-size:30px"></i><b><h> Enter store user information:</h></b>
                          <hr>
                           <form data-abide id='login_form'>
                          <div class="large-12 row collapse">
                                <div class="small-9 columns">
                                      <select name="user_agency_list1" id="store_user_agency_list">
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
                              <input type="text" name="user_first_name" id="store_user_first_name" required pattern="[a-zA-Z]+">
                                </div>
                               <div class='small-3 columns'><label class="postfix"> First Name</label></div>
                          </div>
                          <div class="large-12 row collapse">
                                <div class="small-9 columns">
                              <input type="text" name="user_last_name " id="store_user_last_name"> </div>
                               <div class='small-3 columns'><label class="postfix"> Last Name</label></div>
                          </div>
                          <div class="large-12 row collapse">
                                <div class="small-9 columns">
                              <input type="email" name="user_email"  id="store_user_email" required="" ></div>
                               <div class='small-3 columns'><label class="postfix"> Email</label></div>
                          </div>
                         <div class="large-12 row collapse">
                                <div class="small-9 columns">
                               <select name="branch_list" id="store_user_branch_list">
                                         <option>All</option>
                                         <option>All </option>
                                         <option>All</option>
                                         <option>All</option>
                                        <option>All</option>
                                </select></div>
                               <div class='small-3 columns'><label class="postfix">Branch</label></div>
                          </div>
                          <div class="large-12 row collapse">
                                <div class="small-9 columns">
                               <input type="text" name="time_zone" id="store_user_time_zone"></div>
                               <div class='small-3 columns'><label class="postfix">Time Zone</label></div>
                          </div>
                           <div class="large-12 row collapse">
                                <div class="small-9 columns">
                               <input type="text" name="user_name" id="store_user_user_name"></div>
                                <div class='small-3 columns'><label class="postfix"> User Name</label></div>
                          </div>
                          <div class="large-12 row collapse">
                                <div class="small-9 columns">
                              <input type="password" name="user_password" id="store_user_password" required pattern="password"></div>
                           <div class='small-3 columns'><label class="postfix"> Password</label></div>
                          </div>
                          <div class="large-12 row collapse">
                                <div class="small-9 columns">
                               <input type="password" name="confirm_password" id="store_user_confirm_passwod"></div>
                                <div class='small-3 columns'><label class="postfix">Confirm Password</label></div>
                          </div>
                           <div class="large-12 row collapse">
                                <div class="small-9 columns">
                               <select name="status" id="store_user_status_list">
                                         <option>Active</option>
                                         <option>Inactive</option>
                                     </select>  </div>
                               <div class='small-3 columns'><label class="postfix">Status</label></div>
                          </div>
                           
                               <button type="submit"  class="medium radius" id="store_user_save_changes">Save Changes</button>
                               <button type="submit"  class="medium radius" id="store_user_reset">Reset</button>
                          
                           </form>
                    </div>
                <div class="panel">
                  <div> 
                              <div class="row"> 
                                 <div class="columns left">
                                     <div class="callout">
                                          <div>
                                              <span class="fi-folder-add" style="font-size: 45px ;"></span>
                                               <div style=" width: 100px; margin-left: 40px; font-size: 20px; margin-top: -2rem;">Store User</div>
                                         </div>
                                     </div>        
                                     <div class="medium-4 columns" style="margin-top: -32px;">
                                         <div class="row collapse">
                                             <div class="small-3 columns">
                                                  <span class="prefix"> <i class="fi-magnifying-glass" style="font-size: 24px; padding-top: 5px"></i>
                                                    </span>
                                             </div>
                                             <div class="small-9 columns">
                                                    <input type="text" placeholder="Search"></input>
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
                 
    </body>
</html>

