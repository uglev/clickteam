<?
// SETUP DATABASE
$dbhost = 'localhost';
$dbuser = 'db';
$dbpass = '12345';
$dbname = '12345';
// OPEN
$conn = mysql_connect($dbhost, $dbuser, $dbpass)or  die('Error connecting to database');
mysql_select_db($dbname);

$name = $_REQUEST['name'];

$query = "insert into tbl_score(tbl_name) values ('$name')";
$insert_the_data = mysql_query($query)or die(mysql_error());

// Close Database
mysql_close($conn);


?>