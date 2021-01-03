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
//
// A very simple PHP example that sends a HTTP POST to a remote site
//

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://35.204.41.212/job/BaseArchitecture_MultiUserLogin/buildWithParameters");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "token=ajsklfj65465asfd465a65sd4f6a4f654asf6a4sfd64asf6&base_groovy=base_config");
			
// In real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));

// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);

curl_close ($ch);

// Further processing ...
if ($server_output == "OK") { echo "build done"; } else { echo "build failed"; }
?>
</body>

</html>