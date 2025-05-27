@extends('layout.main')

@section('title', 'Painel')

@section('contet')

    <div>
    
        <nav class="navbar navbar-light bg-light;" style=" background: #fff ">
            <div class="container-fluid d-flex justify-content-center align-items-center">
                <form class="d-flex align-items-center justify-content-center border rounded-pill" style="min-width: 400px; height: 2rem;" >
                    <input style="width: 70%; border:none" type="text" placeholder="Search" > |
                    <button style=" border:none; background: #fff " type="submit">Search</button>
                </form>
            </div>
        </nav>
        <div style="position:static">
            <div style="width:90%; height:350px; margin:auto; position: relative;
    top: 16px;">
            
            </div>

            <div class="border border-black mx-auto" style=" width: 78%; position: relative; top: -38px;">
            
                <!-- Tecnologia -->
                <div class="container my-4">

                        <div id="carouselCards" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <div class="row justify-content-center">
                                    @for ($i = 0; $i < 4; $i++)
                                        <div class="col-md-3 d-flex align-items-center justify-content-center flex-column border text-center mx-1" style="width: 150px; border-color: black;">
                                        <img id="img_card" src="{{ asset('img/monitor.png') }}" alt="">
                                        <h6>Monitor 19 Preto Led</h6>
                                        <p>R$279</p>
                                        </div>
                                    @endfor
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="row justify-content-center">
                                    @for ($i = 0; $i < 3; $i++)
                                        <div class="col-md-3 d-flex align-items-center justify-content-center flex-column border text-center mx-1" style="width: 150px; border-color: black;">
                                        <img id="img_card" src="{{ asset('img/monitor.png') }}" alt="">
                                        <h6>Monitor 19 Preto Led</h6>
                                        <p>R$279</p>
                                        </div>
                                    @endfor
                                    </div>
                                </div>

                                

                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselCards" data-bs-slide="prev">
                            <!-- <span class="carousel-control-prev-icon"> > </span> -->
                            <i class="bi bi-chevron-compact-left"></i>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselCards" data-bs-slide="next">
                            <span class="carousel-control-next-icon"> < </span>
                            </button>
                        </div>

                    </div>
                    
                </div>

                <!-- Livro -->

                <!-- Casa -->

                <!-- Automovel -->
        </div>
    </div>

@endsection