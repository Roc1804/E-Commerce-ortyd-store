<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap Ecommerce Template" name="keywords">
        <meta content="Bootstrap Ecommerce Template Free Download" name="description">

        <!-- Favicon -->
        <link href="https://cdn-icons-png.flaticon.com/128/3737/3737151.png" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Checkout Start -->
        <div class="checkout">
            <div class="container"> 
                <div class="row">
                    <div class="col-md-7">
                        <div class="billing-address">
                            <h2>Detail Pembelian</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nama Depan</label>
                                    <input class="form-control" type="text" placeholder="Nama Depan">
                                </div>
                                <div class="col-md-6">
                                    <label>Nama Belakang</label>
                                    <input class="form-control" type="text" placeholder="Nama Belakang">
                                </div>
                                <div class="col-md-6">
                                    <label>E-mail</label>
                                    <input class="form-control" type="text" placeholder="E-mail">
                                </div>
                                <div class="col-md-6">
                                    <label>No Telepon</label>
                                    <input class="form-control" type="text" placeholder="No Telepon">
                                </div>
                                <div class="col-md-12">
                                    <label>Alamat</label>
                                    <input class="form-control" type="text" placeholder="Alamat">
                                </div>
                                <div class="col-md-6">
                                    <label>Negara</label>
                                    <select class="custom-select">
                                        <option selected>Indonesia</option>
                                        <option>Afghanistan</option>
                                        <option>Albania</option>
                                        <option>Algeria</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Kota</label>
                                    <input class="form-control" type="text" placeholder="Kota">
                                </div>
                                <div class="col-md-6">
                                    <label>Provinsi</label>
                                    <input class="form-control" type="text" placeholder="Provinsi">
                                </div>
                                <div class="col-md-6">
                                    <label>Kode ZIP</label>
                                    <input class="form-control" type="text" placeholder="Kode ZIP">
                                </div>
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="newaccount">
                                        <label class="custom-control-label" for="newaccount">Buat Akun</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="shipto">
                                        <label class="custom-control-label" for="shipto">Kirim ke alamat yang berbeda</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="shipping-address">
                            <h2>Shipping Address</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nama Depan</label>
                                    <input class="form-control" type="text" placeholder="First Name">
                                </div>
                                <div class="col-md-6">
                                    <label>Nama Belakang</label>
                                    <input class="form-control" type="text" placeholder="Last Name">
                                </div>
                                <div class="col-md-6">
                                    <label>E-mail</label>
                                    <input class="form-control" type="text" placeholder="E-mail">
                                </div>
                                <div class="col-md-6">
                                    <label>No telpon</label>
                                    <input class="form-control" type="text" placeholder="Mobile No">
                                </div>
                                <div class="col-md-12">
                                    <label>Alamat</label>
                                    <input class="form-control" type="text" placeholder="Address">
                                </div>
                                <div class="col-md-6">
                                    <label>Negara</label>
                                    <select class="custom-select">
                                        <option selected>Indonesia</option>
                                        <option>Afghanistan</option>
                                        <option>Albania</option>
                                        <option>Algeria</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label>Kota</label>
                                    <input class="form-control" type="text" placeholder="City">
                                </div>
                                <div class="col-md-6">
                                    <label>Provinsi</label>
                                    <input class="form-control" type="text" placeholder="State">
                                </div>
                                <div class="col-md-6">
                                    <label>Kode ZIP</label>
                                    <input class="form-control" type="text" placeholder="ZIP Code">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="checkout-summary">
                            <h2>Total Keranjang</h2>
                            <div class="checkout-content">
                                <h3>Products</h3>
                                <p class="p-container"><img class="product-checkout"src="img/topi-ortyd.png" alt="ortyd hats"> Ortyd Hats<span>Rp. 45.000</span></p>
                                <p class="p-container"><img class="product-checkout"src="img/short.png" alt="ortyd short">  Ortyd Short<span>Rp. 99.000</span></p>
                                <p class="p-container"><img class="product-checkout"src="img/tumbler.png" alt="ortyd tumbler"> Ortyd Tumbler<span>Rp. 65.000</span></p>
                                <p class="sub-total">Sub Total<span>Rp. 209.000</span></p>
                                <p class="ship-cost">Shipping Cost<span>Rp. 10.000</span></p>
                                <h4>Total<span>Rp. 219.000</span></h4>
                            </div>
                        </div>
                        
                        <div class="checkout-payment">
                            <h2>Metode Pembayaran</h2>
                            <div class="payment-methods">
                                <div class="payment-method">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="payment-1" name="payment">
                                        <label class="custom-control-label" for="payment-1">Paypal</label>
                                    </div>
                                    <div class="payment-content" id="payment-1-show">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                        </p>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="payment-2" name="payment">
                                        <label class="custom-control-label" for="payment-2">Bank Digital</label>
                                    </div>
                                    <div class="payment-content" id="payment-2-show">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                        </p>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="payment-3" name="payment">
                                        <label class="custom-control-label" for="payment-3">Check Payment</label>
                                    </div>
                                    <div class="payment-content" id="payment-3-show">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                        </p>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="payment-4" name="payment">
                                        <label class="custom-control-label" for="payment-4">Transfer Bank</label>
                                    </div>
                                    <div class="payment-content" id="payment-4-show">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                        </p>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="payment-5" name="payment">
                                        <label class="custom-control-label" for="payment-5">Cash on Delivery</label>
                                    </div>
                                    <div class="payment-content" id="payment-5-show">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt orci ac eros volutpat maximus lacinia quis diam.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-btn">
                                <button>Konfirmasi Pembelian</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Checkout End -->
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>