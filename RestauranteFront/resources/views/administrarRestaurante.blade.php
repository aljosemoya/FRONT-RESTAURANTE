<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/837e259c9d.js" crossorigin="anonymous"></script>
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
      display: none;
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

    #platillos-link.active {
      background-color: #5E7F5E;
      /* Cambia el color de fondo al hacer clic */
      color: #fff;
      /* Cambia el color de la fuente al hacer clic */
    }
    /*  landing page */
    .landing{
          background-color: #D9BF77;
          padding: 0 7vw;
      }
      
      .principal{
          display: flex;
          align-items: center;
          flex-wrap: wrap-reverse;
      }
      .imagen-ajustada {
          max-width: 80%;
          height: 109%;
          display: block;
          margin: 0 auto;
        }
      
      .principal div:nth-child(2){
          flex: 1;
          display: flex;
          justify-content: center;
          padding: 40px;
      }
      
      .principal div:nth-child(1){
          flex: 1;
          padding: 20px;
          font-size: 45px;
      }
      
      .principal div:nth-child(1) p{
          font-size: 16px;
          padding: 20px 0;
      }
      
      .principal div:nth-child(1) span{
          color: #5E7F5E;
          text-decoration: underline;
          text-underline-offset: 10px;
          text-decoration-color: antiquewhite;
      }
      
      .boton_landing{
          cursor: pointer;
          margin-top: 20px;
          max-width: 160px;
          font-weight: bold;
          color: antiquewhite;
          background-color: #5E7F5E;
          border-radius: 5px;
          border: 1px solid #5E7F5E;
          box-shadow: 0 10px 15px #5E7F5E;
          transition: all 0.2s;
          display: flex; 
          align-items: center; 
          justify-content: center; 
          white-space: nowrap;
          overflow: hidden;
          padding: 6px;
      }
      
      .boton_landing i{
          color: antiquewhite;
          transition: all 0.2s;
          margin-left: 6px;
      }
      
      .boton_landing:hover{
          background-color: #5E7F5E;
          box-shadow: 0 2px 15px #D9BF77;
          border: 1px solid #5E7F5E;
      }
      
      .boton_landing:hover i{
          color: antiquewhite;
      }
      
      @media only screen and (max-width: 550px){
          .principal div:nth-child(1){
              font-size: 18px;
          }
          .principal div:nth-child(1) p{
              padding-top: 5px;
              margin: 10px;
              font-size: 11px;
          }
      
      }
      
      body {
          margin: 0;
          background-color: #D9BF77;
        }
      .nav-link-active {
        background-color: #5E7F5E;
        color: #fff;
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
      <a href="#" id="platillos-link"><i class="fa-solid fa-folder"></i> Platillos</a>
      <div class="submenu">
        <a href="{{ route('verPlatillos')}}"><i class="fa-solid fa-list" style="margin-left: 18px; padding-right: 10px;"></i>Ver Platillos</a>
        <a href="{{ route('eliminarPlatillos')}}"><i class="fa-solid fa-trash" style="margin-left: 18px; padding-right: 10px;"></i>Eliminar Platillos</a>
        <a href="{{ route('EditorNuevoPlatillo')}}"><i class="fa-solid fa-bowl-food" style="margin-left: 18px; padding-right: 10px;"></i>Crear Platillo</a>
      </div>
      <a href="#" id="ingredientes-link"><i class="fa-solid fa-folder" style="padding-right: 3px;"></i>Ingredientes</a>
      <div class="submenu-Ingredientes">
        <a href="#"><i class="fa-solid fa-list" style="margin-left: 18px; padding-right: 10px;"></i>Ver Ingredientes</a>
        <a href="#"><i class="fa-solid fa-trash" style="margin-left: 18px; padding-right: 10px;"></i>Eliminar Ingrediente</a>
        <a href="#"><i class="fa-solid fa-bowl-food" style="margin-left: 18px; padding-right: 10px;"></i>Crear Ingrediente</a>
      </div>
      <a href="#"><i class="fa-solid fa-users" style="padding-right: 3px;"></i>Clientes</a>
    </nav>
    <section>
    <div class="landing">
        <div class="principal">
            <div>
                <h1> Bienvenido al  <span> Administrador </span> Del Restaurante.</h1>
                <p>Algunas de las accioes que podra realizar son: Ver Platillos, Eliminar Platillos.</p>
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1551218808-94e220e084d2?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="imagen-ajustada">
            </div>
        </div>
    </div>
    </section>
  </div>
  <script>
  // Función para manejar el cambio de color y visibilidad del submenu
  function toggleSubMenu(linkId, submenuClass, oppositeLinkId, oppositeSubmenuClass) {
    var link = document.getElementById(linkId);
    var submenu = document.querySelector(submenuClass);
    var oppositeLink = document.getElementById(oppositeLinkId);
    var oppositeSubmenu = document.querySelector(oppositeSubmenuClass);

    link.addEventListener('click', function () {
      // Establecer el enlace opuesto en su estado normal
      oppositeLink.classList.remove('nav-link-active');
      oppositeSubmenu.style.display = 'none';

      // Alternar la clase 'active' para cambiar el estilo al hacer clic
      link.classList.toggle('nav-link-active');
      // Alternar la visibilidad del submenu al hacer clic
      submenu.style.display = link.classList.contains('nav-link-active') ? 'flex' : 'none';

      // Cambiar la etiqueta de fuente al hacer clic
      var icon = link.querySelector('i');
      if (link.classList.contains('nav-link-active')) {
        icon.classList.remove('fa-list');
        icon.classList.add('fa-folder-open');
      } else {
        icon.classList.remove('fa-folder-open');
        icon.classList.add('fa-list');
      }
    });
  }

  // Llamar a la función para Platillos, con "Ingredientes" como opuesto
  toggleSubMenu('platillos-link', '.submenu', 'ingredientes-link', '.submenu-Ingredientes');

  // Llamar a la función para Ingredientes, con "Platillos" como opuesto
  toggleSubMenu('ingredientes-link', '.submenu-Ingredientes', 'platillos-link', '.submenu');
</script>
</body>

</html>