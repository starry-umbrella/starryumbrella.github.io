<html>
    <body>
<?php
header("Content-Type:text/html;charset = gb2313");
include("config.php");
ini_set('date.timezone','Asia/Shanghai');
$id = $_GET['id'];
echo $id;
//$id = mysql_num_rows(mysql_query("select * from msgboard"));
//$article_id = $_COOKIE['article_id'];
mysql_query("DELETE FROM articles WHERE id='$id'",$con);
mysql_query("DELETE FROM msgboard WHERE id='$id'",$con);
//$contents = str_replace("\n","<br>",str_replace(" ","&nbsp;",$patch));
//$date = date('Y-m-d H:i:s',time());
//$sql = "insert into msgboard values('$id','$name','$contents','$date','$article_id')";
//if(mysql_query($sql)){
//echo "<script>alert('ÆÀÂÛ³É¹¦£¡·µ»ØÊ×Ò³¡£');location.href = 'article.php?id='+$article_id</script>";
echo "<script type='text/javascript'> ";
echo " window.location.href='/backend/backend_blog.php'";
echo "</script>";
?>
        </body>
</html>

