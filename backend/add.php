<html>
    
<head>  
</head>
    
<body>   
<?php

use sinacloud\sae\storage as Storage;
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
      
     
      
     $s->putObjectFile($_FILES['file']['tmp_name'], "test", $_FILES["file"]["name"]);
     $url_name= $s->getUrl( "test", $_FILES["file"]["name"] );
      
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

$title = $_POST[add_title];
echo $title;
$id = $_POST[add_id];
//$id = mysql_num_rows(mysql_query("select * from msgboard"));
//$article_id = $_COOKIE['article_id'];
//mysql_query("DELETE FROM articles WHERE id='$id'",$con);
//mysql_query("DELETE FROM msgboard WHERE id='$id'",$con);
//$contents = str_replace("\n","<br>",str_replace(" ","&nbsp;",$patch));
$date = date('Y-m-d H:i:s',time());
echo $date;
//$sql = "insert into msgboard values('$id','$name','$contents','$date','$article_id')";
//if(mysql_query($sql)){
//echo "<script>alert('ÆÀÂÛ³É¹¦£¡·µ»ØÊ×Ò³¡£');location.href = 'article.php?id='+$article_id</script>";

$content = $_POST[add_content];
echo $content;
$sql = "INSERT INTO articles (title,content,date,id,url)
VALUES('$title','$content',CURRENT_TIMESTAMP() ,'$id','$url_name')";
mysql_query($sql,$con);
mysql_close($con);
echo "<script type='text/javascript'> ";
echo " window.location.href='/backend/backend_blog.php'";
echo "</script>";
?>
     
    </body>
</html>
