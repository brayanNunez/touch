<!-- START LEFT SIDEBAR NAV-->
<aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav fixed leftside-navigation">
        <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="<?= base_url() ?>assets/dashboard/images/avatar.jpg" alt=""
                         class="circle responsive-img valign profile-image">
                </div>
                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content menu-admin">
                        <li><a href="<?= base_url(); ?>usuarios/editar/<?= encryptIt(1) ?>"><i class="mdi-action-face-unlock"></i>
                                Perfil</a>
                        </li>
                        <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                        </li>
                        <li><a href="#"><i class="mdi-communication-live-help"></i> Ayuda</a>
                        </li>
                        <li class="divider"></li>
                        <!--<li><a href="<?= base_url(); ?>pagos"><i class="mdi-action-lock-outline"></i> Pagos</a>
                        </li>-->
                        <li><a href="<?= base_url()?>usuarios/logout"><i class="mdi-hardware-keyboard-tab"></i> Cerrar sesión</a>
                        </li>
                    </ul>
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#"
                       data-activates="profile-dropdown">Emanuel Conejo &darr;<i
                            class="mdi-navigation-arrow-drop-down right"></i></a>

                    <p class="user-roal">Administrador</p>
                </div>
            </div>
        </li>
        <li class="bold"><a href="<?= base_url() ?>inicio" class="waves-effect waves-cyan"><i
                    class="mdi-action-dashboard"></i> <?= label('inicio'); ?></a>
        </li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">

                <li class="bold"><a href="<?= base_url(); ?>clientes" class="waves-effect waves-cyan"><i
                            class="mdi-social-person"></i> <?= label('clientes'); ?></a>
                </li>

                <li class="bold">
                    <a href="<?= base_url(); ?>gastos" class="waves-effect waves-cyan"><i
                            class="mdi-action-subject"></i><?= label('gastos'); ?></a>
                </li>

                <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i
                            class="mdi-editor-format-list-numbered"></i> <?= label('cotizaciones'); ?></a>

                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a href="<?= base_url(); ?>cotizacion/cotizar"><?= label('agregarCotizacion'); ?></a>
                            </li>
                            <li>
                                <a href="<?= base_url(); ?>cotizacion"><?= label('listarCotizacion'); ?></a>
                            </li>
                            <!--                                        <li>-->
                            <!--                                            <a href="-->
                            <? //=base_url();?><!--reporte">--><? //=label('listarReporteCot');?><!--</a>-->
                            <!--                                        </li>-->
                        </ul>
                    </div>
                </li>

                <li class="bold"><a href="<?= base_url(); ?>servicios/" class="waves-effect waves-cyan"><i
                            class="mdi-maps-beenhere"></i> <?= label('tituloServicios'); ?></a>
                </li>

                <li class="bold"><a href="<?= base_url(); ?>proveedores/" class="waves-effect waves-cyan"><i
                            class="mdi-action-account-child"></i> <?= label('personas'); ?></a>
                </li>

<!--                <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i-->
<!--                            class="mdi-communication-vpn-key"></i> --><?//= label('productos'); ?><!--</a>-->
<!---->
<!--                    <div class="collapsible-body">-->
<!--                        <ul>-->
<!--                            <li><a href="--><?//= base_url(); ?><!--productos/agregar">--><?//= label('agregarP'); ?><!--</a>-->
<!--                            </li>-->
<!--                            <li><a href="--><?//= base_url(); ?><!--productos/">--><?//= label('listarP'); ?><!--</a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </li>-->

                <!--<li class="bold">
                    <a href="<?= base_url() ?>empleados" class="waves-effect waves-cyan"><i
                            class="mdi-action-perm-identity"></i><?= label('empleados'); ?></a>
                </li>-->

                <!--<li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-settings-applications"></i> <?= label('administración'); ?></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li>
                                            <a href="<?= base_url() ?>tiposMoneda"><?= label('monedas'); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url() ?>usuarios"><?= label('usuarios'); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url(); ?>financiamiento"><?= label('financiamiento'); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url(); ?>pagos"><?= label('pagos'); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url(); ?>impuesto"><?= label('impuesto'); ?></a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url(); ?>unidad"><?= label('unidad'); ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>-->

                <!-- <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-trending-up"></i> <?= label('reportes'); ?></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="<?= base_url(); ?>reporte/"><?= label('listarReporteCot'); ?></a>
                                        </li>
                                        <li><a href="<?= base_url(); ?>clientes/reporte"><?= label('listarReporteCli'); ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </li> -->
                <!--<li class="bold"><a href="<?= base_url(); ?>embed" class="waves-effect waves-cyan"><i
                            class="mdi-action-settings-ethernet"></i> <?= label('avanzado'); ?></a>
                </li>-->
            </ul>
        </li>
        <li class="li-hover">
            <div class="divider"></div>
        </li>
        <li class="li-hover"><p class="ultra-small margin more-text"><?= label('masOpciones'); ?> </p></li>
        <li><a href="<?= base_url() ?>cotizacion/cotizar"><i
                    class="mdi-action-swap-vert-circle"></i> <?= label('agregarCotizacion'); ?></a>
        </li>

        <!--                    </li>-->
        <!--                    <li><a href="#"><i class="mdi-action-swap-vert-circle"></i> -->
        <? //=label('agregarProduto_Servicio');?><!--</a>-->
        <!--                    </li>-->

        <!--                    <li class="no-padding">-->
        <!--                        <ul class="collapsible collapsible-accordion">-->
        <!--                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-swap-vert-circle"></i> -->
        <? //=label('agregarProduto_Servicio');?><!--</a>-->
        <!--                                <div class="collapsible-body">-->
        <!--                                    <ul>-->
        <!--                                        <li><a href="--><? //=base_url();?><!--productos/agregar">-->
        <? //=label('agregarProducto');?><!--</a>-->
        <!--                                        </li>-->
        <!--                                        <li><a href="--><? //=base_url();?><!--servicios/agregar">-->
        <? //=label('agregarServicio');?><!--</a>-->
        <!--                                        </li>-->
        <!--                                    </ul>-->
        <!--                                </div>-->
        <!--                            </li>-->
        <!--                        </ul>-->
        <!--                    </li>-->
        <!---->
        <!--                    <li><a href="-->
        <? //=base_url()?><!--empleados/agregar"><i class="mdi-action-swap-vert-circle"></i> -->
        <? //=label('agregarEmpleado');?><!--</a>-->
        <!--                    </li> -->
        <!--                    <li><a href="-->
        <? //=base_url()?><!--proveedores/agregar"><i class="mdi-action-swap-vert-circle"></i> -->
        <? //=label('agregarProveedor');?><!--</a>-->
        <!--                    </li>                    -->

    </ul>
    <a href="#" data-activates="slide-out"
       class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i
            class="mdi-navigation-menu"></i></a>
</aside>
<!-- END LEFT SIDEBAR NAV-->