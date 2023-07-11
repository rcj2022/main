<?php $render('header');?>
<div class="conteudo">
    <section class="caixa">
        <div class="thead"><i class="ico cad"></i>Movimentação Financeira</div>
        <div class="base-form">
            <div class="caixa-form">
                <div class="thead">Depósito</div>
                <?php
                            foreach($dados as $cliente):
                                                        
                 ?>
                <form action="<?=$base;?>/cliente/deposito/<?=$cliente->getId();?>" method="post">
                    <div class="rows">
                        <div class="col-12">
                            <label>Nome</label>
                            
                            <input name="nome" value="<?= $cliente->getNome();?>" type="text" placeholder="Insira um nome">
                        </div>
                        <div class="col-4">
                            <label>Conta</label>
                            <input name="conta" value="<?= $cliente->getConta();?>" type="text"
                                placeholder="Insira seu endereço">
                            <input name="tipo" value="0" type="hidden"/>  
                            <input name="id_conta" value="<?= $cliente->getId();?>" type="hidden"/>                              
                        </div>
                        <div class="col-8">
                            <label>Valor</label>
                            <input name="valor" value="" type="text" placeholder="Insira o valor para depósito">
                        </div>
                        <?php endforeach;?>
                        <input type="submit" value="Depositar" class="btn novo">
                </form>
            </div>
        </div>
    </section>
</div>
<?php $render('footer');?>