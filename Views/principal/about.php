<?php include_once 'Views/template/header.php'; ?>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Nosotros</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Nosotros</li>
            </ol>
        </nav>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="<?php echo BASE_URL; ?>assets/img/platillos-1.png">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="<?php echo BASE_URL; ?>assets/img/platillos-2.jpg" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="<?php echo BASE_URL; ?>assets/img/platillos-3.jpg">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="<?php echo BASE_URL; ?>assets/img/platillos-4.jpg">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">Nosotros</h5>
                <h1 class="mb-4">Bienvenido a la <i class="fa fa-utensils text-primary me-2"></i>La Cajamarquina</h1>
                <p class="mb-4">Nos complace recibirte en nuestro rincón gastronómico, donde cada plato es una celebración de la auténtica cocina cajamarquina.</p>
                <p class="mb-4">Disfruta de una experiencia culinaria única, creada con ingredientes frescos y recetas tradicionales que te transportarán al corazón de Cajamarca. ¡Gracias por elegirnos y buen provecho!</p>
                <a class="btn btn-primary py-3 px-5 mt-2" href="">Más...</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<?php include_once 'Views/template/footer.php'; ?>
</body>

</html>