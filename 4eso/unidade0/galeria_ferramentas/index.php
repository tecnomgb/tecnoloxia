<?php include_once("inc/functions.php"); include ("inc/languages.php"); $current_lang=set_lang(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Dariusz Handzlik" />
<meta name="robots" content="index,follow,all" />
<meta name="description" content="VertrigoServ" />
<meta name="keywords" content="Apache, MySQL, PHP, PHP5, Phpmyadmin, Zend Optimizer, SQLiteManager, Professional, Windows, Server, Secure, HTTP, WAMP, XHTML, CSS, Installation, Simple, Freeware" />
<title>VertrigoServ</title>
<link rel="stylesheet" type="text/css" href="inc/style.css" title="Main" media="screen" />
</head>
<body>
<div>
<div class="center"><h1><?php echo($lang[$current_lang]['top']);?></h1></div>
<div class="right white" id="lang"><?php echo($lang[$current_lang]['change_lang']);?><a href="?lang=pl"><img src="gfx/pl.gif" alt="PL" /></a><a href="?lang=eng"><img src="gfx/eng.gif" alt="ENG" /></a></div>
<br class="clear" />
<div class="left box">
<div class="box_top"></div>
<div class="right box_img"><img src="gfx/info.png" alt=""  /></div>
<div class="box_header"><?php echo($lang[$current_lang]['info']);?></div>
<div class="box_content">
<br/> 
<p><?php echo($lang[$current_lang]['left_1']);?></p>
<p><b><?php echo($lang[$current_lang]['packages']);?></b></p>
 <ul>
            <li>Apache <span class="red">2.0.59</span></li>
            <li>PHP <span class="red">5.2.3</span></li>
            <li>Mysql <span class="red">5.0.41</span></li>
            <li>SQLite <span class="red">3.4.0</span></li>			
            <li>PhpMyAdmin <span class="red">2.10.2</span></li>
            <li>SQLiteManager <span class="red">1.2.0</span></li>
            <li>ZendOptimizer <span class="red">3.2.8</span></li>
</ul>
<p><b><?php echo($lang[$current_lang]['php_ext']);?></b><br/><br/><?php $loaded_ext = get_loaded_extensions(); foreach ($loaded_ext as $ext) echo ($ext.', ');?></p>
<p><b><?php echo($lang[$current_lang]['mysql_ps']);?></b></p>
<?php  if (extension_loaded('mysqli')){ if ($link = @mysqli_connect('localhost','root','vertrigo'))  echo '<div id="mysql_red">'.$lang[$current_lang]['mysql_red'].'</div>'; else echo '<div id="mysql_green">'.$lang[$current_lang]['mysql_green'].'</div>'; }?>
</div>
</div>
<div class="right box">
<div class="box_top"></div>
<div class="right box_img"><img src="/gfx/tools.jpg" alt=""  /></div>
<div class="box_header"><?php echo($lang[$current_lang]['tools']);?></div>
<div class="box_content">
<div class="center">
<br/>
<p>
<!-- <?php echo($lang[$current_lang]['local_tools']);?>  --> 
            <a class="btn btn_t" href="/phpmyadmin">PhpMyAdmin</a>
            <a class="btn btn_b" href="/sqlite">SQLiteManager</a>
<!-- <?php echo($lang[$current_lang]['misc']);?>  --> <br/>
            <a class="btn btn_t" href="inc/phpinfo.php"><?php echo($lang[$current_lang]['view_phpinfo']);?></a>
            <a class="btn btn_c" href="inc/extensions.php"><?php echo($lang[$current_lang]['view_extensions']);?></a>
			<a class="btn btn_b" href="server-info"><?php echo($lang[$current_lang]['apache_info']);?></a>
<!-- <?php echo($lang[$current_lang]['links']);?>  --> <br/>
            <a class="btn btn_t" href="http://vertrigo.sf.net"><?php echo($lang[$current_lang]['homepage']);?></a>
			<a class="btn btn_b" href="http://vertrigo.sf.net/forum">VertrigoServ Forum</a>
<!-- <?php echo($lang[$current_lang]['manuals']);?> --> <br/>
			<a class="btn btn_t" href="http://httpd.apache.org/docs/2.0/">Apache 2.0 documentation</a>
			<a class="btn btn_c" href="http://www.php.net/docs.php">PHP Manual</a>
			<a class="btn btn_c" href="http://dev.mysql.com/doc/">MySQL Manual</a>
			<a class="btn btn_c" href="http://www.phpmyadmin.net/home_page/docs.php">phpMyAdmin Manual</a>
			<a class="btn btn_b" href="http://www.sqlite.org/docs.html">SQLite Manual</a>
</p>
</div>
</div>
</div>
<div class="right" id="valid"><img src="gfx/xhtml.gif" alt="Valid XHTML" /><img src="gfx/css.gif" alt="Valid CSS" /></div>
<br class="clear"/>
<br/>
<div class="center white" id="footer">Copyright &copy; 2004-2007 by<a href="mailto:dariuszhandzlik(at)poczta.onet.pl"> Dariusz Handzlik</a></div>
<br/>
</div>
</body>
</html>