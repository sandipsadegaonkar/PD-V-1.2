<?php
$con= mysql_connect("localhost","root","");
if($con)
{   $i=0;
    mysql_select_db("pd");
    $result=  mysql_query("select * from cities");
    while($row=  mysql_fetch_array($result))
    {
        $data[$i]['cityId']=$row[0];
        $data[$i]['cityName']=$row[1];
        $i++;
    }
    $myjson=json_encode($data);
    echo $myjson;
}
?>
