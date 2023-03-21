
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
          <form id="frminsert" onsubmit="return insertarclientes()" method="post">
              <label>tipo Documento</label>
              <select name="cbotipo" id="cbotipo" class="form-control-sm" required="">
                <option>Seleccione...</option>
                <option>DNI</option>
                 <option>RUC</option>
              </select>
              <hr>
              <label>Número Documento</label>
              <input type="text" id="txtnumdoc" name="txtnumdoc" maxlength="11" class="form-control form-control-sm" required="">
              <label>cliente</label>
              <input type="text" id="txtcliente" name="txtcliente" class="form-control form-control-sm" required="">
              <label>Dirección</label>
              <input type="text" id="txtdireccion" name="txtdireccion" class="form-control form-control-sm" required="">
              <label>Teléfono</label>
              <input type="tel" id="txtfono" name="txtfono" maxlenth="9" class="form-control form-control-sm" required="">
              <label>correo</label>
              <input type="email" id="txtcorreo" name="txtcorreo" class="form-control form-control-sm" required="">
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


