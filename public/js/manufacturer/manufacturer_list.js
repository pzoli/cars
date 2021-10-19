$(document).ready(function() {
	var jqxhr = $.getJSON("rest/manufacturer", function(dataSet) {
		$('#myTable').DataTable({
			data: dataSet,
			columns: [
				{ visible: false, data: "id", title: "id" },
				{ data: "name", title: "name" }
			],
			"createdRow": function(row, data, index) {
					$(row).data('manufacturer_id',data["id"]);
				
			},
			deferRender: true,
			scrollY: 200,
			scrollCollapse: true,
			scroller: true
		});
		$('#myTable tbody').on('click', 'tr', function() {
			var data = $(this).data('manufacturer_id');
			window.location.href = "manufacturer/" + data;
		});

	});

});
