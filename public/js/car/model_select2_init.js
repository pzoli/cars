var model_select2_init = function() {
	$('#model_id').select2({
		ajax: {
			url: "rest/model",
			dataType: 'json',
			type: "GET",
			data: function(term) {
				return { };
			},
			processResults: function(data) {
				return {
					results: $.map(data, function(item) {
						return {
							text: item.manufacturer_name + " " + item.name,
							id: item.id,
						}
					})
				};
			}
		}
	});

	if ('modelOption' in window)
		$('#model_id').append(modelOption).trigger("change");
}