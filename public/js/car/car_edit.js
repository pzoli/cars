var request;
$(document).ready(function() {

	init_model();

	$("#car_create").submit(function(event) {
		event.preventDefault();
		if (request) {
			request.abort();
		}
		var $form = $("#car_create");
		var $inputs = $form.find("input, select, button");

        var data = $form.serializeObject();
        data["id"] = $("#car_id").val();
		var serializedData = JSON.stringify(data);
		$inputs.prop("disabled", true);
		request = $.ajax({
			contentType: 'application/json',
			url: "rest/car",
			type: "PUT",
			data: serializedData,
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
	});

});
