$(document).ready(function(){
	$("#formu-nuevo-calidad").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxCalidad.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
				if (respuesta == "ok") {
		Swal.fire(
  'Excelente!',
  'Estación de Calidad creada con exito!',
  'success'
).then((result) => {
					  if (result.value) {
					    window.location = "estacioncalidad"
					  }
					})
				}
			}
		})
	})

	$("#formu-editar-calidad").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxCalidad.php',
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
					    window.location = "estacioncalidad"
					  }
					})
				}
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEditarCalidad", function(){
		var idCalidad = $(this).attr("idCalidad")
		var datos = new FormData()
		datos.append("id_calidad", idCalidad)
		datos.append("tipoOperacion", "editarCalidad")
		$.ajax({
			url: 'ajax/ajaxCalidad.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				console.log(valor.id_calidad)
				$('#formu-editar-calidad input[name="id_calidad"]').val(valor.id_calidad)
				$('#formu-editar-calidad input[name="Puestos"]').val(valor.puestos)
				$('#formu-editar-calidad select[name="TipoSprockets"]').val(valor.tipo_sprockets)
				$('#formu-editar-calidad input[name="CantidadSprocket"]').val(valor.cantidad_sprockets)
				$('#formu-editar-calidad select[name="TipoBandas"]').val(valor.tipo_banda)
				$('#formu-editar-calidad input[name="MedidaBanda"]').val(valor.medida_banda)
				$('#formu-editar-calidad input[name="Eje"]').val(valor.eje)
				$('#formu-editar-calidad select[name="TipoCilindros"]').val(valor.cilindros)
				$('#formu-editar-calidad input[name="TipoBotoneras"]').val(valor.tipo_botoneras)
				$('#formu-editar-calidad input[name="CantidadBotoneras"]').val(valor.cantidad_botoneras)
				$('#formu-editar-calidad select[name="TipoSensores"]').val(valor.tipo_sensores)
				$('#formu-editar-calidad input[name="CantidadSensores"]').val(valor.cantidad_sensores)
				$('#formu-editar-calidad input[name="Racors"]').val(valor.racors)
				$('#formu-editar-calidad select[name="TipoMotor"]').val(valor.tipomotor)
				$('#formu-editar-calidad select[name="TipoDescanso"]').val(valor.tipo_descanso)
				$('#formu-editar-calidad input[name="rutaActual"]').val(valor.imagen)
				$('#formu-editar-calidad #imgCalidad').attr("src", valor.imagen)
			
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEliminarCalidad", function(){
		var idCalidad = $(this).attr("idCalidad")
		var rutaImagen = $(this).attr("rutaImagen")

		var datos = new FormData()
		datos.append("id_calidad", idCalidad)
		datos.append("tipoOperacion", "eliminarCalidad")
		datos.append("rutaImagen", rutaImagen)
		
		console.log(idCalidad)
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
				url: 'ajax/ajaxCalidad.php',
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
						    window.location = "estacioncalidad"
						  }
						})
					}
				}
			})
		  }
		})
	})
	// PREVISUALIZAR IMAGENES
	$("#imagenCalidad").change(previsualizarImg)
	$("#imagenCalidadEditar").change(previsualizarImg)
	function previsualizarImg(e) {
		var contenedor = e.target.parentNode
		var identificador = contenedor.classList[1]
		imgSlider = this.files[0];
		if ( imgSlider["type"] != "image/jpeg" && imgSlider["type"] != "image/png" && imgSlider["type"] != "video/mp4") {
				$("#imagenCalidad").val("")
				$("#imagenCalidadEditar").val("")
			Swal.fire(
					  'No es un archivo valido',
					      'Debe subir archivos formato JPEG , PNG',
					      'error'
				)	
			}
		if ( imgSlider["type"] > 100000) {
				$("#imagenCalidad").val("")
			

Swal.fire(
					  'Error al subir la imagen',
					      'La imagen debe pesar MAX 2MB',
					      'error'
				)
			}
			else {
				$("#imgCalidad").css("display", "block")
				var datosImagen = new FileReader;
		  		datosImagen.readAsDataURL(imgSlider);
		  		$(datosImagen).on("load", function(event){
		  			var rutaImagen = event.target.result;
		  			$("." + identificador +" #imgCalidad").attr("src", rutaImagen);
		  		})
			}
		}

})