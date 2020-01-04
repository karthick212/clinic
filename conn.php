 <meta charset="UTF-8" />
 
<?php
//Server: matrimony.c3yfdgx2j0dj.us-east-1.rds.amazonaws.com
//old setup matrimony.c4hx3ncfiyz6.us-east-2.rds.amazonaws.com
$conn = mysql_connect("donkeycargo.cmc4nhmz7bua.us-east-1.rds.amazonaws.com","donkey","donkey123") or
die ("Couldn't not connect");
mysql_select_db("donkeycargo");
//mysql_query("set character_set_results='utf8'");
//mysqli_set_charset($con,"utf8");
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $conn);

// $conn = mysql_connect("localhost","root","") or die ("Couldn't not connect");
// mysql_select_db("inaikkum");
// mysql_query ("set character_set_results='utf8'");
?>
