$(document).ready(function() {
	var jqxhr = $.getJSON("rest/model", function(dataSet) {
		$('#myTable').DataTable({
			data: dataSet,
			columns: [
				{ visible: false, data: "id", title: "id" },
				{ data: "name", title: "name" },
				{ data: "manufacturer_name", title: "Manufacturer" }
			],
			"createdRow": function(row, data, index) {
					$(row).data('model_id',data["id"]);
				
			},
			deferRender: true,
			scrollY: 200,
			scrollCollapse: true,
			scroller: true
		});
		
		$('#myTable tbody').on('click', 'tr', function() {
			var data = $(this).data('model_id');
			window.location.href = "model/" + data;
		});

	});

});
