<?php $render('header');?>
<div class="conteudo">
    <section class="caixa">
        <div class="thead"><i class="ico cad"></i>Editando Movimentação Financeira</div>
        <div class="base-form">
            <div class="caixa-form">
                <div class="thead">Editar Retirada (Saque)</div>
                <form action="" method="">
                    <div class="rows">
                        <div class="col-12">
                            <label>Nome</label>
                            <input name="nome" value="<?=$nome;?>" type="text" placeholder="Insira um nome">
                        </div>
                        <div class="col-4">
                            <label>Endereço</label>
                            <input name="endereco" value="" type="text" placeholder="Insira seu endereço">
                        </div>
                        <div class="col-4">
                            <label>Cidade</label>
                            <input name="cidade" value="" type="text" placeholder="Insira sua cidade">
                        </div>
                        <div class="col-4">
                            <label>Bairro</label>
                            <input name="bairro" value="" type="text" placeholder="Insira seu bairro">
                        </div>
                        <div class="col-12">
                            <label>Valor (R$)</label>
                            <input name="valor" value="" type="text" placeholder="Insira o valor para depósito">
                        </div>
                        <div class="col-12">
                            <label>Observação</label>
                            <textarea rows="2" name="observacao"></textarea>
                        </div>

                        <input type="submit" value="Retirada" class="btn">
                </form>
            </div>
        </div>
    </section>
</div>
<?php $render('footer');?>