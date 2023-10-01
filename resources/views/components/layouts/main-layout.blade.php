<div>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Pedidos y Entregas' }}</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- Enlace a los archivos CSS de Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
            <img src="{{ asset('logo.png') }}" alt="Logo" height="30">
            </a>
<!-- Agrega aquí el menú de navegación con Bootstrap -->
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <!-- barra de navegacion para el Usuario Administrativo -->
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.blade.php">Pedidos</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Empleados</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Ventas</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Clientes</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Productos</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Categoria</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Marca</a>
                            </li>
                            <!-- barra de navegacion para el Usuario Empleado -->
                            <li class="nav-item">
                            <a class="nav-link" href="#">Pedidos</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Productos</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">clientes</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Carrito</a>
                            </li>
                            <!-- barra de navegacion para el Usuario Empleado - Entregador -->
                            <li class="nav-item">
                            <a class="nav-link" href="#">Pedidos</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </nav>
        
        <div class="container mt-4">
            {{ $slot }}
        </div>
        
<!-- Agrega aquí el pie de página con Bootstrap -->
    <div class="container text-center">
        <p>&copy; 2023 Anturi. Todos los derechos reservados.</p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
        
<!-- Scripts de Bootstrap y tu aplicación -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>
</div>