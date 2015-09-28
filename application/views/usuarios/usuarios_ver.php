<div class="col s12 tab-informacion-ver">
    <?php
    $primerApellido = '';
    $segundoApellido = '';
    $nombre = '';
    $correo = '';
    $rolAdministrador = '';
    $rolAprobador = '';
    $rolCotizador = '';
    $rolContador = '';
    $ruta = base_url().'files/';
    if (isset($resultado)) {
        $primerApellido = $resultado['primerApellido'];
        $segundoApellido = $resultado['segundoApellido'];
        $nombre = $resultado['nombre'];
        $correo = $resultado['correo'];
        $rolAdministrador = $resultado['roles']['rolAdministrador'];
        $rolAprobador = $resultado['roles']['rolAprobador'];
        $rolCotizador = $resultado['roles']['rolCotizador'];
        $rolContador = $resultado['roles']['rolContador'];
        if(isset($resultado['fotografia'])) {
            $ruta .= $resultado['idEmpresa'].'/'.$resultado['idUsuario'].'/profile_picture_'.$resultado['idUsuario'].'.'.$resultado['fotografia'];
        } else {
            $ruta.= 'default-user-image.png';
        }
    }
    ?>
    <div class="row">
        <div class="col s12" style="margin-bottom: 30px;">
            <div class="col s12 m12 l3">
                <div class="cliente-ver-logo">
                    <img src="<?= $ruta; ?>" />
                </div>
            </div>
            <div class="col s12 m12 l9">
                <div class="col s12" style="margin-top: 30px;">
                    <h4><?= $nombre.' '.$primerApellido.' '.$segundoApellido; ?></h4>
                    <p><span style="font-weight: bold;"><?= label('formUsuario_correo'); ?>: </span><?= $correo; ?></p>
                </div>
                <div class="col s12" style="margin-top: 15px;">
                    <div class="col s12 m6 l6">
                        <h5>Roles asignados</h5>
                        <ul class="ver-usuario-lista">
                            <?php
                            if($rolAdministrador=='checked') {?>
                                <li>Administrador</li>
                            <?php
                            }
                            ?>
                            <?php
                            if($rolAprobador=='checked') {?>
                                <li>Aprobador</li>
                            <?php
                            }
                            ?>
                            <?php
                            if($rolCotizador=='checked') {?>
                                <li>Cotizador</li>
                            <?php
                            }
                            ?>
                            <?php
                            if($rolContador=='checked') {?>
                                <li>Contador</li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="col s12 m6 l6">
                        <h5>Clientes asociados</h5>
                        <ul class="ver-usuario-lista">
                            <li>Dos Pinos S.A</li>
                            <li>Faitur S.A.</li>
                            <li>Springers</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Lista de modals-->
