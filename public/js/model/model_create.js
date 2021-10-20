var request;
$(document).ready(function() {
	manufacturer_select2_init();

	$("#model_create").submit(function(event) {
		event.preventDefault();
		if (request) {
			request.abort();
		}
		var $form = $("#model_create");
		var $inputs = $form.find("input, select, button");
		var data = $form.serializeObject();
		if (!checkData(data)) {
			return;
		}
		var serializedData = JSON.stringify(data);
		$inputs.prop("disabled", true);
		request = $.ajax({
			contentType: 'application/json',
			url: "rest/model",
			type: "POST",
			data: serializedData,
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
	});

});
