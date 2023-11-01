<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Durian Kocok</title>
  <meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'><link rel="stylesheet" href="./style.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
</head>
<body>
<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img
          src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
          height="15"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="text-reset me-3" href="#">
        <i class="fas fa-shopping-cart"></i>
      </a>

      <!-- Notifications -->
      <div class="dropdown">
        <a
          class="text-reset me-3 dropdown-toggle hidden-arrow"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <i class="fas fa-bell"></i>
          <span class="badge rounded-pill badge-notification bg-danger">1</span>
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuLink"
        >
          <li>
            <a class="dropdown-item" href="#">Some news</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Another news</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Something else here</a>
          </li>
        </ul>
      </div>
      <!-- Avatar -->
      <div class="dropdown">
        <a
          class="dropdown-toggle d-flex align-items-center hidden-arrow"
          href="#"
          id="navbarDropdownMenuAvatar"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <img
            src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
            class="rounded-circle"
            height="25"
            alt="Admin"
            loading="lazy"
          />
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuAvatar"
        >
          <li>
            <a class="dropdown-item" href="#">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Settings</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Logout</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
<!-- partial:index.partial.html -->

<div class="wrapper">

  <div class="content">
    <div class="bg-shape">
      <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405214/starwars/logo.webp" alt="">
    </div>

    
    <div class="product-img">

      <div class="product-img__item" id="img1">
        <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405217/starwars/item-1.webp" alt="star wars" class="product-img__img">
      </div>

      <div class="product-img__item" id="img2">
        <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405217/starwars/item-2.webp" alt="star wars" class="product-img__img">
      </div>

      <div class="product-img__item" id="img3">
        <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405218/starwars/item-3.webp" alt="star wars" class="product-img__img">
      </div>

      <div class="product-img__item" id="img4">
        <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405215/starwars/item-4.webp" alt="star wars" class="product-img__img">
      </div>


    </div>



    <div class="product-slider">
      <button class="prev disabled">
        <span class="icon">
          <svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-left"></use></svg>
        </span>
      </button>
      <button class="next">
        <span class="icon">
          <svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg>
        </span>
      </button>

      <div class="product-slider__wrp swiper-wrapper">
        <div class="product-slider__item swiper-slide" data-target="img4">
          <div class="product-slider__card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfpTNJhHgg9Qx2wHG3p62Z34VKF3L0_CKQnQ&usqp=CAU" alt="star wars" class="product-slider__cover">
            <div class="product-slider__content">
              <h1 class="product-slider__title">
                STORMTROPER <br>
                HELMET
              </h1>
              <span class="product-slider__price">$1.299,<sup>99</sup></span>
              <div class="product-ctr">
                <div class="product-labels">
                  <div class="product-labels__title">HELMET SIZE</div>

                  <div class="product-labels__group">
                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type5" >
                      <span class="product-labels__txt">S</span>
                    </label>

                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type5" checked>
                      <span class="product-labels__txt">M</span>
                    </label>

                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type5" >
                      <span class="product-labels__txt">L</span>
                    </label>

                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type5" >
                      <span class="product-labels__txt">XL</span>
                    </label>

                  </div>

                </div>

                <span class="hr-vertical"></span>

                <div class="product-inf">
                  <div class="product-inf__percent">
                    <div class="product-inf__percent-circle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                        <defs>
                          <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
                            <stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
                          </linearGradient>
                        </defs>
                        <circle cx="50" cy="50" r="47" stroke-dasharray="240, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
                      </svg>
                    </div>
                    <div class="product-inf__percent-txt">
                      80%
                    </div>
                  </div>

                  <span class="product-inf__title">DURABILITY RATE</span>
                </div>

              </div>

              <div class="product-slider__bottom">
                <button class="product-slider__cart">
                  ADD TO CART
                </button>

                <button class="product-slider__fav js-fav"><span class="heart"></span> ADD TO WISHLIST</button>
              </div>
            </div>
          </div>
        </div>
        <div class="product-slider__item swiper-slide" data-target="img1">
          <div class="product-slider__card">
            <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405222/starwars/item-1-bg.webp" alt="star wars" class="product-slider__cover">
            <div class="product-slider__content">
              <h1 class="product-slider__title">
                IMPERIAL  ARMY’S <br> TIE FIGHTER
              </h1>
              <span class="product-slider__price">$9.999,<sup>99</sup></span>
              <div class="product-ctr">
                <div class="product-labels">
                  <div class="product-labels__title">ENGINE UNIT</div>

                  <div class="product-labels__group">
                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type1" checked>
                      <span class="product-labels__txt">P-S4 TWIN</span>
                    </label>

                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type1">
                      <span class="product-labels__txt">P-W401</span>
                    </label>
                  </div>

                </div>

                <span class="hr-vertical"></span>

                <div class="product-inf">
                  <div class="product-inf__percent">
                    <div class="product-inf__percent-circle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                        <defs>
                          <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
                            <stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
                          </linearGradient>
                        </defs>
                        <circle cx="50" cy="50" r="47" stroke-dasharray="225, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
                      </svg>
                    </div>
                    <div class="product-inf__percent-txt">
                      75%
                    </div>
                  </div>

                  <span class="product-inf__title">DURABILITY</span>
                </div>

              </div>

              <div class="product-slider__bottom">
                <button class="product-slider__cart">
                  ADD TO CART
                </button>

                <button class="product-slider__fav js-fav"><span class="heart"></span> ADD TO WISHLIST</button>
              </div>
            </div>
          </div>
        </div>

        <div class="product-slider__item swiper-slide" data-target="img2">
          <div class="product-slider__card">
            <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405222/starwars/item-2-bg.webp" alt="star wars" class="product-slider__cover">
            <div class="product-slider__content">
              <h1 class="product-slider__title">
                KYLO REN'S <br> LIGHTSABER
              </h1>
              <span class="product-slider__price">$1.699,<sup>99</sup></span>
              <div class="product-ctr">
                <div class="product-labels">
                  <div class="product-labels__title">VOLTAGE RANGE</div>

                  <div class="product-labels__group">
                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type3" checked>
                      <span class="product-labels__txt">2000 <sup>WATT</sup></span>
                    </label>

                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type3">
                      <span class="product-labels__txt">2800 <sup>WATT</sup></span>
                    </label>
                  </div>

                  <div class="product-labels__title">LASER SIZE</div>

                  <div class="product-labels__group">
                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type2" >
                      <span class="product-labels__txt">S</span>
                    </label>

                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type2" checked>
                      <span class="product-labels__txt">M</span>
                    </label>

                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type2" >
                      <span class="product-labels__txt">L</span>
                    </label>

                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type2" >
                      <span class="product-labels__txt">XL</span>
                    </label>

                  </div>

                </div>

                <span class="hr-vertical"></span>

                <div class="product-inf">
                  <div class="product-inf__percent">
                    <div class="product-inf__percent-circle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                        <defs>
                          <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
                            <stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
                          </linearGradient>
                        </defs>
                        <circle cx="50" cy="50" r="47" stroke-dasharray="240, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
                      </svg>
                    </div>
                    <div class="product-inf__percent-txt">
                      80%
                    </div>
                  </div>

                  <span class="product-inf__title">DURABILITY</span>
                </div>

              </div>

              <div class="product-slider__bottom">
                <button class="product-slider__cart">
                  ADD TO CART
                </button>

                <button class="product-slider__fav js-fav"><span class="heart"></span> ADD TO WISHLIST</button>
              </div>
            </div>
          </div>
        </div>

        <div class="product-slider__item swiper-slide" data-target="img3">
          <div class="product-slider__card">
            <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405215/starwars/item-3-bg.webp" alt="star wars" class="product-slider__cover">
            <div class="product-slider__content">
              <h1 class="product-slider__title">
                IMPERIAL ARMY'S <br>
                DEATH STAR
              </h1>
              <span class="product-slider__price">$9.999,<sup>99</sup></span>
              <div class="product-ctr">
                <div class="product-labels">
                  <div class="product-labels__title">HYPERDRIVE RATING</div>

                  <div class="product-labels__group">
                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type6" checked>
                      <span class="product-labels__txt">CLASS 4</span>
                    </label>

                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type6">
                      <span class="product-labels__txt">CLASS 20</span>
                    </label>
                  </div>

                  <div class="product-labels__title">ARMANENT</div>

                  <div class="product-labels__group">
                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type7" checked>
                      <span class="product-labels__txt">SUPERLASER</span>
                    </label>

                    <label class="product-labels__item">
                      <input type="radio" class="product-labels__checkbox" name="type7">
                      <span class="product-labels__txt">TURBOLASER</span>
                    </label>
                  </div>

                </div>

                <span class="hr-vertical"></span>

                <div class="product-inf">
                  <div class="product-inf__percent">
                    <div class="product-inf__percent-circle">
                      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                        <defs>
                          <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
                            <stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
                          </linearGradient>
                        </defs>
                        <circle cx="50" cy="50" r="47" stroke-dasharray="240, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
                      </svg>
                    </div>
                    <div class="product-inf__percent-txt">
                      80%
                    </div>
                  </div>

                  <span class="product-inf__title">DURABILITY RATE</span>
                </div>

              </div>

              <div class="product-slider__bottom">
                <button class="product-slider__cart">
                  ADD TO CART
                </button>

                <button class="product-slider__fav js-fav"><span class="heart"></span> ADD TO WISHLIST</button>
              </div>
            </div>
          </div>
        </div>

        

      </div>
    </div>

  </div>
</div>
<svg class="hidden" hidden>
  <symbol id="icon-arrow-left" viewBox="0 0 32 32">
    <path d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z"></path>
  </symbol>
  <symbol id="icon-arrow-right" viewBox="0 0 32 32">
    <path d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z"></path>
  </symbol>
</svg>
<!--- conten -->
<div class="container mt-5 mb-3">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3 mb-2">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
                        <div class="ms-2 c-details">
                            <h6 class="judul mb-0">Mailchimp</h6> <span>1 days ago</span>
                        </div>
                    </div>
                    <div class="badge"> <span>Design</span> </div>
                </div>
                <div class="mt-5">
                    <h3 class="heading">Senior Product<br>Designer-Singapore</h3>
                    <div class="mt-5">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="mt-3"> <span class="text1">32 Applied <span class="text2">of 50 capacity</span></span> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 mb-2">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon"> <i class="bx bxl-dribbble"></i> </div>
                        <div class="ms-2 c-details">
                            <h6 class="judul  mb-0">Dribbble</h6> <span>4 days ago</span>
                        </div>
                    </div>
                    <div class="badge"> <span>Product</span> </div>
                </div>
                <div class="mt-5">
                    <h3 class="heading">Junior Product<br>Designer-Singapore</h3>
                    <div class="mt-5">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="mt-3"> <span class="text1">42 Applied <span class="text2">of 70 capacity</span></span> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-3 mb-2">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon"> <i class="bx bxl-reddit"></i> </div>
                        <div class="ms-2 c-details">
                            <h6 class="judul mb-0">Reddit</h6> <span>2 days ago</span>
                        </div>
                    </div>
                    <div class="badge"> <span>Design</span> </div>
                </div>
                <div class="mt-5">
                    <h3 class="heading">Software Architect <br>Java - USA</h3>
                    <div class="mt-5">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="mt-3"> <span class="text1">52 Applied <span class="text2">of 100 capacity</span></span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MAHENDRAWIS</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script><script  src="./script.js"></script>

</body>
</html>
