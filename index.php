<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E Commerce Store</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/font-awesome.min.css">
    <link rel="stylesheet" href="styles/front-style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div id="top">  <!-- Top Bar Start -->
        <div class="container"> <!-- Container Start -->
            <div class="col-md-6 offer">    <!-- col-md-6 offer Start -->
                <a href="#" class="btn btn-success btn-sm">
                    Welcome Guest
                </a>

                <a href="#">Shopping Cart Total Price: EPG 1000, Total Items 2</a>
            </div>    <!-- col-md-6 offer End -->

            <div class="col-md-6">
                <ul class="menu">
                    <li>
                        <a href="customer_register.php">Register</a>
                    </li>

                    <li>
                        <a href="myaccount.php">My Account</a>
                    </li>

                    <li>
                        <a href="cart.php">Goto Cart</a>
                    </li>

                    <li>
                        <a href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>  <!-- Container End -->
    </div>  <!-- Top Bar End -->

    <div class="navbar navbar-default" id="navbar"> <!-- navbar navbar-default Start -->
        <div class="container"> <!-- Container Start -->
            <div class="navbar-header"> <!-- navbar-header Start -->
                <a href="index.php" class="navbar-brand home">
                    <!-- <img src="images/logo.png" alt="" class="hidden-xs">
                    <img src="images/logo-icon.png" alt="" class="visible-xs"> -->
                    <span class="hidden-xs">Karakib Store</span>
                    <span class="visible-xs">KS</span>
                </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only"></span>
                    <i class="fa fa-search"></i>
                </button>
            </div> <!-- navbar-header End -->

            <div class="navbar-collapse collapse" id="navigation"> <!-- navbar-collapse collapse Start -->
                <div class="padding-nav">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="checkout.php">My Account</a></li>
                        <li><a href="cart.php">Shopping Cart</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
                <a href="cart.php" class="btn btn-primary navbar-btn right">
                    <i class="fa fa-shopping-cart"></i>
                    <span>2 items in Cart</span>
                </a>
                <div class="navbar-collapse collapse right">
                    <button type="button" class="btn btn-primary navbar-btn" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>
                <div class="collapse clearfix" id="search">
                    <form action="result.php" method="get" class="navbar-form">
                        <div class="input-group">
                            <input type="text" name="user_query" id="user_query" placeholder="Search" class="form-control" required>
                            <span class="input-group-btn">
                                <button type="submit" name="search" value="Search" class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div> <!-- navbar-collapse collapse End -->
        </div> <!-- Container End -->
    </div> <!-- navbar navbar-default End -->

    <div class="container" id="slider">
        <div class="col-md-12">
            <div class="carousel slide" id="myCarousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="myCarousel" data-slide-to="0" class="action"></li>
                    <li data-target="myCarousel" data-slide-to="1"></li>
                    <li data-target="myCarousel" data-slide-to="2"></li>
                    <li data-target="myCarousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="admin_area/slider_images/1.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="admin_area/slider_images/2.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="admin_area/slider_images/3.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="admin_area/slider_images/4.jpg" alt="">
                    </div>
                </div>
                <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a href="#myCarousel" class="right carousel-control" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div id="advantage">
        <div class="container">
            <div class="same-height-row">
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#">BEST PRICES</a></h3>
                        <p>You can check on all others sites about the prices and then compare with us.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#">100% SATISFACTION GUARANTEED FROM US</a></h3>
                        <p>Free returns on everything for 3 months.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#">WE LOVE OUR CUSTOMERS</a></h3>
                        <p>We are known to provide best possible service ever.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="hot">
        <div class="box">
            <div class="container">
                <div class="col-md-12">
                    <h2>Latest this week</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="content">
        <div class="row">
            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img src="admin_area/product_images/Lenovo IdeaPad 1 15IAU7 Laptop, Intel Core i3-1215U, 256GB SSD, 4GB RAM, 15.6 Inch, HD Display, Intel UHD Graphics, Windows 11- Cloud Grey, with Laptop Bag/pro-01.jpeg" class="img-responsive" alt="">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="details.php">Lenovo IdeaPad Laptop</a>
                        </h3>
                        <p class="price">EGP 15999</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-primary">View Details</a>
                            <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img src="admin_area/product_images/Dell G15-5530 Laptop, Intel Core i7-13650HX, 15.6 Inch FHD, 512GB SSD, 16GB RAM, 6GB Nvidia GeForce RTX 3050 Graphics, Windows 11 - Grey/pro-01.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="details.php">Dell G15-5530 Laptop</a>
                        </h3>
                        <p class="price">EGP 48666</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-primary">View Details</a>
                            <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img src="admin_area/product_images/Asus TUF Gaming F15 FA507NUR-LP007W Laptop, AMD Ryzen 7 7435HS, 512GB SSD, 16GB RAM, 15.6 Inch FHD Display 144Hz, NVIDIA GeForce RTX 4050 6GB, Windows 11- Jaeger Gray/pro-01.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="details.php">Asus TUF Gaming Laptop</a>
                        </h3>
                        <p class="price">EGP 49699</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-primary">View Details</a>
                            <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img src="admin_area/product_images/Hp 14-em0006ne Laptop, AMD Ryzen 5 7520U, 512GB SSD, 8GB RAM, 14 Inch FHD IPS Display, Integrated AMD Radeon Graphics, Windows 11- Natural Silver/pro-01.jpeg" class="img-responsive" alt="">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="details.php">Hp 14-em0006ne Laptop</a>
                        </h3>
                        <p class="price">EGP 26999</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-primary">View Details</a>
                            <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img src="admin_area/product_images/Honor X9b, 256GB, 12GB, 5G, Dual SIM - Sunrise Orange/pro-01.png" class="img-responsive" alt="">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="details.php">Honor X9b, 256GB, 12GB, 5G</a>
                        </h3>
                        <p class="price">EGP 26999</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-primary">View Details</a>
                            <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img src="admin_area/product_images/Vivo Y03, 64GB, 4GB RAM, 4G LTE, Dual SIM - Green/pro-01.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="details.php">Realme C67, 256GB, 8GB RAM</a>
                        </h3>
                        <p class="price">EGP 26999</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-primary">View Details</a>
                            <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img src="admin_area/product_images/Apple iPhone 15, 128GB, Single SIM, 5G - Black/pro-01.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="details.php">Apple iPhone 15, 128GB, Single SIM, 5G - Black</a>
                        </h3>
                        <p class="price">EGP 26999</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-primary">View Details</a>
                            <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-sm-6 single">
                <div class="product">
                    <a href="details.php">
                        <img src="admin_area/product_images/Huawei Nova 12 SE, 256GB, 8GB RAM, 4G LTE, Dual SIM - Green with Freebuds SE 2 Earbuds, Isle Blue - T0016/pro-01.jpeg" class="img-responsive" alt="">
                    </a>
                    <div class="text">
                        <h3>
                            <a href="details.php">Huawei Nova 12 SE, 256GB, 8GB RAM</a>
                        </h3>
                        <p class="price">EGP 26999</p>
                        <p class="buttons">
                            <a href="details.php" class="btn btn-primary">View Details</a>
                            <a href="details.php" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("includes/footer.php"); ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/front-script.js"></script>
</body>
</html>