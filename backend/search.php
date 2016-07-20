<html>
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
$result = mysql_query("SELECT * FROM articles");
while($row = mysql_fetch_array($result))
  {
    if(($_POST[backend_search]===$row['title'])||($_POST[backend_search]===$row['id'])){
        //echo "alert('right username and password')";
        echo "<script type='text/javascript'> ";
        echo " window.location.href='/backend/backend_blog.php'";
        echo "</script>";
        break;
    }else{
        echo "alert('wrong username and password')";
    }
  }
mysql_close($con);
?>
    </body>
</html>

