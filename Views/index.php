<?php include_once 'Views/template/header.php'; ?>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container my-5 py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-3 text-white animated slideInLeft">¡Bienvenidos a<br>La Cajamarquina!</h1>
                <p class="text-white animated slideInLeft mb-4 pb-2">Disfruta de la auténtica cocina cajamarquina en cada plato. ¡Gracias por visitarnos y buen provecho!</p>
                <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Realizar Pedido</a>
            </div>
            <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                <img class="img-fluid" src="<?php echo BASE_URL; ?>assets/img/cuy2.png" alt="">
            </div>
        </div>
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


<!-- Reservation Start -->
<div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
    <div class="row g-0">
        <div class="col-md-6">
            <div class="video">
                <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                    <span></span>
                </button>
            </div>
        </div>
        <div class="col-md-6 bg-dark d-flex align-items-center">
            <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">Pedido a mesa</h5>
                <h1 class="text-white mb-4">Realizar Pedido</h1>
                <form>
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Nombre de cliente</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating date" id="date3" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                <label for="clientes">N° Clientes</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" id="select1">
                                    <option value="1">Mesa 1</option>
                                    <option value="2">Mesa 2</option>
                                    <option value="3">Mesa 3</option>
                                    <option value="4">Mesa 4</option>
                                    <option value="5">Mesa 5</option>
                                    <option value="6">Mesa 6</option>
                                    <option value="7">Mesa 7</option>
                                    <option value="8">Mesa 8</option>
                                    <option value="9">Mesa 9</option>
                                </select>
                                <label for="select1">N° Mesa</label>
                            </div>
                        </div>
                        <!-- <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                <label for="pedido">Escribir Pedido</label>
                            </div>
                        </div> -->
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Realizar Pedido</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Imagen -->
<!-- Reservation Start -->

<?php include_once 'Views/template/footer.php'; ?>
</body>

</html>