

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
					$('#formu-editar-sprockets textarea[name="DescripcionSprockets"]').val(valor.descripcion)




		

			}

		})

	})

	$("body #mi_lista").on("click", ".btnEliminarSprockets", function(){
		var idSprockets = $(this).attr("idSprockets")
	
		var datos = new FormData()
		datos.append("id_sprockets", idSprockets)
		datos.append("tipoOperacion", "eliminarSprockets")


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

	$("#imagen").change(previsualizarImg)
	$("#imagenEditar").change(previsualizarImg)


	function previsualizarImg(e) {
		var contenedor = e.target.parentNode

		var identificador = contenedor.classList[1]

		imgSlider = this.files[0];



		if ( imgSlider["type"] != "image/jpeg" && imgSlider["type"] != "image/png" && imgSlider["type"] != "video/mp4") {
				$("#imagen").val("")

				swal({
					type:'error',
					title: 'No es un archivo valido',
					text: 'Debe subir archivos formato JPEG , PNG , MP4',
			

				})
			}





		if ( imgSlider["type"] > 100000000000) {
				$("#imagenSlider").val("")

				swal({
					type: "Error al subir la imagen",
					text: "La imagen debe pesar MAX 2MB",
					icon: 'error',
					confirmButtonText: "¡Cerrar!",
				})
			}

			else {
				$("#imagenSlider").css("display", "block")

				var datosImagen = new FileReader;
		  		datosImagen.readAsDataURL(imgSlider);

		  		$(datosImagen).on("load", function(event){

		  			var rutaImagen = event.target.result;

		  			$("." + identificador +" #imagenSlider").attr("src", rutaImagen);
		  		})
			}

		}



})