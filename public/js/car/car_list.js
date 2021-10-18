$(document).ready(function() {
	var jqxhr = $.getJSON("rest/car", function(dataSet) {
		var table = $('#myTable').DataTable({
			data: dataSet,
			columns: [
				{
					visible: false,
					data: "id",
					title: "id"
				},
				{
					data: "model_id",
					title: "modelId"
				},
				{ data: "chassis_number", title: "Chassis number" }
			],
			"createdRow": function(row, data, index) {
					$(row).data('car_id',data["id"]);
				
			},
			deferRender: true,
			scrollY: 200,
			scrollCollapse: true,
			scroller: true
		});

		$('#myTable tbody').on('click', 'tr', function() {
			var data = $(this).data('car_id');
			window.location.href = "car/" + data;
		});
	});
});
