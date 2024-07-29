<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Empleados - @yield('empleado')</title>
    @vite(['resources/css/admin.css'])
    @vite(['node_modules/@fortawesome/fontawesome-free/css/all.css'])
    </head>
    <body>



        <nav>
            <img src="{{asset('/storage/productos/Boulevar.jpg')}}" alt="">
            <div class="enlaces">
                <a href=""><span class="fa-solid fa-house"></span> Inicio</a>
                <a href="/productos"><span class="fa-solid fa-cart-shopping"></span> Productos</a>
                <a href=""><span class="fas fa-users"></span> Nosotros</a>
                <a href=""><span class="fa-solid fa-address-book"></span> Empleados</a>
                <a href=""><span class="fa-solid fa-cart-flatbed"></span> Materia prima</a>
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

    @vite(['resources/js/app.js'])
</body>
</html>

