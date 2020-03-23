
$(document).ready(function(){
	$("#formu-nuevo-manifold").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxManifold.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
				if (respuesta == "ok") {

		Swal.fire(
  'Excelente!',
  'Manifold registrada con exito!',
  'success'
).then((result) => {
					  if (result.value) {
					    window.location = "manifold"
					  }
					})
				}
			}
		})
	})
	$("#formu-editar-manifold").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxManifold.php',
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
					    window.location = "manifold"
					  }
					})
				}
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEditarManifold", function(){
		var idManifold = $(this).attr("idManifold")
		var datos = new FormData()
		datos.append("id_manifold", idManifold)
		datos.append("tipoOperacion", "editarManifold")
		$.ajax({
			url: 'ajax/ajaxManifold.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				console.log(valor.id_manifold)
				console.log(valor.imagen)
				$('#formu-editar-manifold input[name="id_manifold"]').val(valor.id_manifold)
				$('#formu-editar-manifold input[name="Marca"]').val(valor.marca)
				$('#formu-editar-manifold input[name="MedidasSalidas"]').val(valor.medidas)
				$('#formu-editar-manifold input[name="Sockets"]').val(valor.sockets)
				$('#formu-editar-manifold #imgManifold').attr("src", valor.imagen)
				$('#formu-editar-manifold input[name="rutaActual"]').val(valor.imagen)
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEliminarManifold", function(){
		var idManifold = $(this).attr("idManifold")
		var rutaImagen = $(this).attr("rutaImagen")
		var datos = new FormData()
		datos.append("id_manifold", idManifold)
		datos.append("tipoOperacion", "eliminarManifold")
		datos.append("rutaImagen", rutaImagen)
	console.log(idManifold)
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
				url: 'ajax/ajaxManifold.php',
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
						    window.location = "manifold"
						  }
						})
					}
				}

			})
		  }
		})
	})
	// PREVISUALIZAR IMAGENES
	$("#imagenManifold").change(previsualizarImg)
	$("#imagenManifoldEditar").change(previsualizarImg)
	function previsualizarImg(e) {
		var contenedor = e.target.parentNode
		var identificador = contenedor.classList[1]
		imgSlider = this.files[0];
		if ( imgSlider["type"] != "image/jpeg" && imgSlider["type"] != "image/png" && imgSlider["type"] != "video/mp4") {
				$("#imagenManifold").val("")
				$("#imagenManifoldEditar").val("")
			Swal.fire(
					  'No es un archivo valido',
					      'Debe subir archivos formato JPEG , PNG',
					      'error'
				)	
			}
		if ( imgSlider["type"] > 100000) {
				$("#imagenManifold").val("")
			

Swal.fire(
					  'Error al subir la imagen',
					      'La imagen debe pesar MAX 2MB',
					      'error'
				)
			}
			else {
				$("#imgManifold").css("display", "block")
				var datosImagen = new FileReader;
		  		datosImagen.readAsDataURL(imgSlider);
		  		$(datosImagen).on("load", function(event){
		  			var rutaImagen = event.target.result;
		  			$("." + identificador +" #imgManifold").attr("src", rutaImagen);
		  		})
			}
		}


})