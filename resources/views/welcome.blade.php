@extends('layouts.template')

@section('content')

<div class="row first-row">
    @foreach ($proyectos->take(3) as $proyecto)
    <!-- Columnas para los primeros 3 proyectos -->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <div class="col-md-4 mb-5">
        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $proyecto->id }}">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
            </div>
            <img class="custom-image" src="{{ asset('storage').'/'.$proyecto->imagen }}" alt="">
        </div>
    </div>
    @endforeach
</div>

<div class="row additional-projects hidden-projects">
    @foreach ($proyectos->skip(3) as $proyecto)
    <!-- Columnas para los proyectos restantes ocultos por defecto -->
    <div class="col-md-4 mb-5">
        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $proyecto->id }}">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
            </div>
            <img class="custom-image" src="{{ asset('storage').'/'.$proyecto->imagen }}" alt="">
        </div>
    </div>
    @endforeach

</div>

<div class="text-center mb-5">
    <button id="show-more-btn" class="btn btn-primary btn-circle btn-lg">
    Mostrar más
</button>

</div>

@foreach ($proyectos as $proyecto)
<!-- Portfolio Modal -->
<div class="portfolio-modal modal fade" id="portfolioModal{{ $proyecto->id }}" tabindex="-1" aria-labelledby="portfolioModal" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title -->
                            <h2 class="portfolio-modal-title text-gray text-uppercase mb-0">{{ $proyecto->nombre }}</h2>
                            <!-- Portfolio Modal - Image -->
                            <br>
                            <br>
                            <img class="img-fluid rounded mb-5" src="{{ asset('storage').'/'.$proyecto->imagen }}" alt="">
                            <!-- Portfolio Modal - Text -->
                            <p class="mb-4">{{ $proyecto->descripcion }}</p>
                            <!-- <a class="btn btn-primary" href="{{ $proyecto->url }}">
                                <i class="fas fa-xmark fa-fw"></i>
                                Ver proyecto
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

<style>
    /* Estilos para el botón y proyectos adicionales */
    .custom-image {
        height: 150px;
        object-fit: cover;
        width: 100%;
        border: 2px solid #ddd;
        /* Agregamos un borde gris de 2px */
        border-radius: 8px;
        /* Agregamos una curvatura de 8px a la imagen */
    }

    .hidden-projects {
        display: none;
    }

    /* Estilos para el botón "+" */
    #show-more-btn {
        margin-top: 20px;
    }
</style>
<script>
    document.getElementById("show-more-btn").addEventListener("click", function() {
        // Obtener el contenedor de proyectos adicionales
        var additionalProjectsContainer = document.querySelector(".additional-projects");

        // Mostrar u ocultar los proyectos adicionales
        additionalProjectsContainer.classList.toggle("hidden-projects");

        // Cambiar el icono del botón y el texto según su estado
        var buttonText = this.textContent.trim();
        if (buttonText === "Mostrar más") {
            this.textContent = "Mostrar menos";
        } else {
            this.textContent = "Mostrar más";
        }
    });
</script>



@endsection
