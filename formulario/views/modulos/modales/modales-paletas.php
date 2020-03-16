
  <script src= 
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"> 
    </script> 

<div class="modal fade" id="modal-insertar-paletas"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insertar Nueva Paleta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-nuevo-paletas">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Tipo Paletas :</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Tipo Paletas" name="TipoPaletas">
            </div>
            <label class="col-sm-2 col-form-label" id="largo">Medida Paleta :</label>
            <div class="col-sm-4">
              <input type="number" class="form-control" placeholder="Ancho Milimetros" name="MedidaPaletas">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Medida Bujes :</label>
            <div class="col-sm-2" style="width: 50%; padding-right: 1px;">
              <input type="text" class="form-control"  placeholder="D.E.C.S" name="Decs"> 
      <a  style="font-size:10px;color:white;margin-top: 18px;background:#a5a5a5;padding: 7px;border-radius: .5em;" data-toggle="popover" data-trigger="hover"
                title="1 .- (DECS)Diametro exterior Cuerpo superior , 2.- (DICS)Diametro Inferior Cuerpo superior -     3.- (ACS)Altura Cuerpo superior  - 4.-(ACI) Altura Cuerpo inferior, 5.- (DICI)Diametro Interior Cuerpo inferior" data-content=" Ejemplo : 30 x 28,5 x 20 x 15 x 26"> 
            Ejemplo 
        </a> 
            </div>
               <h3>x</h3><div class="col-sm-2"style="width: 30%;padding-left: 0px;padding-right: 1px; " >
              <input type="text" class="form-control" placeholder="D.I.C.S" name="Dics"> 
  
            </div><h3>x</h3>
               <div class="col-sm-2"style="width: 30%;padding-left: 0px;padding-right: 1px; " >
              <input type="text" class="form-control" placeholder="A.C.S" name="Acs"> 
            </div>
             <h3>x</h3><div class="col-sm-1" style="padding-left: 0px;width: 50%;padding-right: 1px;">
              <input type="text" class="form-control"  placeholder="A.C.I" name="Aci">
            </div>
             <h3>x</h3><div class="col-sm-2"style="padding-left:0px;">
              <input type="text" class="form-control" style="width: 100%;"  placeholder="D.I.C.I" name="Dici">
            </div>   
          </div>
           <div class="form-group row">
             <label class="col-sm-2 col-form-label" id="largo" style="width: 100%;">Medida Housing :</label>
           <div class="col-sm-2" style="width: 50%; padding-right: 1px;">
              <input type="text" class="form-control"  placeholder="Altura" name="Altura"> 
      <a  style="font-size:10px;color:white;margin-top: 18px;background:#a5a5a5;padding: 7px;border-radius: .5em;" data-toggle="popover" data-trigger="hover"
                title="1 .- Altura , 2.- Ancho -     3.- Fondo  - 4.- (D.Perforación)Diametro Perforación 5.-(P. Anclaje) Perno Anclaje" data-content=" Ejemplo : 100 x 70 x 50 x 29 x M8"> 
            Ejemplo 
        </a> 
            </div>
               <h3>x</h3><div class="col-sm-1"style="width: 30%;padding-left: 0px;padding-right: 1px; " >
              <input type="text" class="form-control" placeholder="Ancho" name="Ancho"> 
  
            </div><h3>x</h3>
               <div class="col-sm-2"style="width: 30%;padding-left: 0px;padding-right: 1px; " >
              <input type="text" class="form-control" placeholder="Fondo" name="Fondo"> 
  
            </div>
             <h3>x</h3><div class="col-sm-2" style="padding-left: 0px;width: 50%;padding-right: 1px;">
              <input type="text" class="form-control"  placeholder="D.Perfo" name="Perfo">
            </div>
             <h3>x</h3><div class="col-sm-2"style="padding-left:0px;">
              <input type="text" class="form-control" style="width: 100%;"  placeholder="P. Anclaje" name="Anclaje">
            </div>
           
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Medida Eje :</label>
            <div class="col-sm-2"style="padding-right: 0px;">
              <input type="text" class="form-control" placeholder="Altura" name="AlturaEje">
            </div>
              <h3>x</h3><div class="col-sm-2" style="padding-left: 0px;">
              <input type="text" class="form-control" placeholder="Diametro" name="DiametroEje">
            </div>
        <label class="col-sm-2 col-form-label" id="largo"> Medida Brazo Leva </label>
            <div class="col-sm-3">
              <input type="text" class="form-control" placeholder="Medida Brazo Leva" name="MedidaBrazoLeva">
            </div>
          </div>
           <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Cilindrado :</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Clilindado " name="Clilindrado">
            </div> 
            <label class="col-sm-2 col-form-label" id="largo">Racors :</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Racors" name="Racors">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagen2" name="imagenPaletas" required>
              <img src="" id="imagenPaletas" alt="" class="thumbnail" width="200" style="display: none">
            </div>
          </div>
          <input type="hidden" name="tipoOperacion" value="insertarpaletas">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar Datos</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- EDITAR SLIDER -->
<div class="modal fade" id="modal-editar-paletas"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 800px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Paletas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formu-editar-paletas">
            <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Tipo Paletas :</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Tipo Paletas" name="TipoPaletas">
            </div>
            <label class="col-sm-2 col-form-label" id="largo">Medida Paleta :</label>
            <div class="col-sm-4">
              <input type="number" class="form-control" placeholder="Ancho Milimetros" name="MedidaPaletas">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Medida Bujes :</label>
            <div class="col-sm-2" style="width: 50%; padding-right: 1px;">
              <input type="text" class="form-control"  placeholder="D.E.C.S" name="Decs"> 
      <a  style="font-size:10px;color:white;margin-top: 18px;background:#a5a5a5;padding: 7px;border-radius: .5em;" data-toggle="popover" data-trigger="hover"
                title="1 .- (DECS)Diametro exterior Cuerpo superior , 2.- (DICS)Diametro Inferior Cuerpo superior -     3.- (ACS)Altura Cuerpo superior  - 4.-(ACI) Altura Cuerpo inferior, 5.- (DICI)Diametro Interior Cuerpo inferior" data-content=" Ejemplo : 30 x 28,5 x 20 x 15 x 26"> 
            Ejemplo 
        </a> 
            </div>
               <h3>x</h3><div class="col-sm-2"style="width: 30%;padding-left: 0px;padding-right: 1px; " >
              <input type="text" class="form-control" placeholder="D.I.C.S" name="Dics"> 
  
            </div><h3>x</h3>
               <div class="col-sm-2"style="width: 30%;padding-left: 0px;padding-right: 1px; " >
              <input type="text" class="form-control" placeholder="A.C.S" name="Acs"> 
            </div>
             <h3>x</h3><div class="col-sm-1" style="padding-left: 0px;width: 50%;padding-right: 1px;">
              <input type="text" class="form-control"  placeholder="A.C.I" name="Aci">
            </div>
             <h3>x</h3><div class="col-sm-2"style="padding-left:0px;">
              <input type="text" class="form-control" style="width: 100%;"  placeholder="D.I.C.I" name="Dici">
            </div>   
          </div>
           <div class="form-group row">
             <label class="col-sm-2 col-form-label" id="largo" style="width: 100%;">Medida Housing :</label>
           <div class="col-sm-2" style="width: 50%; padding-right: 1px;">
              <input type="text" class="form-control"  placeholder="Altura" name="Altura"> 
      <a  style="font-size:10px;color:white;margin-top: 18px;background:#a5a5a5;padding: 7px;border-radius: .5em;" data-toggle="popover" data-trigger="hover"
                title="1 .- Altura , 2.- Ancho -     3.- Fondo  - 4.- (D.Perforación)Diametro Perforación 5.-(P. Anclaje) Perno Anclaje" data-content=" Ejemplo : 100 x 70 x 50 x 29 x M8"> 
            Ejemplo 
        </a> 
            </div>
               <h3>x</h3><div class="col-sm-1"style="width: 30%;padding-left: 0px;padding-right: 1px; " >
              <input type="text" class="form-control" placeholder="Ancho" name="Ancho"> 
  
            </div><h3>x</h3>
               <div class="col-sm-2"style="width: 30%;padding-left: 0px;padding-right: 1px; " >
              <input type="text" class="form-control" placeholder="Fondo" name="Fondo"> 
  
            </div>
             <h3>x</h3><div class="col-sm-2" style="padding-left: 0px;width: 50%;padding-right: 1px;">
              <input type="text" class="form-control"  placeholder="D.Perfo" name="Perfo">
            </div>
             <h3>x</h3><div class="col-sm-2"style="padding-left:0px;">
              <input type="text" class="form-control" style="width: 100%;"  placeholder="P. Anclaje" name="Anclaje">
            </div>
           
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Medida Eje :</label>
            <div class="col-sm-2"style="padding-right: 0px;">
              <input type="text" class="form-control" placeholder="Altura" name="AlturaEje">
            </div>
              <h3>x</h3><div class="col-sm-2" style="padding-left: 0px;">
              <input type="text" class="form-control" placeholder="Diametro" name="DiametroEje">
            </div>
        <label class="col-sm-2 col-form-label" id="largo"> Medida Brazo Leva </label>
            <div class="col-sm-3">
              <input type="text" class="form-control" placeholder="Medida Brazo Leva" name="MedidaBrazoLeva">
            </div>
          </div>
           <div class="form-group row">
            <label class="col-sm-2 col-form-label" id="largo">Cilindrado :</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Clilindado " name="Clilindrado">
            </div> 
            <label class="col-sm-2 col-form-label" id="largo">Racors :</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" placeholder="Racors" name="Racors">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Imagen</label>
            <div class="col-sm-10 conteNuevaImagen">
              <input type="file" class="form-control"  id="imagenEditarPaletas" name="imagenPaletas" required>
              <img src="" id="imagenPaletas" alt="" class="thumbnail" width="200" >
            </div>
          </div>
            <input type="hidden" name="rutaActual">
          <input type="hidden" name="tipoOperacion" value="actualizarPaletas">
          <input type="hidden" name="id_paletas">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>
  <script> 
        $(document).ready(function() { 
            $('[data-toggle="popover"]').popover();  
        }); 
    </script>