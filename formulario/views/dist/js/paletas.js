
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
	$('#formu-editar-paletas input[name="Decs"]').val(valor.decs)
	$('#formu-editar-paletas input[name="Dics"]').val(valor.dics)
	$('#formu-editar-paletas input[name="Acs"]').val(valor.acs)
	$('#formu-editar-paletas input[name="Aci"]').val(valor.aci)
	$('#formu-editar-paletas input[name="Dici"]').val(valor.dici)
	$('#formu-editar-paletas input[name="Altura"]').val(valor.altura)
	$('#formu-editar-paletas input[name="Ancho"]').val(valor.ancho)
	$('#formu-editar-paletas input[name="Fondo"]').val(valor.fondo)
	$('#formu-editar-paletas input[name="Perfo"]').val(valor.perfo)
	$('#formu-editar-paletas input[name="Anclaje"]').val(valor.anclaje)
	$('#formu-editar-paletas input[name="AlturaEje"]').val(valor.alturaeje)
	$('#formu-editar-paletas input[name="DiametroEje"]').val(valor.diametroeje)
	$('#formu-editar-paletas input[name="MedidaBrazoLeva"]').val(valor.medidas_brazo_leva)
	$('#formu-editar-paletas input[name="Clilindrado"]').val(valor.cilindrado)
	$('#formu-editar-paletas input[name="Racors"]').val(valor.racors)
	$('#formu-editar-paletas input[name="Orientacion"]').val(valor.orientacion)
	$('#formu-editar-paletas input[name="Precio"]').val(valor.precio)
	$('#formu-editar-paletas #imagenPaletas').attr("src", valor.imagen)
	$('#formu-editar-paletas input[name="rutaActual"]').val(valor.imagen)

			}
		})
	})
	$("body #mi_lista").on("click", ".btnEliminarPaletas", function(){
		var idPaletas = $(this).attr("idPaletas")
		var rutaImagen = $(this).attr("rutaImagen")

		var datos = new FormData()
		datos.append("id_paletas", idPaletas)
		datos.append("tipoOperacion", "eliminarPaletas")
		datos.append("rutaImagen", rutaImagen)
		
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
	$("#imagen2").change(previsualizarImg)
	$("#imagenEditarPaletas").change(previsualizarImg)
	function previsualizarImg(e) {
		var contenedor = e.target.parentNode
		var identificador = contenedor.classList[1]
		imgSlider = this.files[0];
		if ( imgSlider["type"] != "image/jpeg" && imgSlider["type"] != "image/png" && imgSlider["type"] != "video/mp4") {
				$("#imagen2").val("")
				$("#imagenEditarPaletas").val("")

				Swal.fire(
					  'No es un archivo valido',
					      'Debe subir archivos formato JPEG , PNG',
					      'error'
				)
			}
		if ( imgSlider["type"] > 100000) {
				$("#imagen2").val("")

		Swal.fire(
					  'Error al subir la imagen',
					      'La imagen debe pesar MAX 2MB',
					      'error'
				)
			}
			else {
				$("#imagenPaletas").css("display", "block")
				var datosImagen = new FileReader;
		  		datosImagen.readAsDataURL(imgSlider);
		  		$(datosImagen).on("load", function(event){
		  			var rutaImagen = event.target.result;
		  			$("." + identificador +" #imagenPaletas").attr("src", rutaImagen);
		  		})
			}
		}
})