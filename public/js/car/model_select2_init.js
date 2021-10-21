var model_select2_init = function() {
	$('#model_id').select2({
		ajax: {
			url: function(param) {
				var urlParh = 'rest/model';
				if (param.term != undefined && param.term)
				urlParh += '/name/' + param.term;
				return urlParh;
			},
			dataType: 'json',
			type: "GET",
			data: function(param) {
				return {};
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