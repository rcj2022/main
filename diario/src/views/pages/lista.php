<?php $render('header');?>
<div class="conteudo">
    <section class="caixa">
        <div class="thead"><i class="ico lista"></i> Lista de ganhadores</div>
        <div class="base-lista">
            <div class="lst">
                <form action="" method="">
                    <div class="rows">
                        <div class="col-10">
                            <input type="text" name="" placeholder="Valor da pesquisar...">
                        </div>
                        <div class="col-2">
                            <input type="submit" class="btn" value="pesquisar">
                        </div>
                    </div>
                </form>
            </div>
            <div class="rows">
                <div class="col-12">
                    <span class="itens"><i class="ico-list"></i> <b>18 </b>clientes ganhadores</span>
                </div>
            </div>
            <div class="tabela-responsiva">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabela" id="dataTable">
                    <thead>
                        <tr>
                            <th align="left">Nome</th>
                            <th align="center">Saldo (R$)</th>
                            <th align="center">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($clientes as $cliente):
                                                        
                            ?>
                        <tr>
                            <td><?= $cliente->getNome();?></td>
                            <td align="center">R$ <?=$cliente->getSaldo();?></td>
                            <td align="center">
                                <a href="<?= $base;?>/cliente/deposito/<?=$cliente->getId();?>"
                                    class="btn alterar">Adicionar</a>
                                <a href="<?= $base;?>/cliente/saque/<?=$cliente->getId();?>"
                                    class="btn excluir">Retirar</a>
                                <a href="<?= $base;?>/cliente/historico/<?=$cliente->getId();?>"
                                    class="btn novo">Histórico</a>
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
        <a href="<?= $base;?>/cliente?p=<?php echo $q; ?>" id="paginacao-item" class="btn active"><?=$q;?></a>
        <?php else: ?>
        <a href="<?= $base;?>/cliente?p=<?php echo $q; ?>" id="paginacao-item" class="btn novo"><?=$q;?></a>
        <?php endif; ?>
        <?php endfor; ?>
    </div>
</div>

<?php $render ('footer');?>