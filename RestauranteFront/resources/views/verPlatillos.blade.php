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

    .buscar {
      display: flex;
      width: 200px;
      justify-content: center;
    }

    .buscar input {
      width: 100%;
      outline: none;
      border: none;
      padding: 5px;
    }

    .fa-magnifying-glass {
      display: block;
      padding: 4px;
      cursor: pointer;
    }

    #subopciones {
      display: none;
    }

    #subopciones.mostrar {
      display: block;
    }

    .submenu {
      display: flex;
      flex-direction: column;
    }

    .submenu {
      flex-direction: column;
    }

    .submenu a {
      display: block;
      padding: 10px;
      margin: 0 10px;
      text-decoration: none;
      color: #8B4513;
    }

    .submenu-Ingredientes {
      display: none;
      flex-direction: column;
    }
    .submenu-Ingredientes a {
      display: block;
      padding: 10px;
      margin: 0 10px;
      text-decoration: none;
      color: #8B4513;
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
            <li> Administrar Restaurante</li>
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
              <i class="fa-solid fa-user" style="color: #fff;"></i>
            </li>
          </a>
        </ul>
      </div>
    </div>
  </header>
  <div class="main-container">
    <nav>
      <a href="{{ route('administrarRestaurante')}}" id="platillos-link"><i class="fa-solid fa-folder-open"></i> Platillos</a>
      <div class="submenu">
        <a href="#" style="color: #5E7F5E;"><i class="fa-solid fa-list" style="margin-left: 18px; padding-right: 10px;" ></i>Ver Platillos</a>
        <a href="{{ route('eliminarPlatillos')}}"><i class="fa-solid fa-trash" style="margin-left: 18px; padding-right: 10px;"></i>Eliminar Platillos</a>
        <a href="{{ route('EditorNuevoPlatillo')}}"><i class="fa-solid fa-bowl-food" style="margin-left: 18px; padding-right: 10px;"></i>Crear Platillo</a>
      </div>
      <a href="#" id="#platillos-link.active"><i class="fa-solid fa-folder" style="padding-right: 3px;"></i>Ingredientes</a>
      <div class="submenu-Ingredientes">
        <a href="#"><i class="fa-solid fa-list" style="margin-left: 18px; padding-right: 10px"></i>Ver Ingredientes</a>
        <a href="#"><i class="fa-solid fa-trash" style="margin-left: 18px; padding-right: 10px;"></i>Eliminar Ingrediente</a>
        <a href="#"><i class="fa-solid fa-bowl-food" style="margin-left: 18px; padding-right: 10px;"></i>Crear Ingrediente</a>
      </div>
      <a href="#"><i class="fa-solid fa-users" style="padding-right: 3px;"></i>Clientes</a>
    </nav>
    <section>
    <table class="table">
      <caption style="caption-side: top; text-align: center; font-size: 30px; font-weight: bold; background-color: #5E7F5E; color: #fff;">Lista de Platillos</caption>
      <thead>
        <tr>
          <th scope="col" name="clienteid" style="background-color: #a4a9a8;">Platillo ID</th>
          <th scope="col" name="clienteid" style="background-color: #A4A9A8;">Nombre Platillo</th>
          <th scope="col" name="cajeroid" style="background-color: #A4A9A8;">Precio Platillo</th>
          <th scope="col" name="cajeroid" style="background-color: #A4A9A8;">Ingredientes Platillo</th>
        </tr>
      </thead>
      <tbody>
      @if(isset($platillos) && count($platillos) > 0)
                @foreach($platillos as $platillo)
                    <tr>
                        <td style="background-color: #A4A9A8;">{{ $platillo['platillo']['productoID'] }}</td>
                        <td style="background-color: #A4A9A8;">{{ $platillo['platillo']['nombreProducto'] }}</td>
                        <td style="background-color: #A4A9A8;">{{ $platillo['platillo']['precio'] }}</td>
                        <td style="background-color: #A4A9A8;">
                            <ul class="list-group">
                                @foreach($platillo['ingredientes'] as $ingrediente)
                                    <li style="background-color: #A4A9A8;" class="list-group-item">
                                        {{ $ingrediente['nombreIngrediente'] }} ({{ $ingrediente['cantidadUtilizada'] }})
                                    </li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
   </section>
  </div>
</body>

</html>