

$(document).ready(function(){


	$("#formu-nuevo-paletas").submit(function (e) {
		e.preventDefault()

		var datos = new FormData($(this)[0])

		$.ajax({
			url: 'ajax/ajaxPaletas.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)


				if (respuesta == "ok") {


		Swal.fire(
  'Excelente!',
  'Paleta registrada con exito!',
  'success'
).then((result) => {
					  if (result.value) {
					    window.location = "paletas"
					  }
					})
				}
			}

		})

	})


	$("#formu-editar-paletas").submit(function (e) {
		e.preventDefault()

		var datos = new FormData($(this)[0])

		$.ajax({
			url: 'ajax/ajaxPaletas.php',
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
					    window.location = "paletas"
					  }
					})
				}
			}

		})

	})



	$("body #mi_lista").on("click", ".btnEditarPaletas", function(){
		var idPaletas = $(this).attr("idPaletas")
		var datos = new FormData()
		datos.append("id_paletas", idPaletas)
		datos.append("tipoOperacion", "editarPaletas")

		$.ajax({
			url: 'ajax/ajaxPaletas.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				console.log(valor.id_paletas)

				$('#formu-editar-paletas input[name="id_paletas"]').val(valor.id_paletas)
				$('#formu-editar-paletas input[name="TipoPaletas"]').val(valor.tipo_paleta)
				$('#formu-editar-paletas input[name="MedidaPaletas"]').val(valor.medida_paleta)

				$('#formu-editar-paletas input[name="MedidaBujes"]').val(valor.medida_bujes_paleta)
				$('#formu-editar-paletas input[name="MedidaHousing"]').val(valor.medidas_housing)
				$('#formu-editar-paletas input[name="MedidaEje"]').val(valor.medidas_eje_paleta)
				$('#formu-editar-paletas input[name="MedidaBrazoLeva"]').val(valor.medidas_brazo_leva)
				$('#formu-editar-paletas input[name="Clilindrado"]').val(valor.cilindrado)
				$('#formu-editar-paletas input[name="Racors"]').val(valor.racors)

		
		

			}

		})

	})

	$("body #mi_lista").on("click", ".btnEliminarPaletas", function(){
		var idPaletas = $(this).attr("idPaletas")
	
		var datos = new FormData()
		datos.append("id_paletas", idPaletas)
		datos.append("tipoOperacion", "eliminarPaletas")


		console.log(idPaletas)
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
				url: 'ajax/ajaxPaletas.php',
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
						    window.location = "paletas"
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