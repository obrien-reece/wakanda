<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">

        <!--=============== ICONS ===============-->
        <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.4.47/css/materialdesignicons.min.css" integrity="sha512-/k658G6UsCvbkGRB3vPXpsPHgWeduJwiWGPCGS14IQw3xpr63AEMdA8nMYG2gmYkXitQxDTn6iiK/2fD4T87qA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <title>Wakanda Zone Stock</title>

    </head>

    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">

            <nav class="nav container">

                <a href="{{ route('shopping.index') }}" class="nav__logo" style="text-decoration: none;">

                    <img src="{{ asset('img/logo.png') }}" alt="" class="nav__logo-img">
                    Wakanda Zone.

                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a style="text-decoration: none;" href="#home" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a style="text-decoration: none;" href="#products" class="nav__link">Products</a></li>
                        <li class="nav__item"><a style="text-decoration: none;" href="#Contact Us" class="nav__link">Contact Us</a></li>
                        <li class="nav__item">
                            <div class="cart-icon-container" id="cartIcon" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <span class="mdi mdi-cart"></span>
                                <span class="badge badge-danger" style="display: block;">11</span>
                            </div>
                        </li>

                        <!-- Modal -->

                    </ul>

                    <div class="nav__close" id="nav-close">

                        <i class="bx bx-x"></i>

                    </div>

                </div>

                <!--Toggle Button-->
                <div class="nav__toggle" id="nav-toggle">

                    <i class="bx bx-grid-alt"></i>

                </div>

            </nav>

        </header>

        <!--==================== MAIN ====================-->
        <main>

            <!--==================== HOME ====================-->
            <section class="home grid" id="home">

                <div class="home__container">

                    <div class="home__content container">

                        <h1 class="home__title">

                            Welcome to Wakanda Zone Online! Where Luxury Meets Simplicity<span>.</span>

                        </h1>

                        <p class="home__description">SHOP. SMLE. REPEAT.</p>

                        <div class="home__data">

                            <div class="home__data-group">

                                <h2 class="home__data-number">900+</h2>
                                <h3 class="home__data-title">Testimonials</h3>
                                <p class="home__data-description">Testimonials from various customers who trust us.</p>

                            </div>

                            <div class="home__data-group">

                                <h2 class="home__data-number">5000+</h2>
                                <h3 class="home__data-title">Exclusive Product</h3>
                                <p class="home__data-description">Premium products that are five star rated.</p>

                            </div>

                        </div>

                        <a href="#specialty">

                            <img src="{{ asset('img/scroll.png') }}" alt="" class="home__scroll">

                        </a>

                    </div>

                </div>

                <img src="{{ asset('img/home.png') }}" alt="" class="home__img">

            </section>

            <!--==================== ESPECIALTY ====================-->
            <div class="specialty section container" id="specialty">

                <div class="specialty__container">

                    <div class="specialty__box">

                        <h1 class="section__title">Embrace the Art of Fine Living!</h1>

                        <div>

                            <a href="#" class="button specialty__button" style="text-decoration: none;">See More</a>

                        </div>

                    </div>

                    <div class="specialty__category">

                        <div class="specialty__group specialty__line">

                            <img src="{{ asset('img/specialty1.png') }}" alt="" class="specialty__img">

                            <h3 class="specialty__title">SHOP</h3>
                            <p class="specialty__description">Fill up your cart with the products of your choice.</p>

                        </div>

                        <div class="specialty__group specialty__line">

                            <img src="{{ asset('img/specialty2.png') }}" alt="" class="specialty__img">
                            <h3 class="specialty__title">SMILE</h3>
                            <p class="specialty__description">Our products are among the best in the market.</p>

                        </div>

                        <div class="specialty__group">

                            <img src="{{ asset('img/specialty3.png') }}" alt="" class="specialty__img">
                            <h3 class="specialty__title">REPEAT</h3>
                            <p class="specialty__description">Come back for more.</p>

                        </div>

                    </div>


                </div>

            </div>

            <!--==================== PRODUCTS ====================-->
            <section class="products section" id="products">

                <div class="products__container container">

                    <h2 class="section__title">What Would You Like Today?</h2>

                    <ul class="products__filters">

                        <li class="products__item products__line active-product" data-filter=".delicacies">

                            <h3 class="products__title">New Arrivals!</h3>
                            <span class="products__stock">3 products</span>

                        </li>

                        <li class="products__item products__line" data-filter=".coffee">

                            <h3 class="products__title">Pay and Pick</h3>
                            <span class="products__stock">4 products</span>

                        </li>

                        <li class="products__item products__line" data-filter=".cake">

                            <h3 class="products__title">Clearance Sales</h3>
                            <span class="products__stock">4 products</span>

                        </li>

                    </ul>

                    <div class="container">
                        <div class="row">

                            @foreach($products as $product)
                            <div class="col-md-3 col-sm-6 mb-3">
                                <div class="product-grid">
                                    <div class="product-image">
                                        <a href="javascript:void(0)" class="image">
                                            <img class="pic-1" src="{{ asset('img/delicacies1.png') }}">
                                        </a>
                                        <span class="product-discount-label">{{ $product->product_discount_percentage }}</span>
                                        <ul class="product-links">
                                            <li><a href="javascript:void(0)" data-tip="Add to Wishlist"><i class='bx bx-heart'></i></a></li>
                                            <!-- <li><a href="javascript:void(0)" data-tip="Compare"><i class="fa fa-random"></i></a></li> -->
                                            <li><a href="javascript:void(0)" data-tip="Quick View"><span class="mdi mdi-eye-outline"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <ul class="rating">
                                            <li class="fas fa-star"></li>
                                            <li class="fas fa-star"></li>
                                            <li class="fas fa-star"></li>
                                            <li class="far fa-star"></li>
                                            <li class="far fa-star"></li>
                                        </ul>
                                        <h3 class="title"><a href="#" style="text-decoration: none">{{ $product->product_name }}</a></h3>
                                        <div class="price"><span>Ksh.{{ $product->product_price }}</span> Ksh.{{ $product->product_discounted_price }}</div>
                                        <a id="addToCart{{ $loop->index }}" class="add-to-cart" href="javascript:void(0)" style="text-decoration: none">add to cart</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>

                </div>

            </section>

            <!--==================== QUALITY ====================-->
            <section class="quality section" id="Contact Us">

                <div class="quality__container container">

                    <h2 class="section__title">We offer premium and better quality services just for you!</h2>

                    <div class="quality__content grid">

                        <div class="quality__images">

                            <img src="{{ asset('img/quality1.png') }}" alt="" class="quality__img-big">
                            <img src="{{ asset('img/quality2.png') }}" alt="" class="quality__img-small">

                        </div>

                        <div class="quality__data">

                            <h1 class="quality__title">WANT TO PAY US A VISIT?</h1>

                            <h1 class="quality__price">Here is how to reach us.</h1>

                            <span class="quality__special">=======================================================</span>

                            <p class="quality__description">We are located along Mfangano street next to East Mart Supermarket, Mfangano Trade Centre top floor shop T5 .</p>

                            <div class="quality__buttons">

                                <button class="button">Call</button>

                                <a href="#" class="quality__button" style="text-decoration: none;">

                                    See More
                                    <i class="bx bx-right-arrow-alt"></i>

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </section>

            <!--==================== LOGOS ====================-->
            <section class="logo section">

                <div class="logo__container container grid">

                    <img src="{{ asset('img/logocoffee1.png') }}" alt="" class="logo__img">
                    <img src="{{ asset('img/logocoffee2.png') }}" alt="" class="logo__img">
                    <img src="{{ asset('img/logocoffee3.png') }}" alt="" class="logo__img">
                    <img src="{{ asset('img/logocoffee4.png') }}" alt="" class="logo__img">
                    <img src="{{ asset('img/logocoffee5.png') }}" alt="" class="logo__img">

                </div>

            </section>

            <!--==================== BLOG ====================-->
            <section class="blog section" id="About Us">

                <div class="blog__container container">

                    <h2 class="section__title">Get to know and interact with us</h2>

                    <div class="blog__content grid">

                        <article class="blog__card">

                            <div class="blog__image">

                                <img src="{{ asset('img/blog1.png') }}" alt="" class="blog__img">

                                <a href="#" class="blog__button">

                                    <i class="bx bx-right-arrow-alt"></i>

                                </a>

                            </div>

                            <div class="blog__data">

                                <h2 class="blog__title">FAQS</h2>
                                <p class="blog__description">Click the arrow above to get a pop up of the frequently asked questions about our goods and services.</p>

                                <div class="blog__footer">

                                    <div class="blog__reaction">

                                        <i class="bx bx-comment"></i>
                                        <span>0</span>

                                    </div>

                                    <div class="blog__reaction">

                                        <i class="bx bx-show"></i>
                                        <span>0,0</span>

                                    </div>

                                </div>

                            </div>

                        </article>

                        <article class="blog__card">

                            <div class="blog__image">

                                <img src="{{ asset('img/blog2.png') }}" alt="" class="blog__img">

                                <a href="#" class="blog__button">

                                    <i class="bx bx-right-arrow-alt"></i>

                                </a>

                            </div>

                            <div class="blog__data">

                                <h2 class="blog__title">Live Chat</h2>
                                <p class="blog__description">Join our online public chat to know which products are the most talked about by clicking the arrow above.</p>

                                <div class="blog__footer">

                                    <div class="blog__reaction">

                                        <i class="bx bx-comment"></i>
                                        <span>0</span>

                                    </div>

                                    <div class="blog__reaction">

                                        <i class="bx bx-show"></i>
                                        <span>0,0</span>

                                    </div>

                                </div>

                            </div>

                        </article>

                    </div>

                </div>

            </section>

        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer">

            <div class="footer__container container">

                <h1 class="footer__title">WAKANDA ZONE.</h1>

                <div class="footer__content grid">

                    <div class="footer__data">

                        <p class="footer__description">Subscribe to our newsletter</p>

                        <div class="footer__newsletter">

                            <input type="email" placeholder="Your Email Address" class="footer__input">

                            <button class="footer__button">

                                <i class="bx bx-right-arrow-alt"></i>

                            </button>

                        </div>

                    </div>

                    <div class="footer__data">

                        <h2 class="footer__subtitle">Address</h2>
                        <p class="footer__information">Mfangano Street<br>Nairobi

                        </p>

                    </div>

                    <div class="footer__data">

                        <h2 class="footer__subtitle">Contact</h2>
                        <p class="footer__information">+254716094656 <br>wakandazones@gmail.com</p>

                    </div>

                    <div class="footer__data">

                        <h2 class="footer__subtitle">Office</h2>
                        <p class="footer__information">Monday - Saturday <br>9AM - 6PM</p>

                    </div>

                </div>

                <div class="footer__group">

                    <ul class="footer__social">

                        <a href="https://www.facebook.com/" class="footer__social-link" target="_blank">

                            <i class="bx bxl-facebook"></i>

                        </a>

                        <a href="https://www.instagram.com/" class="footer__social-link" target="_blank">

                            <i class="bx bxl-instagram"></i>

                        </a>

                        <a href="https://www.twitter.com/" class="footer__social-link" target="_blank">

                            <i class="bx bxl-twitter"></i>

                        </a>

                    </ul>

                    <span class="footer__copy">&#169; Francis Mbogo All right reserved</span>

                </div>

            </div>

        </footer>


        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">

            <i class="bx bx-up-arrow-alt"></i>

        </a>

        <!-- Modal for the cart items -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel" style="font-size: 1.6rem;">Your Cart</h5> <!-- Reduced font size -->
                        <button type="button" class="btn-close karteye" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                        <section class="h-100 h-custom" style="background-color: #f5f5f5;">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-12">
                                    <div class="card card-registration card-registration-2" style="border-radius: 0;">
                                        <div class="card-body p-0">
                                            <div class="row g-0">
                                                <div class="col-lg-8">
                                                    <div class="p-4"> <!-- Reduced padding for smaller content area -->
                                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                                            <h2 class="fw-bold mb-0" style="font-size: 1.4rem;">Shopping Cart</h2> <!-- Reduced font size -->
                                                            <h6 class="mb-0 text-muted" style="font-size: 1.2rem;">3 items</h6> <!-- Reduced font size -->
                                                        </div>
                                                        <hr class="my-2">
                                                        <div class="row mb-3 d-flex justify-content-between align-items-center">
                                                            <div class="col-md-2 col-lg-2 col-xl-2">
                                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img5.webp" class="img-fluid rounded-3" alt="Cotton T-shirt" width="30px">
                                                            </div>
                                                            <div class="col-md-3 col-lg-3 col-xl-3">
                                                                <h6 class="text-muted" style="font-size: 1.1rem;">Shirt</h6> <!-- Reduced font size -->
                                                                <h6 class="mb-0" style="font-size: 1.2rem;">Cotton T-shirt</h6> <!-- Reduced font size -->
                                                            </div>
                                                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                                <button class="btn btn-link px-2 karteye" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                                    <i class="fas fa-minus"></i>
                                                                </button>
                                                                <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control form-control-sm" style="width: 60px; font-size: 1rem; padding: 0.2rem 0.5rem;" /> <!-- Adjusted width and font size -->
                                                                <button class="btn btn-link px-2 karteye" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                                    <i class="fas fa-plus"></i>
                                                                </button>
                                                            </div>
                                                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                                <h6 class="mb-0" style="font-size: 1.2rem;">€ 44.00</h6> <!-- Reduced font size -->
                                                            </div>
                                                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                                <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                                            </div>
                                                        </div>
                                                        <hr class="my-2">
                                                        <div class="pt-4">
                                                            <h6 class="mb-0"><a href="#!" class="text-body" style="text-decoration: none;"><i class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 bg-light">
                                                    <div class="p-4"> <!-- Reduced padding for smaller content area -->
                                                        <h3 class="fw-bold mb-4 mt-2 pt-1" style="font-size: 1.4rem;">Summary</h3> <!-- Reduced font size -->
                                                        <hr class="my-2">
                                                        <div class="d-flex justify-content-between mb-3">
                                                            <h5 class="text-uppercase" style="font-size: 1rem;">items 3</h5> <!-- Reduced font size -->
                                                            <h5 style="font-size: 1.2rem;">€ 132.00</h5> <!-- Reduced font size -->
                                                        </div>
                                                        <h5 class="text-uppercase mb-2" style="font-size: 1rem;">Shipping</h5> <!-- Reduced font size -->
                                                        <div class="mb-3 pb-1">
                                                            <select class="form-select form-select-sm" style="font-size: 0.9rem;"> <!-- Reduced font size -->
                                                                <option value="1">Standard-Delivery- €5.00</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                                <option value="4">Four</option>
                                                            </select>
                                                        </div>
                                                        <h5 class="text-uppercase mb-2" style="font-size: 1rem;">Enter code</h5> <!-- Reduced font size -->
                                                        <div class="mb-4">
                                                            <div class="form-outline">
                                                                <input type="text" id="form3Examplea2" class="form-control form-control-sm" style="font-size: 0.9rem;" /> <!-- Reduced font size -->
                                                                <label class="form-label" for="form3Examplea2">Enter your code</label>
                                                            </div>
                                                        </div>
                                                        <hr class="my-2">
                                                        <div class="d-flex justify-content-between mb-4">
                                                            <h5 class="text-uppercase" style="font-size: 1rem;">Total price</h5> <!-- Reduced font size -->
                                                            <h5 style="font-size: 1.2rem;">€ 137.00</h5> <!-- Reduced font size -->
                                                        </div>
                                                        <button type="button" class="btn btn-dark btn-block btn-sm">Register</button> <!-- Reduced button size -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button> <!-- Reduced button size -->
                        <button type="button" class="btn btn-primary btn-sm">Checkout</button> <!-- Reduced button size -->
                    </div>
                </div>
            </div>
        </div>


        <script>
    $(document).ready(function() {
        @foreach($products as $index => $product)
            $('#adwToCart{{ $index }}').on('click', function() {
                alert('Adding {{ $product->product_name }} to cart');
            });
        @endforeach
    });

        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!--=============== MIXITUP FILTER ===============-->
        <script src="{{ asset('js/mixitup.min.js') }}"></script>

        <!--=============== MAIN JS ===============-->
        <script src="{{ asset('js/main.js') }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script>
        document.querySelectorAll('.products__button').forEach(button => {
            button.addEventListener('click', function() {
                const productPrice = this.closest('.products__data').querySelector('.products__price').textContent;
                document.getElementById('totalAmount').textContent = 'Total Amount: ' + productPrice;
            });
        });

        document.getElementById('mpesaForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting the default way
            localStorage.setItem('showToastr', 'true');
            location.reload(); // Reload the page
        });

        // Check if the flag is set in local storage and show the Toastr notification
        document.addEventListener('DOMContentLoaded', function() {
            if (localStorage.getItem('showToastr') === 'true') {
                toastr.success('Your MPESA message has been received.', 'Receipt Submitted!');
                localStorage.removeItem('showToastr'); // Remove the flag
            }
        });

        // Capitalize input as the user types
        document.getElementById('mpesaMessage').addEventListener('input', function() {
            this.value = this.value.toUpperCase();
        });
        </script>
    </body>

</html>
