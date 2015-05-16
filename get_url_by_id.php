<?php

$sql="select url from urls where id=$s";
    
    $result = mysql_query($sql);
    
    //echo $result;
    
    $row = mysql_fetch_array($result, MYSQL_ASSOC);
    
    if($row["url"])
    { 
        header("Location: $row[url]"); 
        
        exit(0);
    }
    else    echo "Unavailable";
    
    $conn->close();
    
?>