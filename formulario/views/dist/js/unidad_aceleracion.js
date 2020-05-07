$(document).ready(function(){
	$("#formu-nuevo-aceleracion").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxAceleracion.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
				if (respuesta == "ok") {
		Swal.fire(
  'Excelente!',
  'Unidad de Aceleración registrada con exito!',
  'success'
).then((result) => {
					  if (result.value) {
					    window.location = "unidadaceleracion"
					  }
					})
				}
			}
		})
	})
	$("#formu-editar-aceleracion").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxAceleracion.php',
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
					    window.location = "unidadaceleracion"
					  }
					})
				}
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEditarAceleracion", function(){
		var idAceleracion = $(this).attr("idAceleracion")
		var datos = new FormData()
		datos.append("id_aceleracion", idAceleracion)
		datos.append("tipoOperacion", "editarAceleracion")
		$.ajax({
			url: 'ajax/ajaxAceleracion.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				console.log(valor.id_unidad_acel)
				$('#formu-editar-aceleracion input[name="id_aceleracion"]').val(valor.id_unidad_acel)
				$('#formu-editar-aceleracion select[name="TipoSprockets"]').val(valor.tipo_sprockets)
				$('#formu-editar-aceleracion input[name="CantidadSprockets"]').val(valor.cantidad_sprockets)
                $('#formu-editar-aceleracion select[name="TipoBandas"]').val(valor.banda_modular_tipo)
				$('#formu-editar-aceleracion input[name="BandasMedidas"]').val(valor.banda_medidas)
				$('#formu-editar-aceleracion input[name="Eje"]').val(valor.eje)
				$('#formu-editar-aceleracion select[name="TipoMotor"]').val(valor.tipo_motor)
				$('#formu-editar-aceleracion select[name="TipoDescanso"]').val(valor.tipo_descanso)
			    $('#formu-editar-aceleracion input[name="rutaActual"]').val(valor.imagen)
				$('#formu-editar-aceleracion #imgAceleracion').attr("src", valor.imagen)

			}
		})
	})

	$("body #mi_lista").on("click", ".btnEliminarAceleracion", function(){
		var idAceleracion = $(this).attr("idAceleracion")
				var rutaImagen = $(this).attr("rutaImagen")

		var datos = new FormData()
		datos.append("id_aceleracion", idAceleracion)
		datos.append("rutaImagen", rutaImagen)

		datos.append("tipoOperacion", "eliminarAceleracion")
		console.log(idAceleracion)
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
				url: 'ajax/ajaxAceleracion.php',
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
						    window.location = "unidadaceleracion"
						  }
						})
					}
				}
			})
		  }
		})
	})
// PREVISUALIZAR IMAGENES
	$("#imagenAceleracion").change(previsualizarImg)
	$("#imagenAceleracionEditar").change(previsualizarImg)
	function previsualizarImg(e) {
		var contenedor = e.target.parentNode
		var identificador = contenedor.classList[1]
		imgSlider = this.files[0];
		if ( imgSlider["type"] != "image/jpeg" && imgSlider["type"] != "image/png" && imgSlider["type"] != "video/mp4") {
				$("#imagenAceleracion").val("")
				$("#imagenAceleracionEditar").val("")
			Swal.fire(
					  'No es un archivo valido',
					      'Debe subir archivos formato JPEG , PNG',
					      'error'
				)	
			}
		if ( imgSlider["type"] > 100000) {
				$("#imagenAceleracion").val("")
			

Swal.fire(
					  'Error al subir la imagen',
					      'La imagen debe pesar MAX 2MB',
					      'error'
				)
			}
			else {
				$("#imgAceleracion").css("display", "block")
				var datosImagen = new FileReader;
		  		datosImagen.readAsDataURL(imgSlider);
		  		$(datosImagen).on("load", function(event){
		  			var rutaImagen = event.target.result;
		  			$("." + identificador +" #imgAceleracion").attr("src", rutaImagen);
		  		})
			}
		}
})