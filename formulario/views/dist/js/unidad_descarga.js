$(document).ready(function(){
	$("#formu-nuevo-descarga").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxDescarga.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
				if (respuesta == "ok") {
		Swal.fire(
  'Excelente!',
  'Unidad de Descarga registrada con exito!',
  'success'
).then((result) => {
					  if (result.value) {
					    window.location = "unidaddescarga"
					  }
					})
				}
			}
		})
	})
	$("#formu-editar-descarga").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxDescarga.php',
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
					    window.location = "unidaddescarga"
					  }
					})
				}
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEditarDescarga", function(){
		var idDescarga = $(this).attr("idDescarga")
		var datos = new FormData()
		datos.append("id_descarga", idDescarga)
		datos.append("tipoOperacion", "editarDescarga")
		$.ajax({
			url: 'ajax/ajaxDescarga.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				console.log(valor.id_unidad_descarga)
				console.log(valor.tipo_paletas)
				$('#formu-editar-descarga input[name="id_descarga"]').val(valor.id_unidad_descarga)
				$('#formu-editar-descarga select[name="TipoSprockets"]').val(valor.tipo_sprockets)
				$('#formu-editar-descarga input[name="CantidadSprockets"]').val(valor.cantidad_sprockets)

                  $('#formu-editar-descarga select[name="TipoBandas"]').val(valor.banda_modular_tipo)
				$('#formu-editar-descarga input[name="BandasMedidas"]').val(valor.banda_medidas)
				$('#formu-editar-descarga input[name="Eje"]').val(valor.eje)
				$('#formu-editar-descarga input[name="MotorUsillo"]').val(valor.motor_usillo)
				$('#formu-editar-descarga input[name="MotorCapacidad"]').val(valor.motor_capacidad)
	$('#formu-editar-descarga input[name="CantidadPaletas"]').val(valor.cantidad_paletas)
				$('#formu-editar-descarga select[name="TipoPaletas"]').val(valor.tipo_paletas)
			$('#formu-editar-descarga input[name="RPM"]').val(valor.rpm)
				$('#formu-editar-descarga select[name="TipoRodamientos"]').val(valor.tipo_rodamientos)
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEliminarDescarga", function(){
		var idDescarga = $(this).attr("idDescarga")
		var datos = new FormData()
		datos.append("id_descarga", idDescarga)
		datos.append("tipoOperacion", "eliminarDescarga")
		console.log(idDescarga)
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
				url: 'ajax/ajaxDescarga.php',
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
						    window.location = "unidaddescarga"
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