<?php

$carro = $_POST['total'];

echo $carro;

$producslecf = $_POST['producslecf'];

echo $producslecf;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estilproductos.css">
    <title>Productos</title>
   
    <!--ESCRIPT PARA EL FUNCIONAMIENTO DEL CARRITO-->

    <script>
        
        document.addEventListener('DOMContentLoaded', () => {
          // Variables
          const baseDeDatos = [
              {
                  id: 1,
                  nombre: 'Alebrije',
                  precio: 1500,
                  imagen: '../IMAGENES/PRODUCCION.jfif'
                  //../IMAGENES/PRODUCCION.jfif
              },
              {
                  id: 2,
                  nombre: 'Pagina Web',
                  precio: 1200,
                  imagen: 'cebolla.jpg'
              },
              {
                  id: 3,
                  nombre: 'Calabacin',
                  precio: 2.1,
                  imagen: 'calabacin.jpg'
              },
              {
                  id: 4,
                  nombre: 'Fresas',
                  precio: 0.6,
                  imagen: 'fresas.jpg'
              },
              {
                  id: 5,
                  nombre: 'Calabacin',
                  precio: 2.1,
                  imagen: 'calabacin.jpg'
              },
              {
                  id: 6,
                  nombre: 'Calabacin',
                  precio: 2.1,
                  imagen: 'calabacin.jpg'
              },
              {
                  id: 7,
                  nombre: 'Calabacin',
                  precio: 2.1,
                  imagen: 'calabacin.jpg'
              },
              {
                  id: 8,
                  nombre: 'Calabacin',
                  precio: 2.1,
                  imagen: 'calabacin.jpg'
              },
              {
                  id: 9,
                  nombre: 'Calabacin',
                  precio: 2.1,
                  imagen: 'calabacin.jpg'
              },
              {
                  id: 10,
                  nombre: 'Calabacin',
                  precio: 2.1,
                  imagen: 'calabacin.jpg'
              },
              
              {
                  id: 11,
                  nombre: 'Calabacin',
                  precio: 2.1,
                  imagen: 'calabacin.jpg'
              },
              {
                  id: 12,
                  nombre: 'Calabacin',
                  precio: 2.1,
                  imagen: 'calabacin.jpg'
              },


          ];
          let carrito = [];
            const divisa = '$';
            const DOMitems = document.querySelector('#items');
            const DOMcarrito = document.querySelector('#carrito');
            const DOMtotal = document.querySelector('#total');
            const DOMbotonVaciar = document.querySelector('#boton-vaciar');
            const miLocalStorage = window.localStorage;

          // Funciones

          /**
          * Dibuja todos los productos a partir de la base de datos. No confundir con el carrito
          */
          function renderizarProductos() {
              baseDeDatos.forEach((info) => {
                  // Estructura
                  const miNodo = document.createElement('div');
                  miNodo.classList.add('card', 'col-sm-4');
                  // Body
                  const miNodoCardBody = document.createElement('div');
                  miNodoCardBody.classList.add('card-body');
                  // Titulo
                  const miNodoTitle = document.createElement('h5');
                  miNodoTitle.classList.add('card-title');
                  miNodoTitle.textContent = info.nombre;
                  // Imagen
                  const miNodoImagen = document.createElement('img');
                  miNodoImagen.classList.add('img-fluid');
                  miNodoImagen.setAttribute('src', info.imagen);
                  // Precio
                  const miNodoPrecio = document.createElement('p');
                  miNodoPrecio.classList.add('card-text');
                  miNodoPrecio.textContent = `${divisa}${info.precio}`;
                  // Boton 
                  const miNodoBoton = document.createElement('button');
                  miNodoBoton.classList.add('btn', 'btn-primary');
                  miNodoBoton.textContent = '+';
                  miNodoBoton.setAttribute('marcador', info.id);
                  miNodoBoton.addEventListener('click', anyadirProductoAlCarrito);
                  // Insertamos
                  miNodoCardBody.appendChild(miNodoImagen);
                  miNodoCardBody.appendChild(miNodoTitle);
                  miNodoCardBody.appendChild(miNodoPrecio);
                  miNodoCardBody.appendChild(miNodoBoton);
                  miNodo.appendChild(miNodoCardBody);
                  DOMitems.appendChild(miNodo);
              });
          }

          /**
          * Evento para añadir un producto al carrito de la compra
          */
          function anyadirProductoAlCarrito(evento) {
              // Anyadimos el Nodo a nuestro carrito
              carrito.push(evento.target.getAttribute('marcador'))
              // Actualizamos el carrito 
              renderizarCarrito();
                   // Actualizamos el LocalStorage
                   guardarCarritoEnLocalStorage();

          }

          /**
          * Dibuja todos los productos guardados en el carrito
          */
          function renderizarCarrito() {
              // Vaciamos todo el html
              DOMcarrito.textContent = '';
              // Quitamos los duplicados
              const carritoSinDuplicados = [...new Set(carrito)];
              // Generamos los Nodos a partir de carrito
              carritoSinDuplicados.forEach((item) => {
                  // Obtenemos el item que necesitamos de la variable base de datos
                  const miItem = baseDeDatos.filter((itemBaseDatos) => {
                      // ¿Coincide las id? Solo puede existir un caso
                      return itemBaseDatos.id === parseInt(item);
                  });
                  // Cuenta el número de veces que se repite el producto
                  const numeroUnidadesItem = carrito.reduce((total, itemId) => {
                      // ¿Coincide las id? Incremento el contador, en caso contrario no mantengo
                      return itemId === item ? total += 1 : total;
                  }, 0);
                  // Creamos el nodo del item del carrito

                  //con document.createElement creamos un elemento
                  const miNodo = document.createElement('li');

                  // con classList.add damos una clase
                  miNodo.classList.add('list-group-item', 'text-right', 'mx-2');

                  //con setAttribute se le da un valor como un id
                  miNodo.setAttribute('id', 'producslec');

                  miNodo.setAttribute('name','producslecf');
                  //con textContent sera el texto que se imprimira en el navegador
                  miNodo.textContent = `${numeroUnidadesItem} x ${miItem[0].nombre} -${divisa}${miItem[0].precio}`;
                  // Boton de borrar

                  const miBoton = document.createElement('button');
                  //clase del boton
                  miBoton.classList.add('btn', 'btn-danger', 'mx-5');

                  //texto imprimido
                  miBoton.textContent = 'Eliminar Producto';

                  //se le da un estilo 
                  miBoton.style.marginLeft = '1rem';
                  miBoton.dataset.item = item;
                  miBoton.addEventListener('click', borrarItemCarrito);
                  // Mezclamos nodos
                  miNodo.appendChild(miBoton);
                  DOMcarrito.appendChild(miNodo);
              });
             // Renderizamos el precio total en el HTML
             DOMtotal.textContent = calcularTotal();
          }

          /**
          * Evento para borrar un elemento del carrito
          */
          function borrarItemCarrito(evento) {
              // Obtenemos el producto ID que hay en el boton pulsado
              const id = evento.target.dataset.item;
              // Borramos todos los productos
              carrito = carrito.filter((carritoId) => {
                  return carritoId !== id;
              });
              // volvemos a renderizar
              renderizarCarrito();
                 // Actualizamos el LocalStorage
                 guardarCarritoEnLocalStorage();
          }

          /**
           * Calcula el precio total teniendo en cuenta los productos repetidos
           */
          function calcularTotal() {
              // Recorremos el array del carrito 
              return carrito.reduce((total, item) => {
                  // De cada elemento obtenemos su precio
                  const miItem = baseDeDatos.filter((itemBaseDatos) => {
                      return itemBaseDatos.id === parseInt(item);
                  });
                  // Los sumamos al total
                  return total + miItem[0].precio;
              }, 0).toFixed(2);
          }

          /**
          * Varia el carrito y vuelve a dibujarlo
          */
          function vaciarCarrito() {
              // Limpiamos los productos guardados
              carrito = [];
              // Renderizamos los cambios
              renderizarCarrito();
               // Borra LocalStorage
               localStorage.clear();
          }
          function guardarCarritoEnLocalStorage () {
                miLocalStorage.setItem('carrito', JSON.stringify(carrito));
            }

            function cargarCarritoDeLocalStorage () {
                // ¿Existe un carrito previo guardado en LocalStorage?
                if (miLocalStorage.getItem('carrito') !== null) {
                    // Carga la información
                    carrito = JSON.parse(miLocalStorage.getItem('carrito'));
                }
            }


          // Eventos
          DOMbotonVaciar.addEventListener('click', vaciarCarrito);

          // Inicio
          cargarCarritoDeLocalStorage();
          renderizarProductos();
          renderizarCarrito();
        });
    </script>
</head>

<body>

<!--MENU PARA QUE EL USUARIO PUEDA IR A LOS DEMAS SITIOS WEB-->

    <header id="menu">

        <!--LINK PARA IR A LA PAGINA PRINCIPAL DESDE LA IMAGEN-->

        <a href="../index.html" class="logo">

            <!--LOGO DE LA ESCUELA-->

            <img src="../IMAGENES/LOGO/LOGCETIS.jpg" alt="Cetis 64">

            <h2 class="cetis">Cetis 64 </h2>

        </a>

        <!--links para ir a las otras paginas-->

        <nav class="btnm">

            <!--LINK PARA IR A LA PAGINA PRINCIPAL-->

            <a href="../index.html" class="nav-link">Inicio</a>

<!--LINK PARA LA PAGINA DE LOS DATOS DE ALUMNOS, MAESTROS Y OTROS-->

            <a href="../HTML/datos.html" class="nav-link">Datos</a>

            <ul>
                <li><a href="#">Enlace 2.1</a></li>
                <li><a href="#">Enlace 2.2</a></li>
                <li><a href="#">Enlace 2.3</a></li>
                </ul>

<!--LINK PARA LA PAGINA DEL CONTACTO DE LA ESCUELA-->

            <a href="../HTML/Contacto.html" class="nav-link">Contacto</a>

        </nav>

    </header>

    
<div>

    <hr class="barra">

    <div id="container" class="container">
      
            <!-- Elementos generados a partir del JSON -->
            <main id="items" class="col-sm-8 row"></main>
        
     
    </div>
    <form action="../PHP/compra.php" method="post">
        <!-- Carrito -->
        <aside class="col-sm-4">
            <h2>Carrito</h2>
            <!-- Elementos del carrito -->
            <ul id="carrito" class="list-group"></ul>
            <hr>
            <!-- Precio total -->
            <p class="text-right" id="total" name="total"> Total:$ <span id="total" name="total"></span></p>
            <button type="reset" id="boton-vaciar" name="btn-vaciar" class="btn btn-danger">Vaciar</button>
            <button type="submit" id="boton-vaciar" name="btn-enviar" class="btn btn-danger">Enviar</button>
        </aside>
    
</div>
</form>
</body>
</html>