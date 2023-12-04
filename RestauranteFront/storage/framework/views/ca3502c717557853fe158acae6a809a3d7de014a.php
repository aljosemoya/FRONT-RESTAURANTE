<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/837e259c9d.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Administrador</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #D9BF77;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .header a {
      text-decoration: none;
    }

    li {
      list-style-type: none;
    }


    .main-container {
      display: flex;
      flex: 1;
    }

    nav {
      background-color: #D9BF77;
      color: #fff;
      padding: 10px;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      min-width: 200px;
      border-right: 2px solid #5E7F5E;
    }

    nav a {
      color: #8B4513;
      font-size: 17px;
      text-decoration: none;
      padding: 10px;
      margin: 0 10px;
    }

    section {
      padding: 20px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      flex: 1;
    }

    .dashboard-card {
      background-color: #fff;
      padding: 20px;
      margin: 10px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      flex: 1;
      min-width: 300px;
    }

    @media (max-width: 600px) {
      nav {
        flex-direction: row;
        justify-content: center;
        align-items: flex-start;
      }
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: 100px;
      padding: 0 7vw;
      background: linear-gradient(to bottom, rgb(0 0 0 / .75), rgb(0 0 0 / .5)), url(https://images.unsplash.com/photo-1414235077428-338989a2e8c0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      border-bottom: 2px solid #5E7F5E;
    }

    .bar {
      display: none;
    }

    .header ul {
      display: flex;
      align-items: center;
    }

    .header ul li:hover {
      color: #5E7F5E;
    }

    .nav ul li {
      color: #fff;
      padding: 0 15px;
      font-size: 18px;
      font-weight: bold;
      font-size: 30px;
    }

    .cuenta {
      flex: 0.1;
    }

    .cuenta ul {
      display: flex;
      justify-content: end;
    }

    .cuenta ul li {
      padding: 0 15px;
      font-size: 21px;
    }

    .bar i:hover {
      color: #5E7F5E;
    }
    .fa-magnifying-glass {
      display: block;
      padding: 4px;
      cursor: pointer;
    }
    #platillos-link{
      background-color: #5E7F5E;
      color: #fff;
    }
    .table{
    text-align: center;
    margin: 19px;
    font-size: 20px;
    }
  </style>
</head>

<body>
  <header>
    <div class="header">
      <div class="logo">
        <img src="" alt="">
      </div>
      <div class="bar">
        <div class="fa-solid fa-bars"></div>
        <div class="fa-solid fa-xmark"></div>

      </div>
      <div class="nav">
        <ul>
          <a href="#">
            <li> Facturación</li>
          </a>
        </ul>
      </div>
      <div class="cuenta">
        <ul>
          <a href="#">
            <li>
              <a href="<?php echo e(route('homeRestaurante')); ?>"><i class="fa-solid fa-house" style="color: #fff;"></i></a>
            </li>
          </a>
          <a href="#">
            <li>
            <i id="carrito-icono" class="fa-solid fa-cart-shopping" style="color: #fff;"></i>
          </a>
        </ul>
      </div>
    </div>
  </header>
  <<section style="display: flex; justify-content: center; align-items: center;">
        <div style="width: 100%; max-width: 1400px; margin: 0 auto; background-color: #a4a9a8; color: black; font-weight: bold; border-radius: 10px;" >
            <h1 style="caption-side: top; text-align: center; font-size: 30px; font-weight: bold; background-color: #5E7F5E; color: #fff;"> Generar Nueva Factura</h1>
            <form action="<?php echo e(route('generarFactura')); ?>" method="POST" style="width: 100%; max-width: 1400px; margin: 0 auto;" >
                <?php echo csrf_field(); ?>
                <?php echo method_field('POST'); ?>
                <div class="mb-3" style="margin-left: 15px; margin-right: 15px;">
                    <label for="">ID DE LA ORDEN</label>
                    <input type="text" name="ordenId" class="form-control" style="background-color: #ffffff8f; ">
                </div>
                <div class="mb-3" style="margin-left: 15px; margin-right: 15px;">
                    <label for="">Sub Total de la Orden</label>
                    <input type="text" name="subtotal" class="form-control" style="background-color: #ffffff8f;">
                </div>
                <div class="mb-3" style="margin-left: 15px; margin-right: 15px;">
                    <label for="">Descuento de la Orden</label>
                    <input type="text" name="descuento" class="form-control" style="background-color: #ffffff8f;">
                </div>
                <div class="mb-3" style="margin-left: 15px; margin-right: 15px;">
                    <label for="">Impuesto sobre la venta</label>
                    <input type="text" name="iva" class="form-control" style="background-color: #ffffff8f;">
                </div>
                <div class="mb-3" style="margin-left: 15px; margin-right: 15px;">
                    <label for="">Total</label>
                    <input type="text" name="total" class="form-control" style="background-color: #ffffff8f;">
                </div>
                <div class="mb-3" style="margin-left: 15px; margin-right: 15px;">
                    <label for="">Forma de Pago ID</label>
                    <input type="text" name="formaPago" class="form-control" style="background-color: #ffffff8f;">
                </div>
                <div style="display: flex; justify-content: center; margin-bottom: 15px;">
                    <button type="submit" class="btn btn-success" style="margin-top: 10px;">Guardar</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html><?php /**PATH C:\Users\Jose Moya\Documents\Lenguajes de Programación\Proyecto\RestaurantanteFront\RestauranteFront\resources\views/Factura.blade.php ENDPATH**/ ?>