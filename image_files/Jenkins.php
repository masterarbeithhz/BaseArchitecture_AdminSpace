<!DOCTYPE html>
<html>
<head>
	<title>Jenkins trigger</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
		.header {
			background: #003366;
		}
		button[name=register_btn] {
			background: #003366;
		}
	</style>
</head>
<body>
	<div class="header">
		<h2>Jenkins trigger page</h2>
	</div>
		
	<input type="submit" value="Start" onclick="submit()">

	<script type="text/javascript">
		function submit() {
			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function () {
				if (xhr.readyState === 4) {
					alert(xhr.response);
				}
			}
			xhr.open('get', 'http://35.204.41.212/job/BaseArchitecture_SignOn/buildWithParameters?token=ajsklfj65465asfd465a65sd4f6a4f654asf6a4sfd64asf6&base_groovy=base_config', true);
			xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
			xhr.send();
		}

	</script>
</body>
</html>