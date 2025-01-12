<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" defer></script>

  <title>Funcionários</title>
</head>
<body>

  <div class="container p-5">
    <h1 class="text-center mb-5">Funcionários</h1>
    
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">NOME</th>
          <th scope="col">EMAIL</th>
          <th scope="col">EQUIPE</th>
          <th scope="col">USUARIO</th>
        </tr>
      </thead>

      <tbody>
        <?php
        include "conecta.php";

        $sql = "SELECT f.id, f.nome, f.email, e.equipe_nome AS equipe, u.usuario_nome AS usuario
                FROM funcionario f
                INNER JOIN usuario u ON f.usuario_id = u.id
                INNER JOIN equipe e ON f.equipe_id = e.id
                ORDER BY f.id";

        $result = mysqli_query($conexao, $sql);

        if (!$result) {
          die("Erro na consulta SQL: " . mysqli_error($conexao));
        }

        while ($linha = mysqli_fetch_assoc($result)) {
          echo "
            <tr>
              <th>" . $linha['id'] . "</th>
              <td>" . $linha['nome'] . "</td>
              <td>" . $linha['email'] . "</td>
              <td>" . $linha['equipe'] . "</td>
              <td>" . $linha['usuario'] . "</td>
            </tr>";
        }
        ?>
      </tbody>
    </table>
    
    <!--butons-->
    <div class="col-lg-12 col-xl-12 mt-3 input-group">
      <button class="btn btn-primary "><a class="text-white text-decoration-none" href="cadfuncionario.php">CADASTRAR</a></button>
      <button class="btn btn-success "><a class="text-white text-decoration-none" href="editfuncionario.php">EDITAR</a></button>
    </div>
    <!--butons - fim -->

  </div>

</body>
</html>
