<div id="menu-crear" style="bottom: 45px; right: 24px;">
    <a class="btn-opciones btn-large red">
        <i class="large mdi-content-add"></i>
    </a>
    <ul class="menu-crear" style="display:none;">
        <li>
            <a href="<?= base_url(); ?>servicios/agregar" class="btn-floating">
                <span><i class="mdi-maps-beenhere"></i><?= label('agregarS'); ?></span>
            </a>
        </li>
        <li>
            <a href="<?= base_url(); ?>productos/agregar" class="btn-floating">
                <span><i class="mdi-communication-vpn-key"></i><?= label('agregarP'); ?></span>
            </a>
        </li>
        <li>
            <a href="<?= base_url(); ?>proveedores/agregar" class="btn-floating">
                <span><i class="mdi-action-account-child"></i><?= label('agregarProveedor'); ?></span>
            </a>
        </li>
        <li>
            <a href="<?= base_url(); ?>clientes/agregar" class="btn-floating">
                <span><i class="mdi-social-person"></i><?= label('agregarCliente'); ?></span>
            </a>
        </li>
        <li>
            <a href="<?= base_url(); ?>cotizacion/cotizar" class="btn-floating">
                <span><i class="mdi-editor-format-list-numbered"></i><?= label('agregarCotizacion'); ?></span>
            </a>
        </li>
    </ul>
</div>

<script>
    $(document).ready(function () {
        $('.btn-opciones').on('click', function (event) {
            var elementoActivo = $(this).siblings('ul.menu-crear');
            if (elementoActivo.length > 0) {
                var estado = elementoActivo.css("display");
                if (estado == "block") {
                    elementoActivo.css("display", "none");
                    elementoActivo.style.display = 'none';
                } else {
                    elementoActivo.css("display", "block");
                    elementoActivo.style.display = 'block';
                }
            }
        });
    });
</script>