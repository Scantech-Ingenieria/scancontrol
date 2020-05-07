$(document).ready(function(){
	$("#formu-nuevo-sensor").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxSensor.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
				if (respuesta == "ok") {
		Swal.fire(
  'Excelente!',
  'Sensor registrada con exito!',
  'success'
).then((result) => {
					  if (result.value) {
					    window.location = "sensor"
					  }
					})
				}
			}
		})
	})
	$("#formu-editar-sensor").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxSensor.php',
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
					    window.location = "sensor"
					  }
					})
				}
			}
		})
	})

	$("body #mi_lista").on("click", ".btnEditarSensor", function(){
		var idSensor = $(this).attr("idSensor")
		var datos = new FormData()
		datos.append("id_sensor", idSensor)
		datos.append("tipoOperacion", "editarSensor")

		$.ajax({
			url: 'ajax/ajaxSensor.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				console.log(valor.id_sensor)
				$('#formu-editar-sensor input[name="id_sensor"]').val(valor.id_sensor)
				$('#formu-editar-sensor input[name="TipoSensor"]').val(valor.tipo)
				$('#formu-editar-sensor input[name="Marca"]').val(valor.marca)
				$('#formu-editar-sensor input[name="Modelo"]').val(valor.modelo)
				$('#formu-editar-sensor input[name="Voltaje"]').val(valor.voltaje)
				$('#formu-editar-sensor input[name="Distancia"]').val(valor.distancia)
				$('#formu-editar-sensor input[name="Contacto"]').val(valor.contacto)
				$('#formu-editar-sensor input[name="Precio"]').val(valor.precio)
				
				$('#formu-editar-sensor #imgSensorEditar').attr("src", valor.imagen)
				$('#formu-editar-sensor input[name="rutaActual"]').val(valor.imagen)


			}
		})
	})
	$("body #mi_lista").on("click", ".btnEliminarSensor", function(){
		var idSensor = $(this).attr("idSensor")
		var rutaImagen = $(this).attr("rutaImagen")
		var datos = new FormData()
		datos.append("id_sensor", idSensor)
		datos.append("tipoOperacion", "eliminarSensor")
		datos.append("rutaImagen", rutaImagen)
		console.log(idSensor)
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
				url: 'ajax/ajaxSensor.php',
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
						    window.location = "sensor"
						  }
						})
					}
				}
			})
		  }
		})
	})
	// PREVISUALIZAR IMAGENES
	$("#imagenSensor").change(previsualizarImg)
	$("#imagenSensor1").change(previsualizarImg)
	function previsualizarImg(e) {
		var contenedor = e.target.parentNode
		var identificador = contenedor.classList[1]
		imgSlider = this.files[0];
		if ( imgSlider["type"] != "image/jpeg" && imgSlider["type"] != "image/png" && imgSlider["type"] != "video/mp4") {
				$("#imagenSensor").val("")
				$("#imagenSensor1").val("")
			Swal.fire(
					  'No es un archivo valido',
					      'Debe subir archivos formato JPEG , PNG',
					      'error'
				)	
			}
		if ( imgSlider["type"] > 100000) {
				$("#imagenSensor").val("")
				$("#imagenSensor1").val("")
			

Swal.fire(
					  'Error al subir la imagen',
					      'La imagen debe pesar MAX 2MB',
					      'error'
				)
			}
			else {
				$("#imgSensorEditar").css("display", "block")
				var datosImagen = new FileReader;
		  		datosImagen.readAsDataURL(imgSlider);
		  		$(datosImagen).on("load", function(event){
		  			var rutaImagen = event.target.result;
		  			$("." + identificador +" #imgSensorEditar").attr("src", rutaImagen);
		  		})
			}
		}



})