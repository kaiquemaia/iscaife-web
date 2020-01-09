<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("inc/head.php") ?>
</head>
<body class="website">
    <?php require_once("inc/header.php") ?>


    <div class="container py-5 mt-5 ">

    <div class="card bg-dark text-white text-center p-3 mb-5 ">
              <blockquote class="blockquote mb-0">
                <h5>Alterações no site</h5>
                <p style="font-size: 14px">Formulário para alterações dentro do site</p>
                
                
              </blockquote>
            </div>

            
        <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
            });
        }, false);
        })();
        </script>
        
    </div>

    <div class="container  mt-2 px-4">
  <div class="row ">

  <!-- Formulário -->
    <div class="col-sm-8 formsite">
    <form class="needs-validation validated" novalidate>
        <div class="form-row">
            <div class="col-md-6 mb-3">
            <label for="validationCustom01">Qual a página?</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="Cole o link da página" required>
            <div class="valid-feedback">
                Ok!
            </div>
            </div>
            <div class="col-md-6 mb-3">
            <label for="validationCustom02">Grau de importancia</label>
            <select class="custom-select" required>
                <option value="1">Prorrogável</option>
                <option value="1">Normal</option>
                <option value="2">Urgente</option>
            </select>
            <div class="valid-feedback">
                Ok!
            </div>
            </div>

            <div class="col-md-12 mb-3">
            <label for="validationCustom03">E-mail</label>
            <input type="email" class="form-control" id="validationCustom04" placeholder="Digite seu E-mail" required>
            <div class="valid-feedback">
                Ok!
            </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 mb-3">
            <label for="validationCustom03">Alteração</label>
            <textarea type="text" class="form-control" rows="5" cols="33" id="validationCustom03" placeholder="Digite a alteração que deseja no site" required>
            </textarea>
            <div class="invalid-feedback">
                Por favor, descreva a alteração no site
            </div>
            </div>
            
            
        </div>
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
                Termos e condições de desenvolvimento
            </label>
            <div class="invalid-feedback">
                É necessário que aceite os termos
            </div>
            </div>
        </div>
        <button class="btn btn-warning" type="submit">Enviar</button>
        </form>

    </div>
    <div class="col-sm mt-4">
        <div class="progress" style="height: 25px">
        <p></p>
            <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>Prorrogável<br><br>
            <div class="progress" style="height: 25px">
                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>Normal<br><br>
            
            <div class="progress" style="height: 25px">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>Urgente
        </div>
   
  </div>
</div>
    
</body>
</html>