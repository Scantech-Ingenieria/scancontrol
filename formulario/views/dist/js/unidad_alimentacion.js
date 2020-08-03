

$(document).ready(function(){

$("#formu-nuevo-alimentacion").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxAlimentacion.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
				if (respuesta == "ok") {
		Swal.fire(
  'Excelente!',
  'Unidad de Alimentación registrada con exito!',
  'success'
).then((result) => {
					  if (result.value) {
					    window.location = "unidadalimentacion"
					  }
					})
				}
			}
		})
	})
	$("#formu-editar-alimentacion").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxAlimentacion.php',
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
					    window.location = "unidadalimentacion"
					  }
					})
				}
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEditarAlimentacion", function(){
		var idAlimentacion = $(this).attr("idAlimentacion")
		var datos = new FormData()
		datos.append("id_alimentacion", idAlimentacion)
		datos.append("tipoOperacion", "editarAlimentacion")
		$.ajax({
			url: 'ajax/ajaxAlimentacion.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				console.log(valor.id_unidad_alim)
				$('#formu-editar-alimentacion input[name="id_alimentacion"]').val(valor.id_unidad_alim)
				$('#formu-editar-alimentacion input[name="Descripcion"]').val(valor.descripcion)
				$('#formu-editar-alimentacion select[name="TipoSprockets"]').val(valor.tipo_sprockets)
				$('#formu-editar-alimentacion input[name="CantidadSprockets"]').val(valor.cantidad_sprockets)
                $('#formu-editar-alimentacion select[name="TipoBandas"]').val(valor.banda_modular_tipo)
				$('#formu-editar-alimentacion input[name="BandasMedidas"]').val(valor.banda_medidas)
				$('#formu-editar-alimentacion input[name="LargoBanda"]').val(valor.largo_banda)
				$('#formu-editar-alimentacion input[name="Eje"]').val(valor.eje)
				$('#formu-editar-alimentacion select[name="TipoMotor"]').val(valor.tipo_motor)
				$('#formu-editar-alimentacion select[name="TipoDescanso"]').val(valor.tipo_descanso)
				$('#formu-editar-alimentacion input[name="rutaActual"]').val(valor.imagen)
				$('#formu-editar-alimentacion #imgAlimentacion').attr("src", valor.imagen)	
			}
		})

	})

	$("body #mi_lista").on("click", ".btnEliminarAlimentacion", function(){
		var idAlimentacion = $(this).attr("idAlimentacion")
		var rutaImagen = $(this).attr("rutaImagen")

		var datos = new FormData()
		datos.append("id_alimentacion", idAlimentacion)
		datos.append("rutaImagen", rutaImagen)

		datos.append("tipoOperacion", "eliminarAlimentacion")
		console.log(idAlimentacion)
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
				url: 'ajax/ajaxAlimentacion.php',
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
						    window.location = "unidadalimentacion"
						  }
						})
					}
				}
			})
		  }
		})
	})
	// PREVISUALIZAR IMAGENES
	$("#imagenAlimentacion").change(previsualizarImg)
	$("#imagenAlimentacionEditar").change(previsualizarImg)
	function previsualizarImg(e) {
		var contenedor = e.target.parentNode
		var identificador = contenedor.classList[1]
		imgSlider = this.files[0];
		if ( imgSlider["type"] != "image/jpeg" && imgSlider["type"] != "image/png" && imgSlider["type"] != "video/mp4") {
				$("#imagenAlimentacion").val("")
				$("#imagenAlimentacionEditar").val("")
			Swal.fire(
					  'No es un archivo valido',
					      'Debe subir archivos formato JPEG , PNG',
					      'error'
				)	
			}
		if ( imgSlider["type"] > 100000) {
				$("#imagenAlimentacion").val("")
			

Swal.fire(
					  'Error al subir la imagen',
					      'La imagen debe pesar MAX 2MB',
					      'error'
				)
			}
			else {
				$("#imgAlimentacion").css("display", "block")
				var datosImagen = new FileReader;
		  		datosImagen.readAsDataURL(imgSlider);
		  		$(datosImagen).on("load", function(event){
		  			var rutaImagen = event.target.result;
		  			$("." + identificador +" #imgAlimentacion").attr("src", rutaImagen);
		  		})
			}
		}




})