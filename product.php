<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>i-shop</title>


    <!--BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!--OWL CAROUSEL CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />


    <!--fontawesome cdn-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <!--Custom CSS file-->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!--Start Header-->

    <header id="header">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class=" font-rale font-size-20 text-black-50 m-0">MagomedTagirova 180A, 3rd entrance, flat 66, Makhachkala, Russia</p>
            <div class="font-rale font-size-14">
                <a href="#" class="px-3 border-right border-left text-dark">Login</a>
                <a href="#" class="px-3 border-right text-dark">Wishlist(0)</a>

            </div>
        </div>
    <!--Primary Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">i-shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto font-rubik">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">On Sale</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Categories</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Categories</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Coming soon</a>
                    </li>
                </ul>
                <form action="#" class=" font-size-14 font-rale">
                    <a href="#" class="py-2 rounded-pill color-primary-bg">
                        <span class="font-size-30 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                        <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
                    </a>
                </form>
                </div>
            </div>
        </nav>
    <!--end Primary Navigation-->

    </header>

    <!--end Header-->

    <!--Start Main-->

    <main id="main-site">

        <!--Product start-->
        <section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="./assets/products/1.png" alt="product" class="img-fluid">
                        <div class="form-row d-flex pt-4 font-size-14 font-baloo">
                            <div class="col">
                                <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                            </div>
                            <div class="col px-1">
                                <button type="submit" class="btn btn-warning form-control">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 py-5">
                        <h5 class="font-baloo font-size-20">Samsung Galaxy 10</h5>
                        <small>by Samsung</small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-rale font-size-14">20,534 ratings | 10000+ answered questions</a>
                        </div>
                        <hr class="m-0">
                        <!--product price start-->
                            <table class="my-3">
                                <tr class="font-rale font-size-14">
                                    <td>M.R.P</td>
                                    <td><strike>$162.00</strike></td>
                                </tr>
                                <tr class="font-rale font-size-14">
                                    <td>Deal Price:</td>
                                    <td class="font-size-20 text-danger">$<span>152.00</span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                                </tr>
                                <tr class="font-rale font-size-14">
                                    <td>You save:</td>
                                    <td class="font-size-16 text-danger">$<span>10.00</span></td>
                                </tr>
                            </table>
                        <!--product price end-->

                        <!--Policy start-->
                            <div id="policy">
                                <div class="d-flex">
                                    <div class="return text-center mr-5">
                                        <div class="font-size-20 my-2 color-second">
                                            <span class="fas fa-retweet border p-3 rounded-pill"></span>
                                        </div>
                                        <a href="#" class="font-rale font-size-12">10 Days <br>Replacement</a>
                                    </div>
                                    <div class="return text-center mr-5">
                                        <div class="font-size-20 my-2 color-second">
                                            <span class="fas fa-truck border p-3 rounded-pill"></span>
                                        </div>
                                        <a href="#" class="font-rale font-size-12">Daily Tuition <br>Delivered</a>
                                    </div>
                                    <div class="return text-center mr-5">
                                        <div class="font-size-20 my-2 color-second">
                                            <span class="fas fa-check-double border p-3 rounded-pill"></span>
                                        </div>
                                        <a href="#" class="font-rale font-size-12">1 Year <br>Warranty</a>
                                    </div>
                                </div>
                            </div>
                        <!--Policy end-->
                        <hr>
                        <!--Order details start-->
                            <div id="order-details" class="font-rale d-flex flex-column text-dark">
                                <small>Delivery by : Mar 29 - Apr 1</small>
                                <small>Sold by <a href="#">Daily Electronics</a>(4.5 out of 5 | 18,198 ratings)</small>
                                <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 424201</small>
                            </div>
                        <!--Order details end-->

                        <div class="row">
                            <div class="col-6">
                                <!--Color-->
                                <div class="color my-3">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-baloo">Color:</h6>
                                        <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                        <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                        <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                                    </div>
                                </div>
                                <!--Color-->
                            </div>
                            <div class="col-6">
                                <!--product qty section-->
                                <div class="qty d-flex">
                                    <h6 class="font-baloo">Qty:</h6>
                                    <div class="px-4 d-flex font-rale">
                                        <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                        <input data-id="pro1" type="text" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                                        <button class="qty-down border bg-light" data-id="pro1"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                </div>
                                <!--!product qty section-->
                            </div>
                        </div>

                        <!--Size start-->
                        <div class="size my-3">
                            <h6 class="font-baloo">Size:</h6>
                            <div class="d-flex justify-content-between w-75">
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">4GB RAM</button>
                                </div>
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">6GB RAM</button>
                                </div>
                                <div class="font-rubik border p-2">
                                    <button class="btn p-0 font-size-14">8GB RAM</button>
                                </div>
                            </div>
                        </div>
                        <!--Size end-->
                    </div>

                    <div class="col-12 py-3">
                        <h6 class="font-rubik">Product Description</h6>
                        <hr>
                        <p class="font-rale font-size-14">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum in quos sed sit consequuntur accusantium, sequi consequatur numquam veniam incidunt odio, voluptatum eaque beatae deserunt, quae molestias ut aliquid laborum!</p>
                        <p class="font-rale font-size-14">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum in quos sed sit consequuntur accusantium, sequi consequatur numquam veniam incidunt odio, voluptatum eaque beatae deserunt, quae molestias ut aliquid laborum!</p>
                    </div>
                </div>
            </div>
        </section>
        <!--Product end-->

        <!--Start TOP SALES-->
            <section id="top-sale">
                <div class="container py-5">
                    <h4 class="font-rubik font-size-20">Top Sales</h4>
                    <hr>
                    <!--Owl carousel for top sales-->
                        <div class="owl-carousel owl-theme">
                            <div class="item py-2">
                                <div class="product font-rale">
                                    <a href="#"><img src="./assets/products/1.png" alt="product1" class="img-fluid"></a>
                                    <div class="text-center">
                                        <h6>Samsung Galaxy 10</h6>
                                        <div class="rating text-warning font-size-12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                        </div>
                                        <div class="price py-2">
                                            <span>$152</span>
                                        </div>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="item py-2">
                                <div class="product font-rale">
                                    <a href="#"><img src="./assets/products/2.png" alt="product2" class="img-fluid"></a>
                                    <div class="text-center">
                                        <h6>Redmi Note 7</h6>
                                        <div class="rating text-warning font-size-12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                        </div>
                                        <div class="price py-2">
                                            <span>$152</span>
                                        </div>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="item py-2">
                                <div class="product font-rale">
                                    <a href="#"><img src="./assets/products/3.png" alt="product3" class="img-fluid"></a>
                                    <div class="text-center">
                                        <h6>Redmi Note 7</h6>
                                        <div class="rating text-warning font-size-12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                        </div>
                                        <div class="price py-2">
                                            <span>$152</span>
                                        </div>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="item py-2">
                                <div class="product font-rale">
                                    <a href="#"><img src="./assets/products/4.png" alt="product4" class="img-fluid"></a>
                                    <div class="text-center">
                                        <h6>Redmi Note 7</h6>
                                        <div class="rating text-warning font-size-12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                        </div>
                                        <div class="price py-2">
                                            <span>$152</span>
                                        </div>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="item py-2">
                                <div class="product font-rale">
                                    <a href="#"><img src="./assets/products/5.png" alt="product" class="img-fluid"></a>
                                    <div class="text-center">
                                        <h6>Redmi Note 7</h6>
                                        <div class="rating text-warning font-size-12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                        </div>
                                        <div class="price py-2">
                                            <span>$152</span>
                                        </div>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="item py-2">
                                <div class="product font-rale">
                                    <a href="#"><img src="./assets/products/4.png" alt="product4" class="img-fluid"></a>
                                    <div class="text-center">
                                        <h6>Redmi Note 7</h6>
                                        <div class="rating text-warning font-size-12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                        </div>
                                        <div class="price py-2">
                                            <span>$152</span>
                                        </div>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="item py-2">
                                <div class="product font-rale">
                                    <a href="#"><img src="./assets/products/5.png" alt="product" class="img-fluid"></a>
                                    <div class="text-center">
                                        <h6>Redmi Note 7</h6>
                                        <div class="rating text-warning font-size-12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                        </div>
                                        <div class="price py-2">
                                            <span>$152</span>
                                        </div>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!--!Owl carousel for top sales-->
                </div>
            </section>
        <!--End TOP SALES-->


    </main>

    <!--End Main-->

    <!--Start FOOTER-->
    
    <footer id="footer" class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <h4 class="font-rubik font-size-20">i-shop</h4>
                    <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit sit nisi quod repudiandae officiis rerum aspernatur aut itaque ipsa dicta.</p>
                </div>
                <div class="col-lg-4 col-12">
                    <h4 class="font-rubik font-size-20">Newsletter</h4>
                    <form class="form-row d-flex">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="col px-2">
                            <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2 col-12">
                    <h4 class="font-rubik font-size-20">Informations</h4>
                    <div class="d-flex flex-column flex-wrap">
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery information</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
                    </div>
                </div>
                <div class="col-lg-2 col-12">
                    <h4 class="font-rubik font-size-20">Account</h4>
                    <div class="d-flex flex-column flex-wrap">
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Wishlist</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Newsletter</a>
                    </div>

                </div>
            </div>
        </div>

    </footer>
    <div class="copyright text-center bg-dark text-white py-2">
        <p class="font-rale font-size-14">&copy; Copyrights 2021. Design by <a href="#" class="color-second">Shysqui Conan</a></p>
    </div>

    <!--End FOOTER-->




    <!--JAVASCRIPT CDN-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

<!--Owl Carousel Js file-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

<!--  isotope plugin cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>

<!--Custom Javascript-->
<script src="./index.js"></script>
</body>
</html>