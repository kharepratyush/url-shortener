<?php
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
    die('Could not connect: ' . mysql_error());
}
    //echo 'Connected successfully to mysql server<br />';
mysql_select_db( $db );
?>