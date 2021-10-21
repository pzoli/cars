var manufacturer_select2_init = function() {
	$('#manufacturer_id').select2({
		ajax: {
			url: function(param) {
				var urlParh = 'rest/manufacturer';
				if (param.term != undefined && param.term)
				urlParh += '/name/' + param.term;
				return urlParh;
			},
			dataType: 'json',
			type: "GET",
			data: function(term) {
				return { };
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

	if ('manufacturerOption' in window)
		$('#manufacturer_id').append(manufacturerOption).trigger("change");
}