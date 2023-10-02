<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <?php include 'include/css.php';?>
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
</head>

<body>
    <section class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="top-bar-left">
                        <ul>
                            <li>ENGLISH <i class="fa fa-chevron-down"></i>
                                <ul class="drop__down">
                                    <li><a href="">Deutsch</a></li>
                                    <li><a href="">French</a></li>
                                    <li><a href="">Requires WPML plugin</a></li>
                                </ul>
                            </li>
                            <li>COUNTRY <i class="fa fa-chevron-down"></i>
                                <ul class="drop__down">
                                    <li><a href="">United States (USD)</a></li>
                                    <li><a href="">Deutschland (EUR)</a></li>
                                    <li><a href="">Japan (JPY)</a></li>
                                </ul>
                            </li>
                            <li>FREE SHIPPING FOR ALL ORDERS OF $150</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="top-bar-right">
                        <ul>
                            <li><i class="fa fa-facebook"></i></li>
                            <li><i class="fa fa-twitter"></i></li>
                            <li><i class="fa fa-pinterest"></i></li>
                            <li><i class="fa fa-linkedin"></i></li>
                            <li><i class="fa fa-telegram"></i></li>
                        </ul>
                        <div class="top-bar_btn">
                            <a href="">CONTACT US</a>
                            <a href="">FAQS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header_logo">
                        <img src="images/1668821606-Logo-2-1536x826.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="search_bar">
                        <input type="search" name="search" placeholder="Search for Products" id="">
                        <select name=""><i class="fa fa-chevron-down">
                                <option value="">Select Category</option>
                                <option value="">Accessories</option>
                                <option value="">Clocks</option>
                                <option value="">Cooking</option>
                                <option value="">Furniture</option>
                                <option value="">Lighting</option>
                                <option value="">Toys</option>
                        </select>
                        <a href=""><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="login_btn">
                        <a href="">LOGIN/REGISTER</a>
                        <span><a href="Wishlist.php"><i class="fa fa-heart-o"></i></a></span>
                        <span><i class="fa fa-random"></i></span>
                        <span><i class="fa fa-shopping-bag"></i></span>
                        <span>$0.00</span>
                        <span class="badge">0</span>
                        <span class="badge_cart">0</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="nav_bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="nav_item">
                        <ul>
                            <li><i class="fa fa-bars"></i> BROWSE CATEGORIES <i class="fa fa-chevron-down"></i></li>
                            <li><a href="">HOME</a></li>
                            <li><a href="">PRODUCTS</a></li>
                            <li><a href="">CREDIT <i class="fa fa-chevron-down"></i></a>
                                <ul class="drop__down">
                                    <li><a href="">Personal Credit</a></li>
                                    <li><a href="">Business Credit</a></li>
                                    <li><a href="">Rent Reporting</a></li>
                                </ul>
                            </li>
                            <li><a href="">CONTACT</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="navbar_end">
                        <a href=""> CREDIT CARD MEMBERSHIP</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>


