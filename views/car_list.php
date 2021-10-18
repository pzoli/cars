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
    <title>Car Assist</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.jqueryui.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/scroller/2.0.5/css/scroller.jqueryui.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.jqueryui.js"></script>
    <script src="https://cdn.datatables.net/scroller/2.0.5/js/dataTables.scroller.js"></script>

    <script src="public/js/car/car_list.js"></script>
</head>

<body>

	
		<h1>Cars:</h1>
        <table id="myTable" class="display nowrap" style="width:100%">
        </table>		
        <a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back to homepage</a>
	

</body>

</html>