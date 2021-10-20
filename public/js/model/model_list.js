var deleteRow = function(id) {
	if (confirm('Are you sure to delete this row?')) {
		request = $.ajax({
			contentType: 'application/json',
			url: "rest/model/" + id,
			type: "DELETE",
			data: null,
			success: function(response) {
				console.log(response);
				if (response == "") {
					window.location.href = "model";
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
	var jqxhr = $.getJSON("rest/model", function(dataSet) {
		$('#myTable').DataTable({
			data: dataSet,
			columns: [
				{
					data: null,
					render: function(data, type) {
						return "<button class='deleteButtonClass' onclick=\"deleteRow(" + data['id'] + ");\"></button>"
							+ "<button class='editButtonClass' onclick=\"window.location.href = 'model/" + data['id'] + "';\"></button>";

					}
				},

				{ visible: false, data: "id", title: "id" },
				{ data: "name", title: "name" },
				{ data: "manufacturer_name", title: "Manufacturer" }
			],
			"createdRow": function(row, data, index) {
				$(row).data('model_id', data["id"]);

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
