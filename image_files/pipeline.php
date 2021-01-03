<!DOCTYPE html>
<html>

<head>
	<title>Jenkins trigger</title>
</head>

<body>
	<div class="header">
		<h2>Jenkins trigger page</h2>
	</div>

	<!-- <form action="http://35.204.41.212/job/BaseArchitecture_MultiUserLogin/buildWithParameters?token=ajsklfj65465asfd465a65sd4f6a4f654asf6a4sfd64asf6&base_groovy=base_config" method="get" target="_blank" enctype="application/x-www-form-urlencoded">
		<button type="submit">Submit</button>
		<button type="submit" formmethod="post">Submit using POST</button>
	</form> -->



	<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
 // erzeuge einen neuen cURL-Handle
 $ch = curl_init();

 // setze die URL und andere Optionen
 curl_setopt($ch, CURLOPT_URL, "http://user:cDAbHn8YJ8xN@35.204.41.212/job/BaseArchitecture_MultiUserLogin/buildWithParameters?token=ajsklfj65465asfd465a65sd4f6a4f654asf6a4sfd64asf6&base_groovy=base_config");
 curl_setopt($ch, CURLOPT_HEADER, 0);

 // führe die Aktion aus und gib die Daten an den Browser weiter
 curl_exec($ch);

 // schließe den cURL-Handle und gib die Systemresourcen frei
 curl_close($ch);
 



?>
</body>

</html>