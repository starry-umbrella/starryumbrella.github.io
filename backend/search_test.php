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
$search = $_POST['backend_search'];
echo $search;
mysql_close($con);
?>
    </body>
</html>
