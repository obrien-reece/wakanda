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
                                                    <h2 class="fw-bold mb-0 quantico" style="font-size: 1.4rem;">Shopping Cart</h2> <!-- Reduced font size -->
                                                </div>
                                                <hr class="my-2">
                                                <div class="row mb-3 d-flex justify-content-between align-items-center" id="cartItems">
                                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img5.webp" class="img-fluid rounded-3" alt="Cotton T-shirt" width="30px">
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                                        <h6 class="text-muted" style="font-size: 1.1rem;">Shirt</h6>
                                                        <span class="mb-0 modalProductName" id="modalProductName" style="font-size: 0.9rem;"></span>
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
                                                        <h6 class="mb-0" style="font-size: 1.2rem;" id="modalProductPrice" class="modalProductPrice"></h6>
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

