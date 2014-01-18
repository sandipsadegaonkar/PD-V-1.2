<?php
$con= mysql_connect("localhost","root","");
$data="<table>";
if($con)
{
    mysql_select_db("pd");
    $result=  mysql_query("select * from cities");
    while($row=  mysql_fetch_array($result))
    {
        $data.="<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td></tr>";
    }
    $data.="</table>";
    echo $data;
}
?>
