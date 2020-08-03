$(document).ready(function(){
	$("#formu-nuevo-vdf").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxVdf.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
				if (respuesta == "ok") {
		Swal.fire(
  'Excelente!',
  'Variador de Frecuencia registrado con exito!',
  'success'
).then((result) => {
					  if (result.value) {
					    window.location = "vdf"
					  }
					})
				}
			}
		})
	})
	$("#formu-editar-vdf").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxVdf.php',
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
					    window.location = "vdf"
					  }
					})
				}
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEditarVdf", function(){
		var idVdf = $(this).attr("idVdf")
		var datos = new FormData()
		datos.append("id_vdf", idVdf)
		datos.append("tipoOperacion", "editarVdf")
		$.ajax({
			url: 'ajax/ajaxVdf.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				console.log(valor.id_vdf)

				$('#formu-editar-vdf input[name="id_vdf"]').val(valor.id_vdf)
				$('#formu-editar-vdf input[name="Potencia"]').val(valor.potencia)
				$('#formu-editar-vdf input[name="Marca"]').val(valor.marca)
				$('#formu-editar-automatico input[name="Precio"]').val(valor.precio)			
			    $('#formu-editar-vdf #imgVdf').attr("src", valor.imagen)
				$('#formu-editar-vdf input[name="rutaActual"]').val(valor.imagen)
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEliminarVdf", function(){
		var idVdf = $(this).attr("idVdf")
		var rutaImagen = $(this).attr("rutaImagen")
		
		var datos = new FormData()
		datos.append("id_vdf", idVdf)
		datos.append("tipoOperacion", "eliminarVdf")
		datos.append("rutaImagen", rutaImagen)
		
		console.log(idVdf)
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
				url: 'ajax/ajaxVdf.php',
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
						    window.location = "vdf"
						  }
						})
					}
				}
			})
		  }
		})
	})
	// PREVISUALIZAR IMAGENES
	$("#imagenVdfEditar").change(previsualizarImg)
	$("#imagenVdf").change(previsualizarImg)
	function previsualizarImg(e) {
		var contenedor = e.target.parentNode
		var identificador = contenedor.classList[1]
		imgSlider = this.files[0];

		if ( imgSlider["type"] != "image/jpeg" && imgSlider["type"] != "image/png" && imgSlider["type"] != "video/mp4") {
				$("#imagenVdf").val("")
				$("#imagenVdfEditar").val("")

	Swal.fire(
					  'No es un archivo valido',
					      'Debe subir archivos formato JPEG , PNG',
					      'error'
				)	
			}
		if ( imgSlider["type"] > 100000000000) {
				$("#imagenVdf").val("")
		
Swal.fire(
					  'Error al subir la imagen',
					      'La imagen debe pesar MAX 2MB',
					      'error'
				)
			}
			else {
				$("#imgVdf").css("display", "block")
				var datosImagen = new FileReader;
		  		datosImagen.readAsDataURL(imgSlider);
		  		$(datosImagen).on("load", function(event){
		  			var rutaImagen = event.target.result;
		  			$("." + identificador +" #imgVdf").attr("src", rutaImagen);
		  		})
			}

		}



})