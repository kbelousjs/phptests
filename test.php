<?php
if (isset($_REQUEST["username"]) && isset($_REQUEST["password"])) {
	$username = stroupper($_REQUEST["username"]);
	$password = md5($_REQUEST["password"]);
	$query = "SELECT id FROM login WHERE UPPER(user_name)='$username' AND password='$password'";
	$result = pg_query($dbconn, $query);
}
?>