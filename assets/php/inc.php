<?

$servername = "localhost";
$username = "swp";
$password = "swp";
$dbname = "swp";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connection_error());
} 

?>