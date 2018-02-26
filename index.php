
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>Login</title>
  </head>
  <body>
<!-- Logo da empresa -->
    <div class="container-fluid mt-5 mx-auto logo">
      <div class="row">
        <div class="col">
          <img class="logo" src="img/logo.png" alt="Floripark">
        </div>
      </div>
    </div>
<!-- Formulario de login -->
    <div class="container mx-auto mt-5">
      <div class="row">
        <form class="login-form col-md-5">
          <div class="form-group">
            <label for="matricula">Matrícula:</label>
            <input type="text" class="form-control form-control-lg" id="matricula" placeholder="Digite sua matrícula aqui" required>
          </div>
          <div class="form-group mt-3">
            <label for="password">Senha:</label>
            <input type="password" class="form-control form-control-lg" id="password" placeholder="Digite sua senha aqui" required>
          </div>
            <button type="submit" class="btn btn-outline-primary btn-lg col-md-4 offset-md-2 mt-3">Entrar</button>
            <button type="button" class="btn btn-outline-primary btn-lg col-md-4 mt-3" data-toggle="modal" data-target="#cadastroModal" >Cadastrar</button>
        </form>
      </div>
    </div>
<!-- Modal de cadastro de usuários -->
  <div class="container-fluid">
    <div class="modal fade" id="cadastroModal" tabindex="-1" role="dialog" aria-labelledby="cadastroModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="cadastroModalLabel">Cadastrar usuário</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="user-name" class="col-form-label">Nome completo:</label>
                <input type="text" class="form-control form-control-lg" id="user-name" required>
              </div>
              <div class="form-group">
                <label for="user-id" class="col-form-label">Matrícula:</label>
                <input class="form-control form-control-lg" id="user-id" required></input>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary btn-lg col-md-4 offset-md-2" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-outline-primary btn-lg col-md-4">Cadastrar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
