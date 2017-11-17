
$(function(){
	$('#select-region').on('change',onSelectRegionChange);
});

<<<<<<< HEAD
=======

>>>>>>> 48b42f212160d620f6542b4cf860e9e96d6c590c
function onSelectRegionChange(){
	var region_id = $(this).val();
	
	//ajaxx
	$.get('/api/region/'+region_id+'/communes',function(data){

		var html_select = '<option value = ""> Seleccione comuna </option>';
		
		for(var i=0; i<data.length ; ++i)
			html_select +=  '<option value = "' + data[i].id + '">' + data[i].name +' </option>';


		$('#select-commune').html(html_select);
	});

}

