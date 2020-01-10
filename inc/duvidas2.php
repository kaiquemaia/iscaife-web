<form id="duvida" data-toggle="validator" action="enviar-duvida.php" method="POST" >
							<h1><center>Dúvidas</center></h1>
							<h4 class=" text-center">Sobre HoLEP e cirurgia robótica</h4><br>
									<fieldset>
										<div class="form-group col-md-6">
											<input type="text" id="name" name="nome" placeholder="Seu nome" class="form-control" required data-error="NEW ERROR MESSAGE">
										</div>
										<div class="form-group col-md-6">
											<input type="tel" id="phone"  name="telefone" placeholder="Seu Telefone" class="form-control" required data-error="NEW ERROR MESSAGE">
										</div>
										<div class="form-group col-md-12">
											<input type="email" id="email" name="email" placeholder="Seu E-mail" class="form-control" required data-error="NEW ERROR MESSAGE">
										</div>
										<div class="form-group col-md-12" row="3">
										<textarea class="form-control" name="duvida" placeholder="Sua dúvida" rows="3" required ></textarea>
										</div>

										<div id="msgSubmit" class="form-message hidden"></div>
										<span class="info"><i class="fa fa-info-circle main-color" aria-hidden="true"></i> Respondemos o mais rápido possível</span><br>
										<button class="btn btn-default main-bg-color" type="submit" id="form-submit2">ENVIAR</button>
									</fieldset>
								</form>