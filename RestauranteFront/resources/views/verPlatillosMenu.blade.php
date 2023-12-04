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
    /** Tarjetas Restaurante **/

   .wrap{
     max-width: 1200px;
     margin: 0 auto;
   }
   
   .column-2.carta{
     display: grid;
     grid-template-columns: repeat(2,1fr);
     column-gap: 1rem;
     row-gap: 1rem;
   }
   
   .plato-carta{
     display: flex;
     align-items: center;
     border: 1px solid #e5e5e5;
     border-radius: 6px;
     margin-top: 15px;
     margin-left: 25px;
     margin-right: 25px;
     max-width: calc(100% - 50px); 
     width: 100%;
   }
   
   .img-plato-carta{
     display: flex;
     flex-basis: 25%;
     justify-content: center;
   }
   
   .img-plato-carta img{
     max-width: 100px;
     max-height: 75px;
   }
   
   .title-plato-carta{
     border: 1px solid #e5e5e5;
     border-bottom: none;
     border-top: none;
     flex-basis: 60%;
     padding: 0 1rem;
   }
   
   .precio-plato-carta{
     display: flex;
     flex-basis: 15%;
     justify-content: center;
     font-weight: bold;
   }
   
   .agregar-plato-carta{
     display: flex;
     flex-basis: 41%;
     justify-content: center;
     font-weight: bold;
     border-left: 1px solid #e5e5e5; 
   }
   @media (max-width:680px){
   .column-2.carta{
     grid-template-columns: repeat(1,1fr);
   }
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
            <li> Menu de Restaurante</li>
          </a>
        </ul>
      </div>
      <div class="cuenta">
        <ul>
          <a href="#">
            <li>
              <a href="{{ route('homeRestaurante')}}"><i class="fa-solid fa-house" style="color: #fff;"></i></a>
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
  <div class="content">
    @if(isset($platillos) && count($platillos) > 0)
        @foreach($platillos as $platillo)
        <div class="plato-carta">
            <div class="img-plato-carta">
              <img src="{{ $platillo['platillo']['url'] }}" alt="">
            </div>
            <div class="title-plato-carta">
              <h4>{{ $platillo['platillo']['nombreProducto'] }}</h4>
              <p>
                @foreach($platillo['ingredientes'] as $ingrediente)
                <span>{{ $ingrediente['nombreIngrediente'] }} ({{ $ingrediente['cantidadUtilizada'] }}), </span>
                @endforeach
              </p>
            </div>
            <div class="precio-plato-carta">
              <span>{{ $platillo['platillo']['precio'] }}</span>
            </div>
            <div class="agregar-plato-carta">
             <button type="submit" class="btn btn-success"  onclick="agregarAlCarrito('{{ $platillo['platillo']['productoID'] }}')">Agregar</button>
            </div>
          </div>
        @endforeach   
    @endif    
    </div>>
    <form id="carrito-form" action="{{ route('generarOrden') }}" method="post" style="display: none;">
     @csrf
     @method('POST')
     <input type="text" name="dni" id="dni" value="0801200030002">
     <input type="text" name="cajeroId" id="cajeroId" value="0801200030004">
     <input type="text" name="productos" id="productos">
    </form>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <script>
    document.getElementById('carrito-icono').addEventListener('click', function () {
        agregarAlCarrito();
        enviarFormulario();
    });

    // Array para almacenar los platillos agregados al carrito
    const productos = [];

    // Función para agregar un platillo al carrito
    function agregarAlCarrito(producto) {
        producto = parseInt(producto);
        // Verificar si el producto ya está en el carrito
        const productoEnCarrito = productos.find(item => item.producto === producto);

        if (productoEnCarrito) {
            // Si el producto ya está en el carrito, incrementar la cantidad
            productoEnCarrito.cantidad += 1;
        } else {
            // Si el producto no está en el carrito, agregarlo con cantidad 1
            productos.push({ producto, cantidad: 1 });
        }
        console.log('Carrito:', productos);
    }

    function enviarFormulario() {
        // Construye el campo "productos" en el formato deseado
        const productosFormateados = productos.map(item => ({
            producto: item.producto,
            cantidad: item.cantidad
        }));

        // Asigna el valor del campo "productos" al formulario
        document.getElementById('productos').value = JSON.stringify(productosFormateados);

        // Envía el formulario
        document.getElementById('carrito-form').submit();
    }
</script>
</body>

</html>