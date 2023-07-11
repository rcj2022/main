<?php $render('header');?>
<div class="conteudo">
    <section class="caixa">    
        <div class="thead"><i class="ico cad"></i>Formulario de cadastro</div>
        <div class="base-form">
            <div class="caixa-form">
                <div class="thead">Alterar cadastro </div>
                <a href="<?= $base;?>/cadastros" class="voltar">Voltar para lista de cadastro</a>
                <form action="<?=$base;?>/cliente/cadastro" method="POST">
                    <div class="rows">
                        <div class="col-12">
                        <?php foreach($dados as $dado):
                           
                            ?>
                            <label>Nome</label>
                            <input name="nome" value="<?=$dado->getNome();?>" type="text" placeholder="Insira um nome">
                        </div>
                        <div class="col-6">
                            <label>Banca</label>
                            <input name="banca" value="<?=$dado->getBanca();?>" type="text" placeholder="Insira o nome da banca" disabled="disabled">
                        </div>
                        <div class="col-6">
                            <label>Conta</label>
                            <input name="conta" value="<?= $dado->getConta();?>" type="text" placeholder="Número da conta é gerado automaticamente" disabled="disabled">
                        </div>
                        </div>  
                        <?php endforeach;?>      
                        
                        <input type="submit" value="Alterar" class="btn novo">
                        
                </form>
            </div>
        </div>
    </section>
</div>
<?php $render('footer');?>