<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - DED</title>
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
                        <img src="<?=$base; ?>assets/images/favicon.svg" height="48" class='mb-4'>
                        <h3>Login</h3>
                        <p>Faça o login para acessar o Diário.</p>
                        <?php
                            if(!empty($flash)){
                                echo $flash;                               
                            };
                        ?>
                    </div>
                    <form method= 'POST' action="<?=$base;?>signin">
                        <div class="form-group position-relative has-icon-left">
                            <label for="username">Nome</label>
                            <div class="position-relative">
                                <input type="text" class="form-control" id="username" name="name">
                                <div class="form-control-icon">
                                    <i data-feather="user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left">
                            <div class="clearfix">
                                <label for="password">Senha</label>
                                <a href="#" class='float-end'>
                                    <small>Esqueceu a senha?</small>
                                </a>
                            </div>
                            <div class="position-relative">
                                <input type="password" class="form-control" id="password" name="password">
                                <div class="form-control-icon">
                                    <i data-feather="lock"></i>
                                </div>
                            </div>
                        </div>

                        <div class='form-check clearfix my-4'>                            
                            <div class="float-end">
                                <a href="<?= $base;?>signup">Não tem conta?</a>
                            </div>
                        </div>
                        <div class="clearfix">
                            <button class="btn btn-primary btn-block" type="submit">Entrar</button>
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
