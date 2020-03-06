

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
				$('#formu-editar-alimentacion select[name="TipoSprockets"]').val(valor.tipo_sprockets)
				$('#formu-editar-alimentacion input[name="CantidadSprockets"]').val(valor.cantidad_sprockets)

                  $('#formu-editar-alimentacion select[name="TipoBandas"]').val(valor.banda_modular_tipo)
				$('#formu-editar-alimentacion input[name="BandasMedidas"]').val(valor.banda_medidas)
				$('#formu-editar-alimentacion input[name="Eje"]').val(valor.eje)
				$('#formu-editar-alimentacion input[name="MotorUsillo"]').val(valor.motor_usillo)
				$('#formu-editar-alimentacion input[name="MotorCapacidad"]').val(valor.motor_capacidad)
				$('#formu-editar-alimentacion input[name="MotorRpm"]').val(valor.motor_rpm)
		
		

			}

		})

	})

	$("body #mi_lista").on("click", ".btnEliminarAlimentacion", function(){
		var idAlimentacion = $(this).attr("idAlimentacion")
	
		var datos = new FormData()
		datos.append("id_alimentacion", idAlimentacion)
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