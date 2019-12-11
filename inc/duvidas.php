<section class="bg-img-full bg-img-parallax quote-section pad-top-lg pad-bottom-lg" style="background-image: url(assets/images/clinica/7.jpeg);">
				<span class="overlay"></span>
				<div class="container">
					<div class="row">
						<div class="col-cs-12 col-sm-10 col-lg-8 col-sm-push-5 col-lg-push-2 text-center">
						
						<form id="contactForm" data-toggle="validator" action="enviar-duvida.php" method="POST" >
							<h1><center>Dúvidas</center></h1>
									<fieldset>
										<div class="form-group col-md-6">
											<input type="text" id="name" name="nome" placeholder="Seu nome" class="form-control" required data-error="NEW ERROR MESSAGE">
										</div>
										<div class="form-group col-md-6">
											<input type="email" id="email" name="email" placeholder="Seu E-mail" class="form-control" required data-error="NEW ERROR MESSAGE">
										</div>
										<div class="form-group col-md-12" row="3">
										<textarea class="form-control" name="textarea" placeholder="Sua dúvida" rows="3" required data-error="NEW ERROR MESSAGE"></textarea>
										</div>

										<div id="msgSubmit" class="form-message hidden"></div>
										<span class="info"><i class="fa fa-info-circle main-color" aria-hidden="true"></i> Respondemos o mais rápido possível</span><br>
										<button class="btn btn-default main-bg-color" type="submit" id="form-submit">ENVIAR</button>
									</fieldset>
								</form>
								
						</div>
					</div>
				</div>
			</section>