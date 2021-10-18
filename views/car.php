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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    
	<script src="public/js/car/car_edit.js"></script>
</head>

<body>
	<h1>My Car:</h1>
	<form id="car_create">
		<label for="car_id">ID:</label>
		<input id="car_id" name="id" class="form-control" type="text" disabled="true" />
		
		<label for="model_id">Model:</label>
		<select id="model_id" name="model_id" class="js-example-data-ajax form-control">
		</select>

		<label for="chassis_number">Chassis number:</label>
		<input id="chassis_number" name="chassis_number" class="form-control" type="text" />
		
		<input type="submit" value="Send">
	</form>
	<a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back
		to homepage</a>

</body>

</html>