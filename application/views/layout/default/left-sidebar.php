<!-- START LEFT SIDEBAR NAV-->
<aside id="left-sidebar-nav">
    <?php
    $sessionActual = $this->session->userdata('logged_in');
    $idUsuarioLogueado = $sessionActual['idUsuarioEncriptado'];
    $nombreUsuarioLogueado = $sessionActual['nombreUsuario'];
    $rolesUsuarioLogueado = $sessionActual['rolesUsuario'];
    $imagenUsuarioLogueado = $sessionActual['rutaImagenUsuario'];
    $rutaInvalida = base_url().'files/empresas/'.$sessionActual['idEmpresa'].'/usuarios/'.$sessionActual['idUsuario'].'/';
    if($imagenUsuarioLogueado == null || $imagenUsuarioLogueado == $rutaInvalida) {
        $imagenUsuarioLogueado = base_url().'files/default-user-image.png';
    }
    $rolAdministrador = $sessionActual['administrador'];
    $rolAprobador = $sessionActual['aprobador'];
    $rolCotizador = $sessionActual['cotizador'];
    $rolContador = $sessionActual['contador'];
    ?>
    <ul id="slide-out" class="side-nav fixed leftside-navigation">
        <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="<?= $imagenUsuarioLogueado; ?>" id="img_imagenUsuarioLogueado" alt="Imagen de perfil de usuario" class="circle responsive-img valign profile-image">
                </div>
                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content menu-admin">
                        <li>
                            <a id="btn_perfilUsuarioLogueado" href="<?= base_url().'usuarios/editar/'.$idUsuarioLogueado; ?>"><i class="mdi-action-face-unlock"></i>Perfil</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>registro/editar/">
                                <i class="mdi-action-home"></i>Perfil empresa
                            </a>
                        </li>
<!--                        <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>-->
<!--                        </li>-->
<!--                        <li><a href="#"><i class="mdi-communication-live-help"></i> Ayuda</a>-->
<!--                        </li>-->
                        <li class="divider"></li>
                        <li><a href="<?= base_url()?>usuarios/logout"><i class="mdi-hardware-keyboard-tab"></i> Cerrar sesión</a>
                        </li>
                    </ul>
                    <a id="btn_nombreUsuarioLogueado" class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#"
                       data-activates="profile-dropdown">
<!--                        <span id="span_usuarioLogueado"><span id="span_nombreUsuarioLogueado"></span> &darr;<i class="mdi-navigation-arrow-drop-down right"></i></span>-->
                        <span id="span_usuarioLogueado"><span id="span_nombreUsuarioLogueado"><?= $nombreUsuarioLogueado; ?></span> &darr;</span>
                    </a>

                    <p class="user-roal">
                    <ul id="list_rolesUsuarioLogueado">
                        <?php
                        $arrayRoles = explode(",", $rolesUsuarioLogueado);
                        foreach ($arrayRoles as $rol) { ?>
                            <li><?= $rol; ?></li>
                        <?php
                        } ?>
                    </ul>
                    </p>
                </div>
            </div>
        </li>
        <li class="bold"><a href="<?= base_url() ?>inicio" class="waves-effect waves-cyan"><i
                    class="mdi-action-dashboard"></i> <?= label('inicio'); ?></a>
        </li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">

                <?php
                if($rolAdministrador || $rolCotizador) {
                ?>
                    <li class="bold">
                        <a href="<?= base_url(); ?>clientes" class="waves-effect waves-cyan">
                            <i class="mdi-social-person"></i> <?= label('clientes'); ?>
                        </a>
                    </li>
                <?php
                }
                ?>
                <?php
                if($rolAdministrador || $rolCotizador) {
                ?>
                    <li class="bold">
                        <a href="<?= base_url(); ?>gastos" class="waves-effect waves-cyan">
                            <i class="mdi-action-subject"></i><?= label('gastos'); ?>
                        </a>
                    </li>
                <?php
                }
                ?>
                <li class="bold">
                    <a href="<?= base_url(); ?>cotizacion" class="waves-effect waves-cyan">
                        <i class="mdi-editor-format-list-numbered"></i><?= label('cotizaciones'); ?>
                    </a>
                </li>
                <?php
                if($rolAdministrador || $rolCotizador) {
                ?>
                    <li class="bold">
                        <a href="<?= base_url(); ?>servicios/" class="waves-effect waves-cyan">
                            <i class="mdi-maps-beenhere"></i> <?= label('tituloServicios'); ?>
                        </a>
                    </li>
                <?php
                }
                ?>
                <?php
                if($rolAdministrador || $rolCotizador) {
                ?>
                    <li class="bold">
                        <a href="<?= base_url(); ?>proveedores/" class="waves-effect waves-cyan">
                            <i class="mdi-action-account-child"></i> <?= label('personas'); ?>
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </li>
        <li class="li-hover">
            <div class="divider"></div>
        </li>
        <li class="li-hover"><p class="ultra-small margin more-text"><?= label('masOpciones'); ?> </p></li>
        <li><a href="<?= base_url() ?>cotizacion/cotizar"><i
                    class="mdi-action-swap-vert-circle"></i> <?= label('agregarCotizacion'); ?></a>
        </li>
    </ul>
    <a href="#" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"
       data-activates="slide-out">
        <i class="mdi-navigation-menu"></i>
    </a>
</aside>
<!-- END LEFT SIDEBAR NAV-->