$(document).ready(function(){

	$("#formu-editar-grader").submit(function (e) {
		e.preventDefault()
		var datos = new FormData($(this)[0])
		$.ajax({
			url: 'ajax/ajaxGrader.php',
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
					    window.location = "grader"
					  }
					})
				}
			}
		})
	})
	$("body #mi_lista").on("click", ".btnEditarGrader", function(){
		var idGrader = $(this).attr("idGrader")
		var datos = new FormData()
		datos.append("id_grader", idGrader)
		datos.append("tipoOperacion", "editarGrader")
		$.ajax({
			url: 'ajax/ajaxGrader.php',
			type: 'POST',
			data: datos,
			processData: false,
			contentType: false,
			success: function(respuesta) {
				var valor = JSON.parse(respuesta)
	
				$('#formu-editar-grader input[name="id_grader"]').val(valor.id_unidad_balanza)
				$('#formu-editar-grader input[name="Cliente"]').val(valor.Cliente)
				$('#formu-editar-grader input[name="Grader"]').val(valor.Grader)

if (valor.Calidad == null ){
				$('#formu-editar-grader input[name="Calidad"]').val("")
			$('#formu-editar-grader input[name="Calidad"]').prop('disabled', true);
			
}else{
			$('#formu-editar-grader input[name="Calidad"]').prop('disabled', false);

				$('#formu-editar-grader input[name="Calidad"]').val(valor.Calidad)
			      
}
if (valor.Alimentacion == null ){
							$('#formu-editar-grader input[name="Alimentacion"]').val("")
			$('#formu-editar-grader input[name="Alimentacion"]').prop('disabled', true);

}else{
			$('#formu-editar-grader input[name="Alimentacion"]').prop('disabled', false);

				$('#formu-editar-grader input[name="Alimentacion"]').val(valor.Alimentacion)
			      
}
if (valor.Aceleracion == null ){
							$('#formu-editar-grader input[name="Aceleracion"]').val("")
	
			$('#formu-editar-grader input[name="Aceleracion"]').prop('disabled', true);
}else{
			$('#formu-editar-grader input[name="Aceleracion"]').prop('disabled', false);

				$('#formu-editar-grader input[name="Aceleracion"]').val(valor.Aceleracion)
			      
}
if (valor.Pesaje == null ){
							$('#formu-editar-grader input[name="Pesaje"]').val("")
	
			$('#formu-editar-grader input[name="Pesaje"]').prop('disabled', true);
}else{
	$('#formu-editar-grader input[name="Pesaje"]').prop('disabled', false);
				$('#formu-editar-grader input[name="Pesaje"]').val(valor.Pesaje)
			      
}
if (valor.Descarga == null ){
							$('#formu-editar-grader input[name="Descarga"]').val("")
	
			$('#formu-editar-grader input[name="Descarga"]').prop('disabled', true);
}else{
	$('#formu-editar-grader input[name="Descarga"]').prop('disabled', false);
				$('#formu-editar-grader input[name="Descarga"]').val(valor.Descarga)
			      
}


	

			}
		})
	})

	$("body #mi_lista").on("click", ".btnEliminarGrader", function(){
		var idGrader = $(this).attr("idGrader")
				var rutaImagen = $(this).attr("rutaImagen")

		var datos = new FormData()
		datos.append("id_grader", idGrader)
		datos.append("rutaImagen", rutaImagen)

		datos.append("tipoOperacion", "eliminarGrader")

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
				url: 'ajax/ajaxGrader.php',
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
						    window.location = "grader"
						  }
						})
					}
				}
			})
		  }
		})
	})
})