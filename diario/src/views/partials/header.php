<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DED - Diário Eletrônico Digital</title>
    
    <link rel="stylesheet" href="<?=$base;?>assets/css/bootstrap.css">
    
    <link rel="stylesheet" href="<?=$base;?>assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="<?=$base;?>assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?=$base;?>assets/css/app.css">
    <link rel="shortcut icon" href="<?=$base;?>assets/images/favicon.png" type="image/x-icon">
</head>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <img src="<?=$base;?>assets/images/logo.png" alt="" srcset="">
    </div>
    <div class="sidebar-menu">
        <ul class="menu">  
            <li class='sidebar-title'>5° ano - c / 2023</li>
                <li class="sidebar-item active ">
                    <a href="<?= $base;?>" class='sidebar-link'>
                        <i data-feather="home" width="20"></i> 
                        <span>Home</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?= $base;?>cadastro" class='sidebar-link'>
                        <i data-feather="triangle" width="20"></i> 
                        <span>Dados Pessoais</span>
                    </a>                    
                                        
                </li>                
                <li class="sidebar-item">
                    <a href="<?= $base;?>calendario" class='sidebar-link'>
                        <i data-feather="briefcase" width="20"></i> 
                        <span>Calendário</span>
                    </a>        
                </li>                
                <li class="sidebar-item  ">
                    <a href="<?= $base;?>turma" class='sidebar-link'>
                        <i data-feather="layers" width="20"></i> 
                        <span>Minhas Turmas</span>
                    </a>
                </li>                
                <li class="sidebar-item">
                    <a href="<?= $base;?>frequencia" class='sidebar-link'>
                        <i data-feather="file-text" width="20"></i> 
                        <span>Frequência</span>
                    </a>                    
                                     
                </li>
                <li class="sidebar-item">
                    <a href="<?= $base; ?>conteudo" class='sidebar-link'>
                        <i data-feather="file-text" width="20"></i> 
                        <span>Conteúdo</span>
                    </a>              
                </li>
                <li class="sidebar-item">
                    <a href="<?= $base;?>nota" class='sidebar-link'>
                        <i data-feather="file-text" width="20"></i> 
                        <span>Notas</span>
                    </a>                
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="file-text" width="20"></i> 
                        <span>Resumos/Relatórios</span>
                    </a>                    
                    <ul class="submenu ">  
                        <li>
                            <a href="form-element-input-group.html">Notas</a>
                        </li>                        
                        <li>
                            <a href="form-element-select.html">Frequência</a>
                        </li>                        
                        <li>
                            <a href="form-element-radio.html">Final</a>
                        </li>                                               
                    </ul>                    
                </li>                 
                <li class="sidebar-item  ">
                    <a href="<?= $base;?>atividade" class='sidebar-link'>
                        <i data-feather="layout" width="20"></i> 
                        <span>Atividades</span>
                    </a>                    
                </li>
                <li class="sidebar-item  ">

                    <a href="<?php echo $base;?>material" class='sidebar-link'>
                        <i data-feather="grid" width="20"></i> 
                        <span>Material didático</span>
                    </a>                    
                </li>   
                <li class="sidebar-item">

                    <a href="#" class='sidebar-link'>
                        <i data-feather="alert-circle" width="20"></i> 
                        <span>Chat</span>
                    </a>                    
                </li>               
            
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                       
                        <li class="dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar me-1">
                                    <img src="<?=$base;?>assets/images/avatar/avatar-s-1.png" alt="" srcset="">
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block">Manoel Barreto</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?=$base;?>sair"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
     