<?php
@mysql_connect("localhost","root","");
mysql_query("set names utf8");
mysql_query("use qwer");
$res = mysql_query("select * from test where id = qwedsafdasf");
if($res)
{
	echo "asd";
}
