
<?php
$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
else{
mysql_select_db("app_starryumbrella", $con);
}
//$result = mysql_query("SELECT * FROM articles where title='$_POST['backend_search']'");
$id = $_GET['id'];
echo $id;
echo "get!";
echo "backend";
 echo $_POST['backend_search'];
while($row = mysql_fetch_array($result))
  {
        //echo "alert('right username and password')";
        echo $_POST['backend_search'];
  }
mysql_close($con);
?>

		