<?php require("dbcon.php");

	header( "Content-Type: application/vnd.ms-excel" );
	header( "Content-disposition: attachment; filename=renewals_due.xls" );

	// print your data here. note the following:
	// - cells/columns are separated by tabs ("' . "\t" . '")
	// - rows are separated by newlines ("\n")

	echo 'Name' . "\t" . 'email' . "\t". 'password' . "\t" . 'gender' . "\n";

$sql = ' SELECT * from table-name ';


$result = mysql_query($sql,$con) or die('Error,quotes query failed');

while($row = mysql_fetch_array($result))
{
echo $name.'' . "\t" . ''.$email.'' . "\t" . ''.$password.'' . "\t" . ''.$gender."\n"; 

}

?>
