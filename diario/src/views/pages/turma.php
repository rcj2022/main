<?php $render('header'); ?>
<div class="main-content container-fluid">    
<div class="card">
                <div class="card-content">
                <div class="card-body">
                    <div class="form-group">
                    <h4 class="card-title">Cadastro de turma</h4>

                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#inlineForm">
                        Nova Turma
                    </button> 
                     <a href="<?=$base;?>aluno" class="btn btn-outline-success">
                        Aluno(a)</a>

                    <!--login form Modal -->
                    <div class="modal fade text-left" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel33">Cadastro de turma</h4>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </button>
                            </div>
                              <form method='POST' action="<?=$base;?>turma">
                                <div class="modal-body">
                                    <label>Unidade de Ensino: </label>
                                    <div class="form-group">
                                    <input type="text" name="escola" class="form-control">
                                    </div>
                                    <label>Nome da turma: </label>
                                    <div class="form-group">
                                    <input type="text" name="nomeDaTurma" class="form-control">
                                    </div>
                                    <label>Turno: </label>
                                    <div class="form-group">
                                    <input type="text" name="turno" class="form-control">
                                    </div>
                                    <label>Ano letivo: </label>
                                    <div class="form-group">
                                    <input type="text" name="anoLetivo" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Cancelar</span>
                                    </button>
                                    <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Cadastrar</span>
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
                                <th>Escola</th>
                                <th>Turma</th>
                                <th>Ano letivo</th>
                                <th>Qtd Alunos</th>                
                                <th>ACTION</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($turmas as $turma):?>                        
                        <tr>
                            <td><?= $turma->getEscola();?></td>
                            <td><?= $turma->getNomeDaTurma();?></td>
                            <td><?= $turma->getAnoLetivo();?></td>
                            <td> <?=0;?></td>
                            <td align="center">                               
                                <a href="<?= $base;?>turma/visualizar/<?=$turma->getId();?>"
                                    class="btn">Editar</a>
                                <a href="<?= $base;?>turma/delete/<?=$turma->getId();?>"
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