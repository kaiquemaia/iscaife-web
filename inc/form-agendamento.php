<?php
    function cadastraUsuario($value){
        $arquivo = "json/usuarios.json";

        $jsonUsuarios = file_get_contents($arquivo);

        $arrayUsuarios = json_decode($jsonUsuarios, true);

        array_push($arrayUsuarios["usuarios"], $value);

        $jsonUsuarios = json_encode($arrayUsuarios, JSON_UNESCAPED_SLASHES);

        $cadastrou = file_put_contents($arquivo, $jsonUsuarios);

        return $cadastrou;
    }

    
    if($_POST){
        if($_FILES){
            if($_FILES["avatar"]["error"] == UPLOAD_ERR_OK){
               

                $pastaUploads = $raizProjeto . $caminhoJson;

                $caminhoUpload = $pastaUploads . $nomeImg;

                $moveu = move_uploaded_file($nomeTmp, $caminhoUpload);
            }
        }

        $nome = $_POST["nome"];
        $email = $_POST["email"];
		$telefone = $_POST["telefone"];
		$date = $_POST["date"];
		$time = $_POST["time"];

        $novoUsuario = [
            "nome" => $nome,
            "email" => $email,
			"telefone" => $telefone,
			"date" => $date,
			"time" => $time,

        ];

        $cadastrou = cadastraUsuario($novoUsuario);
    }
?>

<span id="back-top" class="fa fa-angle-up main-bg-color"></span>
	    <div class="popup-holder">
	    	<div id="popup1" class="lightbox">
				<!-- quote form start here -->
				<section class="quote-form" style="background-image: url(images/img02.jpg);">
					<h2 class="form-heading text-center text-uppercase">Agende sua consulta</h2><br>
					<span class="form-title text-center">Faça o pré-agendamento da sua consulta no formulário abaixo e aguarde que entraremos em contato com você para confirmar o agendamento. <br><br> Você também pode agendar pelo telefone <br><h4><b>(11) 2306-2848</b> </h4><br>ou WhatsApp <br> <h4><b>(11) 98934-5788</b></h4> </span>
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