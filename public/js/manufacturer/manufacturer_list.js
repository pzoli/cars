var deleteRow = function(id) {
	if (confirm('Are you sure to delete this row?')) {
		request = $.ajax({
			contentType: 'application/json',
			url: "rest/manufacturer/" + id,
			type: "DELETE",
			data: null,
			success: function(response) {
				console.log(response);
				if (response == "") {
					window.location.href = "manufacturer";
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
	var jqxhr = $.getJSON("rest/manufacturer", function(dataSet) {
		$('#myTable').DataTable({
			data: dataSet,
			columns: [
				{
					data: null,
					render: function(data, type) {
						return "<button class='deleteButtonClass' onclick=\"deleteRow(" + data['id'] + ");\"></button>"
							+ "<button class='editButtonClass' onclick=\"window.location.href = 'manufacturer/" + data['id'] + "';\"></button>";

					}
				},

				{ data: "name", title: "name" }
			],
			"createdRow": function(row, data, index) {
				$(row).data('manufacturer_id', data["id"]);

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
