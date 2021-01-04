<?php
if (!isset($_POST['submit']) || !isset($_POST['pipeline'])) {
?>

	<!DOCTYPE html>
	<html>

	<head>
		<title>Jenkins trigger</title>
	</head>

	<body>
		<div class="header">
			<h2>Jenkins trigger page</h2>
		</div>

		<iframe src="demo_iframe.htm" name="iframe_a">
			<p>Your browser does not support iframes.</p>
		</iframe>

		<form action="http://130.211.228.246/base/admin/pipeline.php" method="post" target="iframe_a" enctype="application/x-www-form-urlencoded">
			<input type="hidden" name="pipeline" value="multiuserlogin">
			<input type="submit" name="submit" value="multiuserlogin">
		</form>
		<form action="http://130.211.228.246/base/admin/pipeline.php" method="post" target="_self" enctype="application/x-www-form-urlencoded">
			<input type="hidden" name="pipeline" value="adminspace">
			<input type="submit" name="submit" value="adminspace">
		</form>
	</body>

	</html>
<?php
} else {


	ini_set('display_errors', '1');
	ini_set('display_startup_errors', '1');
	error_reporting(E_ALL);
	// erzeuge einen neuen cURL-Handle
	$ch = curl_init();

	// setze die URL und andere Optionen
	if ($_POST['pipeline'] == "multiuserlogin") {
		curl_setopt($ch, CURLOPT_URL, "http://user:cDAbHn8YJ8xN@35.204.41.212/job/BaseArchitecture_MultiUserLogin/buildWithParameters?token=ajsklfj65465asfd465a65sd4f6a4f654asf6a4sfd64asf6&base_groovy=base_config");
	} elseif ($_POST['pipeline'] == "adminspace") {
		curl_setopt($ch, CURLOPT_URL, "http://user:cDAbHn8YJ8xN@35.204.41.212/job/BaseArchitecture_AdminSpace/buildWithParameters?token=ajsklfj65465asfd465a65sd4f6a4f654asf6a4sfd64asf6&base_groovy=base_config");
	} else {
		echo "<h1>error</h1>";
	}
	curl_setopt($ch, CURLOPT_HEADER, 0);

	// führe die Aktion aus und gib die Daten an den Browser weiter
	curl_exec($ch);

	// schließe den cURL-Handle und gib die Systemresourcen frei
	curl_close($ch);
	echo "<h1>Erzeugt</h1>";
}

?>