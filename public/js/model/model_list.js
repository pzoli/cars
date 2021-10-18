$(document).ready(function() {
	var jqxhr = $.getJSON("rest/model", function(dataSet) {
		$('#myTable').DataTable({
			data: dataSet,
			columns: [
				{ visible: false, data: "id", title: "id" },
				{ data: "name", title: "name" },
				{ data: "manufacturer_id", title: "Manufacturer" }
			],
			deferRender: true,
			scrollY: 200,
			scrollCollapse: true,
			scroller: true
		});
	});

});
