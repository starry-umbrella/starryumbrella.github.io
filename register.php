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

if($_POST){
    //$email =trim($_POST[register_email]);
    //$password =md5(trim($_POST[register_password]));
	$sql = "select * from users where email ='". $email. "'";
	$res = mysql_query($sql);
	$num = mysql_num_rows($res);
if($num > 0){
echo "用户名已存在";
return false;
}
    else{

$sql = "INSERT INTO users (email, pwd)
VALUES('$_POST[register_email]','$_POST[register_password]')";

mysql_query($sql,$con);
}
mysql_close($con);
?>
    </body>
</html>