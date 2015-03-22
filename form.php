<?PHP

$user_name = "manscann_manscann_afghan";
$password = "Nightpanther1";
$database = "manscann_manscann_afghan";
$server = "localhost";

mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database);
if ($db_found) {
	print "Database Found";
}
else {
	print "Database NOT Found";
}

?>


