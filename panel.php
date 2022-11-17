<?php
session_start();
 
require_once 'init.php';

require 'check.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Xanh+Mono&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/stylepanel.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Painel</title>

    </head>
 
    <body>
    <div class="container box mt-4">
       <div class="row">
           <div class="col-md-12">
               <div class="card">
                   <div class="card-header text-center">
                        <h4 style='font-family: "Montserrat", sans-serif; color: black; font-size: 35pt; text-align:center'>
                        Painel
                        </h4>
                        <p style='font-family: "Xanh Mono", monospace; color: black; font-size: 20pt; text-align:center'>
                        Bem-vindo ao painel <?php echo $_SESSION['user_name']; ?>.<br></p>
                    <div>
                    <div>
                        <a style='font-family: "Montserrat", sans-serif; font-size: 15pt' class="btn btn-light float-end" href="logout.php">Sair</a>
                    </div>
                </div>
            </div>
        </div>
    </div>        
                    
    </body>
</html>
