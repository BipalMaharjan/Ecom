<!DOCTYPE html>
<html lang="en">
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="template" content="greeny">
    <meta name="title" content="greeny - Ecommerce Food Store HTML Template">
    <meta name="keywords"
        content="organic, food, shop, ecommerce, store, html, bootstrap, template, agriculture, vegetables, products, farm, grocery, natural, online">
    <title>Index Home - Greeny</title>
    <link rel="icon" href="{{ asset("images/favicon.png") }}">
    <link rel="stylesheet" href="{{ asset("css/fonts/flaticon/flaticon.css") }}">
    <link rel="stylesheet" href="{{ asset("fonts/icofont/icofont.min.css") }}">
    <link rel="stylesheet" href="{{ asset("fonts/fontawesome/fontawesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("vendor/venobox/venobox.min.css") }}">
    <link rel="stylesheet" href="{{ asset("vendor/slickslider/slick.min.css") }}">
    <link rel="stylesheet" href="{{ asset("vendor/niceselect/nice-select.min.css") }}">
    <link rel="stylesheet" href="{{ asset("vendor/bootstrap/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/main.css") }}">
    <link rel="stylesheet" href="{{ asset("css/index.css") }}">


    @yield('head')
</head>

<body>
    <div class="backdrop"></div><a class="backtop fas fa-arrow-up" href="#"></a>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <div class="header-top-welcome">
                        <p>Welcome to Ecomart in Your Dream Online Store!</p>
                    </div>
                </div>
                <div class="col-md-5 col-lg-3">
                    <div class="header-top-select">
                        <div class="header-select"><i class="icofont-world"></i><select class="select">
                                <option value="english" selected>english</option>
                                <option value="bangali">bangali</option>
                                <option value="arabic">arabic</option>
                            </select></div>
                        <div class="header-select"><i class="icofont-money"></i><select class="select">
                                <option value="english" selected>doller</option>
                                <option value="bangali">pound</option>
                                <option value="arabic">taka</option>
                            </select></div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-4">
                    <ul class="header-top-list">
                        <li><a href="offer">offers</a></li>
                        <li><a href="faq">need help</a></li>
                        <li><a href="contact">contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <header class="header-part">
        <div class="container">
            <div class="header-content">
                <div class="header-media-group">
                    <button class="header-user"><img src="images/user.png"
                            alt="user">
                    </button>
                    <a href="/">
                        <img src="images/logo.png" alt="logo">
                    </a>
                    <button class="header-src"><i class="fas fa-search"></i>
                    </button></div>
                    <a href="/" class="header-logo"><img src="images/logo.png" alt="logo"></a>

                    @guest
                    <a href="login" class="header-widget" title="My Account"><img src="images/user.png" alt="user"><span>join</span></a>

                    @else
                    <div class="header-widget">
                    <img src="images/user.png" alt="user"><span>{{ Auth::user()->name }}</span>
                    </div>
                    @endguest


                    <form class="header-form"><input type="text" placeholder="Search anything..."><button><i
                            class="fas fa-search"></i></button></form>
                <div class="header-widget-group"><a href="compare" class="header-widget" title="Compare List"><i
                            class="fas fa-random"></i><sup>0</sup></a><a href="wishlist" class="header-widget"
                        title="Wishlist"><i class="fas fa-heart"></i><sup>0</sup></a><button
                        class="header-widget header-cart" title="Cartlist"><i
                            class="fas fa-shopping-basket"></i><sup>9+</sup><span>total
                            price<small>$345.00</small></span></button></div>
            </div>
        </div>
    </header>
    <nav class="navbar-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="navbar-content">
                        <ul class="navbar-list">
                            <li class="navbar-item dropdown"><a class="navbar-link dropdown-arrow" href="#">home</a>
                                <ul class="dropdown-position-list">
                                    <li><a href="home-grid">Home grid</a></li>
                                    <li><a href="/">Home index</a></li>
                                    <li><a href="home-classic">Home classic</a></li>
                                    <li><a href="home-standard">Home standard</a></li>
                                    <li><a href="home-category">Home category</a></li>
                                </ul>
                            </li>
                            <li class="navbar-item dropdown-megamenu"><a class="navbar-link dropdown-arrow"
                                    href="#">shop</a>
                                <div class="megamenu">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="megamenu-wrap">
                                                    <h5 class="megamenu-title">shop pages</h5>
                                                    <ul class="megamenu-list">
                                                        <li><a href="shop-5column">shop 5 column</a></li>
                                                        <li><a href="shop-4column">shop 4 column</a></li>
                                                        <li><a href="shop-3column">shop 3 column</a></li>
                                                        <li><a href="shop-2column">shop 2 column</a></li>
                                                        <li><a href="shop-1column">shop 1 column</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="megamenu-wrap">
                                                    <h5 class="megamenu-title">product pages</h5>
                                                    <ul class="megamenu-list">
                                                        <li><a href="product-tab">product single tab</a></li>
                                                        <li><a href="product-grid">product single grid</a></li>
                                                        <li><a href="product-video">product single video</a></li>
                                                        <li><a href="product-simple">product single simple</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="megamenu-wrap">
                                                    <h5 class="megamenu-title">user action</h5>
                                                    <ul class="megamenu-list">
                                                        <li><a href="wishlist">wishlist</a></li>
                                                        <li><a href="compare">compare</a></li>
                                                        <li><a href="checkout">checkout</a></li>
                                                        <li><a href="orderlist">order history</a></li>
                                                        <li><a href="invoice">order invoice</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="megamenu-wrap">
                                                    <h5 class="megamenu-title">other pages</h5>
                                                    <ul class="megamenu-list">
                                                        <li><a href="all-category">all Category</a></li>
                                                        <li><a href="brand-list">brand list</a></li>
                                                        <li><a href="brand-single">brand single</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="navbar-item dropdown-megamenu"><a class="navbar-link dropdown-arrow"
                                    href="#">category</a>
                                    <div class="megamenu">
                                        <div class="container megamenu-scroll">
                                            <div class="row row-cols-5">
                                    @foreach ($categories as $category)
                                                <div class="col">
                                                    <div class="megamenu-wrap">
                                                        <h5 class="megamenu-title">{{ $category->name }}</h5>
                                                        @foreach($category->vendor_products as $item)
                                                        <ul class="megamenu-list">
                                                            <li><a href="#">{{ $item->product->name }}</a></li>
                                                        </ul>
                                                        @endforeach
                                                    </div>
                                                </div>
                                    @endforeach
                                            </div>
                                        </div>
                                    </div>
                            </li>
                            <li class="navbar-item dropdown"><a class="navbar-link dropdown-arrow" href="#">pages</a>
                                <ul class="dropdown-position-list">
                                    <li><a href="faq">faqs</a></li>
                                    <li><a href="offer">offers</a></li>
                                    <li><a href="profile">my profile</a></li>
                                    <li><a href="wallet">my wallet</a></li>
                                    <li><a href="about">about us</a></li>
                                    <li><a href="contact">contact us</a></li>
                                    <li><a href="privacy">privacy policy</a></li>
                                    <li><a href="coming-soon">coming soon</a></li>
                                    <li><a href="blank-page">blank page</a></li>
                                    <li><a href="error">404 Error</a></li>
                                    <li><a href="email-template">email template</a></li>
                                </ul>
                            </li>
                            <li class="navbar-item dropdown"><a class="navbar-link dropdown-arrow"
                                    href="#">authentic</a>
                                <ul class="dropdown-position-list">
                                @guest
                                    <li><a href="login">login</a></li>
                                    <li><a href="register">register</a></li>
                                    <li><a href="reset-password">reset password</a></li>
                                    <li><a href="change-password">change password</a></li>
                                @else
                                <li>
                                    <form action="/logout" method="Post" >
                                        @csrf
                                        {{-- <a>Logout</a> --}}
                                        <button style="cursor: pointer;
                                        background-color: transparent;
                                        height: 20px;
                                        width: 60px;
                                        color: rgb(109, 104, 104);
                                        font-size: 1;
                                       ">Logout</button>
                                        {{-- <button class="btn btn-danger">Logout</button> --}}
                                    </form>
                                </li>
                                @if(auth()->user()->can('product-create') )
                                {{-- @if (auth()->user()->hasrole!=('Vendor | Admin | Super-admin')) --}}
                                @else
                                <li>
                                    <form action="{{ route('request-to-be-vendor') }}" method="POST">
                                        @csrf
                                        <button style="color: rgb(109, 104, 104);">Apply for Vendor</button>
                                    </form>

                                </li>
                                @endif

                                @endguest
                            </ul>
                            </li>
                            <li class="navbar-item dropdown"><a class="navbar-link dropdown-arrow" href="#">blogs</a>
                                <ul class="dropdown-position-list">
                                    <li><a href="blog-grid">blog grid</a></li>
                                    <li><a href="blog-standard">blog standard</a></li>
                                    <li><a href="blog-details">blog details</a></li>
                                    <li><a href="blog-author">blog author</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="navbar-info-group">
                            <div class="navbar-info"><i class="icofont-ui-touch-phone"></i>
                                <p><small>call us</small><span>(+880) 183 8288 389</span></p>
                            </div>
                            <div class="navbar-info"><i class="icofont-ui-email"></i>
                                <p><small>email us</small><span>support@example.com</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <aside class="category-sidebar">
        <div class="category-header">
            <h4 class="category-title"><i class="fas fa-align-left"></i><span>categories</span></h4><button
                class="category-close"><i class="icofont-close"></i></button>
        </div>
        <ul class="category-list">
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-vegetable"></i><span>vegetables</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">asparagus</a></li>
                    <li><a href="#">broccoli</a></li>
                    <li><a href="#">carrot</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-groceries"></i><span>groceries</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Grains & Bread</a></li>
                    <li><a href="#">Dairy & Eggs</a></li>
                    <li><a href="#">Oil & Fat</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-fruit"></i><span>fruits</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Orange</a></li>
                    <li><a href="#">Strawberry</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-dairy-products"></i><span>dairy farm</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Egg</a></li>
                    <li><a href="#">milk</a></li>
                    <li><a href="#">butter</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-crab"></i><span>sea foods</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Lobster</a></li>
                    <li><a href="#">Octopus</a></li>
                    <li><a href="#">Shrimp</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-salad"></i><span>diet foods</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Salmon</a></li>
                    <li><a href="#">Potatoes</a></li>
                    <li><a href="#">Greens</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-dried-fruit"></i><span>dry foods</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">noodles</a></li>
                    <li><a href="#">Powdered milk</a></li>
                    <li><a href="#">nut & yeast</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-fast-food"></i><span>fast foods</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">mango</a></li>
                    <li><a href="#">plumsor</a></li>
                    <li><a href="#">raisins</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-cheers"></i><span>drinks</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Wine</a></li>
                    <li><a href="#">Juice</a></li>
                    <li><a href="#">Water</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-beverage"></i><span>coffee</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Cappuchino</a></li>
                    <li><a href="#">Espresso</a></li>
                    <li><a href="#">Latte</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-barbecue"></i><span>meats</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Meatball</a></li>
                    <li><a href="#">Sausage</a></li>
                    <li><a href="#">Poultry</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-fish"></i><span>fishes</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Agujjim</a></li>
                    <li><a href="#">saltfish</a></li>
                    <li><a href="#">pazza</a></li>
                </ul>
            </li>
        </ul>
        <div class="category-footer">
            <p>All Rights Reserved by <a href="#">Mironcoder</a></p>
        </div>
    </aside>
    <aside class="cart-sidebar">
        <div class="cart-header">
            <div class="cart-total"><i class="fas fa-shopping-basket"></i><span>total item (5)</span></div><button
                class="cart-close"><i class="icofont-close"></i></button>
        </div>
        <ul class="cart-list">
            <li class="cart-item">
                <div class="cart-media"><a href="#"><img src="images/product/01.jpg" alt="product"></a><button
                        class="cart-delete"><i class="far fa-trash-alt"></i></button></div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1"><button
                                class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-media"><a href="#"><img src="images/product/02.jpg" alt="product"></a><button
                        class="cart-delete"><i class="far fa-trash-alt"></i></button></div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1"><button
                                class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-media"><a href="#"><img src="images/product/03.jpg" alt="product"></a><button
                        class="cart-delete"><i class="far fa-trash-alt"></i></button></div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1"><button
                                class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-media"><a href="#"><img src="images/product/04.jpg" alt="product"></a><button
                        class="cart-delete"><i class="far fa-trash-alt"></i></button></div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1"><button
                                class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-media"><a href="#"><img src="images/product/05.jpg" alt="product"></a><button
                        class="cart-delete"><i class="far fa-trash-alt"></i></button></div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1"><button
                                class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
        </ul>
        <div class="cart-footer"><button class="coupon-btn">Do you have a coupon code?</button>
            <form class="coupon-form"><input type="text" placeholder="Enter your coupon code"><button
                    type="submit"><span>apply</span></button></form><a class="cart-checkout-btn"
                href="checkout"><span class="checkout-label">Proceed to Checkout</span><span
                    class="checkout-price">$369.78</span></a>
        </div>
    </aside>
    <aside class="nav-sidebar">
        <div class="nav-header"><a href="#"><img src="images/logo.png" alt="logo"></a><button class="nav-close"><i
                    class="icofont-close"></i></button></div>
        <div class="nav-content">
            <div class="nav-btn"><a href="login" class="btn btn-inline"><i class="fa fa-unlock-alt"></i><span>join
                        here</span></a></div>
            <div class="nav-select-group">
                <div class="nav-select"><i class="icofont-world"></i><select class="select">
                        <option value="english" selected>English</option>
                        <option value="bangali">Bangali</option>
                        <option value="arabic">Arabic</option>
                    </select></div>
                <div class="nav-select"><i class="icofont-money"></i><select class="select">
                        <option value="english" selected>Doller</option>
                        <option value="bangali">Pound</option>
                        <option value="arabic">Taka</option>
                    </select></div>
            </div>
            <ul class="nav-list">
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-home"></i>Home</a>
                    <ul class="dropdown-list">
                        <li><a href="home-grid">Home grid</a></li>
                        <li><a href="/">Home index</a></li>
                        <li><a href="home-classic">Home classic</a></li>
                        <li><a href="home-standard">Home standard</a></li>
                        <li><a href="home-category">Home category</a></li>
                    </ul>
                </li>
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-food-cart"></i>shop</a>
                    <ul class="dropdown-list">
                        <li><a href="shop-5column">shop 5 column</a></li>
                        <li><a href="shop-4column">shop 4 column</a></li>
                        <li><a href="shop-3column">shop 3 column</a></li>
                        <li><a href="shop-2column">shop 2 column</a></li>
                        <li><a href="shop-1column">shop 1 column</a></li>
                    </ul>
                </li>
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-page"></i>product</a>
                    <ul class="dropdown-list">
                        <li><a href="product-tab">product tab</a></li>
                        <li><a href="product-grid">product grid</a></li>
                        <li><a href="product-video">product video</a></li>
                        <li><a href="product-simple">product simple</a></li>
                    </ul>
                </li>
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-bag-alt"></i>my account</a>
                    <ul class="dropdown-list">
                        <li><a href="profile">profile</a></li>
                        <li><a href="wallet">wallet</a></li>
                        <li><a href="wishlist">wishlist</a></li>
                        <li><a href="compare">compare</a></li>
                        <li><a href="checkout">checkout</a></li>
                        <li><a href="orderlist">order history</a></li>
                        <li><a href="invoice">order invoice</a></li>
                        <li><a href="email-template">email template</a></li>
                    </ul>
                </li>
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-lock"></i>authentication</a>
                    <ul class="dropdown-list">
                        <li><a href="login">login</a></li>
                        <li><a href="register">register</a></li>
                        <li><a href="reset-password">reset password</a></li>
                        <li><a href="change-password">change password</a></li>
                    </ul>
                </li>
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-book-alt"></i>blogs</a>
                    <ul class="dropdown-list">
                        <li><a href="blog-grid">blog grid</a></li>
                        <li><a href="blog-standard">blog standard</a></li>
                        <li><a href="blog-details">blog details</a></li>
                        <li><a href="blog-author">blog author</a></li>
                    </ul>
                </li>
                <li><a class="nav-link" href="offer"><i class="icofont-sale-discount"></i>offers</a></li>
                <li><a class="nav-link" href="about"><i class="icofont-info-circle"></i>about us</a></li>
                <li><a class="nav-link" href="faq"><i class="icofont-support-faq"></i>need help</a></li>
                <li><a class="nav-link" href="contact"><i class="icofont-contacts"></i>contact us</a></li>
                <li><a class="nav-link" href="privacy"><i class="icofont-warning"></i>privacy policy</a></li>
                <li><a class="nav-link" href="coming-soon"><i class="icofont-options"></i>coming soon</a></li>
                <li><a class="nav-link" href="error"><i class="icofont-ui-block"></i>404 error</a></li>
                <li><a class="nav-link" href="login"><i class="icofont-logout"></i>logout</a></li>
            </ul>
            <div class="nav-info-group">
                <div class="nav-info"><i class="icofont-ui-touch-phone"></i>
                    <p><small>call us</small><span>(+880) 183 8288 389</span></p>
                </div>
                <div class="nav-info"><i class="icofont-ui-email"></i>
                    <p><small>email us</small><span>support@example.com</span></p>
                </div>
            </div>
            <div class="nav-footer">
                <p>All Rights Reserved by <a href="#">Mironcoder</a></p>
            </div>
        </div>
    </aside>
    <div class="mobile-menu"><a href="/" title="Home Page"><i
                class="fas fa-home"></i><span>Home</span></a><button class="cate-btn" title="Category List"><i
                class="fas fa-list"></i><span>category</span></button><button class="cart-btn" title="Cartlist"><i
                class="fas fa-shopping-basket"></i><span>cartlist</span><sup>9+</sup></button><a href="wishlist"
            title="Wishlist"><i class="fas fa-heart"></i><span>wishlist</span><sup>0</sup></a><a href="compare"
            title="Compare List"><i class="fas fa-random"></i><span>compare</span><sup>0</sup></a></div>
    <div class="modal fade" id="product-view">
        <div class="modal-dialog">
            <div class="modal-content"><button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="view-gallery">
                                <div class="view-label-group"><label class="view-label new">new</label><label
                                        class="view-label off">-10%</label></div>
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                </ul>
                                <ul class="thumb-slider">
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name"><a href="product-video">existing product name</a></h3>
                                <div class="view-meta">
                                    <p>SKU:<span>1234567</span></p>
                                    <p>BRAND:<a href="#">radhuni</a></p>
                                </div>
                                <div class="view-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video">(3 reviews)</a></div>
                                <h3 class="view-price"><del>$38.00</del><span>$24.00<small>/per kilo</small></span></h3>
                                <p class="view-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit non tempora
                                    magni repudiandae sint suscipit tempore quis maxime explicabo veniam eos
                                    reprehenderit fuga</p>
                                <div class="view-list-group"><label class="view-list-title">tags:</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">organic</a></li>
                                        <li><a href="#">vegetable</a></li>
                                        <li><a href="#">chilis</a></li>
                                    </ul>
                                </div>
                                <div class="view-list-group"><label class="view-list-title">Share:</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-linkedin" title="Linkedin"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                    </ul>
                                </div>
                                <div class="view-add-group"><button class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-basket"></i><span>add to cart</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1"><button
                                            class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button></div>
                                </div>
                                <div class="view-action-group"><a class="view-wish wish" href="#"
                                        title="Add Your Wishlist"><i class="icofont-heart"></i><span>add to
                                            wish</span></a><a class="view-compare" href="compare"
                                        title="Compare This Item"><i class="fas fa-random"></i><span>Compare
                                            This</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



        @yield('content')


    <footer class="footer-part">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3">
                    <div class="footer-widget"><a class="footer-logo" href="#"><img src="images/logo.png"
                                alt="logo"></a>
                        <p class="footer-desc">Adipisci asperiores ipsum ipsa repellat consequatur repudiandae quisquam
                            assumenda dolor perspiciatis sit ipsum dolor amet.</p>
                        <ul class="footer-social">
                            <li><a class="icofont-facebook" href="#"></a></li>
                            <li><a class="icofont-twitter" href="#"></a></li>
                            <li><a class="icofont-linkedin" href="#"></a></li>
                            <li><a class="icofont-instagram" href="#"></a></li>
                            <li><a class="icofont-pinterest" href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="footer-widget contact">
                        <h3 class="footer-title">contact us</h3>
                        <ul class="footer-contact">
                            <li><i class="icofont-ui-email"></i>
                                <p><span>support@example.com</span><span>carrer@example.com</span></p>
                            </li>
                            <li><i class="icofont-ui-touch-phone"></i>
                                <p><span>+120 279 532 13</span><span>+120 279 532 14</span></p>
                            </li>
                            <li><i class="icofont-location-pin"></i>
                                <p>1Hd- 50, 010 Avenue, NY 90001 United States</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="footer-widget">
                        <h3 class="footer-title">quick Links</h3>
                        <div class="footer-links">
                            <ul>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Order History</a></li>
                                <li><a href="#">Order Tracking</a></li>
                                <li><a href="#">Best Seller</a></li>
                                <li><a href="#">New Arrivals</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">Location</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Carrer</a></li>
                                <li><a href="#">Faq</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="footer-widget">
                        <h3 class="footer-title">Download App</h3>
                        <p class="footer-desc">Lorem ipsum dolor sit amet tenetur dignissimos ipsum eligendi autem
                            obcaecati minus ducimus totam reprehenderit exercitationem!</p>
                        <div class="footer-app"><a href="#"><img src="{{ asset("images/google-store.png") }}" alt="google"></a><a
                                href="#"><img src="{{ asset("images/app-store.png") }}" alt="app"></a></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="footer-bottom">
                        <p class="footer-copytext">&copy; All Copyrights Reserved by <a href="#">Mironcoder</a></p>
                        <div class="footer-card"><a href="#"><img src="{{ asset('images/payment/jpg/01.jpg') }}" alt="payment"></a><a
                                href="#"><img src="images/payment/jpg/02.jpg" alt="payment"></a><a href="#"><img
                                    src="images/payment/jpg/03.jpg" alt="payment"></a><a href="#"><img
                                    src="images/payment/jpg/04.jpg" alt="payment"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('vendor/bootstrap/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('vendor/niceselect/nice-select.min.js') }}"></script>
    <script src="{{ asset('vendor/slickslider/slick.min.js') }}"></script>
    <script src="{{ asset('vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('js/nice-select.js') }}"></script>
    <script src="{{ asset('js/countdown.js') }}"></script>
    <script src="{{ asset('js/accordion.js') }}"></script>
    <script src="{{ asset('js/venobox.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('tail')
</body>

</body>
</html>
