<?php
	$db_host="localhost";
	$db_user="root";
	$db_pass="";
	$db="blog_site";
	
	$q=mysql_connect($db_host,$db_user,$db_pass,$db) or die("naa ho paa raa");
	$r=mysql_select_db($db);
?>