<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" defer></script>

  <script src="script.js"></script>

  <title>Cadastro Funcionário</title>
  
</head>

<body>
  
  <div class="container p-5">
    <h1 class="text-center mb-5">Cadastro de Funcionário</h1>

    <form action="funcionario.php" method="POST" class="needs-validation" onsubmit="return validarFormulario(event)">
      <!--page geral-->
      <div class="row">
        <div class="col-12 col-lg-8 col-xl-6 mx-auto">



          <!--campo nome-->
          <div class="row">
            <div class="col input-group">
              <span class="input-group-text">
                <i class="bi bi-person"></i>
              </span>
              <input class="form-control is-invalid" type="text" name="nome" id="nome" placeholder="Nome Completo" required>
              <div class="invalid-feedback">
                Campo Obrigatório.
              </div>
            </div>
          </div>
          <!--campo nome - fim -->

          <!--campo email-->
          <div class="row mb-3">
            <div class="col-lg-6 col-xl-6 mt-3">
              <div class="col input-group">
                <div class="input-group">
                  <span class="input-group-text">
                    <i class="bi bi-envelope-at"></i>
                  </span>
                  <input class="form-control is-invalid" type="email" name="email" id="email" placeholder="Email" required>
                  <div class="invalid-feedback">
                    Campo Obrigatório.
                  </div>
                </div>
              </div>
            </div>
          <!--campo email - fim -->

            <!--campo cpf-->
            <div class="col-lg-6 col-xl-6 mt-3">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-text">
                    <i class="bi bi-person-vcard"></i>
                  </span>
                  <input class="form-control is-invalid" type="text" name="cpf" id="cpf" placeholder="CPF" required>
                  <div class="invalid-feedback">
                    Campo Obrigatório.
                  </div>
                </div>
              </div>
            </div>
            <!--campo cpf - fim -->

            <!--campo equipe-->
            <div class="col-lg-6 col-xl-6 mt-3">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-text">
                    <i class="bi bi-people"></i>
                  </span>
                  <select class="form-select  form-control is-invalid" name="equipe" id="equipe" required> 
                    <option value="" disabled selected>Selecione a Equipe</option>
                    <?php
                      include "conecta.php";
                      $sql = "SELECT * FROM equipe";
                      $dados = mysqli_query($conexao, $sql);
                      foreach ($dados as $dado) {
                        echo '<option value="' . $dado["id"] . '" >' . $dado["equipe_nome"] . '</option>';
                      }
                    ?>
                  </select>
                  <div class="invalid-feedback">
                    Campo Obrigatório.
                  </div>
                </div>
              </div>
            </div>
            <!--campo equipe - fim -->
            
            <!--campo usuario-->
            <div class="col-lg-6 col-xl-6 mt-3">
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-text">
                    <i class="bi bi-people"></i>
                  </span>
                  <select class="form-select  form-control is-invalid" name="usuario" id="usuario" required> 
                    <option value="" disabled selected>Selecione o Usuario</option>
                    <?php
                      include "conecta.php";
                      $sql = "SELECT * FROM usuario";
                      $dados = mysqli_query($conexao, $sql);
                      foreach ($dados as $dado) {
                        echo '<option value="' . $dado["id"] . '" >' . $dado["usuario_nome"] . '</option>';
                      }
                    ?>
                  </select>
                  <div class="invalid-feedback">
                    Campo Obrigatório.
                  </div>
                </div>
              </div>
            </div>
            <!--campo usuario - fim -->

            <!--buttons-->
            <div class="col-lg-12 col-xl-12 mt-3 input-group" >
              <input class="btn btn-primary " type="submit" value="Salvar">
              <input class="btn btn btn-secondary " type="reset" value="Limpar">
                <button class="btn btn-success ">
                  <a class="text-white text-decoration-none"  href="listarfuncionario.php">
                    Voltar
                  </a>
                </button>
              </div>                      
            <!--campo buttons - fim -->

        </div>     
      </div>  
      <!--page geral - fim -->              
    </form>
    

  </div>


  




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


  

</body>

</html>
