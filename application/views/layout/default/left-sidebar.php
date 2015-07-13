 <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img src="<?=base_url()?>assets/dashboard/images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <div class="col col s8 m8 l8">
                                <ul id="profile-dropdown" class="dropdown-content">
                                    <li><a href="#"><i class="mdi-action-face-unlock"></i> Perfil</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-communication-live-help"></i> Ayuda</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="mdi-action-lock-outline"></i> Pagos</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                    </li>
                                </ul>
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">Emanuel Conejo &darr;<i class="mdi-navigation-arrow-drop-down right"></i></a>
                                <p class="user-roal">Administrator</p>
                            </div>
                        </div>
                    </li>
                    <li class="bold"><a href="<?=base_url()?>inicio" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> <?=label('inicio');?></a>
                    </li>
                    <li class="bold"><a href="<?=base_url()?>cotizacion" class="waves-effect waves-cyan"><i class="mdi-communication-email"></i> <?=label('cotizaciones');?> <span class="new badge">4</span></a>
                    </li>
                    <li class="bold"><a href="<?=base_url();?>servicios/" class="waves-effect waves-cyan"><i class="mdi-action-favorite"></i> <?=label('servicios');?></a>
                    </li>
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-invert-colors"></i> <?=label('productos');?></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="<?=base_url();?>productos/agregar"><?=label('agregarP');?></a>
                                        </li>                                        
                                        <li><a href="<?=base_url();?>productos/"><?=label('listarP');?></a>
                                        </li>
                                       
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-image-palette"></i> <?=label('administración');?></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="#"><?=label('costos');?></a>
                                        </li>
                                        <li><a href="<?=base_url()?>clientes"><?=label('clientes');?></a>
                                        </li>
                                        <li><a href="<?=base_url()?>empleados"><?=label('empleados');?></a>
                                        </li>
                                        <li><a href="<?=base_url()?>proveedores"><?=label('proveedores');?></a>
                                        </li>
                                        <li><a href="<?=base_url()?>tiposMoneda"><?=label('monedas');?></a>
                                        </li>
                                        <li><a href="<?=base_url()?>usuarios"><?=label('usuarios');?></a>
                                        </li>  
                                        <li><a href="#"><?=label('financiamiento');?></a>
                                        </li>   
                                        <li><a href="#"><?=label('gastos');?></a>
                                        </li>                                       
                                        
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a href="<?=base_url();?>embed" class="waves-effect waves-cyan"><i class="mdi-device-now-widgets"></i> <?=label('avanzado');?> <span class="new badge"></span></a>
                            </li>
                        </ul>
                    </li>  
                    <li class="li-hover"><div class="divider"></div></li>
                    <li class="li-hover"><p class="ultra-small margin more-text"><?=label('masOpciones');?> </p></li>
                    <li><a href="<?=base_url()?>cotizacion/cotizar"><i class="mdi-action-swap-vert-circle"></i> <?=label('agregarCotizacion');?></a>
                    </li>
                   
<!--                    </li>-->
<!--                    <li><a href="#"><i class="mdi-action-swap-vert-circle"></i> --><?//=label('agregarProduto_Servicio');?><!--</a>-->
<!--                    </li>-->

                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-swap-vert-circle"></i> <?=label('agregarProduto_Servicio');?></a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="<?=base_url();?>productos/agregar"><?=label('agregarProducto');?></a>
                                        </li>
                                        <li><a href="<?=base_url();?>servicios/agregar"><?=label('agregarServicio');?></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li><a href="<?=base_url()?>empleados/agregar"><i class="mdi-action-swap-vert-circle"></i> <?=label('agregarEmpleado');?></a>
                    </li> 
                    <li><a href="<?=base_url()?>proveedores/agregar"><i class="mdi-action-swap-vert-circle"></i> <?=label('agregarProveedor');?></a>
                    </li>                    
                    
                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->