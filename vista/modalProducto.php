
<!-- Modal -->
<div class="modal fade" id="insertarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo registro</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="frminsertpro" onsubmit="return insertarProductos()" method="post">
              <label>Codigo Producto</label>
              <input type="text" id="txtid" name="txtid" maxlength="7" class="form-control form-control-sm" required="">
              <label>Producto </label>
              <input type="text" id="txtproducto" name="txtproducto" maxlength="150" class="form-control form-control-sm" required="">
              <label>Cantidad</label>
              <input type="text" id="txtcliente" name="txtcliente" class="form-control form-control-sm" required="">
              <label>Precio</label>
              <input type="text" id="txtprecio" name="txtprecio" class="form-control form-control-sm" required="">
              <label>Fecha Vencimiento</label>
              <input type="date" id="txtfecha" name="txtfecha" maxlenth="9" class="form-control form-control-sm" required="">
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


