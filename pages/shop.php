<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/reponsive.css" />
    <title>Elden Ring sample</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Fasthand&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fasthand&family=La+Belle+Aurore&display=swap" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css2?family=Gwendolyn:wght@400;700&family=Lavishly+Yours&family=Mooli&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Mooli&display=swap" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <header>
        
        <nav>
        <div class= "logoround">
                <a href="index.php"><img src="../images/logoelden.jpg" ></a>
            </div>
            <div class="img-nav">
                <img src="img/logo.png" alt="" />
            </div>
            <div class="content-nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="https://bandainamco.lnk.to/Elden_Ring_ST">Music</a></li>
                    <li><a href="art.php">Arts</a></li>
                    <li><a href="programs.php">Programs</a></li>
                    <li><a href="shop.php">Shop</a></li>
                </ul>
                
            </div>
            
            <button id="cart">
                <i class="shopping-cart" aria-hidden="true"></i>
                Cart
            </button>
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Cart</h5>
                        <span class="close">&times;</span>
                    </div>
                    <div class="modal-body">
                        <div class="cart-row">
                            <span class="cart-item cart-header cart-column">PRODUCT</span>
                            <span class="cart-price cart-header cart-column">PRICE</span>
                            <span class="cart-quantity cart-header cart-column">QUANTITY</span>
                        </div>
                        <div class="cart-items">
                        <div class="cart-items">
                            <div class="cart-row">
                            <div class="cart-item cart-column">
                                <img class="cart-item-image" src="../images/maleniamug.png" width="100" height="100">
                                <span class="cart-item-title">Mug</span>
                            </div>
                            <span class="cart-price cart-column">17$</span>
                            <div class="cart-quantity cart-column">
                                <input class="cart-quantity-input" type="number" value="1">
                                <button class="btn btn-danger" type="button">Delete</button>
                            </div>
                        </div>
                        <div class="cart-row">
                            <div class="cart-item cart-column">
                                <img class="cart-item-image" src="../images/radahnfigure.png" width="100" height="100">
                                <span class="cart-item-title">Radahn Figure</span>
                            </div>
                            <span class="cart-price cart-column">259$</span>
                            <div class="cart-quantity cart-column">
                                <input class="cart-quantity-input" type="number" value="2">
                                <button class="btn btn-danger" type="button">Delete</button>
                            </div>
                        </div>

                        </div>
                        <div class="cart-total">
                            <strong class="cart-total-title">Total:</strong>
                            <span class="cart-total-price">276$</span>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-footer">Close</button>
                        <button type="button" class="btn btn-primary order">Check Out</button>
                    </div>
                </div>
            </div>
        </nav>

    </header>



<section class="wrapper">
        <div class="products">
            <ul>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="../images/maleniafigure.png"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Malenia Figure</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">190$</span>
                            </div>
                            <button type="button" class="btn btn-cart">Add to cart</button>
                        </div>
                    </div>
                </li>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="../images/deluxeedition.png"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Elden Ring Deluxe edition</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">120$</span>
                            </div>
                            <button type="button" class="btn btn-cart">Add to cart</button>
                        </div>
                    </div>
                </li>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="../images/collectoredition.png"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Elden Ring Collectior edition</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">359$</span>
                            </div>
                            <button type="button" class="btn btn-cart">Add to cart</button>
                        </div>
                    </div>
                </li>
                <li class="main-product no-margin">
                    <div class="img-product">
                        <img class="img-prd"
                            src="../images/hoodie.png"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Take on hoodie</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">60$</span>
                            </div>
                            <button type="button" class="btn btn-cart">Add to cart</button>
                        </div>
                    </div>
                </li>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="../images/shirt.png"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">shirt
                        </h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">39$</span>
                            </div>
                            <button type="button" class="btn btn-cart">Add to cart</button>
                        </div>
                    </div>
                </li>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="../images/radahnfigure.png"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Radahn figure</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">259$</span>
                            </div>
                            <button type="button" class="btn btn-cart">Add to cart</button>
                        </div>
                    </div>
                </li>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="../images/dlcpart.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Shadow of the Erdtree Collector edition</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">359$</span>
                            </div>
                            <button type="button" class="btn btn-cart">Add to cart</button>
                        </div>
                    </div>
                </li>
                <li class="main-product no-margin">
                    <div class="img-product">
                        <img class="img-prd"
                            src="../images/maleniamug.png"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Elden ring mug</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">17$</span>
                            </div>
                            <button type="button" class="btn btn-cart">Add to cart</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
</section>

<script src="../js/script.js"></script>

</body>