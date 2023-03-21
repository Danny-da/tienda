<div class="modal fade" id="actualizarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar registro</h5>
<!-- Modal -->
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="frmactualizar" onsubmit="return actualizarClientes()" method="post">
            <input type="text" id="txtidcliente" name="id" hidden="">
            <label>tipo Documento</label>
            <select name="cbotipo" id="cbotipo" class="form-control-sm" required="">
              <option>Seleccione...</option>
              <option>DNI</option>
              <option>RUC</option>
            </select>
            <br>
            <label>Número Documento</label>
            <input type="text" id="txtnumdoca" name="txtnumdoca" maxlength="11" class="form-control form-control-sm" required="">
            <label>cliente</label>
            <input type="text" id="txtclientea" name="txtclientea" class="form-control form-control-sm" required="">
            <label>Dirección</label>
            <input type="text" id="txtdirecciona" name="txtdirecciona" class="form-control form-control-sm" required="">
            <label>Teléfono</label>
            <input type="tel" id="txtfonoa" name="txtfonoa" maxlenth="9" class="form-control form-control-sm" required="">
            <label>correo</label>
            <input type="email" id="txtcorreoa" name="txtcorreoa" class="form-control form-control-sm" required="">
            <br>
              <input type="submit" value="Actualizar" class="btn btn-warning">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
