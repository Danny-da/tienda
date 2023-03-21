
<!-- Modal -->
<div class="modal fade" id="actualizarModalP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar  Registro</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="frm" onsubmit="return actualizarProductos()" method="post" enctype="multipart/form-data">
            <label>Producto</label>
            <input type="text" id="txtproducto" name="txtproducto" maxlength="150" class="form-control form-control-sm" required="">
            <label>Cantidad</label>
            <input type="text" id="txtcantidad" name="txtcantidad" maxlength="5" class="form-control form-control-sm" required="">
            <label>Precio</label>
            <input type="text" id="txtprecio" name="txtprecio" maxlength="10" class="form-control form-control-sm" required="">
            <label>Fecha vencimineto</label>
            <input type="date" id="txtfecha" name="txtfecha"  class="form-control form-control-sm" >
            
            <label>Marca</label>
            <select  name="cbomarca" id="cbomarca" class="form-control form-control-sm" required="">
            </select>
            
            <label>Linea Producto</label>
            <select name="cbolinea"  id="cbolinea" class="form-control form-control-sm" required="">
            </select>

            <label>Imgen</label>
            <input type="file" id="imagen" name="imagen" accept="image/*"  class="form-control form-control-sm" required="">
            
            <br>
            <input type="submit" value="Guardar" class="btn btn-primary">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>


