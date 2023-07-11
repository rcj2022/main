<?php $render('header'); ?>
<div class="main-content container-fluid">
  <div class="card">
    <div class="card-content">
      <div class="card-body">
        <form action="">
          <div class="form-group">
            <h4 class="card-title">Matricula de Aluno(a)s</h4>
            <a class="btn btn-outline-warning" href="<?=$base;?>aluno">voltar para Alunos</a>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="input-group">
                    <label class="input-group-text" for="inputGroupSelect01">Escola</label>
                    <select class="form-select" id="inputGroupSelect01">
                      <option selected>selecione...</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="input-group">
                    <label class="input-group-text" for="inputGroupSelect01">Turma</label>
                    <select class="form-select" id="inputGroupSelect01">
                      <option selected>selecione...</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">ano</label>
                    <select class="form-select" id="inputGroupSelect01">
                      <option selected>selecione...</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <button class="btn btn-outline-primary">Selecionar turma</button>
        </form>
      </div>
    </div>
  </div>
  <!-- Table head options start -->
  <div class="row" id="table-head">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Alunos sem turmas</h4>
        </div>
        <div class="card-content">
          <!-- table head dark -->
          <div class="table-responsive">
            <table class="table mb-0">
              <thead class="thead-dark">
                <tr>
                  <th>Nome</th>
                  <th>Sexo</th>
                  <th>Data de Nascimento</th>
                  <th>Idade</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody>




              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<?php $render('footer'); ?>