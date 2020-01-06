<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agendamento</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <style>

        body {
            display: flex;
            -ms-flex-align: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            padding-top: 40px;
            padding-bottom: 40px;
            height: 100%;
    
        }
        .container {

       
        position: relative;
       
        
       
        justify-content: center;
        }

        .btn {
            padding: 50px;
            width: 33%;
            margin: 0px;
        }


        .fa {
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            font-size: 30px;
            padding: 5px;
        }

        h6 {
            color: #fff;
        }

        @media only screen and (max-width: 768px) {
        .btn {
            width: 100%;
            margin: 5px;
  }

    }
        
    </style>
    
    
</head>

<body class="agendamento">
    

    <div class="container ">
    <a href="tel:1123062848" class="btn btn-light btn-lg " role="button" aria-pressed="true"><i class="fa fa-phone"></i>Por telefone</a>
    <a href="https://wa.me/11989345788" class="btn btn-light btn-lg" role="button" aria-pressed="true"><i class="fa fa-whatsapp"></i>Por WhatsApp</a>
    <a  class="btn btn-light btn-lg" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" ><i class="fa fa-envelope"></i>Por E-mail</a>
    

    <div class="collapse py-4" id="collapseExample">
  <div class="card card-body container py-4">
    
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


				<!-- quote form start here -->
				
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
				

  </div>
</div>

<div class="container py-5">
    <center><a href="https://www.iscaife.com.br/"><h6>Voltar para Home</h6></a></center>
</div>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>