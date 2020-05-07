$(document).ready(function(){
	$("#formu-nuevo-sprockets").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxSprockets.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
				if (respuesta == "ok") {
		Swal.fire(
  'Excelente!',
  'Sprockets registrada con exito!',
  'success'
).then((result) => {
					  if (result.value) {
					    window.location = "sprockets"
					  }
					})
				}
			}
		})
	})
	$("#formu-editar-sprockets").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxSprockets.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
				if (respuesta == "ok") {
							Swal.fire(
  'Excelente!',
  'datos actualizados con exito!',
  'success'
).then((result) => {
					  if (result.value) {
					    window.location = "sprockets"
					  }
					})
				}
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEditarSprockets", function(){
		var idSprockets = $(this).attr("idSprockets")
		var datos = new FormData()
		datos.append("id_sprockets", idSprockets)
		datos.append("tipoOperacion", "editarSprockets")
		$.ajax({
			url: 'ajax/ajaxSprockets.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				console.log(valor.id_sprockets)

	$('#formu-editar-sprockets input[name="id_sprockets"]').val(valor.id_sprockets)
	$('#formu-editar-sprockets input[name="NumeroSerie"]').val(valor.serie)
	$('#formu-editar-sprockets input[name="Modelo"]').val(valor.modelo)
	$('#formu-editar-sprockets input[name="Dientes"]').val(valor.dientes)
	$('#formu-editar-sprockets input[name="Perforacion"]').val(valor.perforacion)
	$('#formu-editar-sprockets textarea[name="DescripcionSprockets"]').val(valor.descripcion)
	$('#formu-editar-sprockets input[name="Precio"]').val(valor.precio)
	$('#formu-editar-sprockets #imagenSprockets').attr("src", valor.imagen)
	$('#formu-editar-sprockets input[name="rutaActual"]').val(valor.imagen)
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEliminarSprockets", function(){
		var idSprockets = $(this).attr("idSprockets")
		var rutaImagen = $(this).attr("rutaImagen")
		var datos = new FormData()
		datos.append("id_sprockets", idSprockets)
		datos.append("tipoOperacion", "eliminarSprockets")
		datos.append("rutaImagen", rutaImagen)
		console.log(idSprockets)
		Swal.fire({
		  title: '¿Estás seguro de eliminar?',
		  text: "Los cambios no son reversibles!",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Si, Elimina!'
		}).then((result) => {
		  if (result.value) {
		  	$.ajax({
				url: 'ajax/ajaxSprockets.php',
				type: 'POST',
				data: datos,
				processData: false,
				contentType: false,
				success: function(respuesta) {
					if ( respuesta == "ok") {
						Swal.fire(
					      'Eliminado!',
					      'Su archivo a sido eliminado.',
					      'success'
					    ).then((result) => {
						  if (result.value) {
						    window.location = "sprockets"
						  }
						})
					}
				}
			})
		  }
		})
	})
	// PREVISUALIZAR IMAGENES
	$("#imagenspro").change(previsualizarImg)
	$("#imagenEditarspro").change(previsualizarImg)
	function previsualizarImg(e) {
		var contenedor = e.target.parentNode
		var identificador = contenedor.classList[1]
		imgSlider = this.files[0];
		if ( imgSlider["type"] != "image/jpeg" && imgSlider["type"] != "image/png" && imgSlider["type"] != "video/mp4") {
				$("#imagenspro").val("")
				$("#imagenEditarspro").val("")
			Swal.fire(
					  'No es un archivo valido',
					      'Debe subir archivos formato JPEG , PNG',
					      'error'
				)	
			}
		if ( imgSlider["type"] > 100000) {
				$("#imagenspro").val("")
			

Swal.fire(
					  'Error al subir la imagen',
					      'La imagen debe pesar MAX 2MB',
					      'error'
				)
			}
			else {
				$("#imagenSprockets").css("display", "block")
				var datosImagen = new FileReader;
		  		datosImagen.readAsDataURL(imgSlider);
		  		$(datosImagen).on("load", function(event){
		  			var rutaImagen = event.target.result;
		  			$("." + identificador +" #imagenSprockets").attr("src", rutaImagen);
		  		})
			}
		}
})