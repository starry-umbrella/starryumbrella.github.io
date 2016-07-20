<html>
    
<head>  
</head>
    
<body>   
<?php
$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
else{
    
    mysql_select_db("app_starryumbrella", $con);
}

$result = mysql_query("SELECT * FROM myblog");
$num = 0;
while($row = mysql_fetch_array($result))
  {
    $num = $num + 1;
}
$sql = "INSERT INTO myblog (title, summary, text,data,id)
VALUES('$_POST[blog_title]','$_POST[blog_summary]','$_POST[blog_text]',CURRENT_TIMESTAMP() ,'$num')";
mysql_query($sql,$con);

mysql_close($con);
?>
     
    </body>
</html>
