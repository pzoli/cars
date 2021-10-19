var init_model = function() {
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

	if ('modelOption' in window)
		$('#model_id').append(modelOption).trigger("change");
}