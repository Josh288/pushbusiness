@extends('layouts.app')

@section('content')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Push Business</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="../assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../assets/icomoon/icomoon.css">
    <link rel="stylesheet" type="text/css" media="all" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendor.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- script
    ================================================== -->
    <script src="../assets/js/modernizr.js"></script>
  </head>
  <body>

      <meta charset="utf-8">
      <title>Push Business</title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta content="" name="keywords">
      <meta content="" name="description">

      <!-- Favicon -->
      <link class="" href="../assets/images/business.png" rel="icon">

      <!-- Google Web Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link
          href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
          rel="stylesheet">

      <!-- Icon Font Stylesheet -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

      <!-- Libraries Stylesheet -->
      <link href="lib/animate/animate.min.css" rel="stylesheet">
      <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

      <!-- Customized Bootstrap Stylesheet -->
      <link href="css/bootstrap.min.css" rel="stylesheet">



      <!-- Template Stylesheet -->
      <link href="css/style.css" rel="stylesheet">
  </head>

  <body>
      <!-- Spinner Start -->

      <!-- Spinner End -->
      <!-- Navbar End -->


      <!-- Carousel Start -->
      <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
          <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img class="w-100" src="../assets/images/a.png" height="400px" width="400px" alt="carrito lleno de compras">
                      <div class="carousel-caption">
                          <div class="container text-align-right">
                              <div class="row justify-content-start">
                                  <div class="col-lg-8">
                                      <h4
                                          class="d-inline-block border border-white rounded text-primary-dark fw-semi-bold py-1 px-3 animated slideInDown">
                                          ¡Empieza a intercambiar!, ¿ya tienes un plan para obtener mejores beneficios? </p>
                                      <h4 href="/" class="btn btn-primary py-3 px-5 animated slideInDown">Ver mas</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <img class="w-100" src="../assets/images/b.png" height="400px" width="400px">
                      <div class="carousel-caption">
                          <div class="container">
                              <div class="row justify-content-start">
                                  <div class="col-lg-6">
                                    <h4
                                          class="d-inline-block border border-white rounded text-primary-dark fw-semi-bold py-1 px-3 animated slideInDown">
                                          Bienvenido a Push Business, comienza a ofrecer tus productos</h4>
                                      <a href="/" class="btn btn-primary py-3 px-5 animated slideInDown">Empieza</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
              </button>
          </div>
      </div>
      <!-- Carousel End -->
<hr>
  <div class="container text-align-center">
    <div class="col-md-8 col-sm-9">
      <div class="card ">
        <h5 class="card-header">Publicaciones</h5>
        <div class="card-body">

          <form>
            <div class="form-group col-md-8 col-sm-6">
              <label for="nameInput">
              <input type="text" class="form-control col-md-10 col-sm-6" id="nameInput" placeholder="¿Qué productos ofrecerás hoy?">
              <img class="col-md-2 col-sm-6" href="" src="../assets/images/foto.png">
              </label>
              <a href="#" class="btn btn-primary col-md-4 col-sm-6">Publicar</a>
            <a href="#" class="btn btn-primary col-md-8 col-sm-6 ">Administrar Publicaciones</a>
          </form>

        </div>

        </div>
      </div>
      </div>
    </div>
<hr>
<section id="selling-products" class="product-store bg-light-grey padding-large">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Nuestros productos</h2>
    </div>
    <ul class="tabs list-unstyled">
      <li data-tab-target="#all" class="active tab">Todo</li>
      <li data-tab-target="#shoes" class="tab">Zapatos</li>
      <li data-tab-target="#tshirts" class="tab">Camisas</li>
      <li data-tab-target="#pants" class="tab">Pantalones</li>
      <li data-tab-target="#hoodie" class="tab">Sueteres</li>
      <li data-tab-target="#outer" class="tab">Maquillaje</li>
      <li data-tab-target="#jackets" class="tab">Chaquetas</li>
      <li data-tab-target="#accessories" class="tab">Accesorios</li>
    </ul>
    <div class="tab-content">
      <div id="all" data-tab-content class="active">
        <div class="row d-flex flex-wrap">
          <div class="product-item col-lg-4 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products1.jpg" alt="Camisa blanca para dama" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="icon icon-shopping-cart"><i class="icon icon-arrow-io"></i>
                </button>

                <button type="button" class="icon icon-screen-full" data-toggle="tooltip" data-placement="top" title="Ampliar">
                  <span class="tooltip-text">.</span>
                </button>

                <button type="button" class="icon icon-heart" data-toggle="tooltip" data-placement="top" title="Favoritos">
                  <span class="tooltip-text">.</span>
                </button>

              </div>
            </div>
            <div class="product-detail">
            <h6 class="subtitle">
              <h3 class="product-title">
                <a href="single-product.html">Camisa Blanca</a>
              </h3>
              <div class="item-price text-primary">C$250</div>
            <h6 class="subtitle"><a href="" > Tienda ortiz / Juana Zeledón </a></h6 >
            </div>
          </div>
          <div class="product-item col-lg-4 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products2.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">carrito<i class="icon icon-arrow-io"></i>
                </button>

                <button type="button" class="icon icon-screen-full" data-toggle="tooltip" data-placement="top" title="Ampliar">
                  <span class="tooltip-text">.</span>
                </button>

                <button type="button" class="icon icon-heart" data-toggle="tooltip" data-placement="top" title="Favoritos">
                  <span class="tooltip-text">.</span>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Camisa gris para caballero</a>
              </h3>
              <div class="item-price text-primary">C$250</div>
            <h6 class="subtitle"><a href="" > Boutique Amador / Esteban Hernández </a></h6 >
            </div>
          </div>
          <div class="product-item col-lg-4 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products3.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">carrito<i class="icon icon-arrow-io"></i>
                </button>

                <button type="button" class="icon icon-screen-full" data-toggle="tooltip" data-placement="top" title="Ampliar">
                  <span class="tooltip-text">.</span>
                </button>

                <button type="button" class="icon icon-heart" data-toggle="tooltip" data-placement="top" title="Favoritos">
                  <span class="tooltip-text">.</span>
                </button>
              </div>
            </div>
            <div class="product-detail">

              <h3 class="product-title">
                <a href="single-product.html">Camisa blanca para caballero</a>
              </h3>
              <div class="item-price text-primary">C$280</div>
              <h6 class="subtitle"><a href="" > Distribuidor Santiago / Santiago Morán </a></h6 >
            </div>
          </div>
          <div class="product-item col-lg-4 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products4.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">carrito<i class="icon icon-arrow-io"></i>
                </button>

                <button type="button" class="icon icon-screen-full" data-toggle="tooltip" data-placement="top" title="Ampliar">
                  <span class="tooltip-text">.</span>
                </button>

                <button type="button" class="icon icon-heart" data-toggle="tooltip" data-placement="top" title="Favoritos">
                  <span class="tooltip-text">.</span>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Hoodie oversize</a>
              </h3>
              <div class="item-price text-primary">C$300.00</div>
             <h6 class="subtitle"><a href="" > Boutique Rosé / Solieth Zamora </a></h6 >
            </div>
          </div>
          <div class="product-item col-lg-4 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products5.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">carrito<i class="icon icon-arrow-io"></i>
                </button>

                <button type="button" class="icon icon-screen-full" data-toggle="tooltip" data-placement="top" title="Ampliar">
                  <span class="tooltip-text">.</span>
                </button>

                <button type="button" class="icon icon-heart" data-toggle="tooltip" data-placement="top" title="Favoritos">
                  <span class="tooltip-text">.</span>
                </button>
              </div>

              {{--kojgohjojh--}}
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Chaqueta de cuero</a>
              </h3>
              <div class="item-price text-primary">C$350.00</div>
            <h6 class="subtitle"><a href="" > Tienda Ochoa / Mario Ruiz</a></h6 >
            </div>
          </div>
          <div class="product-item col-lg-4 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products6.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">carrito<i class="icon icon-arrow-io"></i>
                </button>

                <button type="button" class="icon icon-screen-full" data-toggle="tooltip" data-placement="top" title="Ampliar">
                  <span class="tooltip-text">.</span>
                </button>

                <button type="button" class="icon icon-heart" data-toggle="tooltip" data-placement="top" title="Favoritos">
                  <span class="tooltip-text">.</span>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Abrigo gris para dama</a>
              </h3>
              <div class="item-price text-primary">C$350.00</div>
              <h6 class="subtitle"><a href=""> Tienda ortiz / Juana Zeledón</a></h6>
            </div>
          </div>
          <div class="product-item col-lg-4 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/paleta.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">carrito<i class="icon icon-arrow-io"></i>
                </button>

                <button type="button" class="icon icon-screen-full" data-toggle="tooltip" data-placement="top" title="Ampliar">
                  <span class="tooltip-text">.</span>
                </button>

                <button type="button" class="icon icon-heart" data-toggle="tooltip" data-placement="top" title="Favoritos">
                  <span class="tooltip-text">.</span>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Paleta de sombras</a>
              </h3>
              <div class="item-price text-primary">C$450.00</div>
            <h6 class="subtitle"><a href=""> Tienda ortiz / Juana Zeledón</a></h6 >

            </div>
          </div>
          <div class="product-item col-lg-4 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/niaci.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">carrito<i class="icon icon-arrow-io"></i>
                </button>

                <button type="button" class="icon icon-screen-full" data-toggle="tooltip" data-placement="top" title="Ampliar">
                  <span class="tooltip-text">.</span>
                </button>

                <button type="button" class="icon icon-heart" data-toggle="tooltip" data-placement="top" title="Favoritos">
                  <span class="tooltip-text">.</span>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Serúm de niacinamida</a>
              </h3>
              <div class="item-price text-primary">C$350.00</div>
              <h6 class="subtitle"><a href=""> Boutique Rosé / Solieth Zamora</a></h6 >
            </div>
          </div>
          <div class="product-item col-lg-4 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/nece.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">carrito<i class="icon icon-arrow-io"></i>
                </button>

                <button type="button" class="icon icon-screen-full" data-toggle="tooltip" data-placement="top" title="Ampliar">
                  <span class="tooltip-text">.</span>
                </button>

                <button type="button" class="icon icon-heart" data-toggle="tooltip" data-placement="top" title="Favoritos">
                  <span class="tooltip-text">.</span>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Neceser blanco</a>
              </h3>
              <div class="item-price text-primary">C$380</div>
              <h6 class="subtitle"><a href=""> Tienda Lila / Maria Morazán</a></h6 >
            </div>
          </div>
          <div class="product-item col-lg-4 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products13.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">carrito<i class="icon icon-arrow-io"></i>
                </button>

                <button type="button" class="icon icon-screen-full" data-toggle="tooltip" data-placement="top" title="Ampliar">
                  <span class="tooltip-text">.</span>
                </button>

                <button type="button" class="icon icon-heart" data-toggle="tooltip" data-placement="top" title="Favoritos">
                  <span class="tooltip-text">.</span>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Zapatos naranjas Nike</a>
              </h3>
              <div class="item-price text-primary">C$900</div>
              <h6 class="subtitle"><a href=""> Tienda deportiva / Daniel Garmendia</a></h6 >
            </div>
          </div>
          <div class="product-item col-lg-4 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products15.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">carrito<i class="icon icon-arrow-io"></i>
                </button>

                <button type="button" class="icon icon-screen-full" data-toggle="tooltip" data-placement="top" title="Ampliar">
                  <span class="tooltip-text">.</span>
                </button>

                <button type="button" class="icon icon-heart" data-toggle="tooltip" data-placement="top" title="Favoritos">
                  <span class="tooltip-text">.</span>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Tennis deportivos</a>
              </h3>
              <div class="item-price text-primary">C$980</div>
              <h6 class="subtitle"><a href=""> Tienda deportiva / Daniel Garmendia</a></h6 >
            </div>
          </div>
          <div class="product-item col-lg-4 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products16.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">carrito<i class="icon icon-arrow-io"></i>
                </button>

                <button type="button" class="icon icon-screen-full" data-toggle="tooltip" data-placement="top" title="Ampliar">
                  <span class="tooltip-text">.</span>
                </button>

                <button type="button" class="icon icon-heart" data-toggle="tooltip" data-placement="top" title="Favoritos">
                  <span class="tooltip-text">.</span>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Zapatos Nike Blancos</a>
              </h3>
              <div class="item-price text-primary">C$900</div>
              <h6 class="subtitle"><a href=""> Variedades Zel / Samanta Cornejo</a></h6 >
            </div>
          </div>
        </div>
      </div>
      <div id="shoes" data-tab-content>
        <div class="row d-flex flex-wrap">
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products13.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">carrito<i class="icon icon-arrow-io"></i>
                </button>

                <button type="button" class="icon icon-screen-full" data-toggle="tooltip" data-placement="top" title="Ampliar">
                  <span class="tooltip-text">.</span>
                </button>

                <button type="button" class="icon icon-heart" data-toggle="tooltip" data-placement="top" title="Favoritos">
                  <span class="tooltip-text">.</span>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Zapatos naranjas Nike</a>
              </h3>
              <div class="item-price text-primary">C$900</div>
              <h6 class="subtitle"><a href=""> Tienda deportiva / Daniel Garmendia</a></h6 >
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products14.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">carrito<i class="icon icon-arrow-io"></i>
                </button>

                <button type="button" class="icon icon-screen-full" data-toggle="tooltip" data-placement="top" title="Ampliar">
                  <span class="tooltip-text">.</span>
                </button>

                <button type="button" class="icon icon-heart" data-toggle="tooltip" data-placement="top" title="Favoritos">
                  <span class="tooltip-text">.</span>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Zapatos deportivos</a>
              </h3>
              <div class="item-price text-primary">C$780</div>
              <h6 class="subtitle"><a href=""> Tienda Maria / Bielka Melgara</a></h6 >
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products15.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">carrito<i class="icon icon-arrow-io"></i>
                </button>

                <button type="button" class="icon icon-screen-full" data-toggle="tooltip" data-placement="top" title="Ampliar">
                  <span class="tooltip-text">.</span>
                </button>

                <button type="button" class="icon icon-heart" data-toggle="tooltip" data-placement="top" title="Favoritos">
                  <span class="tooltip-text">.</span>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Tennis deportivos</a>
              </h3>
              <div class="item-price text-primary">C$980</div>
              <h6 class="subtitle"><a href=""> Tienda deportiva / Daniel Garmendia</a></h6 >
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products16.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">carrito<i class="icon icon-arrow-io"></i>
                </button>

                <button type="button" class="icon icon-screen-full" data-toggle="tooltip" data-placement="top" title="Ampliar">
                  <span class="tooltip-text">.</span>
                </button>

                <button type="button" class="icon icon-heart" data-toggle="tooltip" data-placement="top" title="Favoritos">
                  <span class="tooltip-text">.</span>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Zapatos Nike Blancos</a>
              </h3>
              <div class="item-price text-primary">C$900</div>
              <h6 class="subtitle"><a href=""> Variedades Zel / Samanta Cornejo</a></h6 >
            </div>
          </div>
        </div>
      </div>
      <div id="tshirts" data-tab-content>
        <div class="row d-flex flex-wrap">
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products3.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">carrito<i class="icon icon-arrow-io"></i>
                </button>

                <button type="button" class="icon icon-screen-full" data-toggle="tooltip" data-placement="top" title="Ampliar">
                  <span class="tooltip-text">.</span>
                </button>

                <button type="button" class="icon icon-heart" data-toggle="tooltip" data-placement="top" title="Favoritos">
                  <span class="tooltip-text">.</span>
                </button>
              </div>
            </div>
            <div class="product-detail">
                <h3 class="product-title">
                  <a href="single-product.html">Camisa blanca para caballero</a>
                </h3>
                <div class="item-price text-primary">C$280</div>
              <h6 class="subtitle"><a href="" > Distribuidor Santiago / Santiago Morán </a></h6 >

              </div>
            </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products8.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">carrito<i class="icon icon-arrow-io"></i>
                </button>

                <button type="button" class="icon icon-screen-full" data-toggle="tooltip" data-placement="top" title="Ampliar">
                  <span class="tooltip-text">.</span>
                </button>

                <button type="button" class="icon icon-heart" data-toggle="tooltip" data-placement="top" title="Favoritos">
                  <span class="tooltip-text">.</span>
                </button>
              </div>
            </div>
            <div class="product-detail">

                <h3 class="product-title">
                  <a href="single-product.html">Camiseta blanca para caballero</a>
                </h3>
                <div class="item-price text-primary">C$190</div>
                <h6 class="subtitle"><a href="" > Distribuidor Rodriguez/Fabián Rodriguez </a></h6 >
              </div>
            </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products1.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">carrito<i class="icon icon-arrow-io"></i>
                </button>

                <button type="button" class="icon icon-screen-full" data-toggle="tooltip" data-placement="top" title="Ampliar">
                  <span class="tooltip-text">.</span>
                </button>

                <button type="button" class="icon icon-heart" data-toggle="tooltip" data-placement="top" title="Favoritos">
                  <span class="tooltip-text">.</span>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Camisa para dama</a>
              </h3>
              <div class="item-price text-primary">C$250</div>
            <h6 class="subtitle"><a href="" > Tienda ortiz / Juana Zeledón </a></h6 >
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products2.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">carrito<i class="icon icon-arrow-io"></i>
                </button>

                <button type="button" class="icon icon-screen-full" data-toggle="tooltip" data-placement="top" title="Ampliar">
                  <span class="tooltip-text">.</span>
                </button>

                <button type="button" class="icon icon-heart" data-toggle="tooltip" data-placement="top" title="Favoritos">
                  <span class="tooltip-text">.</span>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Camisa gris para caballero</a>
              </h3>
              <div class="item-price text-primary">C$250</div>
            <h6 class="subtitle"><a href="" > Boutique Amador / Esteban Hernández </a></h6 >
            </div>
          </div>
        </div>
      </div>
      <div id="pants" data-tab-content>
        <div class="row d-flex flex-wrap">
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products1.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Half sleeve T-shirt</a>
              </h3>
              <div class="item-price text-primary">$40.00</div>
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products4.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Grunge Hoodie</a>
              </h3>
              <div class="item-price text-primary">$30.00</div>
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products7.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Long Sleeve T-shirt</a>
              </h3>
              <div class="item-price text-primary">$40.00</div>
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products2.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Stylish Grey Pant</a>
              </h3>
              <div class="item-price text-primary">$40.00</div>
            </div>
          </div>
        </div>
      </div>
      <div id="hoodie" data-tab-content>
        <div class="row d-flex flex-wrap">
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products17.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">White Hoodie</a>
              </h3>
              <div class="item-price text-primary">$40.00</div>
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products4.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Navy Blue Hoodie</a>
              </h3>
              <div class="item-price text-primary">$45.00</div>
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products18.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Dark Green Hoodie</a>
              </h3>
              <div class="item-price text-primary">$35.00</div>
            </div>
          </div>
        </div>
      </div>
      <div id="outer" data-tab-content>
        <div class="row d-flex flex-wrap">
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products3.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Silk White Shirt</a>
              </h3>
              <div class="item-price text-primary">$ 35.00</div>
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products4.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Grunge Hoodie</a>
              </h3>
              <div class="item-price text-primary">$ 30.00</div>
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products6.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Grey Check Coat</a>
              </h3>
              <div class="item-price text-primary">$ 30.00</div>
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products7.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Long Sleeve T-shirt</a>
              </h3>
              <div class="item-price text-primary">$ 40.00</div>
            </div>
          </div>
        </div>
      </div>
      <div id="jackets" data-tab-content>
        <div class="row d-flex flex-wrap">
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products5.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Full Sleeve Jeans Jacket</a>
              </h3>
              <div class="item-price text-primary">$40.00</div>
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products2.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Stylish Grey Coat</a>
              </h3>
              <div class="item-price text-primary">$35.00</div>
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products6.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Grey Check Coat</a>
              </h3>
              <div class="item-price text-primary">$35.00</div>
            </div>
          </div>
        </div>
      </div>
      <div id="accessories" data-tab-content>
        <div class="row d-flex flex-wrap">
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products19.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Cartera gris</a>
              </h3>
              <div class="item-price text-primary">C$400</div>
              <h6 class="subtitle"><a href=""> Boutique Rosé/ Solieth Zamora</a></h6 >
            </div>
          </div>
          <div class="product-item col-lg-3 col-md-6 col-sm-6">
            <div class="image-holder">
              <img src="../assets/images/selling-products20.jpg" alt="Books" class="product-image">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                </button>
                <button type="button" class="view-btn tooltip
                    d-flex">
                  <i class="icon icon-screen-full"></i>
                  <span class="tooltip-text">Quick view</span>
                </button>
                <button type="button" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </button>
              </div>
            </div>
            <div class="product-detail">
              <h3 class="product-title">
                <a href="single-product.html">Reloj y billetera</a>
              </h3>
              <div class="item-price text-primary">C$500</div>
              <h6 class="subtitle"><a href=""> Tienda Maria / Bielka Melgara</a></h6 >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





    <section id="latest-blog" class="padding-large">
      <div class="container">
        <div class="section-header d-flex flex-wrap align-items-center justify-content-between">
          <h2 class="section-title">Socios destacados</h2>
          <div class="btn-wrap align-right">
            <a href="blog.html" class="d-flex align-items-center"> Conviertete en uno <i class="icon icon icon-arrow-io"></i>
            </a>
          </div>
        </div>
        <div class="row d-flex flex-wrap" width:80%>
          <article class="col-md-4 post-item">
            <div class="image-holder zoom-effect">
              <a href="single-post.html">
                <img src="../assets/images/Juana.jpg" alt="post" class="post-image">
              </a>
            </div>
            <div class="post-content d-flex">
              <div class="meta-date">
                <div class="meta-day text-primary"></div>
                <div class="meta-month"></div>
              </div>
              <div class="post-header">
                <h3 class="post-title">
                  <a href="single-post.html">Juana Zeledón</a>
                </h3>
                <a href="blog.html" class="blog-categories">Emprendedor</a>
              </div>
            </div>
          </article>
          <article class="col-md-4 post-item">
            <div class="image-holder zoom-effect">
              <a href="single-post.html">
                <img src="../assets/images/Sol.jpg" height="375px" width="375px">
              </a>
            </div>
            <div class="post-content d-flex">
              <div class="meta-date">
                <div class="meta-day text-primary"></div>
                <div class="meta-month"></div>
              </div>
              <div class="post-header">
                <h3 class="post-title">
                  <a href="single-post.html">Daniel Garmendia</a>
                </h3>
                <a href="blog.html" class="blog-categories">Proveedor</a>
              </div>
            </div>
          </article>
          <article class="col-md-4 post-item">
            <div class="image-holder zoom-effect">
              <a href="single-post.html">
                <img src="../assets/images/Dani.jpg" height="400px" width="400px" >
              </a>
            </div>
            <div class="post-content d-flex">
              <div class="meta-date">
                <div class="meta-day text-primary"></div>
                <div class="meta-month"></div>
              </div>
              <div class="post-header">
                <h3 class="post-title">
                  <a href="single-post.html">Solieth Zamora</a>
                </h3>
                <a href="blog.html" class="blog-categories">Emprendedor</a>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>


    <hr>
    <hr>

    <footer id="footer">
      <div class="container py-5">
        <div class="footer-menu-list">
          <div class="row d-flex flex-wrap justify-content-between">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title ">Redes Sociales</h5>
                <ul class="menu-list list-unstyled">
                  <li class="menu-item">
                    <a href="">
                    <i class="icon icon-facebook"> Push_Business</i></a>
                  </li>
                  <li class="menu-item">
                    <a href=""><i class="icon icon-instagram"> Push_Business</i></a>
                  </li>
                  <li class="menu-item">
                    <a href="blog.html"><i class="icon icon-TikTok"></i> Push Business</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title"> Acerca de nosotros</h5>
                <ul class="menu-list list-unstyled">
                  <li class="menu-item">
                    <a href="#">Condiciones </a>
                  </li>
                  <li class="menu-item">
                    <a href="blog.html">Nuestros desarrolladores</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Afiliados</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Politica de privacidad</a>
                  </li>
                </ul>
                <h5>¿Tienes preguntas o problemas? <a href="#" class="email">pushbusinessdbs@gmail.com</a>

                </h5>

              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <img src="/assets/images/business.png">
                <hr>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </footer>
          </div>
        </div>
      </div>
    </div>

    <script src="../assets/js/jquery-1.11.0.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/script.js"></script>
  </body>
</html>
@endsection

