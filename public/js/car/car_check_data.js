var checkData = function(data) {
	result = true;
	if (data['chassis_number'] == undefined || data['chassis_number'] == "") {
		alert('Chassis number must not empty');
		result = false;
	} else if (data['model_id'] == undefined || data['model_id'] == "") {
		alert('Model must not empty');
		result = false;
	}
	return result;
}
