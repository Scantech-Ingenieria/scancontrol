
$(document).ready(function(){
	$("#formu-nuevo-tableroneumatico").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxTableroneumatico.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
				if (respuesta == "ok") {

		Swal.fire(
  'Excelente!',
  'Tablero neumatico registrado con exito!',
  'success'
).then((result) => {
					  if (result.value) {
					    window.location = "tableroneumatico"
					  }
					})
				}
			}
		})
	})

	$("#formu-editar-tableroneumatico").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxTableroneumatico.php',
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
					    window.location = "tableroneumatico"
					  }
					})
				}
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEditarTableroneumatico", function(){
		var idTableroneumatico = $(this).attr("idTableroneumatico")
		var datos = new FormData()
		datos.append("id_tableroneumatico", idTableroneumatico)
		datos.append("tipoOperacion", "editarTableroneumatico")
		$.ajax({
			url: 'ajax/ajaxTableroneumatico.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				console.log(valor.id_tableroneumatico)
				console.log(valor.imagen)
$('#formu-editar-tableroneumatico input[name="id_tableroneumatico"]').val(valor.id_tableroneumatico)
$('#formu-editar-tableroneumatico input[name="Altura"]').val(valor.altura)
$('#formu-editar-tableroneumatico input[name="Fondo"]').val(valor.fondo)
$('#formu-editar-tableroneumatico input[name="Ancho"]').val(valor.ancho)
$('#formu-editar-tableroneumatico #imgTableroNeumatico').attr("src", valor.imagen)
$('#formu-editar-tableroneumatico input[name="rutaActual"]').val(valor.imagen)
			}
		})
	})

	

	$("body #example").on("click", ".btnEliminarTableroneumatico", function(){
		var idTableroneumatico = $(this).attr("idTableroneumatico")
		var rutaImagen = $(this).attr("rutaImagen")
		var datos = new FormData()
		datos.append("id_tableroneumatico", idTableroneumatico)
		datos.append("tipoOperacion", "eliminarTableroneumatico")
		datos.append("rutaImagen", rutaImagen)
	console.log(idTableroneumatico)
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
				url: 'ajax/ajaxTableroneumatico.php',
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
						    window.location = "tableroneumatico"
						  }
						})
					}
				}
			})
		  }
		})
	})

		$("body #modal-editar-tableroneumatico").on("click", ".Eliminarneumatico_automatico", function(){
		var idAutomatico = $(this).attr("idAutomatico")

		var datos = new FormData()
		datos.append("id_automatico", idAutomatico)
		datos.append("tipoOperacion", "eliminarTautomatico")
	console.log(idAutomatico)
		Swal.fire({
		    width: 400,
		  padding:'2em',
		  text: "Estas seguro de eliminar!",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Si, Elimina!'
		}).then((result) => {
		  if (result.value) {
		  	$.ajax({
				url: 'ajax/ajaxTableroneumatico.php',
				type: 'POST',
				data: datos,
				processData: false,
				contentType: false,
				success: function(respuesta) {
					if ( respuesta == "ok") {
						Swal.fire(
					      'Eliminado!',
					      'Elemento Eliminado.',
					      'success'
					
					    ).then((result) => {
						  if (result.value) {
						  $("#example").load(" #example");
				
				var valor = $('.btnEditarTableroneumatico').attr("idtableroneumatico",10).click();  
		 
console.log(valor)

						  }
						})
					}
				}
			})
		  }
		})
	})
$("body #modal-editar-tableroneumatico").on("click", ".Eliminarneumatico_fuente", function(){
		var idFuente = $(this).attr("idFuente")
		var idtablero = $(this).attr("idtablero")

		var datos = new FormData()
		datos.append("id_fuente", idFuente)
		datos.append("tipoOperacion", "eliminarTfuente")
	console.log(idFuente)
		Swal.fire({
		    width: 400,
		  padding:'2em',
		  text: "Estas seguro de eliminar!",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Si, Elimina!'
		}).then((result) => {
		  if (result.value) {
		  	$.ajax({
				url: 'ajax/ajaxTableroneumatico.php',
				type: 'POST',
				data: datos,
				processData: false,
				contentType: false,
				success: function(respuesta) {
					if ( respuesta == "ok") {
						Swal.fire(
					      'Eliminado!',
					      'Elemento Eliminado.',
					      'success'
					
					    ).then((result) => {
						  if (result.value) {
						  $("#example").load(" #example");
				
				var valor = $('.btnEditarTableroneumatico').attr("idtableroneumatico",10).click();  
		 
console.log(valor)

						  }
						})
					}
				}
			})
		  }
		})
	})
$("body #modal-editar-tableroneumatico").on("click", ".Eliminarneumatico_vdf", function(){
		var idManifold = $(this).attr("idManifold")


		var datos = new FormData()
		datos.append("id_manifold", idManifold)
		datos.append("tipoOperacion", "eliminarTvdf")
	console.log(idManifold)
		Swal.fire({
		    width: 400,
		  padding:'2em',
		  text: "Estas seguro de eliminar!",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Si, Elimina!'
		}).then((result) => {
		  if (result.value) {
		  	$.ajax({
				url: 'ajax/ajaxTableroneumatico.php',
				type: 'POST',
				data: datos,
				processData: false,
				contentType: false,
				success: function(respuesta) {
					if ( respuesta == "ok") {
						Swal.fire(
					      'Eliminado!',
					      'Elemento Eliminado.',
					      'success'
					
					    ).then((result) => {
						  if (result.value) {
						  $("#example").load(" #example");
				
				var valor = $('.btnEditarTableroneumatico').attr("idtableroneumatico",10).click();  
		 
console.log(valor)

						  }
						})
					}
				}
			})
		  }
		})
	})
$("body #modal-editar-tableroneumatico").on("click", ".Eliminarneumatico_plc", function(){
		var idPlc = $(this).attr("idPlc")


		var datos = new FormData()
		datos.append("id_plc", idPlc)
		datos.append("tipoOperacion", "eliminarTplc")
	console.log(idPlc)
		Swal.fire({
		    width: 400,
		  padding:'2em',
		  text: "Estas seguro de eliminar!",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Si, Elimina!'
		}).then((result) => {
		  if (result.value) {
		  	$.ajax({
				url: 'ajax/ajaxTableroneumatico.php',
				type: 'POST',
				data: datos,
				processData: false,
				contentType: false,
				success: function(respuesta) {
					if ( respuesta == "ok") {
						Swal.fire(
					      'Eliminado!',
					      'Elemento Eliminado.',
					      'success'
					
					    ).then((result) => {
						  if (result.value) {
						  $("#example").load(" #example");
				
				var valor = $('.btnEditarTableroneumatico').attr("idtableroneumatico",10).click();  
		 
console.log(valor)

						  }
						})
					}
				}
			})
		  }
		})
	})

	// PREVISUALIZAR IMAGENES
	$("#imagenTableroneumatico").change(previsualizarImg)
	$("#imagenTableroneumaticoEditar").change(previsualizarImg)
	function previsualizarImg(e) {
		var contenedor = e.target.parentNode
		var identificador = contenedor.classList[1]
		imgSlider = this.files[0];
		if ( imgSlider["type"] != "image/jpeg" && imgSlider["type"] != "image/png" && imgSlider["type"] != "video/mp4") {
				$("#imagenTableroneumatico").val("")
				$("#imagenTableroneumaticoEditar").val("")
			Swal.fire(
					  'No es un archivo valido',
					      'Debe subir archivos formato JPEG , PNG',
					      'error'
				)	
			}
		if ( imgSlider["type"] > 100000) {
				$("#imagenTableroneumatico").val("")
			
Swal.fire(
					  'Error al subir la imagen',
					      'La imagen debe pesar MAX 2MB',
					      'error'
				)
			}
			else {
				$("#imgTableroNeumatico").css("display", "block")
				var datosImagen = new FileReader;
		  		datosImagen.readAsDataURL(imgSlider);
		  		$(datosImagen).on("load", function(event){
		  			var rutaImagen = event.target.result;
		  			$("." + identificador +" #imgTableroNeumatico").attr("src", rutaImagen);
		  		})
			}
		}



})

