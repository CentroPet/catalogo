<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{asset('cssCatax/catax.css')}}">
    {{-- <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> --}}
</head>
<body>
    
    <nav class="navbar navbar-expand-lg nacbar-light "  style="background-color: #5c3587;">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: #fed10b; font-size: 30px; font-weight: 500;"  href="#">Centro Pet</a>

            <button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#menuAmburguesa" aria-controls="#menuAmburguesa" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" ></span>
            </button>
            <div class="collapse navbar-collapse" id="menuAmburguesa">
                <div class="navbar-nav">
                    <a href="#" style="color:#ffffff;" class="nav-link">Perro</a>
                    <a href="#" style="color:#ffffff;" class="nav-link">Gato</a>
                    <a href="#" style="color:#ffffff;" class="nav-link">Ofertas</a>
                    <a href="#" style="color:#ffffff;" class="nav-link">Contacto</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color:#ffffff;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Servicios
                        </a>
                        <ul class="dropdown-menu" >
                            <li><a class="dropdown-item"href="#" >Peluqueria</a></li>
                            <li><a class="dropdown-item" href="#">Guardria</a></li>
                            <li><a class="dropdown-item" href="#">veterinaria</a></li>
                            <li><a class="dropdown-item" href="#">Delivery</a></li>
                        </ul>
                    </li>
                </div> 
            </div>
            <div class="row justify-content-between">
                <form action="" class="d-flex" role="search">
                    <input type="text" class="form-control me-2" type="search" placeholder="busqueda" aria-label="search">
                    <button class="btn btn-outline-info" type="submit">Buscar</button>
                </form>
            </div>

        </div>
    </nav>
    
    <div class="container bg-info mt-4">
        <div class="row justify-content-end">
            <div class="col-auto"> 
                <img class="imagen-con-margen" src="https://ouch-cdn2.icons8.com/hxxz5Qr551KY1597yq-mz9zWRTkAT-cob5eZ8UreBBo/rs:fit:368:338/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvNzcy/L2UxYjU4YWUwLTc3/YjQtNGQ1OC05NjJl/LWUzODQ1Y2IyYzBi/Ny5wbmc.png" alt="">
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <img class=" img-fluid h-100 sombra-imagen"  src="https://media.istockphoto.com/id/1303308191/es/foto/perro-marr%C3%B3n-hambriento-con-taz%C3%B3n-vac%C3%ADo-esperando-para-alimentarse.jpg?s=612x612&w=0&k=20&c=jMJc8w_vI6s09l_g415MQs0pLQXNm-e-jXo7mu8Mzr4=" class="img-fluid" alt="...">
            </div>
            <div class="col-sm-6 col-md-6">
                <img class="img-fluid h-100  sombra-imagen" style="height: rem" src="https://www.donbigotes.co/wp-content/uploads/gato-gracioso.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            @foreach ($productos as $producto) 
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="card">
                        <div class="card-body  text-center">
                            <img class="rounded float-righth" src="{{ asset ("storage/fotos/".$producto->foto)}}" alt="descripcion de la imagen" width="100px">
                        </div>
                        <div class="card-header bg-info text-center">
                            {{$producto->nombre}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


