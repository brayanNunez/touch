<div class="agregar_nuevo">
    <a href="#agregarArchivo" class="btn btn-default modal-trigger"><?= label('clientes_archivoNuevo') ?></a>
</div>
<table id="files" class="data-table-information responsive-table display">
    <thead>
        <tr>
            <th style="text-align: center;">
                <input class="filled-in checkbox checkbox-file checkall" type="checkbox" id="checkbox-all-files"
                       onclick="toggleChecked(this.checked)"/>
                <label for="checkbox-all-files"></label>
            </th>
            <th><?= label('clientes_archivosNombre') ?></th>
            <th><?= label('clientes_archivosDescripcion') ?></th>
            <th><?= label('clientes_archivosPeso') ?></th>
            <th><?= label('clientes_archivosFecha') ?></th>
            <th><?= label('clientes_archivosOpciones') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php if ($archivos): ?>
        <?php foreach ($archivos as $file): ?>
            <tr>
                <td style="text-align: center;">
                    <input type="checkbox" class="filled-in checkbox-file" id="checkbox_<?= $file['file_name']; ?>"/>
                    <label for="checkbox_<?= $file['file_name']; ?>"></label>
                </td>
                <td>
                    <a href="<?= base_url() . 'files/' . $file['file_name'] . '' . $file['file_ext']; ?>"
                       target="_blank">
                        <?= $file['file_name'] . '' . $file['file_ext']; ?>
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
                        <li>
                            <a href="<?= base_url() . 'files/' . $file['file_name'] . '' . $file['file_ext']; ?>"
                               class="-text"
                               target="_blank"><?= label('menuOpciones_abrir') ?></a>
                        </li>
                        <li>
                            <a href="#eliminarArchivo"
                               class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                        </li>
                    </ul>
                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!"
                       data-activates="dropdown-<?= $file['file_name']; ?>">
                        <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
</table>

<div class="tabla-conAgregar">
    <a id="opciones-seleccionados-print"
       class="waves-effect black-text opciones-seleccionados-archivos option-print-table" style="visibility: hidden;"
       href="#" data-toggle="tooltip" title="<?= label('opciones_seleccionadosImprimir') ?>">
        <i class="mdi-action-print icono-opciones-varios"></i>
    </a>
    <ul id="dropdown-exportar-files" class="dropdown-content">
        <li>
            <a href="#" class="-text"><?= label('opciones_seleccionadosExportarPdf') ?></a>
        </li>
        <li>
            <a href="#" class="-text"><?= label('opciones_seleccionadosExportarExcel') ?></a>
        </li>
    </ul>
    <a id="opciones-seleccionados-export" class="boton-opciones black-text dropdown-button option-export-table"
       href="#" data-toggle="tooltip" title="<?= label('opciones_seleccionadosExportar') ?>"
       data-activates="dropdown-exportar-files">
        <i class="mdi-file-file-download icono-opciones-varios"></i>
    </a>
    <a id="opciones-seleccionados-delete"
       class="modal-trigger waves-effect black-text opciones-seleccionados-archivos option-delete-elements"
       style="visibility: hidden;"
       href="#eliminarArchivosSeleccionados" data-toggle="tooltip"
       title="<?= label('opciones_seleccionadosEliminar') ?>">
        <i class="mdi-action-delete icono-opciones-varios"></i>
    </a>
</div>

<script>
    $(window).load(function () {
        var marcados = $('.checkbox-file:checked').size();
        var elems = document.getElementsByClassName('opciones-seleccionados-archivos');
        if (marcados >= 1) {
            var e1;
            for (e1 in elems) {
                elems[e1].style.visibility = 'visible';
            }
        } else {
            var e2;
            for (e2 in elems) {
                elems[e2].style.visibility = 'hidden';
            }
            document.getElementById('checkbox-all-files').checked = false;
        }
    });
    $(document).ready(function () {
        $('#botonEliminarArchivosSeleccionados').on("click", function (event) {
            var tb = $(this).attr('title');
            var sel = false;
            var ch = $('#' + tb).find('tbody input[type=checkbox]');
            ch.each(function () {
                var $this = $(this);
                if ($this.is(':checked')) {
                    sel = true;
                    $this.parents('tr').fadeOut(function () {
                        $this.remove();
                    });
                }
            });
            return false;
        });
    });
    $(document).ready( function () {
        $('#files').dataTable( {
            'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0, -1] /* 1st one, start by the right */
            }]
        });
        $('table#files thead th:first').removeClass('sorting_asc').addClass('sorting_disabled');
        $('table#files thead th:nth-child(2)').removeClass('sorting').addClass('sorting_asc');
    });
    $(document).ready(function () {
        $('input#checkbox-all-files').click(function (event) {
            var $this = $(this);
            var tableBody = $('#files').find('tbody tr[role=row] input[type=checkbox]');
            tableBody.each(function() {
                var check = $(this);
                if ($this.is(':checked')) {
                    check.prop('checked', true);
                } else {
                    check.prop('checked', false);
                }
            });
        });
    });
    $(document).ready(function () {
        $('.checkbox-file').click(function (event) {
            var marcados = $('.checkbox-file:checked').size();
            var elems = document.getElementsByClassName('opciones-seleccionados-archivos');
            if (marcados >= 1) {
                var e1;
                for (e1 in elems) {
                    elems[e1].style.visibility = 'visible';
                }
            } else {
                var e2;
                for (e2 in elems) {
                    elems[e2].style.visibility = 'hidden';
                }
            }
        });
    });
</script>

<!-- lista modals -->
<div id="eliminarArchivo" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('clientes_archivoEliminar'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="eliminarArchivosSeleccionados" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('clientes_archivosSeleccionadosEliminar'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <div id="botonEliminarArchivosSeleccionados" title="files">
            <a href="#"
               class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>
<div id="agregarArchivo" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="file-field col s12">
            <div class="file-field input-field col s12">
                <?php $this->load->helper('form'); ?>
                <?php echo form_open_multipart(base_url() . 'archivos/do_upload'); ?>
                <input class="file-path validate" type="text" disabled/>

                <div class="btn" data-toggle="tooltip" title="<?= label('tooltip_examinar') ?>">
                    <span><i class="mdi-action-search"></i></span>
                    <input type="file" name="userfile"/>
                </div>
                <div class="input-field col s12">
                    <textarea id="archivo_descripcion" class="materialize-textarea" length="120"></textarea>
                    <label for="archivo_descripcion"><?= label('archivo_descripcion'); ?></label>
                </div>
                <input id="subir_archivo" class="btn" type="submit" value="<?= label('archivo_upload'); ?>"
                       name="upload"/>
                </form>
            </div>
        </div>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="btn-flat modal-close"></a>
    </div>
</div>
<!--Fin lista modals -->










