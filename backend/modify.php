<html>
   <body>
<?php
header("Content-Type:text/html;charset = gb2313");
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
$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_query("set names 'gbk'");
mysql_select_db("app_starryumbrella",$con);
ini_set('date.timezone','Asia/Shanghai');

$id = $_GET['id'];
echo $id;
//$id = mysql_num_rows(mysql_query("select * from msgboard"));
//$article_id = $_COOKIE['article_id'];
//$title = mysql_query("select title FROM articles WHERE id='$id'",$con);
//$content = mysql_query("select content FROM articles WHERE id='$id'",$con);
//$contents = str_replace("\n","<br>",str_replace(" ","&nbsp;",$patch));
//$date = date('Y-m-d H:i:s',time());
//$sql = "insert into msgboard values('$id','$name','$contents','$date','$article_id')";
//if(mysql_query($sql)){
//echo "<script>alert('ÆÀÂÛ³É¹¦£¡·µ»ØÊ×Ò³¡£');location.href = 'article.php?id='+$article_id</script>";
echo $_POST[modify_content];
$sql1="update articles set title='$_POST[modify_title]' where id='$id'";
$rs1=mysql_query($sql1,$con);  

$sql3="update articles set content='$_POST[modify_content]' where id='$id'";  
$rs3=mysql_query($sql3,$con);

$sql4="update articles set date='CURRENT_TIMESTAMP()' where id='$id'";  
$rs4=mysql_query($sql4,$con);

$sql5="update articles set url='$url_name' where id='$id'";  
$rs5=mysql_query($sql5,$con);

$sql2="update articles set id='$_POST[modify_id]' where id='$id'";  
$rs2=mysql_query($sql2,$con); 



echo "<script type='text/javascript'> ";
echo " window.location.href='/backend/backend_blog.php'";
echo "</script>";

?>
    </body>
</html>