<?php
	/*$conn = mysql_connect("localhost","root","");
	mysql_select_db("admin_rplbooking") or die("Select Database Fail");*/
    $conn = mysql_connect("localhost","admin_royal","rpldb@120160");
    mysql_select_db("admin_rplbooking") or die("Select Database Fail");
	
/*    mysql_query("SET character_set_results=tis620");
    mysql_query("SET character_set_client='tis620'");
    mysql_query("SET character_set_connection='tis620'");
    mysql_query("collation_connection = tis620_thai_ci");
    mysql_query("collation_database = tis620_thai_ci");
    mysql_query("collation_server = tis620_thai_ci");
*/
    mysql_query("SET character_set_results=utf8");
    mysql_query("SET character_set_client='utf8'");
    mysql_query("SET character_set_connection='utf8'");
    mysql_query("collation_connection = utf8_bin");
    mysql_query("collation_database = utf8_bin");
    mysql_query("collation_server = utf8_bin");

?>