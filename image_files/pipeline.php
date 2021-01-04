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

		<script type="application/javascript">
			function resizeIFrameToFitContent(iFrame) {
				iFrame.width = iFrame.contentWindow.document.body.scrollWidth;
				iFrame.height = iFrame.contentWindow.document.body.scrollHeight;
			}
			window.addEventListener('DOMContentLoaded', function(e) {

				var iFrame = document.getElementById('iframe_a');
				resizeIFrameToFitContent(iFrame);
			});
		</script>

		<iframe src="default_iframe.html" name="iframe_a" id="iframe_a">
			<p>Your browser does not support iframes.</p>
		</iframe>

		<h1>Jenkins Job triggers for the Base Architecture</h1>

		<form action="http://130.211.228.246/base/admin/pipeline.php" method="post" target="iframe_a" enctype="application/x-www-form-urlencoded">
			<input type="hidden" name="pipeline" value="multiuserlogin">
			<input type="submit" name="submit" value="multiuserlogin">
		</form>
		<form action="http://130.211.228.246/base/admin/pipeline.php" method="post" target="iframe_a" enctype="application/x-www-form-urlencoded">
			<input type="hidden" name="pipeline" value="adminspace">
			<input type="submit" name="submit" value="adminspace">
		</form>
		<form action="http://130.211.228.246/base/admin/pipeline.php" method="post" target="iframe_a" enctype="application/x-www-form-urlencoded">
			<input type="hidden" name="pipeline" value="database">
			<input type="submit" name="submit" value="database">
		</form>
		<form action="http://130.211.228.246/base/admin/pipeline.php" method="post" target="iframe_a" enctype="application/x-www-form-urlencoded">
			<input type="hidden" name="pipeline" value="databasejob">
			<input type="submit" name="submit" value="databasejob">
		</form>
		<form action="http://130.211.228.246/base/admin/pipeline.php" method="post" target="iframe_a" enctype="application/x-www-form-urlencoded">
			<input type="hidden" name="pipeline" value="homepage">
			<input type="submit" name="submit" value="homepage">
		</form>
		<form action="http://130.211.228.246/base/admin/pipeline.php" method="post" target="iframe_a" enctype="application/x-www-form-urlencoded">
			<input type="hidden" name="pipeline" value="landingpage">
			<input type="submit" name="submit" value="landingpage">
		</form>
		<form action="http://130.211.228.246/base/admin/pipeline.php" method="post" target="iframe_a" enctype="application/x-www-form-urlencoded">
			<input type="hidden" name="pipeline" value="servicecatalog">
			<input type="submit" name="submit" value="servicecatalog">
		</form>
		<form action="http://130.211.228.246/base/admin/pipeline.php" method="post" target="iframe_a" enctype="application/x-www-form-urlencoded">
			<input type="hidden" name="pipeline" value="signon">
			<input type="submit" name="submit" value="signon">
		</form>
		<form action="http://130.211.228.246/base/admin/pipeline.php" method="post" target="iframe_a" enctype="application/x-www-form-urlencoded">
			<input type="hidden" name="pipeline" value="complete">
			<input type="submit" name="submit" value="complete">
		</form>

		<h1>Jenkins Job triggers for the UseCase Architecture</h1>

		<form action="http://130.211.228.246/base/admin/pipeline.php" method="post" target="iframe_a" enctype="application/x-www-form-urlencoded">
			<input type="hidden" name="pipeline" value="uc_administration">
			<input type="submit" name="submit" value="uc_administration">
		</form>
		<form action="http://130.211.228.246/base/admin/pipeline.php" method="post" target="iframe_a" enctype="application/x-www-form-urlencoded">
			<input type="hidden" name="pipeline" value="uc_database">
			<input type="submit" name="submit" value="uc_database">
		</form>
		<form action="http://130.211.228.246/base/admin/pipeline.php" method="post" target="iframe_a" enctype="application/x-www-form-urlencoded">
			<input type="hidden" name="pipeline" value="uc_databasejob">
			<input type="submit" name="submit" value="uc_databasejob">
		</form>
		<form action="http://130.211.228.246/base/admin/pipeline.php" method="post" target="iframe_a" enctype="application/x-www-form-urlencoded">
			<input type="hidden" name="pipeline" value="uc_processing">
			<input type="submit" name="submit" value="uc_processing">
		</form>
		<form action="http://130.211.228.246/base/admin/pipeline.php" method="post" target="iframe_a" enctype="application/x-www-form-urlencoded">
			<input type="hidden" name="pipeline" value="uc_visualization">
			<input type="submit" name="submit" value="uc_visualization">
		</form>
		<form action="http://130.211.228.246/base/admin/pipeline.php" method="post" target="iframe_a" enctype="application/x-www-form-urlencoded">
			<input type="hidden" name="pipeline" value="uc_complete">
			<input type="submit" name="submit" value="uc_complete">
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
		echo "<h1>Multiuserlogin successfully created</h1>";
	} elseif ($_POST['pipeline'] == "adminspace") {
		curl_setopt($ch, CURLOPT_URL, "http://user:cDAbHn8YJ8xN@35.204.41.212/job/BaseArchitecture_AdminSpace/buildWithParameters?token=ajsklfj65465asfd465a65sd4f6a4f654asf6a4sfd64asf6&base_groovy=base_config");
		echo "<h1>Adminspace successfully created</h1>";
	} elseif ($_POST['pipeline'] == "database") {
		curl_setopt($ch, CURLOPT_URL, "http://user:cDAbHn8YJ8xN@35.204.41.212/job/BaseArchitecture_Database/buildWithParameters?token=ajsklfj65465asfd465a65sd4f6a4f654asf6a4sfd64asf6&base_groovy=base_config");
		echo "<h1>Database successfully created</h1>";
	} elseif ($_POST['pipeline'] == "databasejob") {
		curl_setopt($ch, CURLOPT_URL, "http://user:cDAbHn8YJ8xN@35.204.41.212/job/BaseArchitecture_DatabaseJob/buildWithParameters?token=ajsklfj65465asfd465a65sd4f6a4f654asf6a4sfd64asf6&base_groovy=base_config");
		echo "<h1>DatabaseJob successfully created</h1>";
	} elseif ($_POST['pipeline'] == "homepage") {
		curl_setopt($ch, CURLOPT_URL, "http://user:cDAbHn8YJ8xN@35.204.41.212/job/BaseArchitecture_Homepage/buildWithParameters?token=ajsklfj65465asfd465a65sd4f6a4f654asf6a4sfd64asf6&base_groovy=base_config");
		echo "<h1>Homepage successfully created</h1>";
	} elseif ($_POST['pipeline'] == "landingpage") {
		curl_setopt($ch, CURLOPT_URL, "http://user:cDAbHn8YJ8xN@35.204.41.212/job/BaseArchitecture_Landingpage/buildWithParameters?token=ajsklfj65465asfd465a65sd4f6a4f654asf6a4sfd64asf6&base_groovy=base_config");
		echo "<h1>Landingpage successfully created</h1>";
	} elseif ($_POST['pipeline'] == "servicecatalog") {
		curl_setopt($ch, CURLOPT_URL, "http://user:cDAbHn8YJ8xN@35.204.41.212/job/BaseArchitecture_ServiceCatalog/buildWithParameters?token=ajsklfj65465asfd465a65sd4f6a4f654asf6a4sfd64asf6&base_groovy=base_config");
		echo "<h1>Service Catalog successfully created</h1>";
	} elseif ($_POST['pipeline'] == "signon") {
		curl_setopt($ch, CURLOPT_URL, "http://user:cDAbHn8YJ8xN@35.204.41.212/job/BaseArchitecture_SignOn/buildWithParameters?token=ajsklfj65465asfd465a65sd4f6a4f654asf6a4sfd64asf6&base_groovy=base_config");
		echo "<h1>SignOn successfully created</h1>";
	} elseif ($_POST['pipeline'] == "complete") {
		curl_setopt($ch, CURLOPT_URL, "http://user:cDAbHn8YJ8xN@35.204.41.212/job/BaseArchitecture_Complete/buildWithParameters?token=ajsklfj65465asfd465a65sd4f6a4f654asf6a4sfd64asf6&base_groovy=base_config");
		echo "<h1>Complete base architecture successfully created</h1>";
	} elseif ($_POST['pipeline'] == "uc_administration") {
		curl_setopt($ch, CURLOPT_URL, "http://user:cDAbHn8YJ8xN@35.204.41.212/job/UseCaseArchitecture_Administration/buildWithParameters?token=ajsklfj65465asfd465a65sd4f6a4f654asf6a4sfd64asf6&customer_groovy=tuebingen_config");
		echo "<h1>UseCase Administration successfully created</h1>";
	} elseif ($_POST['pipeline'] == "uc_database") {
		curl_setopt($ch, CURLOPT_URL, "http://user:cDAbHn8YJ8xN@35.204.41.212/job/UseCaseArchitecture_Database/buildWithParameters?token=ajsklfj65465asfd465a65sd4f6a4f654asf6a4sfd64asf6&customer_groovy=tuebingen_config");
		echo "<h1>UseCase Database successfully created</h1>";
	} elseif ($_POST['pipeline'] == "uc_databasejob") {
		curl_setopt($ch, CURLOPT_URL, "http://user:cDAbHn8YJ8xN@35.204.41.212/job/UseCaseArchitecture_DatabaseJob/buildWithParameters?token=ajsklfj65465asfd465a65sd4f6a4f654asf6a4sfd64asf6&customer_groovy=tuebingen_config");
		echo "<h1>UseCase Database Job Catalog successfully created</h1>";
	} elseif ($_POST['pipeline'] == "uc_processing") {
		curl_setopt($ch, CURLOPT_URL, "http://user:cDAbHn8YJ8xN@35.204.41.212/job/UseCaseArchitecture_Processing/buildWithParameters?token=ajsklfj65465asfd465a65sd4f6a4f654asf6a4sfd64asf6&customer_groovy=tuebingen_config");
		echo "<h1>UseCase Processing successfully created</h1>";
	} elseif ($_POST['pipeline'] == "uc_visualization") {
		curl_setopt($ch, CURLOPT_URL, "http://user:cDAbHn8YJ8xN@35.204.41.212/job/UseCaseArchitecture_Visualization/buildWithParameters?token=ajsklfj65465asfd465a65sd4f6a4f654asf6a4sfd64asf6&customer_groovy=tuebingen_config");
		echo "<h1>UseCase Visualization successfully created</h1>";
	} elseif ($_POST['pipeline'] == "uc_complete") {
		curl_setopt($ch, CURLOPT_URL, "http://user:cDAbHn8YJ8xN@35.204.41.212/job/UseCaseArchitecture_Complete/buildWithParameters?token=ajsklfj65465asfd465a65sd4f6a4f654asf6a4sfd64asf6&customer_groovy=tuebingen_config");
		echo "<h1>Complete UseCase architecture successfully created</h1>";
	} else {
		echo "<h1>error</h1>";
	}
	curl_setopt($ch, CURLOPT_HEADER, 0);

	// führe die Aktion aus und gib die Daten an den Browser weiter
	curl_exec($ch);

	// schließe den cURL-Handle und gib die Systemresourcen frei
	curl_close($ch);
}

?>