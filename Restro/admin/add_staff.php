<?php
session_start();
include('config/config.php');
include('config/checklogin.php');
include('config/code-generator.php');

check_login();
//Añadir personal
if (isset($_POST['addStaff'])) {
  //Evitar la contabilización de valores en blanco
  if (empty($_POST["staff_number"]) || empty($_POST["staff_name"]) || empty($_POST['staff_email']) || empty($_POST['staff_password'])) {
    $err = "Blank Values Not Accepted";
  } else {
    $staff_number = $_POST['staff_number'];
    $staff_name = $_POST['staff_name'];
    $staff_email = $_POST['staff_email'];
    $staff_password = sha1(md5($_POST['staff_password']));

    //Insertar información capturada en una tabla de base de datos
    $postQuery = "INSERT INTO rpos_staff (staff_number, staff_name, staff_email, staff_password) VALUES(?,?,?,?)";
    $postStmt = $mysqli->prepare($postQuery);

    $rc = $postStmt->bind_param('ssss', $staff_number, $staff_name, $staff_email, $staff_password);
    $postStmt->execute();
    //declarar una variable que se pasará a la función de alerta
    if ($postStmt) {
      $success = "Personal añadido" && header("refresh:1; url=hrm.php");
    } else {
      $err = "Vuelva a intentarlo o inténtelo más tarde";
    }
  }
}
require_once('partials/_head.php');
?>

<body>

  <?php
  require_once('partials/_sidebar.php');
  ?>
  <!-- Main -->
  <div class="main-content">
    <!-- Barra de navegación superior -->
    <?php
    require_once('partials/_topnav.php');
    ?>
    <!-- Header -->
    <div style="background-image: url(assets/img/theme/restro00.jpg); background-size: cover;" class="header  pb-8 pt-5 pt-md-8">
    <span class="mask bg-gradient-dark opacity-8"></span>
      <div class="container-fluid">
        <div class="header-body">
        </div>
      </div>
    </div>
    <!-- contenido de la pagina -->
    <div class="container-fluid mt--8">
      <!-- Tabla -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3>Porfavor llenar todos los campos</h3>
            </div>
            <div class="card-body">
              <form method="POST">
                <div class="form-row">
                  <div class="col-md-6">
                    <label>Número del empleado</label>
                    <input type="text" name="staff_number" class="form-control" value="<?php echo $alpha; ?>-<?php echo $beta; ?>">
                  </div>
                  <div class="col-md-6">
                    <label>Nombre del empleado</label>
                    <input type="text" name="staff_name" class="form-control" value="">
                  </div>
                </div>
                <hr>
                <div class="form-row">
                  <div class="col-md-6">
                    <label>Email del Empleado</label>
                    <input type="email" name="staff_email" class="form-control" value="">
                  </div>
                  <div class="col-md-6">
                    <label>Contraseña del empleado</label>
                    <input type="password" name="staff_password" class="form-control" value="">
                  </div>
                </div>
                <br>
                <div class="form-row">
                  <div class="col-md-6">
                    <input type="submit" name="addStaff" value="Add Staff" class="btn btn-success" value="">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <?php
      require_once('partials/_footer.php');
      ?>
    </div>
  </div>

  <?php
  require_once('partials/_scripts.php');
  ?>
</body>

</html>