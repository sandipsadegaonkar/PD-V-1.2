<html>
    <head>
        <title>Master_Categories</title> 
        <!--<link href="../css/master_area.css" rel="stylesheet" type="text/css"/>-->
        <script type="text/javascript" src="../javascript/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="../javascript/jquery-1.10.1-min.js"></script>
        <script type="text/javascript" src="../javascript/master_categories.js"></script>
    </head>
    <body>
        
<!--        <div class="">
                  <span class='addarea_button_img' id='add_area' style="border-radius: 5px;cursor: pointer;">[<span class="addarea_close" style="cursor: pointer;">+</span>]Add Area</span>
           </div>-->
                <div class="medium radius button callout" id='add_categories'>
                         [<span class="addcategories_close">+</span>]Add Categories
                </div>
                <div class="medium radius button callout" id='manage_categories'>
                    Manage Categories
                </div>
                 <br>
                 <div class="panel small-9 hide" id="Master_addcategories">                  
              <i class="fi-clipboard-pencil" style="font-size:30px"></i> <b><h> Add categories information:</h></b>
        <hr>        
        <form data-abide id='add_categories_form'>   
            
          <div class="large-12 row collapse">
                <div class="small-9 columns"> 
                    <input type="text" name="addcategories_name" placeholder="Categories Name">
                </div>
                <div class='small-3 columns'>
                    <label class="postfix">Categories Name</label>
                </div>                  
          </div> 
            
          <div class="large-12 row collapse">
                <div class="small-9 columns"> 
                     <select name="city">
                                <option>Electronic</option>
                                <option>Automobile</option>
                                <option>Books</option>
                            </select>
                </div>
                <div class='small-3 columns'>
                    <label class="postfix"> Parent Categories Name</label>
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
          
               <button type="reset" id='reset_categories_button' class="medium radius">Reset</button>
               <button type="submit" id='add_categories_button' class="medium radius">Add Categories</button> 
           
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
                            <div style=" width: 100px; margin-left: 40px; font-size: 20px; margin-top: -2rem;">Categories</div>
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
                                Category Id
                            </th>
                            <th>
                                Category Name
                            </th>
                            <th>
                                Parent Category
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
    </body>
</html>