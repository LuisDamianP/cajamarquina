<?php include_once 'Views/template/header.php'; ?>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Realizar Pedido</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Pedido</li>
            </ol>
        </nav>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->


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