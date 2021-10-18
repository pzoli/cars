$.fn.serializeObject = function() {
	var o = {};
	var a = this.serializeArray();
	$.each(a, function() {
		if (o[this.name]) {
			if (!o[this.name].push) {
				o[this.name] = [o[this.name]];
			}
			o[this.name].push(this.value || '');
		} else {
			o[this.name] = this.value || '';
		}
	});
	return o;
};

$(document).ready(function() {

	$('#model_id').select2({

		ajax: {
			url: "rest/model",
			dataType: 'json',
			type: "POST",
			data: function(term) {
				return {
					term: term
				};
			},
			processResults: function(data) {
				return {
					results: $.map(data, function(item) {
						return {
							text: item.name,
							id: item.id,
						}
					})
				};
			}
		}
	});
	var request;

	$("#car_create").submit(function(event) {
		event.preventDefault();
		if (request) {
			request.abort();
		}
		var $form = $("#car_create");
		var $inputs = $form.find("input, select, button");

		var serializedData = JSON.stringify($form.serializeObject());
		$inputs.prop("disabled", true);
		request = $.ajax({
			contentType: 'application/json',
			url: "rest/car/create",
			type: "POST",
			data: serializedData,
			success: function(response) {
				console.log(response);
				window.location.href = "car";
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, errorThrown);
				alert(textStatus);
				$inputs.prop("disabled", false);
			}
		});
	});

});
