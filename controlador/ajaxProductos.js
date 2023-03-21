function consultarproductos(){
    $.ajax(
        {
            type:"post",
            url:"../controlador/ConsultarProductos.php",
            success:function(r){
                $("#tablaproductos").html(r);
            }
        }
    );
}
function insertarProducto(){
    let form=new FormData($('#frminsertpro')[0]);
    $.ajax({
        type:"post",
        url:"../controlador/InsertarProductos.php",
        data:form,
        cache:false,
        processData:false,
        contentType:false,
        success:function(r){
            if(r==1){
                consultarproductos();
                $('#frminsertpro')[0].reset();
                /*swal("mensaje","datos registrados correctamente","success");
                $('#frminse')[0].reset()
                consultarClientes();*/
            }
            /*else{
                swal("mensaje"," Error al registrados datos","error");
            }*/
        }
    });
}
function obtenerRegistro(idCliente){
    $.ajax({
        type: "POST",
        data:"idcliente=" +idCliente,
        url:"../controlador/obtenerIdCliente.php",
        success:function(r){
            let datos=JQuery.parseJSON(r);
            $('#txtidcliente').val(datos['idcliente']);
            $('#cbotipoa').val(datos['tipodoc']);
            $('#txtnumdoca').val(datos['numdoc']);
            $('#txtclientea').val(datos['cliente']);
            $('#txtdirecciona').val(datos['direccion']);
            $('#txtfonoa').val(datos['telefono']);
            $('#txtcorreoa').val(datos['correo']);
        }
    })
}
function ActualizarClientes(){
    let form=new FormData($('#frmactualizar')[0]);
    $.ajax({
        type:"POST",
        url:"../controlador/ActualizarClientes.php  ",
        data:form,
        success:function (r) {
            if(r==1){
                $('#frmactualizar')[0].reset();
                consultarClientes();
                swal("Mensaje","Error al actualizar los datos","error");
            }
        }
    });
}
function EliminarCliente(id){
    swal({
        title: "¿Estás seguro de elimanr este registro?",
        text: "¡ Una vez eliminado, no podrá recuperar este archivo imaginario!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
            $.ajax({
                type:"POST",
                url:"../controlador/EliminarClientes.php",
                data:"id="+id,
                success:function (r) {
                    if (r == 1){
                        consultarClientes();
                        swal("Registro Eliminado",{
                            icon:"success"
                        });
                    }
                    else{
                        swal("¡No se elimino el registro!")
                    }
                }
            });
            
        } 
      });
}