function init()
{

	//console.log('Cargado');

	$('#btnHTML').click(
		function()
		{
			$.ajax({
				url: "table.php", 
				success: function(result)
				{
		        	//Resultado
		        	//console.log(result);
		        	$('#divTable').html(result);
		    	}
			});
		}
		);
	$('#btnJSON').click(
		function()
		{
			$.ajax({
				url: "json.php", 
				dataType: 'json',
				success: function(result)
				{
		        	//Resultado
		        	console.log(result);
		        	var full_name= result.name + ' ' + result.last_name;
		        	$('#spnUser').html(full_name);
		    	}
			});
		}
		);

}

$(init);