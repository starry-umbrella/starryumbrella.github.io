<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
 	include("config.php");//�������ݿ������ļ�
	$id = isset($_GET['id']);
	if(isset($id))
	{
	setcookie('article_id',$_GET['id']);
	$result = mysql_query('SELECT * FROM articles WHERE id =  '. $_GET['id']);
	}
	$sql = "select * from msgboard where article_id = ".$_GET['id'];
	$result1 = mysql_query($sql,$con);
$sql2 = "select * from friends";
$result2 = mysql_query($sql2,$con);
$tagsSql = "select tag from articles";
$tagsRes = mysql_query($tagsSql,$con);
?>
<head> 
<title>sheilaCat | sheilaCat�ļ�����־,ǰ�˿���,�������,����Ա,WEB����</title>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
<meta name="description" content="sheilaCat�ļ�����־,ǰ�˿���,�������,����Ա,WEB����">
<meta name="keywords" content="sheilaCat�ļ�����־,ǰ�˿���,�������,����Ա,WEB����">
<link rel="shortcut icon" href="images/logo.ico" type="images/x-icon"/>
<link rel="icon" href="images/logo.png" type="images/gif"/>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>sheila'blog</title>
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/article.css">
<link rel="stylesheet" href="css/markdown.css">
<SCRIPT language = javascript>
function CheckPost()
{
	if(form1.name.value=="")
	{alert("����д�û���");form1.name.focus();return false;}
	if(form1.content.value=="")
	{alert("������д��������");form1.content.focus();return false;}
}
</script>
</head>
<body>
	<div id="container">
		<div id="wrap">
			<header id="header">
				<div id="banner">
					<img src="images/banner.png">
				</div>
				<ul>
					<li><a href="http://www.daihuimin.xyz/">��ҳ</a></li>
					<li><a href="#">�鵵</a></li>
					<li><a href="#">������</a></li>
				</ul>
			</header>
		</div>
		<!-- ����Ŀ¼��������-->
	
 
		<aside>
			<div id="profile">
			<p>����è</p>
			<p>��������������ڶ�</p>
			</div>
			<div id="article-catalog">
				<h1 class="catalog">���·���</h1>
				<ul>
				<?php
				while($row = mysql_fetch_array($tagsRes)){
				?>
				<li><a href="#"><?php echo $row[0] ?></a></li>
				<?php
				}
				?>
				</ul>
			</div>
			<div id="friend-link">
				<h1 class="catalog">��������</h1>
				<ul>
				<?php
				while($row = mysql_fetch_array($result2)){
				?>
				<li><a href="#"><?php echo $row[0] ?></a></li>
				<?php
				}
				?>
				</ul>
			</div>
 
		</aside>
		

		<!--�����������￩-->

		<div class="article-inner"><div class="article-header">
		
		<?php
while($row = mysql_fetch_array($result))
{
?>
<h1 class="article-title"><a href="#"><?php echo $row[1] ?></a></h1>
<p><?php echo $row[3] ?></p></div>
<div class="article-body"><p><?php echo $row[4] ?></p></div>
<?php
}
?>
</div>

		<!-- �������¿�-->
<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="����QQ�ռ�"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="��������΢��"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="������Ѷ΢��"></a><a href="#" class="bds_renren" data-cmd="renren" title="����������"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="����΢��"></a></div>
		
		<div id = "other-comments" class="other-comments">
		<?php
		while($row = mysql_fetch_array($result1))
		{
		?>
		<h6 class="commenter"><?php echo $row[1]; ?></h6><h6 class="date"><?php echo $row[3]; ?></h6><h6 class="comments">
		<?php echo $row[2]; ?></h6>
		<hr class="divider-for-comments"/>
		<?php
		}
		?></div>
		
<div id="comments" class="comments-area">
	<form name="form1" id="form1" method="post" action="post.php" onsubmit="return CheckPost();">
		<p><input name="name" type="text" id="name" value="����"></p>
		<p><textarea name = "contents" id = "contents" cols = "45" rows = "5" ></textarea>
		</p>
		<p>
		<input type = "submit" name = "button" id = "button" value = "�ύ">
		<input type = "reset" name = "button2" id = "button2" value = "����">
		</p>
		</form>
</div><!-- #comments -->

	<footer>
		   <p>All content copyright <a href="/">sheilaCat</a> &copy; 2015 &bull; All rights reserved.</p>
    <div class="foot-nav">
      <a href="/" title="Home"><img src="images/me.jpg" title="sheilaCat" /></a>
      <a href="http://my.oschina.net/sheila/blog" target="_blank">oschina</a>
      <span>/</span>
      <a href="https://github.com/sheilaCat" target="_blank">Github</a></div>
	</footer>

<!-- �������¿�-->
<script>window._bd_share_config={"common":{"bdSnsKey":{"tsina":"����sheilaCat������","tqq":"����sheilaCat������","t163":"����sheilaCat������","tsohu":"����sheilaCat������"},"bdText":"sheilaCat�ļ�����־,ǰ�˿���,�������,����Ա,WEB����","bdMini":"2","bdMiniList":["qzone","tsina","weixin","sqq","hi","youdao","mail","copy"],"bdPic":"","bdStyle":"2","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
</script> 

</body>
</html>