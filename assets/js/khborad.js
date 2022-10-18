$(document).ready(function(){
	$('#register_form').submit(function(e){
		e.preventDefault();
		var id = $('#id').val();
		var name = $('#name').val();
		var email = $('#email').val();
		var phone = $('#phone').val();
		var city = $('#city').val();
		$.ajax({
			url: 'ajax/ajax_task_insert.php',
			type: 'post',
			dataType: 'html',
			data: {
				id : id,
				name : name,
				email : email,
				phone : phone,
				city : city
			}
		}).done(function(res){
    		$("#register_form").trigger('reset');
    		$('#modalbox').modal('hide');
    		load_select_data('ajax/select_ajax.php','get');
	    });
	});
	// SEARCH DATA
	$('#search').click(function (e) {
		e.preventDefault();
		var id=$('#search_data').val();
		$.ajax({
			type: "POST",
			url: "ajax/search_select.php",
			dataType: 'html',
			data:{'id':id}
		})
		.done(function(data) {
			$('#show_data').html(data);
		});
	});

	$('.btn-close').on('click', function (e) {
		$("#register_form").trigger('reset');
		$('#modalbox').modal('hide');
	});
});
// SHOW DATA
function load_select_data(url, type, dataType="html"){
	$.ajax({
		url: url,
		type: type,
		dataType: dataType
	}).done(function(data){
		if(dataType=='html'){
			$('#tbody').empty();
			$.each(JSON.parse(data), function(index, val) {
			$('#tbody').append('<tr><td>'+val.id+'</td><td>'+val.name+'</td><td>'+val.email+'</td><td>'+val.phone+'</td><td>'+val.city+'</td><td><button class="btn btn-outline-primary btn-edit" btn-e_id='+val.id+'>Edit</button>|<button class="btn btn-outline-danger btn-del" btn-did='+val.id+'>Delete</button></td></tr>');
			});
		}
		else{
			$('#tbody').empty();
			$.each(data, function(index, val) {
			$('#tbody').append('<tr><td>'+val.a_id+'</td><td>'+val.name+'</td><td>'+val.email+'</td><td>'+val.phone+'</td></tr>');
			});
		}
		// DELETE DATA
		$('#tbody').on('click', '.btn-del', function () {
			var id = $(this).attr('btn-did');
			var res={ id : id};
			load_data_delete('ajax/ajax_delete.php', 'post', res );
		});	
		// UPDATE DATA
		$('#tbody').on('click', '.btn-edit', function () {
			var id = $(this).attr('btn-e_id');
			$.ajax({
					url: 'ajax/update_select.php',
					type: 'POST',
					dataType: 'html',
					data:{id : id},
				}).done(function (data){
					var ajaxdata=JSON.parse(data);
					$('#modalbox').modal('show');
					$('#id').val(ajaxdata.id);
					$('#name').val(ajaxdata.name);
					$('#email').val(ajaxdata.email);
					$('#phone').val(ajaxdata.phone);
					$('#city').val(ajaxdata.city); 
				});
		});
	});
}
// DELETE DATA FUNCTION
function load_data_delete(url, type, data, dataType="html"){
	$.ajax({
		url: url,
		type: type,
		dataType: dataType,
		data:data,
	}).done(function (data){
		location.reload();
	});
}
