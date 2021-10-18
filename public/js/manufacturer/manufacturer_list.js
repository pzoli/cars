$(document).ready(function() {
	var jqxhr = $.getJSON("rest/manufacturer", function(dataSet) {
		$('#myTable').DataTable({
			data: dataSet,
			columns: [
				{ visible: false, data: "id", title: "id" },
				{ data: "name", title: "name" }
			],
			deferRender: true,
			scrollY: 200,
			scrollCollapse: true,
			scroller: true
		});
	});

});
