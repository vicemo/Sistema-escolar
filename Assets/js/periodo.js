$(function(){

	// Lista de docente
	$.post( '../../Views/funciones/periodo.php' ).done( function(respuesta)
	{
		$( '#periodo' ).html( respuesta );
	});
	
	
	// Lista de Ciudades
	$( '#periodo' ).change( function()
	{
		var el_continente = $(this).val();
		// Lista de Paises
		$.post( '../../Views/funciones/secgra.php', { continente: el_continente} ).done( function( respuesta )
		{
			$( '#grado' ).html( respuesta );
		});

	});

// Lista de Ciudades
	$( '#grado' ).change( function()
	{
		var pais = $(this).val();
		
		$.post( '../../Views/funciones/secsub.php', { paises: pais} ).done( function( respuesta )
		{
			$( '#sub' ).html( respuesta );
		});	
		
	});


	// Lista de Ciudades
	$( '#sub' ).change( function()
	{
		var curso = $(this).val();
		
		$.post( '../../Views/funciones/seccurs.php', { cursos: curso} ).done( function( respuesta )
		{
			$( '#curso' ).html( respuesta );
		});	
		
	});
	
	
	

})
