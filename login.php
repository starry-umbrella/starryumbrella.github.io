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
$result = mysql_query("SELECT * FROM users");
while($row = mysql_fetch_array($result))
  {
    if(($_POST[form_username]===$row['email'])&&($_POST[form_password]===$row['pwd'])){
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