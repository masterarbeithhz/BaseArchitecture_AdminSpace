<!DOCTYPE html>
<html>

<head>
	<title>Jenkins trigger</title>
</head>

<body>
	<div class="header">
		<h2>Jenkins trigger page</h2>
	</div>

	<form action="http://35.204.41.212/job/BaseArchitecture_MultiUserLogin/buildWithParameters?token=ajsklfj65465asfd465a65sd4f6a4f654asf6a4sfd64asf6&base_groovy=base_config" method="get" target="_blank" enctype="application/x-www-form-urlencoded">
		<button type="submit">Submit</button>
		<button type="submit" formmethod="post">Submit using POST</button>
	</form>


<?php

$url = "http://35.204.41.212/job/BaseArchitecture_MultiUserLogin/buildWithParameters?token=ajsklfj65465asfd465a65sd4f6a4f654asf6a4sfd64asf6&base_groovy=base_config";     
$data = "POST_RESULTS=true&RUN_ID=".$testrun_id."&CHECK_NAME=SampleAutomatedPlan";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  
curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 

// $output contains the output string
$output = curl_exec($ch);

// close curl resource to free up system resources
curl_close($ch);    


?>



</body>

</html>