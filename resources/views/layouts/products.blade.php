@extends ('layouts.main')

@section('title', 'Como Comprar')

@section ('content')    
    
    <!-- Products Start -->
        <div id="products">
            <div class="container">
                <div class="section-header">
                    <h2>Todos os Nossos Produtos</h2>
                    <p>
                        Aqui você pode conferir a lista de todos os produtos da nossa marca.
                    </p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="product-single">
                            <div class="product-img">
                                <img src="img/product-1.png" alt="Product Image">
                            </div>
                            <div class="product-content">
                                <h2>Tronqueira de aço</h2>
                                <h3>R$749</h3>
                                <a class="btn" href="https://wa.link/d46moe">Compre Agora</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-single">
                            <div class="product-img">
                                <img src="img/product-2.png" alt="Product Image">
                            </div>
                            <div class="product-content">
                                <h2>Kit Tronqueira + Guardião</h2>
                                <h3>R$899</h3>
                                <a class="btn" href="https://wa.link/d46moe">Compre Agora</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-single">
                            <div class="product-img">
                                <img src="img/product-3.png" alt="Product Image">
                            </div>
                            <div class="product-content">
                                <h2>Tronqueira de aço</h2>
                                <h3>$249</h3>
                                <a class="btn" href="https://wa.link/d46moe">Compre Agora</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-single">
                            <div class="owl-carousel testimonials-carousel">
                                <div class="product-img">
                                    <img src="img/product-4.png" alt="Product Image">
                                </div>
                            </div>    
                            <div class="product-content">
                                <h2>Tronqueira de aço</h2>
                                <h3>$299</h3>
                                <a class="btn" href="https://wa.link/d46moe">Compre Agora</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Products End -->

        @endsection