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
                <th style="text-align: center;">
                    <input class="filled-in checkall" type="checkbox" id="checkbox-all" onclick="toggleChecked(this.checked)"/>
                    <label for="checkbox-all"></label>
                </th>
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
                        <td style="text-align: center;">
                            <input type="checkbox" class="filled-in checkbox" id="checkbox_<?=$file['file_name'];?>" />
                            <label for="checkbox_<?=$file['file_name'];?>"></label>
                        </td>
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
                            <ul class="menu-opciones-tabla">
                                <li>Seleccione uno
                                    <ul>
                                        <li>
                                            <a href="<?=base_url().'files/'.$file['file_name'].''.$file['file_ext'];?>" target="_blank">
                                                Abrir
                                            </a>
                                        </li>
                                        <li>
                                            <a class="modal-trigger" href="#eliminarArchivo">
                                                Eliminar
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
<!--                            <a class="icono-edicion" href="--><?//=base_url().'files/'.$file['file_name'].''.$file['file_ext']; ?><!--"-->
<!--                               target="_blank" data-toggle="tooltip" title="--><?//=label('tooltip_descargarArchivo')?><!--">-->
<!--                                <i class="mdi-action-open-in-new"></i>-->
<!--                            </a>-->
<!--                            <a class="modal-trigger icono-edicion" href="#eliminarArchivo" data-toggle="tooltip" title="--><?//=label('tooltip_eliminar')?><!--">-->
<!--                                <i class="mdi-action-delete"></i>-->
<!--                            </a>-->
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="6">
                        <a href="#eliminarArchivosSeleccionados" class="modal-trigger accion-seleccionados">
                            <?=label('clientes_archivos_accionEliminar')?>
                        </a>
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        $('#botonElimnar').on("click", function(event){
            var tb = $(this).attr('title');
            var sel = false;
            var ch = $('#'+tb).find('tbody input[type=checkbox]');
            ch.each(function(){
                var $this = $(this);
                if($this.is(':checked')) {
                    sel = true;
                    $this.parents('tr').fadeOut(function(){
                        $this.remove();
                    });
                }
            });
            return false;
        });
    });
    $(document).ready(function(){
        $('#checkbox-all').click(function(event) {
            if(this.checked) {
                $('.checkbox').each(function() {
                    this.checked = true;
                });
            } else {
                $('.checkbox').each(function() {
                    this.checked = false;
                });
            }
        });
    });
</script>
<script>
    function searchTable(inputVal) {
        var table = $('#files');
        table.find('tr').each(function(index, row) {
            var allCells = $(row).find('td');
            if(allCells.length > 0) {
                var found = false;
                allCells.each(function(index, td) {
                    var regExp = new RegExp(inputVal, 'i');
                    if(regExp.test($(td).text())) {
                        found = true;
                        return false;
                    }
                });
                if(found == true) {
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
<div id="eliminarArchivosSeleccionados" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?=label('clientes_archivosSeleccionadosEliminar');?></p>
    </div>
    <div class="modal-footer black-text">
        <div id="botonElimnar" title="files">
            <a href="#" class="deleteall waves-effect waves-red btn-flat modal-action modal-close" ><?=label('aceptar');?></a>
        </div>
    </div>
</div>
<div id="agregarArchivo" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="file-field col s12">
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