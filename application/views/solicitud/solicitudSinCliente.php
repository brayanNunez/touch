<!-- START CONTENT -->
<section id="content">
   <!--start container-->
   <div id="breadcrumbs-wrapper" class=" grey lighten-3">
      <div class="container">
         <div class="row">
            <div class="col s12 m12 l12">
               <h1 class="breadcrumbs-title"><?=label('tituloListaCotizaciones');?></h1>
            </div>
         </div>
      </div>
   </div>
   <!--breadcrumbs end-->
   <div class="container">
   <div id="chart-dashboard">
      <div class="row">
         <div class="col s12 m12 l12">
            <div id="submit-button" class="section">
               <div class="row">
                  <div class="col s12 m12 l12">
                     <div class="card lista-elementos">

                     <h1>Aqui van las solicitides sin cotizador</h1>



                      </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--end container-->
</section>
<!-- END CONTENT-->
<!-- lista modals -->
<div id="Elminar" class="modal">
   <div class="modal-header">
      <p><?=label('nombreSistema');?></p>
   </div>
   <div class="modal-content">
      <p><?=label('confirmarEliminarCotizacion');?></p>
   </div>
   <div class="modal-footer">
      <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close"><?=label('cancelar');?></a>
      <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
   </div>
</div>
<div id="finalizar" class="modal">
   <div class="modal-header">
      <p><?=label('nombreSistema');?></p>
   </div>
   <div class="modal-content">
      <p><?=label('confirmarFinalizarCotizacion');?></p>
   </div>
   <div class="modal-footer">
      <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close"><?=label('cancelar');?></a>
      <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
   </div>
</div>
<div id="duplicar" class="modal">
   <div class="modal-header">
      <p><?=label('nombreSistema');?></p>
   </div>
   <div class="modal-content">
      <p><?=label('confirmarDuplicarCotizacion');?></p>
   </div>
   <div class="modal-footer">
      <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close"><?=label('cancelar');?></a>
      <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
   </div>
</div>
<!--Fin lista modals -->