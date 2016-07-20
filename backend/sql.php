<html>
    <body>
<?php
use sinacloud\sae\Storage as Storage;
$s = new Storage();
if ((($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 2000000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
     // 方法一：在SAE运行环境中时可以不传认证信息，默认会从应用的环境变量中取
      // $s = new Storage("$AppName:$AccessKey", $SecretKey);
      
     
      
     $s->putObjectFile($_FILES['file']['tmp_name'], "storage", $_FILES["file"]["name"]);
     $url_name= $s->getUrl( "storage", $_FILES["file"]["name"] );
      
    }
  }
else
  {
  echo "Invalid file";
}
$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
else{
mysql_select_db("app_starryumbrella", $con);
}
$sql="INSERT INTO articles (id, title, date, content, url)
VALUES
('$_POST[add_id]','$_POST[add_title]',CURRENT_TIMESTAMP(),'$_POST[add_content]','$url_name')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
    
mysql_close($con);   
//include 'backend_blog.php';
?>
<script type="text/javascript">
       window.location.href="backend_blog.php";
</script>
    </body>
</html>