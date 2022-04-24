@extends('layout.app')

@section('content')
    <div class="carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

            

            <div class="carousel-indicators">
                @for ($i=0; $i < count($last_articles); $i++)
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{  $i }}" class="active" aria-current="true" aria-label="Slide {{ $i + 1 }}"></button>  
                @endfor
            </div>
            <div class="carousel-inner">
                @for ($i=0; $i < count($last_articles); $i++)
                    <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                        <img src="{{ asset('images/1644609728-Audi.jpg') }}" class="d-block w-100 rounded" alt="...">
                    </div>
                @endfor
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="message mt-0 bg-primary p-5">
        <h1 class="text-primary text-uppercase text-white fw-bolder text-center">Welcome to Articles</h1>
        <p class="text-white opacity-75 fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, dolorem expedita assumenda, doloremque totam corporis sunt eius voluptate unde sapiente nihil neque blanditiis laborum accusantium sed. Corporis soluta aliquid id. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam necessitatibus quibusdam magni placeat laboriosam quam quas officia voluptatum possimus harum. Esse nisi unde corporis vero commodi voluptates suscipit modi non. </p>
    </div>
    <div class="sommaire mt-0 alert alert-secondary p-5">
        <div class="row">
            <h2 class="text-dark fw-bold opacity-75 text-center mb-3">Sommaire</h2>
            <div class="col-sm-6">
                <p class="">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus expedita est harum. Commodi culpa doloribus minus sapiente, et, vitae aspernatur dolorem aperiam atque repellendus quisquam veritatis aliquid consectetur assumenda cupiditate!
                </p class="">
            </div>
            <div class="col-sm-6">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque totam adipisci et officia corrupti quia illum esse, magni, ex deleniti iusto. Culpa autem nulla excepturi quaerat necessitatibus! Incidunt, fuga similique!
                </p>
            </div>
        </div>
    </div>
@endsection