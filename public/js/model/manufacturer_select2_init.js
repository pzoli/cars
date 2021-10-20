var manufacturer_select2_init = function() {
	$('#manufacturer_id').select2({
		ajax: {
			url: "rest/manufacturer",
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