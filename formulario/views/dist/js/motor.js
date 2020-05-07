
$(document).ready(function(){
	$("#formu-nuevo-motor").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxMotor.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
				if (respuesta == "ok") {

		Swal.fire(
  'Excelente!',
  'Motor registrada con exito!',
  'success'
).then((result) => {
					  if (result.value) {
					    window.location = "motor"
					  }
					})
				}
			}
		})
	})
	$("#formu-editar-motor").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxMotor.php',
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
					    window.location = "motor"
					  }
					})
				}
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEditarMotor", function(){
		var idMotor = $(this).attr("idMotor")
		var datos = new FormData()
		datos.append("id_motor", idMotor)
		datos.append("tipoOperacion", "editarMotor")
		$.ajax({
			url: 'ajax/ajaxMotor.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				console.log(valor.id_motor)
				console.log(valor.imagen)
				$('#formu-editar-motor input[name="id_motor"]').val(valor.id_motor)
				$('#formu-editar-motor input[name="Rpm"]').val(valor.rpm)
				$('#formu-editar-motor input[name="Marca"]').val(valor.marca)
				$('#formu-editar-motor input[name="Usillo"]').val(valor.usillo)
				$('#formu-editar-motor input[name="Ancho"]').val(valor.ancho)
				$('#formu-editar-motor input[name="Capacidad"]').val(valor.capacidad)
				$('#formu-editar-motor input[name="Precio"]').val(valor.precio)		
				$('#formu-editar-motor #imgMotor').attr("src", valor.imagen)
				$('#formu-editar-motor input[name="rutaActual"]').val(valor.imagen)
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEliminarMotor", function(){
		var idMotor = $(this).attr("idMotor")
		var rutaImagen = $(this).attr("rutaImagen")
		var datos = new FormData()
		datos.append("id_motor", idMotor)
		datos.append("tipoOperacion", "eliminarMotor")
		datos.append("rutaImagen", rutaImagen)
	console.log(idMotor)
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
				url: 'ajax/ajaxMotor.php',
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
						    window.location = "motor"
						  }
						})
					}
				}

			})
		  }
		})
	})
	// PREVISUALIZAR IMAGENES
	$("#imagenMotor").change(previsualizarImg)
	$("#imagenMotorEditar").change(previsualizarImg)
	function previsualizarImg(e) {
		var contenedor = e.target.parentNode
		var identificador = contenedor.classList[1]
		imgSlider = this.files[0];
		if ( imgSlider["type"] != "image/jpeg" && imgSlider["type"] != "image/png" && imgSlider["type"] != "video/mp4") {
				$("#imagenMotor").val("")
				$("#imagenMotorEditar").val("")
			Swal.fire(
					  'No es un archivo valido',
					      'Debe subir archivos formato JPEG , PNG',
					      'error'
				)	
			}
		if ( imgSlider["type"] > 100000) {
				$("#imagenMotor").val("")
			

Swal.fire(
					  'Error al subir la imagen',
					      'La imagen debe pesar MAX 2MB',
					      'error'
				)
			}
			else {
				$("#imgMotor").css("display", "block")
				var datosImagen = new FileReader;
		  		datosImagen.readAsDataURL(imgSlider);
		  		$(datosImagen).on("load", function(event){
		  			var rutaImagen = event.target.result;
		  			$("." + identificador +" #imgMotor").attr("src", rutaImagen);
		  		})
			}
		}


})