<?php


?>
<html>
    <head>
        <title>Add Store </title>
        
       <link href="../../css/master_cities.css" rel="stylesheet" type="text/css"/>
     <script type="text/javascript" src="../javascript/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="../javascript/store.js"></script>
    </head>
    <body>
        <table width="100%" border="1px solid">
            <tr>
                <td style="width: 100%; height:5%;" colspan="2" border="1px solid">
                    <div style="height: 30px;width:150px;text-align:left ;">
                        <span class='addcities_button_img' id='add_store' style="border-radius: 5px;cursor: pointer;">[+]Add Store </span>
                    </div>
                    <br>
                
                <div style="border: 1px #e7e7e7 inset; box-shadow: 1px 1px 2px #bbbbbb; border: 1px solid ;" id="add_store1">
                  
                        <table width ="70%" border="1px solid">
                            <tr>
                                <td colspan="2" align="center" style="text-indent: 20px"><b> Add Store information:</b> </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    Agency:
                                </td>
                                <td style="width: 50%; height:5%;" align="left">
                                    <select name="agency_list">
                                         <option>All</option>
                                         <option>All </option>
                                         <option>All</option>
                                         <option>All</option>
                                        <option>All</option>
                                   </select>
                                </td>
                            </tr>
                             <tr>
                                <td align="right">
                                    Country:
                                </td>
                                <td style="width: 50%; height:5%;" align="left">
                                    <select name="country_list">
                                         <option>All</option>
                                         <option>All </option>
                                         <option>All</option>
                                         <option>All</option>
                                        <option>All</option>
                                   </select>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    City:
                                </td>
                                <td style="width: 50%; height:5%;" align="left">
                                    <select name="city_list">
                                         <option>All</option>
                                         <option>All </option>
                                         <option>All</option>
                                         <option>All</option>
                                        <option>All</option>
                                   </select>
                                </td>
                            </tr>
                           
                            <tr>
                                <td align="right">
                                    Area:
                                </td>
                                <td style="width: 50%; height:5%;" align="left">
                                    <select name="area_list">
                                         <option>All</option>
                                         <option>All </option>
                                         <option>All</option>
                                         <option>All</option>
                                        <option>All</option>
                                   </select>
                                </td>
                            </tr>
                            <tr>
                                <td align ="right">
                                    Store Name:
                                </td>
                                <td>
                                     <input type="text" name="store_name"> 
                                </td>
                            </tr>
                            <tr>
                              <td align="right">
                                 Longitude:
                              </td>
                              <td>
                                <input type="text" name="addcity_longitude"> 
                              </td>                              
                          </tr>     
                          <tr>
                              <td align="right">
                                 Latitude:
                              </td>
                              <td>
                                <input type="text" name="addstore_latitude"> 
                              </td>                              
                          </tr>
                          <tr>
                              <td align="right"> Status:</td>
                              <td style="width: 50%; height:5%;" align="left">
                                    <select name="status_list">
                                         <option>Active</option>
                                         <option>Inactive </option>
                                   </select>
                                </td>
                          </tr>
                          <tr>
                              <td >
                                  
                              </td>
                              <td align="left">
                                  <input type="button" name="save_changes" value="Save Changes" style="width: 110px ;"class='addcities_button_img'>
                                  <input type="button" name="cancel" value="Cancel" style="width: 70px ;" class='addcities_button_img'>
                              </td>
                          </tr>
                      </table> 
                    </div>
                   </td>
            </tr>
             <tr>
                <td colspan="2"><hr></td>
            </tr>
             <tr >
                <td style="width: 50%; height:5%;" align="left">
                    Store :
               </td>
               <td align="right" style="width: 50%; height: 5%">
                     
                    <input type="button" name="search_go" value="Go" style="border-radius: 5px;" >                                     
                </td>
            </tr>
         </table>        
    </body>
</html>
