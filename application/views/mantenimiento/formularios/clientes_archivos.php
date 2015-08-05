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
                <th><?=label('clientes_archivosNombre')?></th>
                <th><?=label('clientes_archivosDescripcion')?></th>
                <th><?=label('clientes_archivosPeso')?></th>
                <th><?=label('clientes_archivosFecha')?></th>
                <th><?=label('clientes_archivosOpciones')?></th>
            </tr>
        </thead>
        <tbody>
            <?php if($archivos): ?>
                <?php foreach($archivos as $file): ?>
                    <tr>
                        <td>
                            <a href="<?=base_url().'files/'.$file['file_name'].''.$file['file_ext']; ?>" target="_blank">
                                <?= $file['file_name'].''.$file['file_ext']; ?>
                            </a>
                        </td>
                        <td>
                            <p><?= $file['file_description']; ?></p>
                        </td>
                        <td>
                            <p><?= $file['file_size']; ?></p>
                        </td>
                        <td>
                            <p><?= $file['file_date']; ?></p>
                        </td>
                        <td>
                            <a class="icono-edicion" href="<?=base_url().'files/'.$file['file_name'].''.$file['file_ext']; ?>"
                               target="_blank" data-toggle="tooltip" title="<?=label('tooltip_descargarArchivo')?>">
                                <i class="mdi-action-open-in-new"></i>
                            </a>
                            <a class="modal-trigger icono-edicion" href="#eliminarArchivo" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                <i class="mdi-action-delete"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
        <tfoot>
<!--            <tr>-->
<!--                <th>--><?//=label('clientes_tablaArchivo')?><!--</th>-->
<!--                <th>--><?//=label('clientes_tablaOpciones')?><!--</th>-->
<!--            </tr>-->
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
<!--            <label for="cliente_archivo">--><?//=label('formCliente_archivo');?><!--</label>-->
            <div class="file-field input-field col s12">
                <?php $this->load->helper('form'); ?>
                <?php echo form_open_multipart(base_url().'archivos/do_upload');?>
                    <input class="file-path validate" type="text" disabled />
                    <div class="btn" data-toggle="tooltip" title="<?=label('tooltip_examinar')?>">
                        <span><i class="mdi-action-search"></i></span>
                        <input type="file" name="userfile" />
                    </div>
                    <div class="input-field col s12">
                        <textarea id="archivo_descripcion" class="materialize-textarea" length="120"></textarea>
                        <label for="archivo_descripcion"><?=label('archivo_descripcion');?></label>
                    </div>
                    <input id="subir_archivo" class="btn" type="submit" value="<?=label('archivo_upload');?>" name="upload" />
                </form>
            </div>

        </div>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="btn-flat modal-close"></a>
    </div>
</div>