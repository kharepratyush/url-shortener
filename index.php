<html>
<head>
   <title>Home</title>
   <style type="text/css">
     .content{
	       width:30%;
	       margin:5% 32%;
		   
		   padding:50px;
	       background-color:#BDC7FA;
		    -moz-box-shadow:    3px 3px 5px 6px #ccc;  
                -webkit-box-shadow: 3px 3px 5px 6px #ccc;  
                box-shadow:         3px 3px 5px 6px #ccc;  
	 }
	 input[type="text"]{
	          padding:8px;
              border-radius: 10px;
			  width:50%;
	 }
	 label{
	    margin-left:15%;
	     font-size:18px;
		font-weight:bold;
	 }
	 .btn{
                margin:20px 35%;
                padding:5px;
                width:25%;
                display:block;
                background-color: dodgerblue;
                color:white;
                font-size:18px;
                -moz-box-sizing:border-box;
            }
            .btn:hover{
                background-color: white;
                color:dodgerblue;
                cursor:pointer;
            }
			body { 
			       background: rgba(226,226,226,1);
                   background: -moz-linear-gradient(top, rgba(226,226,226,1) 0%, rgba(219,219,219,1) 19%, rgba(254,254,254,1) 100%);
                   background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(226,226,226,1)), color-stop(19%, rgba(219,219,219,1)), color-stop(100%, rgba(254,254,254,1)));
                   background: -webkit-linear-gradient(top, rgba(226,226,226,1) 0%, rgba(219,219,219,1) 19%, rgba(254,254,254,1) 100%);
                   background: -o-linear-gradient(top, rgba(226,226,226,1) 0%, rgba(219,219,219,1) 19%, rgba(254,254,254,1) 100%);
                   background: -ms-linear-gradient(top, rgba(226,226,226,1) 0%, rgba(219,219,219,1) 19%, rgba(254,254,254,1) 100%);
                   background: linear-gradient(to bottom, rgba(226,226,226,1) 0%, rgba(219,219,219,1) 19%, rgba(254,254,254,1) 100%);
                   filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e2e2e2', endColorstr='#fefefe', GradientType=0 );
				   }
   </style>
</head>
<body>
<div class="content">
<form action="<?php $_PHP_SELF ?>" method='POST'>
  <label>URL:</label>&nbsp;&nbsp;&nbsp;<input type="text" name="url" autofocus required />
  <input type="submit" class="btn"/>
  </form>
  <br>
<?php  
    
if($_REQUEST["url"])
{
    $url=htmlspecialchars($_REQUEST["url"]);
    
    include 'funct.php';
     
    include 'config.php';
    
    include 'check_if_exists.php';
    
    include 'connect.php'; 
    
    include 'insert_new.php';
    
    include 'connect.php'; 
    
    include 'get_id_by_url.php';

}
    
?>
</div>
</body>
</html>