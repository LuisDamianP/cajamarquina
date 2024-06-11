<?php include_once 'Views/template/header.php'; ?>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Menú</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Menú</li>
            </ol>
        </nav>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->


<!-- menus Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">La Cajamarquina</h5>
            <h1 class="mb-5">Menú</h1>
        </div>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#bebidas">
                        <i class="fa fa-coffee fa-2x text-primary"></i>
                        <div class="ps-3">
                            <!-- <small class="text-body">Bebidas</small> -->
                            <h6 class="mt-n1 mb-0">Bebidas</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#menu">
                        <i class="fa fa-book fa-2x text-primary"></i>
                        <div class="ps-3">
                            <!-- <small class="text-body">Special</small> -->
                            <h6 class="mt-n1 mb-0">Menú</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#carta">
                        <i class="fa fa-utensils fa-2x text-primary"></i>
                        <div class="ps-3">
                            <!-- <small class="text-body">Lovely</small> -->
                            <h6 class="mt-n1 mb-0">Carta</h6>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="bebidas" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="<?php echo BASE_URL; ?>assets/img/bebida-1.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Gaseosa Inca Kola/Coca Cola</span>
                                        <span class="text-primary">S/8.00</span>
                                    </h5>
                                    <small class="fst-italic">Gaseosa helada / sin helar de 1L o 1.5L</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="<?php echo BASE_URL; ?>assets/img/bebida-2.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Taza de Infuciones</span>
                                        <span class="text-primary">S/5.00</span>
                                    </h5>
                                    <small class="fst-italic">Taza de 250 ml de infuciones</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="<?php echo BASE_URL; ?>assets/img/bebida-3.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Café</span>
                                        <span class="text-primary">S/5.00</span>
                                    </h5>
                                    <small class="fst-italic">Taza de 250 ml de café</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="<?php echo BASE_URL; ?>assets/img/bebida-4.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Limonada</span>
                                        <span class="text-primary">S/10.00</span>
                                    </h5>
                                    <small class="fst-italic">Jarra de limonada de 1L helada / sin helar</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="<?php echo BASE_URL; ?>assets/img/bebida-5.jpg" alt="" style="width: 90px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Limonada Frozen</span>
                                        <span class="text-primary">S/13.00</span>
                                    </h5>
                                    <small class="fst-italic">Jarra de limonada frozen de 1L</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="<?php echo BASE_URL; ?>assets/img/bebida-6.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chicha Morada</span>
                                        <span class="text-primary">S/12.00</span>
                                    </h5>
                                    <small class="fst-italic">Jarra de Chicha morada de 1L helada / sin helar</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="<?php echo BASE_URL; ?>assets/img/bebida-7.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Cerveza Pilsen</span>
                                        <span class="text-primary">S/6.50</span>
                                    </h5>
                                    <small class="fst-italic">Cerveza de 305ml Pilsen helada</small>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="<?php echo BASE_URL; ?>assets/img/bebida-8.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chicken Burger</span>
                                        <span class="text-primary">$115</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div id="menu" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="<?php echo BASE_URL; ?>assets/img/menus-1.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chicken Burger</span>
                                        <span class="text-primary">$115</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="<?php echo BASE_URL; ?>assets/img/menus-2.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chicken Burger</span>
                                        <span class="text-primary">$115</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="<?php echo BASE_URL; ?>assets/img/menus-3.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chicken Burger</span>
                                        <span class="text-primary">$115</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="<?php echo BASE_URL; ?>assets/img/menus-4.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chicken Burger</span>
                                        <span class="text-primary">$115</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="<?php echo BASE_URL; ?>assets/img/menus-5.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chicken Burger</span>
                                        <span class="text-primary">$115</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="<?php echo BASE_URL; ?>assets/img/menus-6.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chicken Burger</span>
                                        <span class="text-primary">$115</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="<?php echo BASE_URL; ?>assets/img/menus-7.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chicken Burger</span>
                                        <span class="text-primary">$115</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="<?php echo BASE_URL; ?>assets/img/menus-8.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chicken Burger</span>
                                        <span class="text-primary">$115</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="carta" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="<?php echo BASE_URL; ?>assets/img/menus-1.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chicken Burger</span>
                                        <span class="text-primary">$115</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="<?php echo BASE_URL; ?>assets/img/menus-2.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chicken Burger</span>
                                        <span class="text-primary">$115</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="<?php echo BASE_URL; ?>assets/img/menus-3.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chicken Burger</span>
                                        <span class="text-primary">$115</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="<?php echo BASE_URL; ?>assets/img/menus-4.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chicken Burger</span>
                                        <span class="text-primary">$115</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="<?php echo BASE_URL; ?>assets/img/menus-5.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chicken Burger</span>
                                        <span class="text-primary">$115</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="<?php echo BASE_URL; ?>assets/img/menus-6.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chicken Burger</span>
                                        <span class="text-primary">$115</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="<?php echo BASE_URL; ?>assets/img/menus-7.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chicken Burger</span>
                                        <span class="text-primary">$115</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded" src="<?php echo BASE_URL; ?>assets/img/menus-8.jpg" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>Chicken Burger</span>
                                        <span class="text-primary">$115</span>
                                    </h5>
                                    <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- menus End -->

<?php include_once 'Views/template/footer.php'; ?>
</body>

</html>