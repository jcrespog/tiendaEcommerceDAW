function enviar(str){

	$.get('desear.php',{
		clave:str,
	}, function(){
		bootbox.alert('¡Artículo agregado a su lista de deseos!');
	});
}