<div id="tableHeader" style="margin-bottom: 2%;">
    <div class="new-file">
        <a href="#agregarArchivo" class="btn btn-default modal-trigger"><?=label('clientes_archivoNuevo');?></a>
    </div>
    <div class="dataTables_filter search">
        <label><?=label('clientes_buscar');?></label>
        <input id="search" type="search" aria-controls="data-table-simple">
    </div>
</div>
<div>
    <table id="files" class="table table-responsive striped" data-search="true">
        <thead>
            <tr>
                <th><?=label('clientes_tablaArchivo')?></th>
                <th><?=label('clientes_tablaOpciones')?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#">imagen-cliente1.jpg</a></td>
                <td>
                    <a class="icono-edicion" href="" data-toggle="tooltip" title="<?=label('tooltip_descargarArchivo')?>">
                        <i class="mdi-file-file-download"></i>
                    </a>
                    <a class="modal-trigger icono-edicion" href="#eliminarArchivo" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                        <i class="mdi-action-delete"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td><a href="#">contrato1-cliente.jpg</a></td>
                <td>
                    <a class="icono-edicion" href="" data-toggle="tooltip" title="<?=label('tooltip_descargarArchivo')?>">
                        <i class="mdi-file-file-download"></i>
                    </a>
                    <a class="modal-trigger icono-edicion" href="#eliminarArchivo" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                        <i class="mdi-action-delete"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td><a href="#">contrato2-cliente.jpg</a></td>
                <td>
                    <a class="icono-edicion" href="" data-toggle="tooltip" title="<?=label('tooltip_descargarArchivo')?>">
                        <i class="mdi-file-file-download"></i>
                    </a>
                    <a class="modal-trigger icono-edicion" href="#eliminarArchivo" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                        <i class="mdi-action-delete"></i>
                    </a>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th><?=label('clientes_tablaArchivo')?></th>
                <th><?=label('clientes_tablaOpciones')?></th>
            </tr>
        </tfoot>
    </table>
</div>
<script>
    function searchTable(inputVal) {
        var table = $('#files');
        table.find('tr').each(function(index, row)
        {
            var allCells = $(row).find('td');
            if(allCells.length > 0)
            {
                var found = false;
                allCells.each(function(index, td)
                {
                    var regExp = new RegExp(inputVal, 'i');
                    if(regExp.test($(td).text()))
                    {
                        found = true;
                        return false;
                    }
                });
                if(found == true){
                    $(row).show();
                } else {
                    $(row).hide();
                }
            }
        });
    }
    $(document).ready(function() {
        $('#search').keyup(function() {
            searchTable($(this).val());
        });
    });
</script>

<div id="eliminarArchivo" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?=label('clientes_archivoEliminar');?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<div id="agregarArchivo" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="file-field col s12">
            <label for="cliente_archivo"><?=label('formCliente_archivo');?></label>
            <div class="file-field input-field col s12">
                <input class="file-path validate" type="text" />
                <div class="btn" data-toggle="tooltip" title="<?=label('tooltip_examinar')?>">
                    <span><i class="mdi-action-search"></i></span>
                    <input type="file" />
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>