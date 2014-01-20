<?php
?>
<html>
    <head>
        <title>Add Store </title>
       <link href="../../css/foundation_store.css" rel="stylesheet" type="text/css"/>
     <script type="text/javascript" src="../../javascript/jquery-1.10.2.js"></script>
     <script type="text/javascript" src="../../javascript/store.js"></script>
    </head>
    <body>
        <table width="100%" border="1px solid">
            <tr>
                <td style="width: 100%; height:5%;" colspan="2" border="1px solid">
                    <div class="large-12 columns">
                        <span class="small radius button" id='add_store' style="border-radius: 5px;cursor: pointer;border: 1px solid">[+]Add Store </span>
                    </div>
                    <br>
                
                <div style="border: 1px #e7e7e7 inset; box-shadow: 1px 1px 2px #bbbbbb; id="add_store1">
                  
                    <table width ="100%">
                            <tr>
                                <td align="center" style="text-indent: 20px"><b> Add Store information:</b> </td>
                            </tr>
                            <tr>
<!--                                 <td align="right">
                                    Agency Name
                                </td>-->
                                <td style="width: 50%; height:5%;" align="left">
                                    <select name="agency_name">
                                         <option>Agency Name </option>
                                         <option>All </option>
                                         <option>All</option>
                                         <option>All</option>
                                        <option>All</option>
                                   </select>
                                </td>
                            </tr>
                             <tr>
<!--                          <td align="right">
                                    country:
                                </td>-->
 
                                <td style="width: 50%; height:5%;" align="left">
                                    <select name="country_list">
                                        <option>Country</option>
                                         <option>All </option>
                                         <option>All</option>
                                         <option>All</option>
                                        <option>All</option>
                                   </select>
                                </td>
                            </tr>
                            <tr>
<!--                                 <td align="right">
                                    city:
                                 </td>-->
                                <td style="width: 50%; height:5%;" align="left">
                                    <select name="city_list">
                                         <option>City</option>
                                         <option>All </option>
                                         <option>All</option>
                                         <option>All</option>
                                        <option>All</option>
                                   </select>
                                </td>
                            </tr>
                           
                            <tr>
<!--                                <td align="right">
                                    Area:
                                </td>-->
                                <td style="width: 50%; height:5%;" align="left">
                                    <select name="area_list">
                                         <option>Area List</option>
                                         <option>All </option>
                                         <option>All</option>
                                         <option>All</option>
                                        <option>All</option>
                                   </select>
                                </td>
                            </tr>
                            <tr>
<!--                                <td align ="right">
                                    Store Name:
                                </td>-->
                                <td>
                                    <input type="text" name="store_name" placeholder="Store Name"> 
                                </td>
                            </tr>
                            <tr>
<!--                              <td align="right">
                                 Longitude:
                              </td>-->
                              <td>
                                  <input type="text" name="addcity_longitude" placeholder="Longitude" 
                              </td>                              
                          </tr>     
                          <tr>
<!--                              <td align="right">
                                 Latitude:
                              </td>-->
                              <td>
                          <input type="text" name="addstore_latitude" placeholder="Latitude"> 
                              </td>                              
                          </tr>
                          <tr>
<!--                              <td align="right"> Status:</td>-->
                              <td style="width: 50%; height:5%;" align="left">
                                    <select name="status_list">
                                        <option> Status List </option>
                                         <option>Active</option>
                                         <option>Inactive </option>
                                   </select>
                                </td>
                          </tr>
                          <tr>
                              <td >
                                  
                              </td>
                              <td align="left">
                                  <input type="button" name="save_changes" value="Save Changes" style="width: 110px ;"class='small radius button'>
                                  <input type="button" name="cancel" value="Cancel" style="width: 70px ;" class='small radius button'>
                              </td>
                          </tr>
                      </table> 
                    </div>
                   </td>
            </tr>
             <tr>
                <td colspan="2"><hr></td>
            </tr>
             <tr>
                <td style="width: 50%; height:5%;" align="left">
                    Store :
               </td>
               <td align="right" style="width: 50%; height: 5%">
                       <input type="text" name="search" placeholder="Search" style="border-radius: 5px; background-color: #e7e7e7;text-indent: 5px;">
                    <input type="button" name="search_go" value="Go" style="border-radius: 5px;" >                                     
                </td>
            </tr>
            <tr>
                 <td align="center" colspan="2">
                    <table border="1" width="100%">
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
            <tr>
         </table> 
        </table>
    </body>
</html>
