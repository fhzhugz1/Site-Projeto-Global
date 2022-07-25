<?php

//começar sessao
session_start();


require_once ('php/CreateDb.php');
require_once("./php/component.php");

$database = new CreateDb("Productdb", "Producttb");

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Produto ja foi adicionado ao carrinho.')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}


?>


<DOCTYPE html>
    <html lang="pt-pt">
    <meta charset="UTF-8">
        <head>
            <meta name="viewport" content="with=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Tudo o que voce precisa saber sobre fitness e alimentação saudavel </title>
            <link rel="stylesheet" href="../css/css.css"> <!--css do header-->
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
            
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,471;1,100;1,300&display=swap" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            
            
        <body>
       
    

        <?php require_once("php/header.php");?>
        <div class="container">
        <h2>Produtos</h2>
        <p>Encontraremos o artigo perfeito para si</p>
            <div class="row text-center py-5">
                <?php
                $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row["product_info"]);
                }
                ?>
            </div>
        </div>

        <section id="paginacao" class="sectionp1">
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#"><i class="fas fa-caret-right"></i></a>
        </section>

            
        <section id="banner" class="section-m1">
                <h2>Taxa de entrega <span>Gratuita </span>  na sua 1ª compra </h2>
                <!--<a href='https://br.freepik.com/fotos-vetores-gratis/fitness'>Fitness vetor criado por pch.vector - br.freepik.com</a>-->

        </section>
        
        













            <script src="script.js"></script>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </body>

        </html>