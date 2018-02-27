
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
    <div class="non-printable">
<!-- navbar -->
    <?php require "navbar.html" ?>

<!-- Tabela com solicitações de manutenção -->
  <div class="container mt-5">
    <table class="table table-hover table-sm">
      <thead>
        <tr>
          <th scope="col">Data</th>
          <th scope="col">Placa</th>
          <th scope="col">Nome</th>
          <th scope="col">Tipo</th>
          <th scope="col">Km</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>03/01/2005</td>
          <td>ABC1234</th>
          <td>Jefferson Mendes</td>
          <td> Carro </td>
          <td> 100000 </td>
          <td>
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#manutencaoModal">Ver</button>
            <button type="button" class="btn btn-outline-success">Aceitar</button>
            <button type="button" class="btn btn-outline-danger">Recusar</button>
          </td>
        </tr>
        <tr>
          <td>03/01/2005</td>
          <td>ABC1234</th>
          <td>Jefferson Mendes</td>
          <td> Carro </td>
          <td> 100000 </td>
          <td>
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#manutencaoModal">Ver</button>
            <button type="button" class="btn btn-outline-success">Aceitar</button>
            <button type="button" class="btn btn-outline-danger">Recusar</button>
          </td>
        </tr>
        <tr>
          <td>03/01/2005</td>
          <td>ABC1234</th>
          <td>Jefferson Mendes</td>
          <td> Carro </td>
          <td> 100000 </td>
          <td>
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#manutencaoModal">Ver</button>
            <button type="button" class="btn btn-outline-success">Aceitar</button>
            <button type="button" class="btn btn-outline-danger">Recusar</button>
          </td>
        </tr>
      </tbody>
    </table>
    <!-- Paginação -->
    <div class="pag mt-5 mx-auto ">
      <nav aria-label="...">
        <ul class="pagination">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active">
            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</div>

<!-- Modal de detalhes da solicitação de manutenção -->
<div class="printable">
  <div class="container-fluid">
    <div class="modal fade" id="manutencaoModal" tabindex="-1" role="dialog" aria-labelledby="manutencaoModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="manutencaoModalLabel">Detalhes da Manutenção</h5>
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
            <button type="button" class="btn btn-outline-secondary btn-lg col-md-4">Imprimir</button>
            <button type="button" class="btn btn-outline-success btn-lg col-md-4">Validar</button>
            <button type="button" class="btn btn-outline-danger btn-lg col-md-4">Recusar</button>
          </div>
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
