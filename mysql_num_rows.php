<H3>
Mysql - code</H3>
<?php

mysql_connect ("localhost","root","")
or die("Connection Failed".mysql_error());

mysql_select_db("users")
or die ("Database Failed".mysql_error());

$s= "select * from users";
$result=mysql_query($s);
$count=mysql_num_rows($result);
echo $count."Records";
?>