<form method="POST" action="<?=$base;?>/usuario/<?= $arg['id'];?>/editar">
<label>
    Nome:
    <input type="text" name="nome" value="<?=$arg['nome'];?>">
</label></br></br>
<label>
    Email:
    <input type="text" name="email" value="<?=$arg['email'];?>">
</label></br></br>
<label>
    Idade:
    <input type="text" name="idade" value="<?=$arg['idade'];?>">
</label></br></br>
    <input type="submit" value="Atualizar">
</form>