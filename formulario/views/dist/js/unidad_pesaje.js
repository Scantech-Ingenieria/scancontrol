$(document).ready(function(){
	$("#formu-nuevo-pesaje").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxPesaje.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
				if (respuesta == "ok") {
		Swal.fire(
  'Excelente!',
  'Unidad de Pesaje registrada con exito!',
  'success'
).then((result) => {
					  if (result.value) {
					    window.location = "unidadpesaje"
					  }
					})
				}
			}
		})
	})

	$("#formu-editar-pesaje").submit(function (e) {
		e.preventDefault()

		var datos = new FormData($(this)[0])

		$.ajax({
			url: 'ajax/ajaxPesaje.php',
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
					    window.location = "unidadpesaje"
					  }
					})
				}
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEditarPesaje", function(){
		var idPesaje = $(this).attr("idPesaje")
		var datos = new FormData()
		datos.append("id_pesaje", idPesaje)
		datos.append("tipoOperacion", "editarPesaje")

		$.ajax({
			url: 'ajax/ajaxPesaje.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				console.log(valor.id_unidad_acel)
				$('#formu-editar-pesaje input[name="Descarga"]').val(valor.descarga)
	            $('#formu-editar-pesaje input[name="id_pesaje"]').val(valor.id_unidad_pesaje)
				$('#formu-editar-pesaje select[name="TipoSensores"]').val(valor.tipo_sensores)
				$('#formu-editar-pesaje input[name="CantidadSensores"]').val(valor.cantidad_sensores)
				$('#formu-editar-pesaje select[name="TipoSprockets"]').val(valor.tipo_sprockets)
				$('#formu-editar-pesaje input[name="CantidadSprockets"]').val(valor.cantidad_sprockets)
                  $('#formu-editar-pesaje select[name="TipoBandas"]').val(valor.banda_modular_tipo)
				$('#formu-editar-pesaje input[name="BandasMedidas"]').val(valor.banda_medidas)
				$('#formu-editar-pesaje input[name="Eje"]').val(valor.eje)
				$('#formu-editar-pesaje select[name="TipoMotor"]').val(valor.tipo_motor)
				$('#formu-editar-pesaje select[name="TipoRodamientos"]').val(valor.tipo_rodamientos)
				$('#formu-editar-pesaje input[name="AltoEntrada"]').val(valor.entradaalto)
				$('#formu-editar-pesaje input[name="AnchoEntrada"]').val(valor.entradaancho)
				$('#formu-editar-pesaje input[name="EspesorEntrada"]').val(valor.entradaespesor)
				$('#formu-editar-pesaje input[name="AltoPesaje"]').val(valor.pesajealto)
				$('#formu-editar-pesaje input[name="AnchoPesaje"]').val(valor.pesajeancho)
				$('#formu-editar-pesaje input[name="EspesorPesaje"]').val(valor.pesajeespesor)
				$('#formu-editar-pesaje input[name="AltoSalida"]').val(valor.salidaalto)
				$('#formu-editar-pesaje input[name="AnchoSalida"]').val(valor.salidaancho)
				$('#formu-editar-pesaje input[name="EspesorSalida"]').val(valor.salidaespesor)
				$('#formu-editar-pesaje select[name="TableroElectrico"]').val(valor.tableroelectrico)
				$('#formu-editar-pesaje select[name="TableroNeumatico"]').val(valor.tableroneumatico)

	$('#formu-editar-pesaje input[name="rutaActual"]').val(valor.imagen)
				$('#formu-editar-pesaje #imgPesaje').attr("src", valor.imagen)

			}
		})
	})

	$("body #mi_lista").on("click", ".btnEliminarPesaje", function(){
		var idPesaje = $(this).attr("idPesaje")
		var rutaImagen = $(this).attr("rutaImagen")

		var datos = new FormData()
		datos.append("id_pesaje", idPesaje)
		datos.append("rutaImagen", rutaImagen)
		datos.append("tipoOperacion", "eliminarPesaje")
		console.log(idPesaje)
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
				url: 'ajax/ajaxPesaje.php',
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
						    window.location = "unidadpesaje"
						  }
						})
					}
				}
			})
		  }
		})
	})
// PREVISUALIZAR IMAGENES
	$("#imagenPesaje").change(previsualizarImg)
	$("#imagenPesajeEditar").change(previsualizarImg)
	function previsualizarImg(e) {
		var contenedor = e.target.parentNode
		var identificador = contenedor.classList[1]
		imgSlider = this.files[0];
		if ( imgSlider["type"] != "image/jpeg" && imgSlider["type"] != "image/png" && imgSlider["type"] != "video/mp4") {
				$("#imagenPesaje").val("")
				$("#imagenPesajeEditar").val("")
			Swal.fire(
					  'No es un archivo valido',
					      'Debe subir archivos formato JPEG , PNG',
					      'error'
				)	
			}
		if ( imgSlider["type"] > 100000) {
				$("#imagenPesaje").val("")
			

Swal.fire(
					  'Error al subir la imagen',
					      'La imagen debe pesar MAX 2MB',
					      'error'
				)
			}
			else {
				$("#imgPesaje").css("display", "block")
				var datosImagen = new FileReader;
		  		datosImagen.readAsDataURL(imgSlider);
		  		$(datosImagen).on("load", function(event){
		  			var rutaImagen = event.target.result;
		  			$("." + identificador +" #imgPesaje").attr("src", rutaImagen);
		  		})
			}
		}


})