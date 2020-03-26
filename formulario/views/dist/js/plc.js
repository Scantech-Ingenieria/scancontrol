
$(document).ready(function(){
	$("#formu-nuevo-plc").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxPlc.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
				if (respuesta == "ok") {

		Swal.fire(
  'Excelente!',
  'Plc registrada con exito!',
  'success'
).then((result) => {
					  if (result.value) {
					    window.location = "plc"
					  }
					})
				}
			}
		})
	})
	$("#formu-editar-plc").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxPlc.php',
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
					    window.location = "plc"
					  }
					})
				}
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEditarPlc", function(){
		var idPlc = $(this).attr("idPlc")
		var datos = new FormData()
		datos.append("id_plc", idPlc)
		datos.append("tipoOperacion", "editarPlc")
		$.ajax({
			url: 'ajax/ajaxPlc.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				console.log(valor.id_plc)
				console.log(valor.imagen)
				$('#formu-editar-plc input[name="id_plc"]').val(valor.id_plc)
				$('#formu-editar-plc input[name="Modelo"]').val(valor.modelo)
				$('#formu-editar-plc textarea[name="Descripcion"]').val(valor.descripcion)
				$('#formu-editar-plc #imgPlc').attr("src", valor.imagen)
				$('#formu-editar-plc input[name="rutaActual"]').val(valor.imagen)
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEliminarPlc", function(){
		var idPlc = $(this).attr("idPlc")
		var rutaImagen = $(this).attr("rutaImagen")
		var datos = new FormData()
		datos.append("id_plc", idPlc)
		datos.append("tipoOperacion", "eliminarPlc")
		datos.append("rutaImagen", rutaImagen)
	console.log(idPlc)
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
				url: 'ajax/ajaxPlc.php',
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
						    window.location = "plc"
						  }
						})
					}
				}

			})
		  }
		})
	})
	// PREVISUALIZAR IMAGENES
	$("#imagenPlc").change(previsualizarImg)
	$("#imagenPlcEditar").change(previsualizarImg)
	function previsualizarImg(e) {
		var contenedor = e.target.parentNode
		var identificador = contenedor.classList[1]
		imgSlider = this.files[0];
		if ( imgSlider["type"] != "image/jpeg" && imgSlider["type"] != "image/png" && imgSlider["type"] != "video/mp4") {
				$("#imagenPlc").val("")
				$("#imagenPlcEditar").val("")
			Swal.fire(
					  'No es un archivo valido',
					      'Debe subir archivos formato JPEG , PNG',
					      'error'
				)	
			}
		if ( imgSlider["type"] > 100000) {
				$("#imagenPlc").val("")
			

Swal.fire(
					  'Error al subir la imagen',
					      'La imagen debe pesar MAX 2MB',
					      'error'
				)
			}
			else {
				$("#imgPlc").css("display", "block")
				var datosImagen = new FileReader;
		  		datosImagen.readAsDataURL(imgSlider);
		  		$(datosImagen).on("load", function(event){
		  			var rutaImagen = event.target.result;
		  			$("." + identificador +" #imgPlc").attr("src", rutaImagen);
		  		})
			}
		}


})