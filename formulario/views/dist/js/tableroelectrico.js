
$(document).ready(function(){
	$("#formu-nuevo-tableroelectrico").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxTableroelectricos.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				console.log(respuesta)
				if (respuesta == "ok") {

		Swal.fire(
  'Excelente!',
  'Tableroelectrico registrada con exito!',
  'success'
).then((result) => {
					  if (result.value) {
					    window.location = "tableroelectricos"
					  }
					})
				}
			}
		})
	})
	$("#formu-editar-tableroelectrico").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxTableroelectricos.php',
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
					    window.location = "tableroelectricos"
					  }
					})
				}
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEditarTableroelectrico", function(){
		var idTableroelectrico = $(this).attr("idTableroelectrico")
		var datos = new FormData()
		datos.append("id_tableroelectrico", idTableroelectrico)
		datos.append("tipoOperacion", "editarTableroelectrico")
		$.ajax({
			url: 'ajax/ajaxTableroelectricos.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
				console.log(valor.id_tableroelectrico)
				console.log(valor.imagen)
$('#formu-editar-tableroelectrico input[name="id_tableroelectrico"]').val(valor.id_tableroelectrico)
$('#formu-editar-tableroelectrico input[name="NumeroSerie"]').val(valor.numeroserie)
$('#formu-editar-tableroelectrico input[name="Superficie"]').val(valor.superficie)
$('#formu-editar-tableroelectrico input[name="Paso"]').val(valor.paso)
$('#formu-editar-tableroelectrico textarea[name="DescripcionTableroelectrico"]').val(valor.descripcion)
$('#formu-editar-tableroelectrico input[name="Ancho"]').val(valor.ancho)
$('#formu-editar-tableroelectrico input[name="Material"]').val(valor.material)
$('#formu-editar-tableroelectrico #imagenSlider').attr("src", valor.imagen)
$('#formu-editar-tableroelectrico input[name="rutaActual"]').val(valor.imagen)
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEliminarTableroelectrico", function(){
		var idTableroelectrico = $(this).attr("idTableroelectrico")
		var rutaImagen = $(this).attr("rutaImagen")
		var datos = new FormData()
		datos.append("id_tableroelectrico", idTableroelectrico)
		datos.append("tipoOperacion", "eliminarTableroelectrico")
		datos.append("rutaImagen", rutaImagen)
	console.log(idTableroelectrico)
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
				url: 'ajax/ajaxTableroelectricos.php',
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
						    window.location = "tableroelectricos"
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

var i=1; 
    $('#agregar').click(function(){
$.ajax({
			url: 'ajax/ajaxAutomatico.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
			}
			)}
        i++;
 $('#dinami').append('<div id="row'+i+'" class="form-group row" style="margin-bottom:0px;"> <label class="col-2 col-sm-2 col-form-label" id="largo">Automaticos Cantidad:</label><div class="col-4 col-sm-4"><input type="text" class="form-control" placeholder="Cantidad" name="Cantidadautomaticos[]"></div><label class="col-1 col-sm-1 col-form-label" id="largo">Tipo</label><div class="col-3 col-sm-4"> <select class="form-control" name="Tipo[]" ><option selected disabled>Seleccione tipo automatico</option></select></div><div class="col-1 col-sm-1"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove" >X</button></div></div>');
    });
    $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id"); 
        $('#row'+button_id+'').remove();
    });
})