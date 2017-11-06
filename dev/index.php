<?php
	require_once 'vendor/autoload.php';
	use App\Classes\FileImport;
	use App\Classes\GetUrl;
	use iCantSleep\Utilitarian;

?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="http://localhost:3000/src/css/style.css">
</head>
<body>
<nav>
	<?php
		$FileImport = new FileImport;
		$getFile = $FileImport->getFileImport();

		$urls =new GetUrl();
		$getUrls = $urls::getUrlArray();

		var_dump($getUrls);

		echo $getFile;

	?>
	<ul>
		<li><a href="#about-1">About-1</a></li>
		<li><a href="#about-2">About-2</a></li>
		<li><a href="#about-3">About-3</a></li>
		<li><a href="#about-4">About-4</a></li>
		<li><a href="#about-5">About-5</a></li>
	</ul>
</nav>
</body>
</html>