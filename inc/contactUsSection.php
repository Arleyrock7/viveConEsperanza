<div class="contactUsSection">
	<div  class="row" >
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="contactUsBackground">
				<div class="container">
					
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<h2>NO TE PIERDAS 
							<br><span>NINGÚN DETALLE</span></h2>
								<div id="texto2Diferente">
									<p id="texto">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
										Illum nobis quisquam itaque eligendi, alias quia necessitatibus, 
										assumenda omnis voluptatem accusamus, quibusdam nam ex mollitia sequi. 
										Quam facilis cumque dolor reprehenderit!
									</p>
								</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 formularioIndex">
							<form>
								  <div class="form-group">
								    		<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nombre completo:">
								  </div>
									
								

								  <div class="form-group">
								   			 <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Correo electrónico:">
								  </div>
								  
								  <div id="texto2Diferente">
									  	<p class="terminosCondiciones" id="texto">
											Acepto los <!--<span id="terminos"><a href="">términos y condiciones</a></span>-->

												<!-- Button trigger modal -->
													<button type="button" data-toggle="modal" data-target="#myModal">
													  <p>términos y condiciones</p>
													</button>
										</p>
								  </div>

								  	<button type="submit" class="btn btn-default btn-lg"><div id="textoBoton">QUIERO RECIBIR MÁS INFORMACIÓN</div></button>
								  

							</form>
						</div>
					</div>

				</div>
		</div>
	</div>












<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Términos y condiciones</h4>
      </div>
      <div class="modal-body">
        <?php include'terminosCondiciones.php'; ?>
      </div>
      <div class="modal-footer">
        <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>