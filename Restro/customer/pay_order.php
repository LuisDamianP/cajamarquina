<?php
session_start();
include('config/config.php');
include('config/checklogin.php');
include('config/code-generator.php');

check_login();

if (isset($_POST['pay'])) {
  //Evitar enviar valores en blanco
  if (empty($_POST["pay_code"]) || empty($_POST["pay_amt"]) || empty($_POST['pay_method'])) {
    $err = "No se aceptan valores en blanco";
    //Realizar una expresión regular en los pagos
    
  } else {

    $pay_Code = $_POST['pay_code'];

      if(strlen($pay_Code) < 10 )
      {
        $err = "Fallo en la verificación del código de pago, inténtelo de nuevo";
      }
      elseif(strlen($pay_Code) > 10)
      {
        $err = "Fallo en la verificación del código de pago, inténtelo de nuevo";
      }
      
      else
      {
          $pay_code = $_POST['pay_code'];
          $order_code = $_GET['order_code'];
          $customer_id = $_GET['customer_id'];
          $pay_amt  = $_POST['pay_amt'];
          $pay_method = $_POST['pay_method'];
          $pay_id = $_POST['pay_id'];

          $order_status = $_GET['order_status'];

          //Insertar información capturada en una tabla de base de datos
          $postQuery = "INSERT INTO rpos_payments (pay_id, pay_code, order_code, customer_id, pay_amt, pay_method) VALUES(?,?,?,?,?,?)";
          $upQry = "UPDATE rpos_orders SET order_status =? WHERE order_code =?";

          $postStmt = $mysqli->prepare($postQuery);
          $upStmt = $mysqli->prepare($upQry);


          $rc = $postStmt->bind_param('ssssss', $pay_id, $pay_code, $order_code, $customer_id, $pay_amt, $pay_method);
          $rc = $upStmt->bind_param('ss', $order_status, $order_code);

          $postStmt->execute();
          $upStmt->execute();
          //declarar una variable que se pasará a la función de alerta
          if ($upStmt && $postStmt) {
              $success = "Pagado" && header("refresh:1; url=payments_reports.php");
          } else {
              $err = "Inténtelo de nuevo o inténtelo más tarde";
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
  <!-- Main -->
  <div class="main-content">
    <!-- Barra de navegación superior -->
    <?php
    require_once('partials/_topnav.php');
    $order_code = $_GET['order_code'];
    $ret = "SELECT * FROM  rpos_orders WHERE order_code ='$order_code' ";
    $stmt = $mysqli->prepare($ret);
    $stmt->execute();
    $res = $stmt->get_result();
    while ($order = $res->fetch_object()) {
        $total = ($order->prod_price * $order->prod_qty);
    ?>
    
    <!-- Header -->
    <div style="background-image: url(../admin/assets/img/theme/restro00.jpg); background-size: cover;" class="header  pb-8 pt-5 pt-md-8">
    <span class="mask bg-gradient-dark opacity-8"></span>
      <div class="container-fluid">
        <div class="header-body">
        </div>
      </div>
    </div>
    <!-- Contenido de la pagina -->
    <div class="container-fluid mt--8">
      <!-- Tabla -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3>Termine de realizar el pago</h3>
            </div>
            <div class="card-body">
              <form method="POST"  enctype="multipart/form-data">
                <div class="form-row">
                  <div class="col-md-6">
                    <label>ID Pago</label>
                    <input type="text" name="pay_id" readonly value="<?php echo $payid;?>" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label>Cód. Pago</label><small class="text-danger"> Escriba un código alfabético de 10 dígitos si el método de pago es en efectivo</small>
                    <input type="text" limit="11" name="pay_code" placeholder="<?php echo $mpesaCode; ?>" class="form-control" value="">
                  </div>
                </div>
                <hr>
                <div class="form-row">
                  <div class="col-md-6">
                    <label>Monto (S/)</label>
                    <input type="text" name="pay_amt" readonly value="<?php echo $total;?>" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label>Método de pago</label>
                    <select class="form-control" name="pay_method">
                        <option selected>Efectivo</option>
                        <option>YAPE / Plin</option>
                    </select>
                  </div>
                </div>
                <br>
                <div class="form-row">
                  <div class="col-md-6">
                    <input type="submit" name="pay" value="Pagar orden" class="btn btn-success" value="">
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
  require_once('partials/_scripts.php'); }
  ?>
</body>

</html>