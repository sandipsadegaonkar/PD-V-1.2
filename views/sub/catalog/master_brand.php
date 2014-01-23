<html>
    <head>
        <title>Master_Brand</title> 
        <!--<link href="../css/master_area.css" rel="stylesheet" type="text/css"/>-->
        <script type="text/javascript" src="../javascript/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="../javascript/jquery-1.10.1-min.js"></script>
        <script type="text/javascript" src="../javascript/master_brand.js"></script>
    </head>
    <body>
        
<!--        <div class="">
                  <span class='addbrand_button_img' id='add_brand' style="border-radius: 5px;cursor: pointer;">[<span class="addbrand_close" style="cursor: pointer;">+</span>]Add Brand</span>
           </div>-->
<div class="medium radius button callout" id='add_brand' >
                         [<span class="addbrand_close">+</span>]Add Brand  
                    </div>
                 <br>
                 <div class="panel small-9 hide" id="Master_addbrand">                  
              <i class="fi-clipboard-pencil" style="font-size:30px"></i> <b><h> Add brand information:</h></b>
        <hr>        
        <form data-abide id='add_brand_form'>   
          <div class="large-12 row collapse">
                <div class="small-9 columns"> 
                    <input type="text" name="brand_name" placeholder="Brand Name">
                </div>
                <div class='small-3 columns'>
                    <label class="postfix"> Brand Name</label>
                </div>                  
          </div>
            
            <div class="large-12 row collapse">
                <div class='small-8 columns '>
                    <input type="file" name="brand_image">
                </div>             
                <div class='small-3 columns'>
                    <label class="postfix"> Brand Image</label>
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
                            <div style=" width: 100px; margin-left: 40px; font-size: 20px; margin-top: -2rem;">Brand</div>
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
                                Brand Id
                            </th>
                            <th>
                                Brand Logo
                            </th>
                            <th>
                                Brand Name
                            </th>
                            <th>
                                Published
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