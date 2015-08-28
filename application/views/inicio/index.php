<!-- START CONTENT -->
<section id="content">

    <!--start container-->

    <div class="container">

        <!--chart dashboard start-->
        <div id="chart-dashboard">
            <div class="row">
                <div class="col s12 m12 l8">
                    <div class="card">
                        <div class="card-move-up waves-effect waves-block waves-light">
                            <div class="move-up cyan darken-1">
                                <div>
                                    <span class="chart-title white-text">Ingresos</span>

                                    <div class="chart-revenue cyan darken-2 white-text">
                                        <p class="chart-revenue-total">$4,500.85</p>

                                        <p class="chart-revenue-per"><i class="mdi-navigation-arrow-drop-up"></i> 21.80
                                            %</p>
                                    </div>
                                    <div class="switch chart-revenue-switch right">
                                        <label class="cyan-text text-lighten-5">
                                            Mes
                                            <input type="checkbox">
                                            <span class="lever"></span> Año
                                        </label>
                                    </div>
                                </div>
                                <div class="trending-line-chart-wrapper">
                                    <canvas id="trending-line-chart" height="70"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <a class="btn-floating btn-move-up waves-effect waves-light darken-2 right"><i
                                    class="mdi-content-add activator"></i></a>

                            <div class="col s12 m3 l3">
                                <div id="doughnut-chart-wrapper">
                                    <canvas id="doughnut-chart" height="200"></canvas>
                                    <div class="doughnut-chart-status">$4500
                                        <p class="ultra-small center-align">Vendido</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m2 l2">
                                <ul class="doughnut-chart-legend">
                                    <li class="mobile ultra-small"><span class="legend-color"></span>Apps</li>
                                    <li class="kitchen ultra-small"><span class="legend-color"></span> Software</li>
                                    <li class="home ultra-small"><span class="legend-color"></span> Sitios web</li>
                                </ul>
                            </div>
                            <div class="col s12 m5 l6">
                                <div class="trending-bar-chart-wrapper">
                                    <canvas id="trending-bar-chart" height="90"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Ingresos mensuales <i
                                    class="mdi-navigation-close right"></i></span>
                            <table class="responsive-table">
                                <thead>
                                <tr>
                                    <th data-field="id">ID</th>
                                    <th data-field="month">Mes</th>
                                    <th data-field="item-sold">Item vendidos</th>
                                    <th data-field="item-price">Precio</th>
                                    <th data-field="total-profit">Total ingresos</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>January</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>February</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>March</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>April</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>May</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>June</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>July</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>August</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Septmber</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Octomber</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>November</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>December</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>

                <!--   </div>
              </div> -->


                <!--chart dashboard end-->

                <!-- //////////////////////////////////////////////////////////////////////////// -->

                <!--card stats start-->
                <div id="card-stats">
                    <div class="row">
                        <a href="<?= base_url() ?>cotizacion">
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content  green white-text">
                                        <p class="card-stats-title"><i class="mdi-social-group-add"></i> Total
                                            cotizaciones</p>
                                        <h4 class="card-stats-number">76</h4>
                                    </div>
                                    <div class="card-action  green darken-2">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?= base_url() ?>cotizacion">
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content purple white-text">
                                        <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Cotizaciones
                                            aprobadas</p>
                                        <h4 class="card-stats-number">8</h4>

                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 70%
                                            <span class="purple-text text-lighten-5">mes pasado</span>
                                        </p>
                                    </div>
                                    <div class="card-action purple darken-2">
                                        <div></div>

                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?= base_url() ?>cotizacion">
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content blue-grey white-text">
                                        <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Cotizaciones
                                            enviadas</p>
                                        <h4 class="card-stats-number">67</h4>

                                    </div>
                                    <div class="card-action blue-grey darken-2">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="<?= base_url() ?>cotizacion">
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content  green white-text">
                                        <p class="card-stats-title"><i class="mdi-social-group-add"></i> Cotizaciones en
                                            revisi&oacute;n</p>
                                        <h4 class="card-stats-number">8</h4>

                                    </div>
                                    <div class="card-action  green darken-2">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="<?= base_url() ?>cotizacion">
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content deep-purple white-text">
                                        <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i>
                                            Cotizaciones rechazadas</p>
                                        <h4 class="card-stats-number">16</h4>

                                    </div>
                                    <div class="card-action  deep-purple darken-2">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
                <!--card stats end-->

                <!-- //////////////////////////////////////////////////////////////////////////// -->

                <!--card widgets start-->
                <div id="card-widgets">
                    <div class="row">


                        <div class="col s12 m6 l4">
                            <div id="profile-card" class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="<?= base_url() ?>assets/dashboard/images/user-bg.jpg"
                                         alt="user background">
                                </div>
                                <div class="card-content">
                                    <img src="<?= base_url() ?>assets/dashboard/images/users.png" alt=""
                                         class="circle responsive-img activator card-profile-image">
                                    <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                                        <i class="mdi-editor-mode-edit"></i>
                                    </a>

                                    <span
                                        class="card-title activator grey-text text-darken-4">Gestión de usuarios</span>


                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Gestión de usuarios <i
                                            class="mdi-navigation-close right"></i></span>

                                    <a href="<?= base_url() ?>clientes/agregar"><p><i
                                                class="mdi-action-perm-identity cyan-text text-darken-2"></i> Agregar
                                            Clientes</p></a>
                                    <a href="<?= base_url() ?>empleados/agregar"><p><i
                                                class="mdi-action-perm-identity cyan-text text-darken-2"></i> Agregar
                                            Empleados</p></a>
                                    <a href="<?= base_url() ?>proveedores/agregar"><p><i
                                                class="mdi-action-perm-identity cyan-text text-darken-2"></i> Agregar
                                            Proveedores</p></a>


                                </div>

                            </div>
                        </div>


                        <div class="col s12 m6 l4">
                            <div id="profile-card" class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="<?= base_url() ?>assets/dashboard/images/user-bg.jpg"
                                         alt="user background">
                                </div>
                                <div class="card-content">
                                    <img src="<?= base_url() ?>assets/dashboard/images/embed.png" alt=""
                                         class="circle responsive-img activator card-profile-image">
                                    <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                                        <i class="mdi-editor-mode-edit"></i>
                                    </a>

                                    <span class="card-title activator grey-text text-darken-4">Embed</span>


                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Embed <i
                                            class="mdi-navigation-close right"></i></span>

                                    <a href="<?= base_url() ?>embed"><p><i
                                                class="mdi-action-perm-identity cyan-text text-darken-2"></i> Llévate tu
                                            embed ...</p></a>


                                </div>


                            </div>
                        </div>


                        <div class="col s12 m6 l4">
                            <div id="profile-card" class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="<?= base_url() ?>assets/dashboard/images/user-bg.jpg"
                                         alt="user background">
                                </div>
                                <div class="card-content">
                                    <img src="<?= base_url() ?>assets/dashboard/images/reporte.png" alt=""
                                         class="circle responsive-img activator card-profile-image">
                                    <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                                        <i class="mdi-editor-mode-edit"></i>
                                    </a>

                                    <span class="card-title activator grey-text text-darken-4">Reportes</span>


                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Reportes <i
                                            class="mdi-navigation-close right"></i></span>

                                    <!--                                                <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Reporte x</p>-->
                                    <!--                                                <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Reporte y</p>-->
                                    <a href="<?= base_url() ?>reporte"><p><i
                                                class="mdi-action-perm-identity cyan-text text-darken-2"></i>Reportes de
                                            cotización</p></a>
                                    <a href="<?= base_url() ?>clientes/reporte"><p><i
                                                class="mdi-action-perm-identity cyan-text text-darken-2"></i>Reportes de
                                            clientes</p></a>


                                </div>


                            </div>
                        </div>


                    </div>
                </div>
                <!--card widgets end-->

                <!-- //////////////////////////////////////////////////////////////////////////// -->


                <!-- Floating Action Button -->
                <?php
                    $this->load->view('layout/default/menu-crear.php');
                ?>
                <a href="#RegistroIndependiente" class="-text modal-trigger">Completar registro independiente</a>
                <a href="#RegistroEmpresa" class="-text modal-trigger">Completar registro empresa</a>
                <!--<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                    <a class="btn-floating btn-large red" href="">
                        <i class="large mdi-content-add"></i>
                    </a>
                    <ul class="">
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
                </div>-->
                <!-- Floating Action Button -->

            </div>
        </div>

    </div>
    <!--end container-->
</section>
<!-- END CONTENT -->

<!-- lista modals -->
<!-- start modal registro independiente -->
<div id="RegistroIndependiente" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">

        <div class="input-field col s12">
            <h7>Termine de completar la información de su perfil</h7>
        </div>

        <div class="row">

            <div class="file-field col s12">
                <div class="file-field input-field col s12">
                    <input id="registro_ImagenIndepediente" class="file-path validate campo-registro" type="text"
                           placeholder="Foto o logo"/>
                    <div class="btn" data-toggle="tooltip"
                         title="<?= label('tooltip_examinar') ?>"
                         style="border-radius: 0px !important; min-width: 13%;">
                        <span><i class="mdi-action-search"></i></span>
                        <input type="file"/>
                    </div>
                </div>
            </div>

            <div class="input-field col s12 m6 l6">
                <div class="input-field col s12">
                    <input id="registro_telefonoIndepediente" class="campo-registro" type="text"
                           placeholder="Teléfono">
                </div>
            </div>

            <div class="input-field col s12 m6 l6">
                <div class="input-field col s12">
                    <input id="registro_celularIndepediente" class="campo-registro" type="text"
                           placeholder="Celular">
                </div>
            </div>

            <div class="input-field col s12">
                <input id="registro-fechaNacIndependiente" class="datepicker-fecha" type="text">
                <label for="registro-fechaNacIndependiente">Fecha de nacimiento</label>
            </div>

            <div class="input-field col s12">
                <div class="input-field col s12">
                    <input id="registro_profesionIndepediente" class="campo-registro" type="text"
                           placeholder="Profesión">
                </div>
            </div>

            <div class="input-field col s12">
                <select>
                    <option class="selected-option" selected disabled>Actividad comercial</option>
                    <option>Trabajador independiente</option>
                    <option>Empresa</option>
                </select>
            </div>

            <div class="input-field col s12">
                <div class="input-field col s12">
                    <input id="registro_sitioWebIndepediente" class="campo-registro" type="text"
                           placeholder="Sitio web">
                </div>
            </div>

        </div>

    </div>
    <div class="modal-footer">
        <div class="input-field col s12 m6 l6">
            <div class="input-field col s12">
                <a style="float:left;" href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Ignorar</a>
            </div>
        </div>
        <div class="input-field col s12 m6 l6">
            <div class="input-field col s12">
                <a style="float:right;" href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Guardar</a>
            </div>
        </div>
    </div>
</div>
<!-- end modal registro independiente -->

<!-- start modal registro empresa -->
<div id="RegistroEmpresa" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">

        <div class="input-field col s12">
            <h7>Termine de completar la información de su perfil</h7>
        </div>

        <div class="row">

            <div class="file-field col s12">
                <div class="file-field input-field col s12">
                    <input id="registro_ImagenEmpresa" class="file-path validate campo-registro" type="text"
                           placeholder="Foto o logo"/>
                    <div class="btn" data-toggle="tooltip"
                         title="<?= label('tooltip_examinar') ?>"
                         style="border-radius: 0px !important; min-width: 13%;">
                        <span><i class="mdi-action-search"></i></span>
                        <input type="file"/>
                    </div>
                </div>
            </div>

            <div class="input-field col s12">
                <div class="input-field col s12">
                    <input id="registro_correoEmpresa" class="campo-registro" type="email"
                           placeholder="Correo electrónico empresarial">
                </div>
            </div>

            <div class="input-field col s12 m6 l6">
                <div class="input-field col s12">
                    <input id="registro_telefonoEmpresa" class="campo-registro" type="text"
                           placeholder="Teléfono">
                </div>
            </div>

            <div class="input-field col s12 m6 l6">
                <div class="input-field col s12">
                    <input id="registro_celularEmpresa" class="campo-registro" type="text"
                           placeholder="Celular">
                </div>
            </div>

            <div class="input-field col s12">
                <input id="registro-fechaCreacionEmpresa" class="datepicker-fecha" type="text">
                <label for="registro-fechaCreacionEmpresa">Fecha de creación</label>
            </div>

            <div class="input-field col s12">
                <select>
                    <option class="selected-option" selected disabled>Tamaño de la empresa</option>
                    <option>1 a 5</option>
                    <option>6 a 10</option>
                    <option>11 a 25</option>
                    <option>26 a 50</option>
                    <option>50+</option>
                    <option>100+</option>
                    <option>250+</option>
                    <option>500+</option>
                </select>
            </div>

            <div class="input-field col s12">
                <select>
                    <option class="selected-option" selected disabled>Actividad comercial</option>
                    <option>Trabajador independiente</option>
                    <option>Empresa</option>
                </select>
            </div>

            <div class="input-field col s12">
                <div class="input-field col s12">
                    <input id="registro_sitioWebEmpresa" class="campo-registro" type="text"
                           placeholder="Sitio web">
                </div>
            </div>

            <div class="input-field col s12">
                <h7>Datos del contacto (Se recomienda representante legal)</h7>
            </div>

            <div class="input-field col s12">
                <div class="input-field col s12">
                    <input id="registro_contactoPuesto" class="campo-registro" type="text"
                           placeholder="Puesto">
                </div>
            </div>

            <div class="input-field col s12">
                <input id="registro-fechaNacContacto" class="datepicker-fecha" type="text">
                <label for="registro-fechaNacContacto">Fecha de nacimiento</label>
            </div>

            <div class="input-field col s12 m6 l6">
                <div class="input-field col s12">
                    <input id="registro_telefonoContacto" class="campo-registro" type="text"
                           placeholder="Teléfono">
                </div>
            </div>

            <div class="input-field col s12 m6 l6">
                <div class="input-field col s12">
                    <input id="registro_celularContacto" class="campo-registro" type="text"
                           placeholder="Celular">
                </div>
            </div>

        </div>

    </div>

    <div class="modal-footer">
        <div class="input-field col s12 m6 l6">
            <div class="input-field col s12">
                <a style="float:left;" href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Ignorar</a>
            </div>
        </div>
        <div class="input-field col s12 m6 l6">
            <div class="input-field col s12">
                <a style="float:right;" href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Guardar</a>
            </div>
        </div>
    </div>
</div>
<!-- end modal registro empresa -->

<!--Fin lista modals -->
