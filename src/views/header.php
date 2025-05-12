<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <title>UC 13 - Técnico em Informática.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
 
</head>
 
<body>
    
    <?php
    session_start();
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    ?>
 
    <!-- Menu de Navegação -->
    <?php if ($page != 'login') : ?>  <!-- Esse code não deixa o header aparecer no login -->
 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="home.php">UC 13 - Compreedendo POO com PHP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <a class="navbar-brand" href="/Cadastrophp/poo">Home</a>
                    <li class="nav-item"><a class="nav-link" href="/Cadastrophp/poo/src/pages/cad_escola.php">Cadastro de Aluno</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Cadastrophp/poo/src/pages/cad_alunos.php">Cadastro de Curso</a></li>
                    <li class="nav-item"><a class="nav-link" href="/Cadastrophp/poo/src/pages/cad_curso.php">Cadastro de Escola</a></li>
                </ul>
                <a href="/Cadastrophp/poo/src/pages/login.php" class="btn btn-outline-light">
                <i class="bi bi-box-arrow-right"></i> Sair
                </a>
            </div>
        </div>
    </nav>

    <?php endif; ?>
 
    <!-- Título -->
    <header class="bg-primary text-white text-center py-4">
        <h1>Sistema de Cadastro – UC 13 | POO com PHP</h1>
    </header>
 
    <main class="container my-5">