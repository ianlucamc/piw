<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulários em HTML</title>
    <link rel="stylesheet" href="../trabalho-02/bootstrap/bootstrap.css">
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/validacao.js"></script>
  </head>

  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-4 mx-auto py-5">

          <h3>Autenticação</h3>
          <hr>
          <form action="form-controle.php" method="post" id="formulario">

            <label>Login:</label><br>
            <input type="text" name="login" value="" class="form-control obrigatorio">
            <span class="text-danger"></span>
            <br>

            <label>Senha:</label><br>
            <input type="password" name="senha" value="" class="form-control obrigatorio">
            <span class="text-danger"></span>
            <br>

            <button type="submit" class="mt-3 btn btn-primary">Entrar</button>
            <br>
            <a href="#">Recuperar senha</a>

          </form>

        </div>
      </div>
    </div>

  </body>
</html>
