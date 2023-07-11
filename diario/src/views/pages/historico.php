<?php $render('header');?>
<div class="conteudo">
    <section class="caixa">
        <div class="thead"><i class="ico lista"></i> Histórico Financeiro do Cliente</div>
        <div class="base-lista">
            <div class="nome-cliente">
            <?php foreach($nome as $nomes):?> 
               <h2><?=$nomes->getNome();?></h2>
            <?php endforeach;?>
                <p>Cliente</p>
            </div>
            <div class="lst">
                <form action="" method="">
                    <div class="rows">
                        <div class="col-10">
                            <select name="txt_id_empresa">
                                <option selected>Selecione o tipo...</option>
                                <option value="1">Deposito</option>
                                <option value="2">Saque</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <input type="submit" class="btn" value="pesquisar">
                        </div>
                    </div>
                </form>
            </div>
            <div class="tabela-responsiva">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th align="left">Tipo de movimento</th>
                            <th align="center">Valor (R$)</th>
                            <th align="center">Data</th>
                            <th align="center">Ação</th>
                        </tr>
                    </thead>
                    <tbody>  
                    <?php foreach($dados as $cliente):?>                      
						<tr>
                            <td><?= $cliente->getTipo()== 0 ? "Deposito" : "Saque";?></td>
                            <td align="center"><?=$cliente->getValor();?></td>
                            <td align="center"><?=$cliente->getData();?></td>
                            <td align="center">
                                <a href="<?= $base;?>/cliente/historico/editar/<?=$cliente->getTipo();?>" class="btn alterar">Editar</a>
                                <a href="<?= $base;?>/cliente/saque" class="btn excluir">Excluir</a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
            <p class="nao-encontrado">Nenhum registro encontrado</p>
        </div>
</div>
</section>
</div>
<?php $render ('footer');?>