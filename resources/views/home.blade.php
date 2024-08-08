<x-layout>
    @slot('cabecero')
        Inicio
    @endslot
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">

                <img src="{{ asset('imagenes\antes1.jpg') }}" class="d-block w-100" alt="Antes1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Antes</h5>

                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="{{ asset('imagenes\despues1.jpg') }}" class="d-block w-100" alt="Despues1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Despues</h5>

                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="{{ asset('imagenes\antes2.jpg') }}" class="d-block w-100" alt="Antes2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Antes</h5>

                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="{{ asset('imagenes\despues2.jpg') }}" class="d-block w-100" alt="Despues2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Despues</h5>

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</x-layout>
