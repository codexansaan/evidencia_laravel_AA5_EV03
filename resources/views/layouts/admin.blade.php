<!DOCTYPE html>
<html lang="en">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion - @yield('admin')</title>
    @vite(['resources/css/admin.css'])
    @vite(['node_modules/@fortawesome/fontawesome-free/css/all.css'])
    </head>
    <body>



        <nav>
            <div class="logo">
            <img src="{{asset('/storage/productos/Boulevar.jpg')}}" alt="">
            </div>
            <div class="enlaces">

                <a href="/"><i class="fa-solid fa-house"></i>Inicio</a>

                <a href="/productos"><i class="fa-solid fa-briefcase"></i>Productos</a>

                <a href=""><i class="fa-solid fa-cart-shopping"></i>Punto de venta</a>

                <a href="/empleados"><i class="fa-solid fa-address-book"></i>Empleados</a>

                <a href=""><i class="fa-solid fa-cart-flatbed"></i>Materia prima</a>
            </div>
            <div class="sociales">
                <a href=""><span class="fab fa-facebook"></span></a>
                <a href=""><span class="fab fa-twitter"></span></a>
                <a href=""><span class="fab fa-instagram"></span></a>
            </div>
        </nav>
    <div class="content">
        @yield('content')
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>  
    @vite(['resources/js/app.js'])
</body>
</html>

