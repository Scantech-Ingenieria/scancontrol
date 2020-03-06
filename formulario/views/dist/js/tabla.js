

$(document).ready(function(){


	$("#formu-nuevo-tabla").submit(function (e) {
		e.preventDefault()

		var datos = new FormData($(this)[0])

		$.ajax({
			url: 'ajax/ajaxTabla.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
				console.log(respuesta)
				console.log(respuesta)
				console.log(respuesta)
				console.log(respuesta)

				if (respuesta == "ok") {


		Swal.fire(
  'Excelente!',
  'Balanza registrada con exito!',
  'success'
).then((result) => {
					  if (result.value) {
					    window.location = "tabla"
					  }
					})
				}
			}

		})

	})


	$("#formu-editar-tabla").submit(function (e) {
		e.preventDefault()

		var datos = new FormData($(this)[0])

		$.ajax({
			url: 'ajax/ajaxTabla.php',
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
					    window.location = "tabla"
					  }
					})
				}
			}

		})

	})



	$("body #mi_lista").on("click", ".btnEditarTabla", function(){
		var idTabla = $(this).attr("idTabla")
		var datos = new FormData()
		datos.append("id_tabla", idTabla)
		datos.append("tipoOperacion", "editarTabla")

		$.ajax({
			url: 'ajax/ajaxTabla.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				

				$('#formu-editar-tabla input[name="id_tabla"]').val(valor.id_tabla)
				$('#formu-editar-tabla input[name="titulotabla"]').val(valor.ip)
				$('#formu-editar-tabla input[name="Ubicaciontabla"]').val(valor.ubicacion)

				$('#formu-editar-tabla select[name="Clientetabla"]').val(valor.cliente)
		

				$('#formu-editar-tabla textarea[name="Descripciontabla"]').val(valor.descripcion)
		
		

			}

		})

	})

	$("body #mi_lista").on("click", ".btnEliminarTabla", function(){
		var idTabla = $(this).attr("idTabla")
	
		var datos = new FormData()
		datos.append("id_tabla", idTabla)
		datos.append("tipoOperacion", "eliminarTabla")


		console.log(idTabla)


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
				url: 'ajax/ajaxTabla.php',
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
						    window.location = "tabla"
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