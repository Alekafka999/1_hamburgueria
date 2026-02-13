<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grid - Exemplo Layout Colunas</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="img/logo_h.gif" type="image/x-icon">
</head>

<body>
    <?php 
        require_once 'includes/header.php'; 
    ?>

    <div id="banner">
        <div>
            <h1>Cardápio</h1>
        </div>
    </div>


    <div id="galeria">
        <h1><span>━━━</span> Gourmets <span>━━━</span></h1>
        <div id="grid-galeria">
            <img src="assets/img/gourmet/hamburguer1.jpg" alt="">
            <img src="assets/img/gourmet/hamburguer12.jpg" alt="">
            <img src="assets/img/gourmet/hamburguer3.jpg" alt="">
            <img src="assets/img/gourmet/hamburguer4.jpg" alt="">
            <img src="assets/img/gourmet/hamburguer5.jpg" alt="">
            <img src="assets/img/gourmet/hamburguer6.jpg" alt="">
            <img src="assets/img/gourmet/hamburguer7.jpg" alt="">
            <img src="assets/img/gourmet/hamburguer8.jpg" alt="">
        </div>
    </div>

    <div id="galeria">
        <h1><span>━━━</span> Tradicionais <span>━━━</span></h1>
        <div id="grid-galeria">
            <img src="assets/img/tradicionais/1.jpg" alt="">
            <img src="assets/img/tradicionais/2.jpg" alt="">
            <img src="assets/img/tradicionais/3.jpg" alt="">
            <img src="assets/img/tradicionais/4.jpg" alt="">
            <img src="assets/img/tradicionais/5.jpg" alt="">
            <img src="assets/img/tradicionais/6.jpg" alt="">
            <img src="assets/img/tradicionais/7.jpg" alt="">
            <img src="assets/img/tradicionais/8.png" alt="">
           
        </div>
    </div>

     <div id="galeria">
        <h1><span>━━━</span> Sobremesas <span>━━━</span></h1>
        <div id="grid-galeria">
           <img src="assets/img/sobremesas/1.jpg" alt="">
           <img src="assets/img/sobremesas/2.jpg" alt="">
           <img src="assets/img/sobremesas/3.jpg" alt="">
           <img src="assets/img/sobremesas/4.jpg" alt="">
           <img src="assets/img/sobremesas/5.jpg" alt="">
           <img src="assets/img/sobremesas/6.jpg" alt="">
           <img src="assets/img/sobremesas/7.jpg" alt="">
           <img src="assets/img/sobremesas/8.jpg" alt="">
           
        </div>
    </div>


    <div id="galeria">
        <h1><span>━━━</span> Drinks <span>━━━</span></h1>
        <div id="grid-galeria">
           <img src="assets/img/bebidas/1.jpg" alt="">
           <img src="assets/img/bebidas/2.jpg" alt="">
           <img src="assets/img/bebidas/3.jpg" alt="">
           <img src="assets/img/bebidas/4.jpg" alt="">
           <img src="assets/img/bebidas/5.jpg" alt="">
           <img src="assets/img/bebidas/6.jpg" alt="">
           <img src="assets/img/bebidas/7.jpg" alt="">
           <img src="assets/img/bebidas/8.jpg" alt="">
           
        </div>
    </div>

     <div id="banner2">
        <div>
            <h1>Venha nos visitar!</h1>
        </div>
    </div>


     <?php 
        require_once 'includes/footer.php';
     ?>



</body>

</html>