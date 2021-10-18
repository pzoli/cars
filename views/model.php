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
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

	<script src="public/js/model/model_edit.js"></script>
</head>

<body>
	<form>
		<h1>Model:</h1>
		<label for="model_id">ID:</label>
		<input id="model_id" class="form-control" type="text" disabled="true" />

		<label for="model_name">Model name:</label>
		<input id="model_name" class="form-control" type="text"/>
		
		<label for="model_manufacturer">Manufacturer:</label>
		<select id="model_manufacturer" class="js-example-data-ajax form-control">
		</select>
	</form>
	<a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back
		to homepage</a>
</body>

</html>