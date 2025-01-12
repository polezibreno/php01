<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Questão 05</title>
</head>

<body>
    <div class="container my-3">
        <p><a href="index.html">Voltar ao Índice</a></p>
        <h1 class="display-2">Questão 05</h1>
        <p class="lead">Usando somente estilos baseados em classes do Bootstrap 5, aprimore o formulário de login da
            questão anterior, substituindo os títulos (labels) por placeholders e adicionando complementos com ícones
            sugestivos nos campos "Usuário (E-mail)", "Senha" e "Perfil".</p>
        <hr>
    </div>
    <!-- Valor: 1.5 pontos -->
    <!-- FAZER AQUI -->
    <div class="container col-4  text-start mt-5 mb-5">
        <form>
            <h1 class="mb-5 text-center">Login</h1>
            <div class="mb-3 input-group">
                <span class="input-group-text ">
                    <i class="bi bi-person"></i>
                </span>
                <input type="email" id="email" class="form-control form-control-lg" placeholder="Usuário (E-mail)">
                <!-- <label for="email">Usuário (E-mail)</label> -->
            </div>

            <div class="mb-3 input-group">
                <span class="input-group-text ">
                    <i class="bi bi-shield-lock"></i>
                </span>
                <input type="password" id="senha" class="form-control form-control-lg" placeholder="Senha">
                <!-- <label for="senha" class="form-label">Senha</label> -->
            </div>

            <div class="mb-3 input-group">
                <span class="input-group-text">
                    <i class="bi bi-person-gear"></i>
                </span>
                <select class="form-select form-control-lg" id="opcoes">
                    <option selected disabled>Selecione um perfil...</option>
                    <option value="opcao1">Administrador</option>
                    <option value="opcao2">Gerente</option>
                    <option value="opcao3">Usuário</option>
                </select>
                <!-- <label for="perfil" class="form-label form-control-lg">Perfil</label> -->
            </div>

            <div class="mb-3 form-check form-switch">
                <input type="checkbox" id="Lembrar" class="form-check-input">
                <label for="lembrar" class="form-check-label">Lembrar de mim</label>
            </div>

            <button type="submit" class="btn btn-primary">Entrar</button>

            <div class="my-3 ">
                <a href="#" class="text-decoration-none">Esqueci minha senha</a><br>
                <a href="#" class="text-decoration-none">Quero me cadastrar</a>
            </div>
        </form>
    </div>
</body>

</html>
