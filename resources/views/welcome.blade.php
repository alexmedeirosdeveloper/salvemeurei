@extends('layouts.main')

@section('title', 'Salve Meu Rei')

@section ('content')

        <!-- Header Start-->
        <div id="header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="header-content">
                            <h2><span>Salve Meu Rei</span> é a melhor marca <span>do mercado</span> para você adquirir sua Tronqueira de Aço</h2>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>Guarde seus guardiões com maior cuidado.</li>
                                <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>Feita de aço super resistente.</li>
                                <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>Produto artesanal feito para atender nossos clientes da melhor forma.</li>
                                <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span>Compra 100% Online e segura.</li>
                            </ul>
                            <a class="btn" href="https://wa.link/d46moe">Compre agora</a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="header-img">
                            <img src="img/watch-header.png" alt="Product Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End-->

                <!-- Feature Start-->
                <div id="feature">
            <div class="container">
                <div class="section-header">
                    <h2>Nosso Diferencial</h2>
                    <p>
                        Nossos produtos são fabricados de maneira completamente artesanal e de qualidade, personalizando da melhor forma sempre pensando nos nossos clientes em primeiro lugar.
                    </p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="product-feature">
                            <div class="product-content">
                                <h2>Materiais sagrados e de alta qualidade</h2>
                                <p>Prezamos pela qualidade de todos os nossos produtos, por isso todas as peças são soldadas e rebitadas, deixando a mesma com excelente acabamento.</p>
                            </div>
                            <div class="product-icon">
                                <i class="fa fa-lightbulb"></i>
                            </div>
                        </div>
                        <div class="product-feature">
                            <div class="product-content">
                                <h2>Design exclusivo e personalizado</h2>
                                <p>Fabricada de maneira totalmente artesanal, em chapa de aço galvanizado que garante resistência e durabilidade, pois não enferruja, podendo assim deixa-las expostas em áreas externas (em contado com sol e chuva).</p>
                            </div>
                            <div class="product-icon">
                                <i class="fa fa-key"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-img">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img src="/img/watch-features.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="/img/watch-header.png" class="d-block w-100" alt="...">
                                        </div>

                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    </a>
                                    </div>
                                </div>
                            
                            </div>
                    <div class="col-md-4">
                        <div class="product-feature">
                            <div class="product-icon">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="product-content">
                                <h2>Entrega rápida e segura</h2>
                                <p>Escolhemos as melhores transportadoras do mercado para fazer a entrega de forma rápida e segura.</p>
                            </div>
                        </div>
                        <div class="product-feature">
                            <div class="product-icon">
                                <i class="fa fa-heartbeat"></i>
                            </div>
                            <div class="product-content">
                                <h2>Suporte especializado</h2>
                                <p>Tiramos todas as suas dúvidas antes de realizar a compra dos nossos produtos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End-->


                <!-- Process Start-->
                <div id="process">
            <div class="container">
                <div class="section-header">
                    <h2>Como Comprar</h2>
                    <p>
                        Comprar com a Salve Meu Rei é fácil, rápido e seguro.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="process-col">
                            <i class="fa fa-plug"></i>
                            <h2>Entre em contato com a gente pelo Whatsapp</h2>
                            <p>
                                Atendemos todos os nossos clientes por Whatsapp, tiramos as dúvidas de forma clara e direta.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="process-col">
                            <i class="fa fa-sliders-h"></i>
                            <h2>Orçamento e Frete</h2>
                            <p>
                                Após entrar em contato com a Salve Meu Rei, enviaremos o orçamento dos nossos produtos com o valor do frete incluso.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="process-col">
                            <i class="fa fa-check"></i>
                            <h2>Entrega do Produto</h2>
                            <p>
                                Escolheremos a melhor transportadora e enviaremos o código de rastreio para que você acompanhe o processo do transporte, após essa etapa o produto já estará com você.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Process End-->
        
        
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
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img src="/img/watch-features.png" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                        <img src="/img/watch-header.png" class="d-block w-100" alt="...">
                                        </div>

                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    </a>
                                    </div>
                                </div>
                                </div>
                            <div class="product-content">
                                <h2>Tronqueira de aço</h2>
                                <h3>R$749</h3>
                                <a class="btn" href="https://wa.link/d46moe">Compre Agora</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Products End -->
        
        
        <!-- Testimonials Start -->
        <div id="testimonials">
            <div class="container">
                <div class="section-header">
                    <h2>Depoimentos de quem já comprou na Salve Meu Rei</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies
                    </p>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-1.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h3>Christopher Heath</h3>
                            <h4>Science technician</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit massa sit amet
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-2.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h3>Mollie White</h3>
                            <h4>Youtuber</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit massa sit amet
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-3.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h3>Tom McKenzie</h3>
                            <h4>Videographer</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit massa sit amet
                            </p>
                        </div>
                    </div>
                    
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-4.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h3>Ruby Forster</h3>
                            <h4>Photographer</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit massa sit amet
                            </p>
                        </div>
                    </div>
                    
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/testimonial-5.jpg" alt="">
                        </div>
                        <div class="testimonial-content">
                            <h3>Leo Conway</h3>
                            <h4>Relationship manager</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipiscing elit massa sit amet
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials End -->
        
        
        <!-- FAQ Start -->
        <div id="faqs">
            <div class="container">
                <div class="section-header">
                    <h2>FAQs (Perguntas Frequentes)</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies
                    </p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <span>1</span>
                                    <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                        Produtos têm garantia?
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Sim, todos nossos produtos têm garantia, o prazo é discriminado conforme o fabricante contra defeito de fabricação.

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <span>2</span>
                                    <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                        Os produtos são novos?
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Sim, todas as peças de nossa loja são novas. Não trabalhamos com produto usado, remanufaturados ou remoldados.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <span>3</span>
                                    <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                        Alguma dúvida sobre a peça?
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Pergunte nos comentários disponíveis logo abaixo, atenderemos o mais rápido possível.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <span>4</span>
                                    <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                        Fazem tronqueiras sob medida?
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                    Não estamos fazendo tronqueiras sob medida no momento, nós optamos por ter em estoque a maior quantidade de itens possíveis, então selecionamos algumas medidas e no momento só fabricamos elas.                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <span>5</span>
                                    <a class="card-link" data-toggle="collapse" href="#collapseFive">
                                        Posso retirar o produto pessoalmente?
                                    </a>
                                </div>
                                <div id="collapseFive" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                    Caso o comprador prefira, poderá retirar pessoalmente junto a nossa sede.                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    
                    <div class="col-md-5">
                        <div class="contact-info">
                            <h2>Entre em Contato</h2>
                            <p>
                                Responderemos todas as suas dúvidas através do nosso WhatsApp.
                            </p>
                            <h3><i class="fa fa-map-marker"></i>123 Trade Tower, Los Angeles, CA, USA</h3>
                            <h3><i class="fa fa-envelope"></i>email@example.com</h3>
                            <h3><i class="fa fa-phone"></i>+123-456-7890</h3>
                            <a class="btn" href="https://wa.link/d46moe">Atendimento via Whatsapp</a>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook"></i></a>
                                <a href=""><i class="fab fa-linkedin"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQ Start -->

@endsection

@section ('feature')
@endsection