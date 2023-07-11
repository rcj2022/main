<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - DED</title>
    <link rel="stylesheet" href="<?=$base; ?>assets/css/bootstrap.css">
    
    <link rel="shortcut icon" href="<?=$base; ?>assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="<?=$base; ?>assets/css/app.css">
</head>

<body>
    <div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img src="assets/images/favicon.svg" height="48" class='mb-4'>
                        <h3>Cadastro</h3>
                        <p>Todos os campos são obrigatórios.</p>
                    </div>
                    <form method='POST' action="<?=$base;?>signup">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-column">Nome</label>
                                    <input placeholder='Digite seu nome completo' type="text" id="first-name-column" class="form-control"  name="name">
                                </div>
                            </div>                                                     
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-column">Email</label>
                                    <input placeholder='Digite seu email' type="email" id="email-id-column" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="username-column">Senha</label>
                                    <input placeholder='Digite sua senha' type="password" id="username-column" class="form-control" name="password">
                                </div>
                            </div>   
                        </diV>

                                <a href="<?= $base;?>signin">Tem conta? Login</a>
                        <div class="clearfix">
                            <button class="btn btn-primary btn-block mt-4">Cadastrar</button>
                        </div>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script src="assets/js/main.js"></script>
</body>

</html>
