

				<!-- quote form start here -->
				<section class="quote-form" style="background-image: url(images/img02.jpg);">
					<h2 class="form-heading text-center text-uppercase">Agende sua consulta</h2><br>
					<span class="form-title text-center">Faça o pré-agendamento abaixo e aguarde a confirmação da sua consulta. <br><br> Você também pode agendar pelo telefone <br><h4><b><a href="tel:1123062848">(11) 2306-2848</a></b> </h4><br>ou WhatsApp<br> <h4><b><a href="https://wa.me/11989345788">(11) 98934-5788</a></b></h4> </span>
					<form id="form-popup" data-toggle="validator" action="enviarEmail.php" method="POST" enctype="multipart/form-data" >
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
										<select type="select" id="time" name="time" placeholder="Horário" class="form-control" required data-error="NEW ERROR MESSAGE">
											<option >Manhã</option>
											<option>Tarde</option>
											<option>Noite</option>
										</select>

										</div>

										<div id="msgSubmit" class="form-message hidden"></div>
										<span class="info"><i class="fa fa-info-circle main-color" aria-hidden="true"></i> Respondemos o mais rápido possível</span>
										<button class="btn btn-default main-bg-color" type="submit" id="form-submit">ENVIAR</button>
									</fieldset>
								</form>
				</section>