<span id="back-top" class="fa fa-angle-up main-bg-color"></span>
	    <div class="popup-holder">
	    	<div id="popup1" class="lightbox">
				<!-- quote form start here -->
				<section class="quote-form" style="background-image: url(images/img02.jpg);">
					<h2 class="form-heading text-center text-uppercase">Agende sua consulta</h2>
					<span class="form-title text-center">Tire suas dúvidas</span>
					<form id="form-popup" data-toggle="validator" action="enviarEmail.php" method="POST" >
									<fieldset>
										<div class="form-group">
											<input type="text" id="name" name="nome" placeholder="Seu nome" class="form-control" required data-error="NEW ERROR MESSAGE">
										</div>
										<div class="form-group">
											<input type="email" id="email" name="email" placeholder="Seu E-mail" class="form-control" required data-error="NEW ERROR MESSAGE">
										</div>
										<div class="form-group">
											<input type="tel" id="phone" name="telefone" placeholder="Seu Telefone" class="form-control" required data-error="NEW ERROR MESSAGE">
										</div>
										<div class="form-group">
										<p>Data da consulta:</p>
											<input type="date" id="date" name="date" placeholder="Data" class="form-control" required data-error="NEW ERROR MESSAGE">
										</div>
										<div class="form-group">
										<p>Horário:</p>
											<input type="time" id="date" name="date" placeholder="Data" class="form-control" required data-error="NEW ERROR MESSAGE">
										</div>

										<div id="msgSubmit" class="form-message hidden"></div>
										<span class="info"><i class="fa fa-info-circle main-color" aria-hidden="true"></i> Respondemos o mais rápido possível</span>
										<button class="btn btn-default main-bg-color" type="submit" id="form-submit">ENVIAR</button>
									</fieldset>
								</form>
				</section>