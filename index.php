<?php
session_start();
 
require 'init.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=devide-width, initial-scale=1">
        <title>Sistema de Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Xanh+Mono&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
 
    <body>
    <div class="container box mt-4">
       <div class="row">
           <div class="col-md-12">
               <div class="card">
                   <div class="card-header text-center">
                        <h4 style='font-family: "Montserrat", sans-serif; color: black; font-size: 35pt; text-align:center'>
                        Sistema de Login
                        </h4>
                   </div>  
                        <?php if (isLoggedIn()): ?>
                            <br><p style=' color: black; font-size: 20pt; text-align:center'>Bem vindo, <?php echo $_SESSION['user_name']; ?>. 
                            <div>
                            <a style='font-family: "Montserrat", sans-serif; font-size: 18pt' class="btn btn-outline-primary" href="panel.php">Painel</a> 
                            <a style='font-family: "Montserrat", sans-serif; font-size: 18pt' class="btn btn-outline-danger" href="logout.php">Sair</a>
                            </div>
                            </p>
                        <?php else: ?>
                            <p style=' color: black; font-size: 20pt; text-align:center'>
                            seja bem vindo ao seu login. 
                            </p>
                            <a style=' font-size: 15pt' class="btn btn-light float-end" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                LOGIN
                            </a>
                        <?php endif; ?>
                </div>
            </div>
        </div>
<!-- modal login -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <h1 style='font-family: "Montserrat", sans-serif; font-size: 20pt;' 
                                class="modal-title fs-5" id="exampleModalLabel"></h1>   
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="login.php" method="post">
                                    
                                    <div class="mb-3">
                                        <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Senha">
                                    </div>
                                    <div class="mb-3">
                                    <input type="submit" class="btn btn-success" id="loginuser" value="Acessar">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
    </div>
    </body>
</html>
