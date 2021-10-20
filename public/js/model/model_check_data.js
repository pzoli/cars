var checkData = function(data) {
	result = true;
	if (data['name'] == undefined || data['name'] == "") {
		alert('Name must not empty');
		result = false;
	} else 	if (data['manufacturer_id'] == undefined || data['manufacturer_id'] == "") {
		alert('Manufacturer must not empty');
		result = false;
	}
	return result;
}
