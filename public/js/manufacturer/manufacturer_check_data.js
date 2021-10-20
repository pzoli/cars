var checkData = function(data) {
	result = true;
	if (data['name'] == undefined || data['name'] == "") {
		alert('Name must not empty');
		result = false;
	}
	return result;
}
