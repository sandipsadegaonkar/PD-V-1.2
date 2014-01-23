<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <title>Database Backup</title>        
        <script type="text/javascript" src="../javascript/jquery-1.10.2.js"></script>        
        <!--<script type="text/javascript" src="../javascript/database_backup.js"></script>-->
    </head>
    <body>
        <div>
           <div class="medium radius button callout" id='backup'>
               <i class="fi-download" style="font-size: 24px;"></i> Click to Backup
           </div>
            <div class="panel">
                <div class="tsmall-12 callout panel">
                    <i class="fi-align-justify" style="font-size:24px;"></i>   Database Dump
                </div>
                <div>
                    <table width="100%">
                        <tr>
                            <th style="text-align:left;width:60%;"> File Name</th>
                            <th style="width:20%;"> Delete</th>
                            <th style="width:20%;"> Download</th>
                        </tr>
                        <tr>
                            <th style="text-align:left;width:60%;"> </th>
                            <th style="width:20%;"> <i class="fi-trash" style="color:#cc0033 ; font-size: 25px;"></i> </th>
                            <th style="width:20%;"> <i class="fi-download" style="color: green; font-size: 25px;"></i></th>
                        </tr>  
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>