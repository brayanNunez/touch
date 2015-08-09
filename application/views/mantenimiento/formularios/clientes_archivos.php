<table id="files" class="data-table-information responsive-table display">
    <thead>
        <tr>
            <th style="text-align: center;">
                <input class="filled-in checkbox checkall" type="checkbox" id="checkbox-all" onclick="toggleChecked(this.checked)"/>
                <label for="checkbox-all"></label>
            </th>
            <th ><?=label('clientes_archivosNombre')?></th>
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
                        <ul id="dropdown-<?= $file['file_name']; ?>" class="dropdown-content">
                            <li><a href="<?=base_url().'files/'.$file['file_name'].''.$file['file_ext']; ?>" class="-text"
                                    target="_blank">Abrir</a>
                            </li>
                            <li><a href="#eliminarArchivo" class="-text modal-trigger">Eliminar</a>
                            </li>
                        </ul>
                        <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-<?= $file['file_name']; ?>">
                            Seleccionar<i class="mdi-navigation-arrow-drop-down"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>

<div>
    <ul id="dropdown-opciones-seleccionados" class="dropdown-content">
        <li>
            <a href="#eliminarArchivosSeleccionados" class="modal-trigger accion-seleccionados -text">Eliminar</a>
        </li>
    </ul>
    <a id="opciones-seleccionados" class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!"
       data-activates="dropdown-opciones-seleccionados" style="display: none;">
        Seleccionar<i class="mdi-navigation-arrow-drop-down"></i>
    </a>
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
    $(document).ready(function(){
        $('.checkbox').click(function(event) {
            var marcados = $('.checkbox:checked').size();
            if(marcados >= 1) {
                document.getElementById('opciones-seleccionados').style.display = 'block';
            } else {
                document.getElementById('opciones-seleccionados').style.display = 'none';
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