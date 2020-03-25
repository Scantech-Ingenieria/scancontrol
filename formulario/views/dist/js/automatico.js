$(document).ready(function(){
	$("#formu-nuevo-automatico").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxAutomatico.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
				if (respuesta == "ok") {
		Swal.fire(
  'Excelente!',
  'Automático registrado con exito!',
  'success'
).then((result) => {
					  if (result.value) {
					    window.location = "automatico"
					  }
					})
				}
			}
		})
	})
	$("#formu-editar-automatico").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxAutomatico.php',
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
					    window.location = "automatico"
					  }
					})
				}
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEditarAutomatico", function(){
		var idAutomatico = $(this).attr("idAutomatico")
		

		var datos = new FormData()
		datos.append("id_automatico", idAutomatico)
		datos.append("tipoOperacion", "editarAutomatico")
		

		$.ajax({
			url: 'ajax/ajaxAutomatico.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				console.log(valor.id_automatico)
				$('#formu-editar-automatico input[name="id_automatico"]').val(valor.id_automatico)
				$('#formu-editar-automatico input[name="Amperaje"]').val(valor.amperaje)
				$('#formu-editar-automatico input[name="Marca"]').val(valor.marca)
				$('#formu-editar-automatico input[name="Tipo"]').val(valor.tipo)
				$('#formu-editar-automatico #imgAutomatico').attr("src", valor.imagen)
				$('#formu-editar-automatico input[name="rutaActual"]').val(valor.imagen)
			}

		})

	})

	$("body #mi_lista").on("click", ".btnEliminarAutomatico", function(){
		var idAutomatico = $(this).attr("idAutomatico")
		var rutaImagen = $(this).attr("rutaImagen")
		var rutaImagen = $(this).attr("rutaImagen")

		var datos = new FormData()
		datos.append("id_automatico", idAutomatico)
		datos.append("tipoOperacion", "eliminarAutomatico")
		datos.append("rutaImagen", rutaImagen)
		console.log(idAutomatico)
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
				url: 'ajax/ajaxAutomatico.php',
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
						    window.location = "automatico"
						  }
						})
					}
				}
			})
		  }
		})
	})
// PREVISUALIZAR IMAGENES
	$("#imagenAutomatico").change(previsualizarImg)
	$("#imagenAutomaticoEditar").change(previsualizarImg)
	function previsualizarImg(e) {
		var contenedor = e.target.parentNode
		var identificador = contenedor.classList[1]
		imgSlider = this.files[0];
		if ( imgSlider["type"] != "image/jpeg" && imgSlider["type"] != "image/png" && imgSlider["type"] != "video/mp4") {
				$("#imagenAutomatico").val("")
				$("#imagenAutomaticoEditar").val("")
			Swal.fire(
					  'No es un archivo valido',
					      'Debe subir archivos formato JPEG , PNG',
					      'error'
				)	
			}
		if ( imgSlider["type"] > 100000) {
				$("#imagenAutomatico").val("")
				$("#imagenAutomaticoEditar").val("")

			

Swal.fire(
					  'Error al subir la imagen',
					      'La imagen debe pesar MAX 2MB',
					      'error'
				)
			}
			else {
				$("#imgAutomatico").css("display", "block")
				var datosImagen = new FileReader;
		  		datosImagen.readAsDataURL(imgSlider);
		  		$(datosImagen).on("load", function(event){
		  			var rutaImagen = event.target.result;
		  			$("." + identificador +" #imgAutomatico").attr("src", rutaImagen);
		  		})
			}
		}



})