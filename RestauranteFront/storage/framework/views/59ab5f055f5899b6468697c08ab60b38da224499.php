<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/837e259c9d.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Restaurante</title>
    <style>
        *{
           margin: 0;
           padding: 0;
           box-sizing: border-box;
           list-style: none;
           text-decoration: none;
           color: black;
           font-family: Verdana, Geneva, Tahoma, sans-serif;

        }
        
        .header{
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
          box-shadow: 0 2px 20px #5E7F5E;
      }
      .bar{
          display: none;
      }
      
      .header ul{
          display: flex;
          align-items: center;
      }
      
      .header ul li:hover{
          color: #5E7F5E;
      }
      
      .nav ul li{
          color: #fff;
          padding: 0 15px;
          font-size: 18px;
          font-weight: bold;
      }
      
      .cuenta{
          flex: 0.1;
      }
      
      .cuenta ul{
          display: flex;
          justify-content: end;
      }
      
      .cuenta ul li{
          padding: 0 15px;
          font-size: 21px;
      }
      .bar i:hover{
          color: #5E7F5E;
      }
      .buscar{
          display: flex;
          width: 200px;
          justify-content: center;
      }
      
      .buscar input{
          width: 100%;
          outline: none;
          border: none;
          padding: 5px;
      }
      
      .fa-magnifying-glass{
          display: block;
          padding: 4px;
          cursor: pointer;
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
          max-width: 100%;
          height: 100%;
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
          font-size: 30px;
      }
      
      .principal div:nth-child(1) p{
          font-size: 13px;
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
      
      @media  only screen and (max-width: 550px){
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
      
      
        /* Footer de la página */
      
      footer{
          border-top: 2px solid #5E7F5E;
          background-color: #D9BF77;
          color: var(--black-c);
        }
        
        footer ul{
          padding: 0;
        }
        
        .wrap-footer{
          display: grid;
          grid-template-columns: 30% 15% 15% 20%;
          column-gap: 5%;
          padding: 1rem;
          margin: 2rem auto;
          max-width: 1200px;
        }
        
        element-footer h5{
          margin: 1rem 0;
        }
        
        .text-element-footer{
          line-height: 2;
        }
        
        .text-element-footer li a{
          color: #5E7F5E;
          font-weight: bold;
        }
        
        .rrss-element-footer ul{
          display: flex;
          flex-wrap: wrap;
        }
        
        .rrss-element-footer img{
          padding-top: 5px;
          width: 45px;
        }
        .rrss-element-footer li{
          margin-right: 1rem;
        }
        
      
        @media (max-width:768px){
          .wrap-footer{
            grid-template-columns: repeat(2,1fr);
          }
        }
        
        @media (max-width:480px){
          .wrap-footer{
            grid-template-columns: repeat(1,1fr);
          }
        }
        
        @media (max-width:320px){
          .footer-creds{
            flex-flow: column;
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
                   <a href="<?php echo e(route('menuRestaurante')); ?>">
                       <li > Menú </li>
                   </a>
                   <a href="<?php echo e(route('GenerarNuevaFactura')); ?>">
                       <li >Factura</li>
                   </a>
                   <a href="<?php echo e(route('administrarRestaurante')); ?>">
                       <li> Administrar</li>
                   </a>
                </ul>
           </div>
           <div class="cuenta">
            <ul>
                <a href="#">
                    <li>
                        <i class="fa-solid fa-house" style="color: #fff;"></i>
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
    <div class="landing">
        <div class="principal">
            <div>
                <h1> Bienvenido al  <span> Proyecto Final </span> De Lenguajes de Programacion.</h1>
                <p>Algunas de las Herramientas Utilizadas son: Laravel, Guzzle, Spring Boot.</p>
                <button class="boton_landing"> Entrar Ahora <i class="fa-solid fa-arrow-right"></i></button>
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1424847651672-bf20a4b0982b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="imagen-ajustada">
            </div>
        </div>
    </div>
    <footer>
        <div class="wrap-footer">
            <div class="text-element-footer element-footer">
              <h3>Restaurante</h3>
              <p>La función principal es el pedido de platillos y su detalle de ingredientes.</p>
            </div>
            <div class="text-element-footer element-footer">
              <h5> Alumnos</h5>
              <ul>
                <li>Alejandro Moya</li>
                <li>Ángel Nolasco</li>
                <li>Franklin Guitiérrez</li>
                <li>Jackeline Villalobos</li>
              </ul>
            </div>
            <div class="text-element-footer element-footer">
              <h5>Más información</h5>
              <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/">Nosotros</a></li>
                <li><a href="/">Carta</a></li>
                <li><a href="/">Contacto</a></li>
              </ul>
            </div>
            <div class="rrss-element-footer element-footer">
              <h5>Redes Sociales</h5>
              <ul>
                <li><a href="/">
                  <img src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtNTEyIDc1djM2MmMwIDQxLjM5ODQzOC0zMy42MDE1NjIgNzUtNzUgNzVoLTEyMWwtMzAtMzBoLTMwbC0zMCAzMGgtMTUxYy00MS4zOTg0MzggMC03NS0zMy42MDE1NjItNzUtNzV2LTM2MmMwLTQxLjM5ODQzOCAzMy42MDE1NjItNzUgNzUtNzVoMzYyYzQxLjM5ODQzOCAwIDc1IDMzLjYwMTU2MiA3NSA3NXptMCAwIiBmaWxsPSIjNzk4NGViIi8+PHBhdGggZD0ibTUxMiA3NXYzNjJjMCA0MS4zOTg0MzgtMzMuNjAxNTYyIDc1LTc1IDc1aC0xMjFsLTMwLTMwaC0xNXYtNDgyaDE2NmM0MS4zOTg0MzggMCA3NSAzMy42MDE1NjIgNzUgNzV6bTAgMCIgZmlsbD0iIzQ2NjFkMSIvPjxwYXRoIGQ9Im0zMTYgMTgwdjYwaDkwbC0xNSA5MGgtNzV2MTgyaC05MHYtMTgyaC02MHYtOTBoNjB2LTYwYzAtMzMuMzAwNzgxIDE4LjMwMDc4MS02Mi40MDIzNDQgNDUtNzggMTMuMTk5MjE5LTcuNSAyOC44MDA3ODEtMTIgNDUtMTJoOTB2OTB6bTAgMCIgZmlsbD0iI2VjZWNmMSIvPjxwYXRoIGQ9Im0zMTYgMTgwdjYwaDkwbC0xNSA5MGgtNzV2MTgyaC00NXYtNDEwYzEzLjE5OTIxOS03LjUgMjguODAwNzgxLTEyIDQ1LTEyaDkwdjkwem0wIDAiIGZpbGw9IiNlMmUyZTciLz48L3N2Zz4=" alt="icono redes sociales">
                </a></li>
                <li><a href="">
                  <img src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIC0zMSA1MTIgNTEyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0yMTEgMjcwLTQwLjkxNzk2OSA0My42NzU3ODEgMTAuOTE3OTY5IDc2LjMyNDIxOSAxMjAtOTB6bTAgMCIgZmlsbD0iIzAwYzBmMSIvPjxwYXRoIGQ9Im0wIDE4MCAxMjEgNjAgOTAgMzAgMjEwIDE4MCA5MS00NTB6bTAgMCIgZmlsbD0iIzc2ZTJmOCIvPjxwYXRoIGQ9Im0xMjEgMjQwIDYwIDE1MCAzMC0xMjAgMjEwLTE4MHptMCAwIiBmaWxsPSIjMjVkOWY4Ii8+PC9zdmc+" alt="icono redes sociales">
                </a></li>
                <li><a href="">
                  <img src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMjU2IDBjLTE0MC42OTkyMTkgMC0yNTYgMTE1LjMwMDc4MS0yNTYgMjU2IDAgNDYuNSAxMi41OTc2NTYgOTEuNSAzNi4zMDA3ODEgMTMxLjEwMTU2MmwtMzYuMzAwNzgxIDEyNC44OTg0MzggMTI0Ljg5ODQzOC0zNi4zMDA3ODFjMzkuNjAxNTYyIDIzLjY5OTIxOSA4NC42MDE1NjIgMzYuMzAwNzgxIDEzMS4xMDE1NjIgMzYuMzAwNzgxIDE0MC42OTkyMTkgMCAyNTYtMTE1LjMwMDc4MSAyNTYtMjU2cy0xMTUuMzAwNzgxLTI1Ni0yNTYtMjU2em0wIDAiIGZpbGw9IiMwMGRkN2IiLz48cGF0aCBkPSJtNTEyIDI1NmMwIDE0MC42OTkyMTktMTE1LjMwMDc4MSAyNTYtMjU2IDI1NnYtNTEyYzE0MC42OTkyMTkgMCAyNTYgMTE1LjMwMDc4MSAyNTYgMjU2em0wIDAiIGZpbGw9IiMwMGNjNzEiLz48cGF0aCBkPSJtNDE3LjE5OTIxOSAzNjQuMzAwNzgxLTEyIDExLjY5OTIxOWMtMTYuODAwNzgxIDE2LjgwMDc4MS01NS44MDA3ODEgMTUuNTk3NjU2LTgwLjY5OTIxOSAxMC44MDA3ODEtMjIuMTk5MjE5LTQuMTk5MjE5LTQ2LTE0LjEwMTU2Mi02OC41LTI3LjkwMjM0My02MS4xOTkyMTktMzcuMTk5MjE5LTExNi42OTkyMTktMTAzLjE5OTIxOS0xMzAuMTk5MjE5LTE2Mi41OTc2NTctOS4zMDA3ODEtNDAuMjAzMTI1LTQuMTk5MjE5LTc1IDktODguNWwxMi0xMmM2LjYwMTU2My02LjMwMDc4MSAxNy4wOTc2NTctNi4zMDA3ODEgMjMuNjk5MjE5IDBsNDcuNjk5MjE5IDQ3LjY5OTIxOWMzLjMwMDc4MSAzLjMwMDc4MSA1LjEwMTU2MiA3LjUgNS4xMDE1NjIgMTJzLTEuODAwNzgxIDguNjk5MjE5LTUuMTAxNTYyIDEybC0xMiAxMS42OTkyMTljLTEyLjg5ODQzOCAxMy4xOTkyMTktMTIuODk4NDM4IDM0LjUgMCA0Ny42OTkyMTlsNDkuODAwNzgxIDQ4LjkwMjM0MyAyOS4wOTc2NTYgMjguODAwNzgxYzEzLjIwMzEyNSAxMy4xOTkyMTkgMzUuNTAzOTA2IDEzLjE5OTIxOSA0OC43MDMxMjUgMGwxMS42OTkyMTktMTIuMDAzOTA2YzYuMzAwNzgxLTYgMTcuNjk5MjE5LTYgMjQgMGw0Ny42OTkyMTkgNDcuNzAzMTI1YzYuMzAwNzgxIDYuNTk3NjU3IDYuNjAxNTYyIDE3LjA5NzY1NyAwIDI0em0wIDAiIGZpbGw9IiNlY2VjZjEiLz48cGF0aCBkPSJtNDE3LjE5OTIxOSAzNjQuMzAwNzgxLTEyIDExLjY5OTIxOWMtMTYuODAwNzgxIDE2LjgwMDc4MS01NS44MDA3ODEgMTUuNTk3NjU2LTgwLjY5OTIxOSAxMC44MDA3ODEtMjIuMTk5MjE5LTQuMTk5MjE5LTQ2LTE0LjEwMTU2Mi02OC41LTI3LjkwMjM0M3YtODMuMDk3NjU3bDI5LjA5NzY1NiAyOC44MDA3ODFjMTMuMjAzMTI1IDEzLjE5OTIxOSAzNS41MDM5MDYgMTMuMTk5MjE5IDQ4LjcwMzEyNSAwbDExLjY5OTIxOS0xMi4wMDM5MDZjNi4zMDA3ODEtNiAxNy42OTkyMTktNiAyNCAwbDQ3LjY5OTIxOSA0Ny43MDMxMjVjNi4zMDA3ODEgNi41OTc2NTcgNi42MDE1NjIgMTcuMDk3NjU3IDAgMjR6bTAgMCIgZmlsbD0iI2UyZTJlNyIvPjwvc3ZnPg==" alt="icono redes sociales">
                </a></li>
              </ul>
            </div>
          </div>
    </footer>
</body>
</html><?php /**PATH C:\Users\Jose Moya\Documents\Lenguajes de Programación\Proyecto\RestaurantanteFront\RestauranteFront\resources\views/index.blade.php ENDPATH**/ ?>