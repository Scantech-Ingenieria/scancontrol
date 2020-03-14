
$(document).ready(function(){
	$("#formu-nuevo-banda").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxBandas.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
				if (respuesta == "ok") {

		Swal.fire(
  'Excelente!',
  'Banda registrada con exito!',
  'success'
).then((result) => {
					  if (result.value) {
					    window.location = "bandas"
					  }
					})
				}
			}
		})
	})
	$("#formu-editar-banda").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxBandas.php',
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
					    window.location = "bandas"
					  }
					})
				}
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEditarBanda", function(){
		var idBanda = $(this).attr("idBanda")
		var datos = new FormData()
		datos.append("id_banda", idBanda)
		datos.append("tipoOperacion", "editarBanda")
		$.ajax({
			url: 'ajax/ajaxBandas.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				console.log(valor.id_banda)
				console.log(valor.imagen)
				$('#formu-editar-banda input[name="id_banda"]').val(valor.id_banda)
				$('#formu-editar-banda input[name="NumeroSerie"]').val(valor.numeroserie)
				$('#formu-editar-banda textarea[name="DescripcionBanda"]').val(valor.descripcion)
				$('#formu-editar-banda input[name="Ancho"]').val(valor.ancho)
				$('#formu-editar-banda input[name="Material"]').val(valor.material)
				$('#formu-editar-banda #imagenSlider').attr("src", valor.imagen)
				$('#formu-editar-banda input[name="rutaActual"]').val(valor.imagen)
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEliminarBanda", function(){
		var idBanda = $(this).attr("idBanda")
		var rutaImagen = $(this).attr("rutaImagen")
		var datos = new FormData()
		datos.append("id_banda", idBanda)
		datos.append("tipoOperacion", "eliminarBanda")
		datos.append("rutaImagen", rutaImagen)
	console.log(idBanda)
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
				url: 'ajax/ajaxBandas.php',
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
						    window.location = "bandas"
						  }
						})
					}
				}

			})
		  }
		})
	})
	// PREVISUALIZAR IMAGENES
	$("#imagen1").change(previsualizarImg)
	$("#imagenEditar1").change(previsualizarImg)
	function previsualizarImg(e) {
		var contenedor = e.target.parentNode
		var identificador = contenedor.classList[1]
		imgSlider = this.files[0];
		if ( imgSlider["type"] != "image/jpeg" && imgSlider["type"] != "image/png" && imgSlider["type"] != "video/mp4") {
				$("#imagen1").val("")
				$("#imagenEditar1").val("")
			Swal.fire(
					  'No es un archivo valido',
					      'Debe subir archivos formato JPEG , PNG',
					      'error'
				)	
			}
		if ( imgSlider["type"] > 100000) {
				$("#imagenSlider").val("")
			

Swal.fire(
					  'Error al subir la imagen',
					      'La imagen debe pesar MAX 2MB',
					      'error'
				)
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