var deleteRow = function(id) {
	if (confirm('Are you sure to delete this row?')) {
		request = $.ajax({
			contentType: 'application/json',
			url: "rest/car/" + id,
			type: "DELETE",
			data: null,
			success: function(response) {
				console.log(response);
				if (response == "") {
					window.location.href = "car";
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, errorThrown);
				alert(textStatus);
				$inputs.prop("disabled", false);
			}
		});

	}
}
$(document).ready(function() {
	$( "#menu" ).menu();
	
	var jqxhr = $.getJSON("rest/car", function(dataSet) {
		var table = $('#myTable').DataTable({
			data: dataSet,
			columns: [
				{
					data: null,
					render: function(data, type) {
						return "<button class='deleteButtonClass' onclick=\"deleteRow(" + data['id'] + ");\"></button>"
							+ "<button class='editButtonClass' onclick=\"window.location.href = 'car/" + data['id'] + "';\"></button>";

					}
				},
				{
					data: "model_name",
					title: "Model name",
				},
				{ data: "chassis_number", title: "Chassis number" }
			],
			"createdRow": function(row, data, index) {
				$(row).data('car_id', data["id"]);

			},
			deferRender: true,
			scrollY: 200,
			scrollCollapse: true,
			scroller: true
		});

		$(".deleteButtonClass").button({
			icons: { primary: 'ui-icon-trash' },
			text: false
		});
		$(".editButtonClass").button({
			icons: { primary: 'ui-icon-pencil' },
			text: false
		});

	});

});
