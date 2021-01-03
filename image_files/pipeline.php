<!DOCTYPE html>
<html>

<head>
	<title>Jenkins trigger</title>
</head>

<body>
	<div class="header">
		<h2>Jenkins trigger page</h2>
	</div>

	<form action="http://35.204.41.212/job/BaseArchitecture_MultiUserLogin/buildWithParameters" method="get" target="_blank">
		<input type="hidden" name="token" value="ajsklfj65465asfd465a65sd4f6a4f654asf6a4sfd64asf6">
		<input type="hidden" name="base_groovy" value="base_config">
		<button type="submit">Submit</button>
		<button type="submit" formmethod="post">Submit using POST</button>
	</form>

	<!-- <a href="http://35.204.41.212/job/BaseArchitecture_MultiUserLogin/buildWithParameters?token=ajsklfj65465asfd465a65sd4f6a4f654asf6a4sfd64asf6&base_groovy=base_config">BaseArchitecture_MultiUserLogin	</a> -->

	
	
</body>

</html>