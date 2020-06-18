  
<?php
$conn_string="host=
ec2-52-20-248-222.compute-1.amazonaws.com port=5432 dbname=dcjgsrg6le1b2v user=bhensvaznirull password=d17a4ab74ef99547f3dfa03f837091196ffce7333d4c34cad0df803ece7bcf5a";
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}

if (isset($_POST['pass'])) {
	# code...
	$pass = $_POST['pass'];
}
$sql = "SELECT * FROM Account WHERE username='".$username."' AND pass='".$pass."'";
$result =pg_query($dbconn, $sql);
$row = pg_num_rows($result);
if ($row==1)
{
	echo "Login success";
}
else
{
	echo "Login failed";
}
?>
