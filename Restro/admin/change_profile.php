<?php
session_start();
include('config/config.php');
include('config/checklogin.php');
check_login();
//Actualizar perfil
if (isset($_POST['ChangeProfile'])) {
  $admin_id = $_SESSION['admin_id'];
  $admin_name = $_POST['admin_name'];
  $admin_email = $_POST['admin_email'];
  $Qry = "UPDATE rpos_admin SET admin_name =?, admin_email =? WHERE admin_id =?";
  $postStmt = $mysqli->prepare($Qry);

  $rc = $postStmt->bind_param('sss', $admin_name, $admin_email, $admin_id);
  $postStmt->execute();

  if ($postStmt) {
    $success = "Account Updated" && header("refresh:1; url=dashboard.php");
  } else {
    $err = "Vuelva a intentarlo o inténtelo más tarde";
  }
}
if (isset($_POST['changePassword'])) {

  //Cambiar contraseña
  $error = 0;
  if (isset($_POST['old_password']) && !empty($_POST['old_password'])) {
    $old_password = mysqli_real_escape_string($mysqli, trim(sha1(md5($_POST['old_password']))));
  } else {
    $error = 1;
    $err = "La contraseña antigua no puede estar vacía";
  }
  if (isset($_POST['new_password']) && !empty($_POST['new_password'])) {
    $new_password = mysqli_real_escape_string($mysqli, trim(sha1(md5($_POST['new_password']))));
  } else {
    $error = 1;
    $err = "La nueva contraseña no puede estar vacía";
  }
  if (isset($_POST['confirm_password']) && !empty($_POST['confirm_password'])) {
    $confirm_password = mysqli_real_escape_string($mysqli, trim(sha1(md5($_POST['confirm_password']))));
  } else {
    $error = 1;
    $err = "La contraseña de confirmación no puede estar vacía";
  }

  if (!$error) {
    $admin_id = $_SESSION['admin_id'];
    $sql = "SELECT * FROM rpos_admin   WHERE admin_id = '$admin_id'";
    $res = mysqli_query($mysqli, $sql);
    if (mysqli_num_rows($res) > 0) {
      $row = mysqli_fetch_assoc($res);
      if ($old_password != $row['admin_password']) {
        $err =  "Introduzca la contraseña antigua correcta";
      } elseif ($new_password != $confirm_password) {
        $err = "La contraseña de confirmación no coincide";
      } else {

        $new_password  = sha1(md5($_POST['new_password']));

        $query = "UPDATE rpos_admin SET  admin_password =? WHERE admin_id =?";
        $stmt = $mysqli->prepare($query);

        $rc = $stmt->bind_param('ss', $new_password, $admin_id);
        $stmt->execute();

        //declarar una variable que se pasará a la función de alerta
        if ($stmt) {
          $success = "Password Changed" && header("refresh:1; url=dashboard.php");
        } else {
          $err = "Vuelva a intentarlo o inténtelo más tarde";
        }
      }
    }
  }
}
require_once('partials/_head.php');
?>

<body>

  <?php
  require_once('partials/_sidebar.php');
  ?>

  <div class="main-content">
    <!-- Barra de navegación superior -->
    <?php
    require_once('partials/_topnav.php');
    $admin_id = $_SESSION['admin_id'];

    $ret = "SELECT * FROM  rpos_admin  WHERE admin_id = '$admin_id'";
    $stmt = $mysqli->prepare($ret);
    $stmt->execute();
    $res = $stmt->get_result();
    while ($admin = $res->fetch_object()) {
    ?>
      <!-- Header -->
      <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(assets/img/theme/restro00.jpg); background-size: cover; background-position: center top;">

        <span class="mask bg-gradient-default opacity-8"></span>

        <div class="container-fluid d-flex align-items-center">
          <div class="row">
            <div class="col-lg-7 col-md-10">
              <h1 class="display-2 text-white">Hola <?php echo $admin->admin_name; ?></h1>
              <p class="text-white mt-0 mb-5">Este es tu perfil, puedes editar datos y si gustas cambiar tu contraseña</p>
            </div>
          </div>
        </div>
      </div>
      <!-- contenido de la pagina  -->
      <div class="container-fluid mt--8">
        <div class="row">
          <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
            <div class="card card-profile shadow">
              <div class="row justify-content-center">
                <div class="col-lg-3 order-lg-2">
                  <div class="card-profile-image">
                    <a href="#">
                      <img src="assets/img/theme/user-a-min.png" class="rounded-circle">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                <div class="d-flex justify-content-between">
                </div>
              </div>
              <div class="card-body pt-0 pt-md-4">
                <div class="row">
                  <div class="col">
                    <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                      <div>
                      </div>
                      <div>
                      </div>
                      <div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <h3>
                    <?php echo $admin->admin_name; ?></span>
                  </h3>
                  <div class="h5 font-weight-300">
                    <i class="ni location_pin mr-2"></i><?php echo $admin->admin_email; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-8 order-xl-1">
            <div class="card bg-secondary shadow">
              <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                  <div class="col-8">
                    <h3 class="mb-0">Mi Cuenta</h3>
                  </div>
                  <div class="col-4 text-right">
                  </div>
                </div>
              </div>
              <div class="card-body">
                <form method="post">
                  <h6 class="heading-small text-muted mb-4">Información de usuario</h6>
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-username">Nombre de usuario</label>
                          <input type="text" name="admin_name" value="<?php echo $admin->admin_name; ?>" id="input-username" class="form-control form-control-alternative" ">
                      </div>
                    </div>
                    <div class=" col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="input-email">Correo Electónico</label>
                            <input type="email" id="input-email" value="<?php echo $admin->admin_email; ?>" name="admin_email" class="form-control form-control-alternative">
                          </div>
                        </div>

                        <div class="col-lg-12">
                          <div class="form-group">
                            <input type="submit" id="input-email" name="ChangeProfile" class="btn btn-success form-control-alternative" value="Submit"">
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <hr>
              <form method =" post">
                            <h6 class="heading-small text-muted mb-4">Cambiar Contraseña</h6>
                            <div class="pl-lg-4">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="form-group">
                                    <label class="form-control-label" for="input-username">Antigua Contraseña</label>
                                    <input type="password" name="old_password" id="input-username" class="form-control form-control-alternative">
                                  </div>
                                </div>

                                <div class="col-lg-12">
                                  <div class="form-group">
                                    <label class="form-control-label" for="input-email">Nueva Contraseña</label>
                                    <input type="password" name="new_password" class="form-control form-control-alternative">
                                  </div>
                                </div>

                                <div class="col-lg-12">
                                  <div class="form-group">
                                    <label class="form-control-label" for="input-email">Confirmar nueva contraseña</label>
                                    <input type="password" name="confirm_password" class="form-control form-control-alternative">
                                  </div>
                                </div>

                                <div class="col-lg-12">
                                  <div class="form-group">
                                    <input type="submit" id="input-email" name="changePassword" class="btn btn-success form-control-alternative" value="Change Password">
                                  </div>
                                </div>
                              </div>
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
    }
      ?>
      </div>
  </div>

  <?php
  require_once('partials/_sidebar.php');
  ?>
</body>

</html>