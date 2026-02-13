<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamburgueria Gourmet - Galeria</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="img/logo_h.gif" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/carousel/carousel.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/carousel/carousel.arrows.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/carousel/carousel.dots.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/carousel/carousel.autoplay.css" />

</head>
<body>
    <?php 
        require_once 'includes/header.php'; 
    ?>
    <main>
        <div id="banner">
            <div>
                <h1>Galeria</h1>
            </div>
        </div>

        <section id="banner-rotativo">
            <h1 class="tituloh1"><span>━━━</span> Novidades <span>━━━</span></h1>
            <div class="f-carousel" id="myCarousel">
                <div class="f-carousel__viewport">
                    <div class="f-carousel__slide">
                        <img class="rotativo-img" src="assets/img/banner-rotativo/1.png" alt="">
                    </div>
                    <div class="f-carousel__slide">
                        <img class="rotativo-img" src="assets/img/banner-rotativo/2.png" alt="">
                    </div>
                    <div class="f-carousel__slide">
                        <img class="rotativo-img" src="assets/img/banner-rotativo/3.png" alt="">
                    </div>
                </div>
            </div>

        </section>
        <h1 class="tituloh1"><span>━━━</span> Tradicionais <span>━━━</span></h1>
        <section id="galeria-pai">
            <div class="galeria-filho">
                <a href="assets/img/galeria/1.jpg" data-fancybox="gallery" data-caption="">
                    <img class="galeria-img" src="assets/img/galeria/miniatura/1.jpg" alt="">
                </a>
            </div>

            <div class="galeria-filho">
                <a href="assets/img/galeria/2.jpg" data-fancybox="gallery" data-caption="">
                    <img class="galeria-img" src="assets/img/galeria/miniatura/2.jpg" alt="">
                </a>
            </div>

            <div class="galeria-filho">
                <img class="galeria-img" src="assets/img/galeria/miniatura/3.jpg" alt="">
            </div>

            <div class="galeria-filho">
                <img class="galeria-img" src="assets/img/galeria/miniatura/4.jpg" alt="">
            </div>

            <div class="galeria-filho">
                <img class="galeria-img" src="assets/img/galeria/miniatura/5.jpg" alt="">
            </div>

            <div class="galeria-filho">
                <img class="galeria-img" src="assets/img/galeria/miniatura/6.jpg" alt="">
            </div>

            <div class="galeria-filho">
                <img class="galeria-img" src="assets/img/galeria/miniatura/7.jpg" alt="">
            </div>

            <div class="galeria-filho">
                <img class="galeria-img" src="assets/img/galeria/miniatura/8.jpg" alt="">
            </div>

            <div class="galeria-filho">
                <img class="galeria-img" src="assets/img/galeria/miniatura/9.jpg" alt="">
            </div>

            <div class="galeria-filho">
                <img class="galeria-img" src="assets/img/galeria/miniatura/10.jpg" alt="">
            </div>

            <div class="galeria-filho">
                <img class="galeria-img" src="assets/img/galeria/miniatura/11.jpg" alt="">
            </div>

            <div class="galeria-filho">
                <img class="galeria-img" src="assets/img/galeria/miniatura/12.jpg" alt="">
            </div>

            <div class="galeria-filho">
                <img class="galeria-img" src="assets/img/galeria/miniatura/13.jpg" alt="">
            </div>

            <div class="galeria-filho">
                <img class="galeria-img" src="assets/img/galeria/miniatura/14.jpg" alt="">
            </div>

            <div class="galeria-filho">
                <img class="galeria-img" src="assets/img/galeria/miniatura/15.jpg" alt="">
            </div>

            <div class="galeria-filho">
                <img class="galeria-img" src="assets/img/galeria/miniatura/16.jpg" alt="">
            </div>



        </section>



        <div id="banner2">
            <div>
                <h1>Venha nos visitar!</h1>
            </div>
        </div>

    </main>
    
    <?php 
        require_once 'includes/footer.php';
    ?>



    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.umd.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/carousel/carousel.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/carousel/carousel.arrows.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/carousel/carousel.dots.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/carousel/carousel.autoplay.umd.js"></script>

    <script>
        Fancybox.bind("[data-fancybox]", {
            // Your custom options
        });
    </script>

    <script>
        Carousel(document.getElementById("myCarousel"), {
            Autoplay: {
                pauseOnHover: false,
                timeout: 2000,
            },
            style: {
                "--f-progressbar-color": "#A60832",
                "--f-progressbar-height": "2px",
            },
        }, {
            Arrows,
            Dots,
            Autoplay
        }).init();
    </script>




</body>

</html>