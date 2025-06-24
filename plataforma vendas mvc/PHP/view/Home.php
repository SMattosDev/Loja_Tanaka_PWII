<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inical</title>

    <!-- reset de estilização do browser -->
    <link rel="stylesheet" type="text/css" href="./../../CSS/container-layout/reset.css">

    <!-- estilização do cabeçalho-->
     <link rel="stylesheet" type="text/css" href="./../../CSS/container-layout/cabecalho.css">
    <link rel="stylesheet" type="text/css" href="./../../CSS/componentes/carrossel.css">
    <link rel="stylesheet" type="text/css" href="./../../CSS/componentes/menu.css">

    <!-- CSS destinado as principais configuraçõesde estilos do portal  -->
    <link rel="stylesheet" type="text/css" href="./../../CSS/container-layout/principal.css">
<body>

    <!--cabeçalho-->
    <?php
    
    include '../view/Cabecalho.php';
    
    ?>
    <main class="container-principal">
        <div class="carrossel">
            <div class="slides">
                <img src="./../../src/images/destaques/pastilha.jfif" alt="Pastilhas de freios Gol 1996-01">
                <img src="./../../src/images/destaques/mocinetica.jfif" alt="Homocinética">
                <img src="./../../src/images/destaques/parabrisa.jfif" alt="Parabrisa Pálio 2003">
                <img src="./../../src/images/destaques/gol.jfif" alt="Bico Injetor Gol 1996-01">
            </div>
            <button class="prev" onclick="mudarSlide(-1)"></button>
            <button class="next" onclick="mudarSlide(1)"></button>
        </div>


    </main>
    <!-- rodapé-->
     <script src="./../../JS/carrossel.js"></script>
</body>
</html>