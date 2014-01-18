<html>
    <head>
        <title> store  user </title>
        <link href="../../css/store_menu.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="../../javascript/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="../../javascript/master_cities.js"></script>
    </head>
    <body>
        <table width="100%" border="1px solid">
            <tr>
                <td style="width: 100%; height:5%;" colspan="2">
                    <div style="height: 30px;width:150px;text-align:left">
                        <span class='addstore_button_img' id='add_store_user' style="border-radius: 5px;cursor: pointer;">[+]Add store user </span>
                    </div>
                    <br>
                    <div style="border: 1px #e7e7e7 inset; box-shadow: 1px 1px 2px #bbbbbb;" id="add_store_user1">                
                        <center>    
                    <table width="70%" border="1px solid">
                          <tr>
                              <td colspan="2" style="text-indent: 20px"><b>Enter store user information:</b></td>
                          </tr>
                          <tr>
                              <td>
                                Agency 
                              </td>
                             <td style="width: 50%; height:5%;" align="left">
                                    <select name="user_agency_list1">
                                         <option>All</option>
                                         <option>All </option>
                                         <option>All</option>
                                         <option>All</option>
                                        <option>All</option>
                                   </select>
                                </td>                           
                          </tr>
                         <tr>
                              <td>
                               First Name 
                              </td>
                              <td>
                                <input type="text" name="user_first_name">
                              </td>                              
                          </tr>
                          <tr>
                              <td>
                                 Last Name 
                              </td>
                              <td>
                                <input type="text" name="user_last_name"> 
                              </td>                              
                          </tr>                        
                          <tr>
                              <td>
                                  Email 
                              </td>
                              <td>
                                <input type="text" name="user_email"> 
                              </td>                              
                          </tr>     
                          <tr>
                              <td>
                                Branch 
                              </td>
                               <td style="width: 50%; height:5%;" align="left">
                                    <select name="branch_list">
                                         <option>All</option>
                                         <option>All </option>
                                         <option>All</option>
                                         <option>All</option>
                                        <option>All</option>
                                   </select>
                                </td>                          
                          </tr>
                          <tr>
                              <td>
                                  Time Zone
                              </td>
                              <td>
                                  <input type="text" name="time_zone">
                               </td>
                          </tr>
                          <tr>
                              <td colspan="2" >
                              </td>
                          </tr>
                         
                          <tr>
                              <td>
                                
                              </td>
                              <td  width="100%" >
                                  <input type="button" name="submit" value="Add" style="width: 70px ;" class='addcities_button_img'>
                                  <input type="reset" name="reset" value="Clear" style="width: 70px ;" class='addcities_button_img'>
                              </td>
                          </tr>
                      </table></center>
                   </div>
                </td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr >
                <td style="width: 50%; height:5%;" align="left">
                    <select name="records_per_page">
                        <option>5</option>
                        <option>10</option>
                        <option>15</option>
                        <option>20</option>
                        <option>All</option>
                    </select>
                    records per page
               </td>
               <td align="right" style="width: 50%; height: 5%">
                    <select name="search_categoris" style="border-radius: 5px; background-color: #e7e7e7;">
                        <option>City</option>
                        <option>Country</option>
                        <option>Status</option>
                    </select>
                    <input type="text" name="search" placeholder="Search" style="border-radius: 5px; background-color: #e7e7e7;text-indent: 5px;">
                    <input type="button" name="search_go" value="Go" style="border-radius: 5px;" >                                     
                </td>
            </tr>
           
           <tr >
                <td align="center" colspan="2">
                    <table border="1" width="100%">
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
                        <tr>
                            <td colspan="6">
                                <h4>No Records found</h4>
                            </td>
                        </tr>
                        
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>