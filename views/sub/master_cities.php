<html>
    <head>
        <title>Master_Cities</title>
        <link href="../css/master_cities.css" rel="stylesheet" type="text/css"/>
<!--        <script type="text/javascript" src="../javascript/jquery-1.10.2.js"></script>-->
        <script type="text/javascript" src="../javascript/master_cities.js"></script>
    </head>
    <body>
        <table width="100%">
            <tr>
                <td style="width: 100%; height:5%;" colspan="2">
                    <div style="height: 30px;width:150px;text-align:left">
                        <span class='addcities_button_img' id='add_cities' style="border-radius: 5px;cursor: pointer;">[<span class="addcities_close" style="cursor: pointer;">+</span>]Add Cities</span>
                    </div>
                    <br>
                    <div style="border: 1px #e7e7e7 inset; box-shadow: 1px 1px 2px #bbbbbb; display: none;" id="Master_addcities">
                        <div align="right">                            
                            <img src="../images/Close.ico" style="width: 16px; height: 16px;margin-top: 5px; margin-right: 5px" id="content_close"/>
                        </div>
                    <center>    
                    <table width="70%">
                          <tr>
                              <td colspan="2" style="text-indent: 20px"><b>Enter city details:</b></td>
                          </tr>
                          <tr>
                              <td>
                                Country
                              </td>
                              <td>
                                <input type="text" name="addcity_country">  
                              </td>                              
                          </tr>
                         <tr>
                              <td>
                               State
                              </td>
                              <td>
                                <input type="text" name="addcity_state">
                              </td>                              
                          </tr>
                          <tr>
                              <td>
                                 City
                              </td>
                              <td>
                                <input type="text" name="addcity_city"> 
                              </td>                              
                          </tr>                        
                          <tr>
                              <td>
                                 Longitude
                              </td>
                              <td>
                                <input type="text" name="addcity_longitude"> 
                              </td>                              
                          </tr>     
                          <tr>
                              <td>
                                 Latitude
                              </td>
                              <td>
                                <input type="text" name="addcity_latitude"> 
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
                    <table border="1" width="100%" id="cities_data">
<!--                        <tr>
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
                                <span id="dat"></span>
                            </td>
                        </tr>
                        -->
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>