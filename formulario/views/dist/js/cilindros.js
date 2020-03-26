
$(document).ready(function(){
	$("#formu-nuevo-cilindros").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxCilindros.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
				if (respuesta == "ok") {

		Swal.fire(
  'Excelente!',
  'Cilindros registrada con exito!',
  'success'
).then((result) => {
					  if (result.value) {
					    window.location = "cilindros"
					  }
					})
				}
			}
		})
	})
	$("#formu-editar-cilindros").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxCilindros.php',
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
					    window.location = "cilindros"
					  }
					})
				}
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEditarCilindros", function(){
		var idCilindros = $(this).attr("idCilindros")
		var datos = new FormData()
		datos.append("id_cilindros", idCilindros)
		datos.append("tipoOperacion", "editarCilindros")
		$.ajax({
			url: 'ajax/ajaxCilindros.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				console.log(valor.id_cilindros)
				console.log(valor.imagen)
				$('#formu-editar-cilindros input[name="id_cilindros"]').val(valor.id_cilindros)
				$('#formu-editar-cilindros input[name="Modelo"]').val(valor.modelo)
				$('#formu-editar-cilindros #imgCilindros').attr("src", valor.imagen)
				$('#formu-editar-cilindros input[name="rutaActual"]').val(valor.imagen)
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEliminarCilindros", function(){
		var idCilindros = $(this).attr("idCilindros")
		var rutaImagen = $(this).attr("rutaImagen")
		var datos = new FormData()
		datos.append("id_cilindros", idCilindros)
		datos.append("tipoOperacion", "eliminarCilindros")
		datos.append("rutaImagen", rutaImagen)
	console.log(idCilindros)
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
				url: 'ajax/ajaxCilindros.php',
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
						    window.location = "cilindros"
						  }
						})
					}
				}

			})
		  }
		})
	})
	// PREVISUALIZAR IMAGENES
	$("#imagenCilindros").change(previsualizarImg)
	$("#imagenCilindrosEditar").change(previsualizarImg)
	function previsualizarImg(e) {
		var contenedor = e.target.parentNode
		var identificador = contenedor.classList[1]
		imgSlider = this.files[0];
		if ( imgSlider["type"] != "image/jpeg" && imgSlider["type"] != "image/png" && imgSlider["type"] != "video/mp4") {
				$("#imagenCilindros").val("")
				$("#imagenCilindrosEditar").val("")
			Swal.fire(
					  'No es un archivo valido',
					      'Debe subir archivos formato JPEG , PNG',
					      'error'
				)	
			}
		if ( imgSlider["type"] > 100000) {
				$("#imagenCilindros").val("")
			

Swal.fire(
					  'Error al subir la imagen',
					      'La imagen debe pesar MAX 2MB',
					      'error'
				)
			}
			else {
				$("#imgCilindros").css("display", "block")
				var datosImagen = new FileReader;
		  		datosImagen.readAsDataURL(imgSlider);
		  		$(datosImagen).on("load", function(event){
		  			var rutaImagen = event.target.result;
		  			$("." + identificador +" #imgCilindros").attr("src", rutaImagen);
		  		})
			}
		}


})