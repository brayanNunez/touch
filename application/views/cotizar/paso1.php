<div id="formGeneral" class="section">
    <div class="row">
        <div class="input-field col s6 m3 l3">
            <div class="input-field col s12">
                <input id="last_name" type="text">
                <label for="last_name" class="">Código</label>
            </div>
        </div>
        <div class="input-field col s6 m3 l3">
            <div class="input-field col s12">
                <input id="last_name" type="text">
                <label for="last_name" class="">Número</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 m6 l6">
            <input id="client_name" type="text">
            <label for="client_name">Seleccione el cliente</label>
        </div>
        <div class="input-field col s12 m6 l6">
            <input id="client-contact" type="text">
            <label for="client-contact">Seleccione la persona de contacto</label>
            <a id="cotizacion-agregarAtencion" class="btn modal-trigger" href="#agregarAtencion" data-toggle="tooltip" title="Agregar nuevo contacto">
                <i class="mdi-content-add col s1"></i>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 m6 l6">
            <input id="cotizacion-moneda" type="text">
            <label for="cotizacion-moneda">Seleccione el tipo de moneda</label>
        </div>
        <div class="input-field col s12 m6 l6">
            <input id="moneda-tipoCambio" type="text">
            <label for="moneda-tipoCambio" class="">Tipo de cambio</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 m6 l6">
            <input id="cotizacion-validez" class="datepicker-fecha" type="text">
            <label for="cotizacion-validez">Seleccione el tiempo de válidez</label>
        </div>
        <div class="input-field col s12 m6 l6">
            <input id="cotizacion-formaPago" type="text">
            <label for="cotizacion-formaPago">Seleccione la forma de pago</label>
        </div>
        <div class="row">
            <div class="input-field col s12 m12 l12">
                <div class="input-field col s12" style="margin-top: 0;">
                    <textarea id="message" class="materialize-textarea" style="height: 24px;"></textarea>
                    <label for="message" class="">Detalle</label>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- lista modals -->
<div id="agregarAtencion" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <input id="client_code" type="text" value="">
            <label for="client_code"><?= label('formCliente_nombreContacto'); ?></label>
        </div>
        <div class="input-field col s12">
            <input id="client_code" type="text" value="">
            <label for="client_code"><?= label('formCliente_correoContacto'); ?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<!--Fin lista modals-->