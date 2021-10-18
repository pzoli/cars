$(document).ready(function() {
	$('#model_manufacturer').select2({
		ajax: {
			url: "rest/manufacturer",
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

});
