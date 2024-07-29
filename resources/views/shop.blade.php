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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        {{--Imported jquery for purposes of using the toastr library--}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- JQUERY -->        <title>Wakanda Zone Stock</title>

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
                                <span class="badge badge-danger" style="display: block;" id="cartCounter">0</span>
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
                                        <h3 class="category" style="display: none;"><a href="#" style="text-decoration: none">{{ $product->product_category }}</a></h3>
                                        <h3 class="title"><a href="#" style="text-decoration: none">{{ $product->product_name }}</a></h3>
                                        <div class="price">
                                            <span class="original-price">Ksh.{{ $product->product_price }}</span>
                                            <span class="discounted-price">Ksh.{{ $product->product_discounted_price }}</span>
                                        </div>
                                        <a data-product-id="{{ $product->id }} id="addToCart{{ $loop->index }}" class="add-to-cart" href="javascript:void(0)" style="text-decoration: none">add to cart</a>
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
        <x-shopping.cart />
        <!-- Modal for the cart items -->

        <script>

$(document).ready(function() {
    $(document).on('click', '.add-to-cart', function() {
        var currentCounter = parseInt($('#cartCounter').text());
        $('#cartCounter').text(currentCounter + 1);

        // Extract product details
        var productCategory = $(this).closest('.product-content').find('.category a').text().trim();
        var productName = $(this).closest('.product-content').find('.title a').text().trim();
        var productDiscountedPrice = parseFloat($(this).closest('.product-content').find('.price .discounted-price').text().trim().replace('Ksh.', ''));

        // Create a new row with the product details
        var newRow = `
        <div class="cart-item-container">
            <div class="row mb-3 d-flex justify-content-between align-items-center cart-item">
                <div class="col-md-2 col-lg-2 col-xl-2">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img5.webp" class="img-fluid rounded-3" alt="Product Image" width="30px">
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <h6 class="text-muted quantico" style="font-size: 1.1rem;">${productCategory}</h6>
                    <span class="mb-0" style="font-size: 0.9rem;">${productName}</span>
                </div>
                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                    <button class="btn btn-link px-2 karteye" onclick="updateQuantity(this, -1)">
                        <i class="fas fa-minus"></i>
                    </button>
                    <input min="1" name="quantity" value="1" type="number" class="form-control form-control-sm" style="width: 60px; font-size: 1rem; padding: 0.2rem 0.5rem;" onchange="updateQuantity(this, 0)" />
                    <button class="btn btn-link px-2 karteye" onclick="updateQuantity(this, 1)">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                    <h6 class="mb-0 item-price" style="font-size: 1.2rem;">Ksh. ${productDiscountedPrice.toFixed(2)}</h6>
                </div>
                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                    <a href="#!" class="text-muted remove-item"><i class="fas fa-times"></i></a>
                </div>
            </div>
            <hr class="my-2">
        </div>
        `;

        // Append the new row to the cart items
        $('#cartItems').append(newRow);

        // Update total price and item count
        updateTotalPrice();
    });

    // Handle remove item
    $(document).on('click', '.remove-item', function() {
        $(this).closest('.cart-item-container').remove();
        var currentCounter = parseInt($('#cartCounter').text());
        $('#cartCounter').text(currentCounter - 1);
        updateTotalPrice();
    });
});

// Function to update quantity and item price
function updateQuantity(element, change) {
    var input = $(element).siblings('input[name="quantity"]');
    var currentQuantity = parseInt(input.val());
    var newQuantity = currentQuantity + change;
    if (newQuantity >= 1) {
        input.val(newQuantity);
        var unitPrice = parseFloat($(element).closest('.cart-item').find('.item-price').text().trim().replace('Ksh.', ''));
        var newItemPrice = unitPrice * newQuantity;
        $(element).closest('.cart-item').find('.item-price').text(`Ksh. ${newItemPrice.toFixed(2)}`);
        updateTotalPrice();
    }
}

// Function to update total price and item count
function updateTotalPrice() {
    var totalPrice = 0;
    var itemCount = 0;
    $('#cartItems .cart-item').each(function() {
        var itemPrice = parseFloat($(this).find('.item-price').text().trim().replace('Ksh.', ''));
        var quantity = parseInt($(this).find('input[name="quantity"]').val());
        totalPrice += itemPrice;
        itemCount += quantity;
    });

    // Update total price and item count in summary
    $('#totalPrice').text(`Ksh. ${totalPrice.toFixed(2)}`);
    $('#itemCount').text(`items ${itemCount}`);
}

        </script>

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

        <script>
document.getElementById('checkoutButton').addEventListener('click', function() {
    // Store a flag in sessionStorage to show the toast message after reload
    sessionStorage.setItem('showToast', 'true');

    // Reload the page immediately
    window.location.reload();
});
</script>


<script>
window.addEventListener('load', function() {
    // Check if we need to show the toast message
    if (sessionStorage.getItem('showToast') === 'true') {
        // Remove the flag
        sessionStorage.removeItem('showToast');

        // Set Toastr options
        toastr.options = {
            'progressBar': true,
            'showMethod': 'fadeIn',
            'positionClass': 'toast-bottom-right',
            'hideMethod': 'fadeOut',
            'closeButton': true,
            'newestOnTop': false,
        };

        // Show the toast message after a delay
        setTimeout(function() {
            toastr.success('The items have been successfully purchased');
        }, 1000); // Delay in milliseconds
    }
});
</script>


    </body>

</html>
