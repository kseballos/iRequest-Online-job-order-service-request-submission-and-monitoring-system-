  <?php
									$username = "root";
									$password = "root";
									$hostname = "localhost";
									$database = "gentuna";
									$dbhandle = mysql_connect($hostname, $username, $password )  or die  ("COuld not connect to dtabase");
									$connect = mysql_select_db($database , $dbhandle);
									
									

?>