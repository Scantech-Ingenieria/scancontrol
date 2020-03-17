$(document).ready(function(){
	$("#formu-nuevo-rodamientos").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxRodamientos.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
				if (respuesta == "ok") {
		Swal.fire(
  'Excelente!',
  'Rodamientos registrada con exito!',
  'success'
).then((result) => {
					  if (result.value) {
					    window.location = "rodamientos"
					  }
					})
				}
			}
		})
	})
	$("#formu-editar-rodamientos").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxRodamientos.php',
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
					    window.location = "rodamientos"
					  }
					})
				}
			}
		})
	})

	$("body #mi_lista").on("click", ".btnEditarRodamientos", function(){
		var idRodamientos = $(this).attr("idRodamientos")
		var datos = new FormData()
		datos.append("id_rodamientos", idRodamientos)
		datos.append("tipoOperacion", "editarRodamientos")

		$.ajax({
			url: 'ajax/ajaxRodamientos.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				console.log(valor.id_rodamientos)
				$('#formu-editar-rodamientos input[name="id_rodamientos"]').val(valor.id_rodamientos)
				$('#formu-editar-rodamientos input[name="Modelo"]').val(valor.modelo)
				$('#formu-editar-rodamientos input[name="Rodamiento"]').val(valor.rodamiento)
				$('#formu-editar-rodamientos input[name="Material"]').val(valor.material)
				$('#formu-editar-rodamientos input[name="Fijaciones"]').val(valor.fijaciones)
				$('#formu-editar-rodamientos #imgDescanso').attr("src", valor.imagen)
				$('#formu-editar-rodamientos input[name="rutaActual"]').val(valor.imagen)
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEliminarRodamientos", function(){
		var idRodamientos = $(this).attr("idRodamientos")
		var rutaImagen = $(this).attr("rutaImagen")
		var datos = new FormData()
		datos.append("id_rodamientos", idRodamientos)
		datos.append("tipoOperacion", "eliminarRodamientos")
		datos.append("rutaImagen", rutaImagen)
		console.log(idRodamientos)
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
				url: 'ajax/ajaxRodamientos.php',
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
						    window.location = "rodamientos"
						  }
						})
					}
				}
			})
		  }
		})
	})
	// PREVISUALIZAR IMAGENES
	$("#imagenDescanso").change(previsualizarImg)
	$("#imagenDescansoEditar").change(previsualizarImg)
	function previsualizarImg(e) {
		var contenedor = e.target.parentNode
		var identificador = contenedor.classList[1]
		imgSlider = this.files[0];
		if ( imgSlider["type"] != "image/jpeg" && imgSlider["type"] != "image/png" && imgSlider["type"] != "video/mp4") {
				$("#imagenDescanso").val("")
				$("#imagenDescansoEditar").val("")


			Swal.fire(
					  'No es un archivo valido',
					      'Debe subir archivos formato JPEG , PNG',
					      'error'
				)	
			}
		if ( imgSlider["type"] > 10000000) {
			$("#imagenDescanso").val("")
				$("#imagenDescansoEditar").val("")

			Swal.fire(
					  'Error al subir la imagen',
					      'La imagen debe pesar MAX 2MB',
					      'error'
				)
			}
			else {
				$("#imgDescanso").css("display", "block")
				var datosImagen = new FileReader;
		  		datosImagen.readAsDataURL(imgSlider);
		  		$(datosImagen).on("load", function(event){
		  			var rutaImagen = event.target.result;
		  			$("." + identificador +" #imgDescanso").attr("src", rutaImagen);
		  		})
			}
		}
})