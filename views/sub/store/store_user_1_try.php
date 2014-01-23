<html>
    <head>
        <title> store  user </title>
        
        <script type="text/javascript" src="../../../javascript/jquery-1.10.2.js"></script>
         <script type="text/javascript" src="../../../javascript/jquery-1.10.1-min.js"></script>
        <script type="text/javascript" src="../../../javascript/storeuser.js"></script>
        <script type="text/javascript" src="../../../javascript/foundation/foundation.js"></script>
        <script type="text/javascript" src="../../../javascript/foundation/foundation.topbar.js"></script>
        
         <link href="../../../css/foundation_store.css" rel="stylesheet" type="text/css"/>
       <link href="../../../css/foundation-icons.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
                     <div class="small radius button callout" id='store_user' >
                         [+]Add Store User   
                    </div>
                    <br>
                    <div class="panel hide small-9" id="store_user1">
                            <b><h> Enter store user information:</h></b>
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
                           
                               <button type="submit" id='login' class="small radius" id="store_user_save_changes">Save Changes</button>
<!--                             <input type="button" name="save_changes" value="Save Changes" class='small radius button' id="store_user_save_changes">
                              <input type="button" name="cancel" value="Cancel"  class='small radius button' id="store_user_save_cancel">  -->
                          
                           </form>
                    </div>
                     <div class="panel">
                         <nav class="top-bar" data-topbar="" style="background-color: #ffffff; color: #000000;">
  <!-- Title -->
 <ul class="right">

      <!-- Search | has-form wrapper -->
      <li class="has-form">
        <div class="row collapse">
<!--          <div class="large-8 small-9 columns">
            <input placeholder="Find Stuff" type="text">
          </div>
          <div class="large-4 small-3 columns">
            <a href="#" class="alert button expand">Search</a>
          </div>-->
             <div class="small-3 columns">
                  <span class="prefix"> <i class="fi-magnifying-glass" style="font-size: 24px;padding-top: 5px;"></i>
                   </span>
              </div>
              <div class="small-9 columns">
                  <input type="text" placeholder="Search"></input>
              </div>
        </div>
      </li>
<!--      <li class="has-form">
        <a class="button">Test</a>
      </li>-->
    </ul>
  <ul class="title-area left">
    <li class="name">
          <span class="fi-folder-add" style="font-size:36px ;"></span>
        <h1><a href="#" style="color: #ffffff">Top Bar</a></h1></li>

    <!-- Mobile Menu Toggle -->
    <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
  </ul>

  <!-- Top Bar Section -->
  
<section class="top-bar-section">

    <!-- Top Bar Left Nav Elements -->
   

    <!-- Top Bar Right Nav Elements -->
    <ul class="right">
      <!-- Divider -->
      <li class="divider"></li>

      <!-- Dropdown -->
      <li class="has-dropdown not-click"><a href="http://zurb.com/">Item 1</a>
        <ul class="dropdown"><li class="title back js-generated"><h5><a href="javascript:void(0)">Back</a></h5></li>
          <li><label>Level One</label></li>
          <li><a href="#">Sub-item 1</a></li>
          <li><a href="#">Sub-item 2</a></li>
          <li class="divider"></li>
          <li><a href="#">Sub-item 3</a></li>
          <li class="has-dropdown not-click"><a href="#">Sub-item 4</a>

            <!-- Nested Dropdown -->
            <ul class="dropdown"><li class="title back js-generated"><h5><a href="javascript:void(0)">Back</a></h5></li>
              <li><label>Level Two</label></li>
              <li><a href="#">Sub-item 2</a></li>
              <li><a href="#">Sub-item 3</a></li>
              <li><a href="#">Sub-item 4</a></li>
            </ul>
          </li>
          <li><a href="#">Sub-item 5</a></li>
        </ul>
      </li>

      <li class="divider"></li>

      <!-- Anchor -->
      <li><a href="#">Generic Button</a></li>
      <li class="divider"></li>

      <!-- Button -->
      <li class="has-form show-for-large-up">
        <a href="../index.html" class="button">Get Lucky</a>
      </li>
    </ul>
  </section></nav>
<!--                         <div class="row"> 
                                <span class="fi-folder-add left" style="font-size: 45px ;"></span>
                                <div class="left">Store  User
                                  </div>
                             </div>
                                     <br>
                       
                         <div class="row">
                             <div class="row left columns">
                             <div class="left small">
                              <select name="records_per_page">
                                     <option>5</option>
                                    <option>10</option>
                                    <option>15</option>
                                    <option>20</option>
                                    <option>All</option>
                              </select>    
                                 
                         </div>
                                 <div class="right callout">Record per page 
                             </div>
                             </div>
                          <div class="large-4 medium-4 columns right">
                              <div class="row collapse">
                                  <div class="small-3 columns">
                                       <span class="prefix"> <i class="fi-magnifying-glass" style="font-size: 24px; padding-top: 5px"></i>
                                        </span>
                                   </div>
                                  <div class="small-9 columns">
                                           <input type="text" placeholder="Search">
                                            </input>
                                  </div>
                              </div>   
                           </div>
                         </div>
                         <br>
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
                         <br>
                         <div class="pagination-centered">
                                 <ul class="pagination">
                                 <li class="arrow"><a href="">&laquo;</a></li>
                                  <li class=""><a href="">Pervious</a></li>
                                 <li class="unavailable"><a href="">1</a></li>
                                    <li><a href="" class="">Next</a></li>
                                 <li class="arrow"><a href="">&raquo;</a></li>
                          </ul>
                </div>-->
                    </div>
                 
    </body>
</html>