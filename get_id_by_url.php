<?php
//echo 'Connected successfully to database<br />';
    $sql="select id from urls where url='$url'";
    //echo "$url"."<br>";
    $result = mysql_query($sql);
    //echo $result;
    $row = mysql_fetch_array($result, MYSQL_ASSOC);
    /*$s="localhost/decrypt.php?q=";*/
    if($row["id"])
    {
        //echo $row['id']."<br>";
        $r=$row['id'];
        $s=toBase($r);
        //echo $s;
        echo "Location: localhost/decrypt.php?q=$s"; 
        echo "<br>";
        echo "<a href=$row[url]>Link</a>";
        mysql_close($conn);
        break;
    }
    mysql_close($conn);
?>