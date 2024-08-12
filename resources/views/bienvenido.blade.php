<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/bienvenido.css'])
    @vite(['node_modules/@fortawesome/fontawesome-free/css/all.css'])
    <title>Boulevar de las frutas - @yield('producto')</title>
</head>

<body>
    <nav class="barra">
        <a href="/">Boulevar de las Frutas</a>
        <a href="/productos">Productos</a>
        <a href="#">Galeria</a>
        <a href="#">Contacto</a></li>
        <a href="#">Turismo local</a>
        <a href="/administracion">Ingresar</a>
        <div>
            <input type="search" placeholder="Buscar">
            <button type="submit">Buscar</button>
        </div>
    </nav>
    <div class="contenido">

        <div class="titulo">
            <h1>Boulevar de las frutas</h1>
        </div>

        <div class="imagen-bienvenida">
            <img src="{{asset('/storage/img/imagen_bienvenida_cafe.jpg')}}" alt="imagen café">

        </div>

        <div class="caja-contenido">
            <h2>Sobre la empresa</h2>
            <p>El Boulevar de las frutas es un restaurante familiar que tiene 17 años funcionando,
                creado por Jaime Anacona y su esposa Yaneth Chavarro, quienes llegaron de Colombia
                a Ecuador en busca de una mejor estabilidad económica para ellos y sus 3 hijos,
                su propuesta fue un sitio de antojitos colombianos en un pequeño pueblo llamado El Coca,
                lugar que tuvo gran acogida por su sabor tradicional e innovación ya que no había nada como esto,
                el negocio creció al igual que sus hijos quienes son los encargados
                hoy en día de seguir con el legado de sus padres,
                incluyendo nuevas ideas pero manteniendo la esencia de este agradable lugar.</p>
        </div>

        <div class="caja-contenido">
            <h2>Productos y servicios</h2>
            <p>Tenemos un amplio menú que varia para todos los gustos, nuestros productos van desde comidas rápidas,
                empanadas colombianas, pan de yuca, batidos, ensaladas de frutas, una gama de cafés fríos y calientes,
                desayunos, pizzas, pasteles, comida saludable y platos a la carta.
                Ofrecemos servicios presenciales en nuestro único local, no tenemos proyectado expandirnos,
                mas bien queremos mantener la calidad y servicio, actualmente tenemos 11 empleados.</p>
        </div>

        <div class="caja-contenido">
            <h2>Misión</h2>
            <p>Somos un restaurante familiar de comidas rápidas, antojitos colombianos y café,
                creado para dar a conocer estas delicias a cualquiera, queremos cada día mejorar
                y mantener nuestra calidad y tradición.</p>
        </div>

        <div class="caja-contenido">
            <h2>Visión</h2>
            <p>Proyectarnos como empresa moderna de comidas rápidas, lideres en el mercado del oriente ecuatoriano,
                mantenernos en constante evolución, adaptandonos a las necesidades cambiantes
                del entorno para brindar el mejor servicio a nuestros colaboradores y clientes.</p>
        </div>


    </div>


    <div class="pie">
        <footer>
            <div class="container">
                <div>
                    <h5 class="enlace">Enlaces</h5>
                    <ul class="vinculo">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="/productos">Productos</a></li>
                        <li><a href="#">Contacto</a></li>
                        <li><a href="#">Acerca de</a></li>
                    </ul>
                </div>

                <div>
                    <h5 class="enlace">Contacto</h5>
                    <ul class="vinculo">
                        <li><a href="mailto:info@example.com">boulevarfrutas@hotmail.com</a></li>
                        <li><a href="tel:+1234567890">+593 96 717 9114</a></li>
                        <li><a href="https://maps.app.goo.gl/89sodtLFuspYqgXA8">Ubicación</a></li>
                    </ul>
                </div>

                <div>
                    <h5 class="enlace">Síguenos</h5>
                    <ul class="vinculo">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
            <div class="derechos">
                <p class="mb-0">&copy; 2024 Boulevar de las Frutas. Todos los derechos reservados.</p>
            </div>
        </footer>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    @vite(['resources/js/app.js'])
</body>

</html>
