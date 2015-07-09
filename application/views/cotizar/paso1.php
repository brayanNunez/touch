<!-- START CONTENT -->
 <section id="content">

    <!--start container-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title"><?=label('tituloCotizacion');?></a></h5>
                
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
                              <!-- <div class="card"> -->

                                    

                                              <div class="col s12 m12 l12">
                                              <a id="comentariosCotizacion" href="#" data-activates="chat-out" class="right waves-effect waves-block waves-light chat-collapse">
                                              <i class="mdi-communication-chat"></i></a>

                                                <div class="row">
                                                  <div class="col s12">
                                                    <ul class="tabs tab-demo z-depth-1">
                                                      <li class="tab col s3"><a id="botonPaso1" class="active" href="#paso1"><?=label('paso1');?></a>
                                                      </li>
                                                      <li class="tab col s3"><a id="botonPaso2" href="#paso2"><?=label('paso2');?></a>
                                                      </li>
                                                      <li class="tab col s3"><a id="botonPaso3" href="#paso3"><?=label('paso3');?></a>
                                                      </li>
                                                      <li class="tab col s3"><a id="botonPaso4" href="#paso4"><?=label('paso4');?></a>
                                                      </li>
                                                    </ul>
                                                  </div>
                                                    <!-- <div class="card"> -->
                                                      <div class="col s12">
                                                        <div id="paso1" class="card col s12">
                                                          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                                          <ol>
                                                            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                                                            <li>Aliquam tincidunt mauris eu risus.</li>
                                                            <li>Vestibulum auctor dapibus neque.</li>
                                                          </ol>
                                                          <div class="atras_adelante">
                                                            <a class="siguiente right" href="#" onclick="darclick(2);"><?=label('siguiente');?></a>
                                                          </div>
                                                        </div>
                                                        <div id="paso2" class="card col s12">
                                                          <dl>
                                                            <dt>Definition list</dt>
                                                            <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</dd>
                                                            <dt>Lorem ipsum dolor sit amet</dt>
                                                            <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</dd>
                                                          </dl>
                                                          <div class="atras_adelante">
                                                            <a class="siguiente right" href="#" onclick="darclick(3);"><?=label('siguiente');?></a>
                                                            <a class="anterior left" href="#" onclick="darclick(1);"><?=label('anterior');?></a>
                                                          </div>
                                                          
                                                        </div>
                                                        <div id="paso3" class="card col s12">
                                                          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies
                                                            mi vitae est. Mauris placerat eleifend leo.</p>
                                                           <div class="atras_adelante">
                                                            <a class="siguiente right" href="#" onclick="darclick(4);"><?=label('siguiente');?></a>
                                                            <a class="anterior left" href="#" onclick="darclick(2);"><?=label('anterior');?></a>
                                                          </div>

                                                          </div>
                                                        <div id="paso4" class="card col s12">
                                                          <ul>
                                                            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                                                            <li>Aliquam tincidunt mauris eu risus.</li>
                                                            <li>Vestibulum auctor dapibus neque.</li>
                                                          </ul>
                                                          <div class="atras_adelante">
                                                            <a class="anterior" class="left" href="#" onclick="darclick(3);"><?=label('anterior');?></a>
                                                          </div>
                                                        </div>
                                                      </div>

                                                      <script type="text/javascript">
                                                          function darclick(paso){ 

                                                          var obj=document.getElementById('botonPaso' + paso);

                                                          obj.click();

                                                          }
                                                      </script>

                                                    <!-- </div> -->
                                                </div>

                                              </div>

                                    
                              <!-- </div> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<!--end container-->
</section>
<!-- END CONTENT-->
