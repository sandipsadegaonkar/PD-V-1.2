<?php

define('CONST_SERVER_TIMEZONE', 'UTC');
define('CONST_SERVER_DATEFORMAT', 'YmdHis');
function now($str_server_timezone=CONST_SERVER_TIMEZONE, $str_server_dateformat=CONST_SERVER_DATEFORMAT)
{
    date_default_timezone_set("(UTC+05:30) Chennai, Kolkata, Mumbai, New Delhi");
    $date=new DateTime('now');
    $date->setTimezone(new DateTimeZone($str_server_timezone));
    $str_server_now=$date->format($str_server_dateformat);
    date_default_timezone_set($str_server_timezone);
    return $str_server_now;
}
echo now();
?>
