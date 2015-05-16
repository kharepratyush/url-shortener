<?php
$sql="insert into urls(url) values('$url')";
    $retval = mysql_query( $sql, $conn );
    if(! $retval )
    {
        die('Could not save: Wrong value');
    }
     mysql_close($conn);
?>
