
$(document).ready(function(){
	$("#formu-nuevo-fuentepoder").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxFuentePoder.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
				if (respuesta == "ok") {

		Swal.fire(
  'Excelente!',
  'Fuente de Poder registrada con exito!',
  'success'
).then((result) => {
					  if (result.value) {
					    window.location = "fuentepoder"
					  }
					})
				}
			}
		})
	})
	$("#formu-editar-fuentepoder").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxFuentePoder.php',
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
					    window.location = "fuentepoder"
					  }
					})
				}
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEditarFuentePoder", function(){
		var idFuentePoder = $(this).attr("idFuentePoder")
		var datos = new FormData()
		datos.append("id_fuentepoder", idFuentePoder)
		datos.append("tipoOperacion", "editarFuentePoder")
		$.ajax({
			url: 'ajax/ajaxFuentePoder.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				console.log(valor.id_fuentepoder)
				console.log(valor.imagen)
$('#formu-editar-fuentepoder input[name="id_fuentepoder"]').val(valor.id_fuentepoder)
$('#formu-editar-fuentepoder input[name="Marca"]').val(valor.marca)
$('#formu-editar-fuentepoder input[name="Amperaje"]').val(valor.amperaje)
$('#formu-editar-fuentepoder input[name="Corriente"]').val(valor.corriente)
$('#formu-editar-fuentepoder input[name="Precio"]').val(valor.precio)
$('#formu-editar-fuentepoder #imgFuentePoder').attr("src", valor.imagen)
$('#formu-editar-fuentepoder input[name="rutaActual"]').val(valor.imagen)
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEliminarFuentePoder", function(){
		var idFuentePoder = $(this).attr("idFuentePoder")
		var rutaImagen = $(this).attr("rutaImagen")
		var datos = new FormData()
		datos.append("id_fuentepoder", idFuentePoder)
		datos.append("tipoOperacion", "eliminarFuentePoder")
		datos.append("rutaImagen", rutaImagen)
	console.log(idFuentePoder)
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
				url: 'ajax/ajaxFuentePoder.php',
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
						    window.location = "fuentepoder"
						  }
						})
					}
				}

			})
		  }
		})
	})
	// PREVISUALIZAR IMAGENES
	$("#imagenFuentePoder").change(previsualizarImg)
	$("#imagenFuentePoderEditar").change(previsualizarImg)
	function previsualizarImg(e) {
		var contenedor = e.target.parentNode
		var identificador = contenedor.classList[1]
		imgSlider = this.files[0];
		if ( imgSlider["type"] != "image/jpeg" && imgSlider["type"] != "image/png" && imgSlider["type"] != "video/mp4") {
				$("#imagenFuentePoder").val("")
				$("#imagenFuentePoderEditar").val("")
			Swal.fire(
					  'No es un archivo valido',
					      'Debe subir archivos formato JPEG , PNG',
					      'error'
				)	
			}
		if ( imgSlider["type"] > 100000) {
				$("#imagenFuentePoder").val("")
		
Swal.fire(
					  'Error al subir la imagen',
					      'La imagen debe pesar MAX 2MB',
					      'error'
				)
			}
			else {
				$("#imgFuentePoder").css("display", "block")
				var datosImagen = new FileReader;
		  		datosImagen.readAsDataURL(imgSlider);
		  		$(datosImagen).on("load", function(event){
		  			var rutaImagen = event.target.result;
		  			$("." + identificador +" #imgFuentePoder").attr("src", rutaImagen);
		  		})
			}
		}


})