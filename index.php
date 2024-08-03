<?
// SETUP DATABASE
$dbhost = 'localhost';
$dbuser = 'db';
$dbpass = '12345';
$dbname = '12345';
// OPEN
$conn = mysql_connect($dbhost, $dbuser, $dbpass)or  die('Error connecting to database');
mysql_select_db($dbname);

// EXTRACT DATA
$query  = "SELECT * FROM tbl_score order by id DESC";
$result = mysql_query($query);
while($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
	$name = "{$row['tbl_name']}";
	
	echo $name;
	echo " | ";
	
}
// Close Database
mysql_close($conn);


?>