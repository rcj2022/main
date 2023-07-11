<?php $render('header');?>
<div class="conteudo">
    <section class="caixa">
        <div class="thead"><i class="ico lista"></i> Lista de Clientes Cadastrados</div>
        <div class="base-lista">
            <div class="lst">
                <form action="" method="">
                    <div class="rows">
                        <div class="col-4">
                            <a href="<?=$base;?>cliente/cadastro" class="btn">Adicionar Cliente </a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="rows">               
            </div>
            <div class="tabela-responsiva">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabela" id="dataTable">
                    <thead>
                        <tr>
                            <th align="left">Nome</th>
                            <th align="left">Banca</th>
                            <th align="left">Conta</th>
                            <th align="left">Saldo (R$)</th>
                            <th align="left">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($clientes as $cliente):?>                        
                        <tr>
                            <td><?= $cliente->getNome();?></td>
                            <td><?= $cliente->getBanca();?></td>
                            <td><?= $cliente->getConta();?></td>
                            <td>R$ <?=$cliente->getSaldo();?></td>
                            <td>
                                <a href="<?= $base;?>cadastros/editar/<?=$cliente->getId();?>"
                                    class="btn alterar">Editar</a>
                                <a href="<?= $base;?>cadastros/excluir<?=$cliente->getId();?>"
                                    class="btn excluir">Excluir</a>                                
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <div class="paginacao">

        <?php for($q=1;$q<=$paginas;$q++): ?>
        <?php if($pAtual == $q): ?>
        <a href="<?= $base;?>cadastros?p=<?php echo $q; ?>" id="paginacao-item" class="btn active"><?=$q;?></a>
        <?php else: ?>
        <a href="<?= $base;?>cadastros?p=<?php echo $q; ?>" id="paginacao-item" class="btn novo"><?=$q;?></a>
        <?php endif; ?>
        <?php endfor; ?>
    </div>
</div>

<?php $render ('footer');?>