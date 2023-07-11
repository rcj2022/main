<?php $render('header'); ?>
<div class="main-content container-fluid">    
<div class="card">
                <div class="card-content">
                <div class="card-body">
                    <div class="form-group">
                    <h4 class="card-title">Cadastro de Aluno</h4>

                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#inlineForm">
                        Novo Aluno(a)
                    </button>
                    <a href="<?=$base;?>aluno/matricula" class="btn btn-outline-success">
                        Matricula(a)</a>

                    <!--login form Modal -->
                    <div class="modal fade text-left" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel33">Cadastro de aluno(a)</h4>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </button>
                            </div>
                              <form method='POST' action="<?=$base;?>aluno">
                                <div class="modal-body">                                   
                                    <label>Nome: </label>
                                    <div class="form-group">
                                    <input type="text" name="nome" class="form-control">
                                    </div>
                                    <label>Sexo: </label>
                                    <div class="form-group">
                                    <input type="text" name="sexo" class="form-control">
                                    </div>
                                    <label>Data de Nascimento: </label>
                                    <div class="form-group">
                                    <input type="text" name="dataNascimento" class="form-control">
                                    </div>
                                    <label>Idade: </label>
                                    <div class="form-group">
                                    <input type="text" name="idade" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Cancelar</span>
                                    </button>
                                    <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Salvar</span>
                                    </button>
                                </div>
                              </form>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
                <!-- Table head options start -->
                <div class="row" id="table-head">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">Minhas turmas</h4>
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
                            <?php foreach ($alunos as $aluno):?>                        
                        <tr>
                            <td><?= $aluno->getNome();?></td>
                            <td><?= $aluno->getSexo();?></td>
                            <td><?= $aluno->getDataNascimento();?></td>
                            <td><?= $aluno->getIdade();?></td>
                            
                            <td align="center">                              
                                <a href="<?= $base;?>aluno/visualizar/<?=$aluno->getId();?>"
                                    class="btn">Editar</a>
                                <a href="<?= $base;?>aluno/delete/<?=$aluno->getId();?>"
                                    class="btn alterar">Excluir</a>
                            </td>
                            
                        </tr>
                        <?php endforeach;?>
                                                            
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                </div>
<?php $render('footer'); ?>