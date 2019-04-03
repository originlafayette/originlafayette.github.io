
$(document).on('ready', function () {


	$(document).on('click', '#button-view', function(event) 
	{
		//event.preventDefault();
		var tbl_row = $(this).closest('tr');

		var row_id = tbl_row.attr('image_data'); 
		console.log(row_id);
		console.log('hellogello');
		document.getElementById("modalImage").src = row_id;

	});

});
