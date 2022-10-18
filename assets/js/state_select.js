$(document).ready(function () {
	$('#msg').hide();
	$("#select_state").change(function() {
		$('#msg').show();
		var state_name=$('option:selected', $(this)).val();
		$.ajax({
			type: "POST",
			url: "select_state.php",
			dataType: 'html',
			timeout: 20000,
			data:{'select_state':state_name}
		})
		.done(function(data) {
			$('#city_data').html(data);
			$('#msg').fadeOut(1000);
		})
		.fail(function() {
			console.log("error");
		});
	});
});