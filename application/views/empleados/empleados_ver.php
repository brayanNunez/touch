<div class="col s12 tab-informacion-ver">
    <div class="row">
        <div class="col s12">
            <div class="col s12 m8 l5">
                <?php
                if (isset($resultado)) {
                   ?>
                   <h4><?= $resultado['nombre']." ".$resultado['primerApellido']." ".$resultado['segundoApellido']; ?></h4>

                    <p><span class="informacion-empleado"><?= label('formEmpleado_identificacion'); ?>: </span><?=$resultado['identificacion']?></p>
                    <p><span class="informacion-empleado"><?= label('formEmpleado_fechaNacimiento'); ?>: </span><?=date("d-m-Y", strtotime($resultado['fechaNacimiento']))?></p>
                    <p><span class="informacion-empleado"><?= label('formEmpleado_fechaIngreso'); ?>: </span><?=date("d-m-Y", strtotime($resultado['fechaIngresoEmpresa']))?></p>
                    <p><span class="informacion-empleado"><?= label('formEmpleado_descripcion'); ?>: </span><?=$resultado['descripcion']?></p>
            </div>
            <div class="col s12 m4 l4">
                <br>
                <h5>Palabras claves</h5>

                <?php if (isset($resultado)) {
                    foreach ($resultado['palabras'] as $palabra) {
                        echo $palabra['descripcion'].', ';
                    }           
                } ?>

            </div>
                <?php
                }
                ?>

            <div class="col s12">
                <br>
                <h5>Salarios</h5>
                <table id="empleados1-salarios" class="table striped">
                    <thead>
                    <tr>
                        <th><?= label('formEmpleado_salarioTipo'); ?></th>
                        <th><?= label('formEmpleado_salarioMonto'); ?></th>
                        <th><?= label('formEmpleado_salariosPorDefecto'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        if (isset($resultado)) {
                        
                            if ($resultado !== false) {
                                 $contador = 0;
                                    foreach ($resultado['salarios'] as $salario) {
                                        $idEncriptado = encryptIt($resultado['idEmpleado']);
                                        ?>
                     <tr id="fila<?= $contador ?>" data-idElemento="<?= $idEncriptado ?>">
                        <td><?= $salario['idTipoSalario'] ?></td>
                        <td><?= $salario['salario'] ?></td>
                        <td><?php if($salario['defecto'] == 1){ ?>
                            <i class="mdi-action-done"></i>
                        <?php } ?>
                        </td>
                     </tr>
                     <?php
                        }
                        } 
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>