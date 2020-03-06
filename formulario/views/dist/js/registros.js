

$(document).ready(function(){


	$("#formu-nuevo-registros").submit(function (e) {
		e.preventDefault()

		var datos = new FormData($(this)[0])

		$.ajax({
			url: 'ajax/ajaxRegistros.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
			

				if (respuesta == "ok") {


		Swal.fire(
  'Excelente!',
  'Registrado con exito!',
  'success'
).then((result) => {
					  if (result.value) {
					    window.location = "registros"
					  }
					})
				}
			}

		})

	})


	$("#formu-editar-registros").submit(function (e) {
		e.preventDefault()

		var datos = new FormData($(this)[0])

		$.ajax({
			url: 'ajax/ajaxRegistros.php',
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
					    window.location = "registros"
					  }
					})
				}
			}

		})

	})



	$("body #mi_lista").on("click", ".btnEditarRegistros", function(){
		var idRegistros = $(this).attr("idRegistros")
		var datos = new FormData()
		datos.append("id_registros", idRegistros)
		datos.append("tipoOperacion", "editarRegistros")

		$.ajax({
			url: 'ajax/ajaxRegistros.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				

				$('#formu-editar-registros input[name="id_registros"]').val(valor.id_registros)
				$('#formu-editar-registros input[name="tituloregistros"]').val(valor.ip)
				$('#formu-editar-registros input[name="Ubicacionregistros"]').val(valor.ubicacion)

				$('#formu-editar-registros select[name="Clienteregistros"]').val(valor.cliente)
		

				$('#formu-editar-registros textarea[name="Descripcionregistros"]').val(valor.descripcion)
		
		

			}

		})

	})

	$("body #mi_lista").on("click", ".btnEliminarRegistros", function(){
		var idRegistros = $(this).attr("idRegistros")
	
		var datos = new FormData()
		datos.append("id_registros", idRegistros)
		datos.append("tipoOperacion", "eliminarRegistros")


		console.log(idRegistros)


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
				url: 'ajax/ajaxRegistros.php',
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
						    window.location = "registros"
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