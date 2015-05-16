<html>
<body>
<form action="<?php $_PHP_SELF ?>" method='GET'>
  <input type="text" name="q" />
  <input type="submit" />
  </form>
  <br>
<?php 
  
if($_REQUEST["q"])
{
    include 'funct.php';
    
    include 'config.php';
    
    include 'connect.php'; 
    //echo 'Connected successfully to database<br />';
    
    $id=$_REQUEST["q"];    
    
    //echo $id."<br>";
    
    $s=to10((string)$id);
    
    //echo $s."<br";
    
    include 'get_url_by_id.php';
}
?>
</body>
</html>