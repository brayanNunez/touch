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
                    <tr>
                        <td>Por hora</td>
                        <td>$10</td>
                        <td><i class="mdi-action-done"></i></td>
                    </tr>
                    <tr>
                        <td>Por día</td>
                        <td>$80</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Mensual</td>
                        <td>$1400</td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>