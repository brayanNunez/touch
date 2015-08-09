<table class="data-table-information responsive-table display" cellspacing="0">
     <thead>
         <tr>
             <th><?=label('tablaCotizaciones_codigo');?></th>
             <th><?=label('tablaCotizaciones_fecha');?></th>
             <th><?=label('tablaCotizaciones_cliente');?></th>
             <th><?=label('tablaCotizaciones_monto');?></th>
             <th><?=label('tablaCotizaciones_estado');?></th>
             <th><?=label('tablaCotizaciones_opciones');?></th>
         </tr>
     </thead>
     <tfoot>
<!--         <tr>-->
<!--             <th>--><?//=label('tablaCotizaciones_codigo');?><!--</th>-->
<!--             <th>--><?//=label('tablaCotizaciones_fecha');?><!--</th>-->
<!--             <th>--><?//=label('tablaCotizaciones_cliente');?><!--</th>-->
<!--             <th>--><?//=label('tablaCotizaciones_monto');?><!--</th>-->
<!--             <th>--><?//=label('tablaCotizaciones_estado');?><!--</th>-->
<!--             <th>--><?//=label('tablaCotizaciones_opciones');?><!--</th>-->
<!--         </tr>-->
     </tfoot>
     <tbody>
         <tr>
             <td>MRR-001</td>
             <td>2009/01/12</td>
             <td><a href="">Dos Pinos</a></td>
             <td>$300</td>
             <td>Finalizada</td>
             <td>
                 <a class="btn_duplicar modal-trigger icono-edicion" href="#duplicar" data-toggle="tooltip" title="<?=label('tooltip_duplicar')?>">
                     <i class="mdi-content-content-copy"></i>
                 </a>
                 <a class="btn_ver icono-edicion" href="<?=base_url()?>cotizacion/cotizar" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                     <i class="mdi-editor-mode-edit"></i>
                 </a>
                 <a class="btn_eliminar modal-trigger icono-edicion" href="#Elminar" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                     <i class="mdi-action-delete"></i>
                 </a>
             </td>
         </tr>
         <tr>
             <td>MRR-002</td>
             <td>2015/01/12</td>
             <td><a href="">Dos Pinos</a></td>
             <td>$100</td>
             <td>Enviada</td>
             <td>
                 <a  class="btn_duplicar modal-trigger icono-edicion" href="#duplicar" data-toggle="tooltip" title="<?=label('tooltip_duplicar')?>">
                     <i class="mdi-content-content-copy"></i>
                 </a>
                 <a class="btn_ver icono-edicion" href="<?=base_url()?>cotizacion/cotizar" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                     <i class="mdi-editor-mode-edit"></i>
                 </a>
                 <a class="btn_finalizar modal-trigger icono-edicion" href="#finalizar" data-toggle="tooltip" title="<?=label('tooltip_finalizar')?>">
                     <i class="mdi-action-done"></i>
                 </a>
                 <a class="btn_eliminar modal-trigger icono-edicion" href="#Elminar" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                     <i class="mdi-action-delete"></i>
                 </a>
             </td>
         </tr>
     </tbody>
 </table>