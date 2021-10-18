<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="<?php echo REQUEST_ROOT; ?>"/>
    <link rel="shortcut icon" href="public/img/favicon.png">
    <title>Car assist</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<base href="<?php echo REQUEST_ROOT; ?>"/>
	<script src="public/js/manufacturer/manufacturer_edit.js"></script>
</head>

<body>
	<form>
		<h1>Manufacturer:</h1>
		<label for="manufacturer_id">ID:</label>
		<input id="manufacturer_id" class="form-control" type="text" disabled="true" />

		<label for="manufacturer_name">Manufacturer name:</label>
		<input id="manufacturer_name" class="form-control" type="text"/>
	</form>
		<a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back
			to homepage</a>
</body>

</html>