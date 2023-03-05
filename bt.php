<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping-cart</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="Untitled-1.css" />
</head>

<body>
    <!-- header -->
    <header>
        <nav>
            <div class="img-nav">
                <img src="img/logo.png" alt="" />
            </div>
            <div class="content-nav">
                <ul>
                    <li><a href="#">Trang Chủ</a></li>
                    <li><a href="#">Liên Hệ</a></li>
                    <li><a href="#">Giới Thiệu</a></li>
                </ul>
                <form>
                    <input type="text" name="search" placeholder="Tìm kiếm sản phẩm..." />
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
            <!-- The Modal -->
            <button id="cart">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                Giỏ Hàng
            </button>
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Giỏ Hàng</h5>
                        <span class="close">&times;</span>
                    </div>
                    <div class="modal-body">
                        <div class="cart-row">
                            <span class="cart-item cart-header cart-column">Sản Phẩm</span>
                            <span class="cart-price cart-header cart-column">Giá</span>
                            <span class="cart-quantity cart-header cart-column">Số Lượng</span>
                        </div>
                        <div class="cart-items">

                        </div>
                        <div class="cart-total">
                            <strong class="cart-total-title">Tổng Cộng:</strong>
                            <span class="cart-total-price">0VNĐ</span>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-footer">Đóng</button>
                        <button type="button" class="btn btn-primary order">Thanh Toán</button>
                    </div>
                </div>
            </div>
        </nav>

    </header>
<!-- content -->
<section class="wrapper">
        <div class="products">
            <ul>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="https://tapchilamdep.com/wp-content/uploads/2019/11/Son-Mac.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Son Mac</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">620000</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="https://mint07.com/wp-content/uploads/2019/01/son-dior-addict-lip-tattoo.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Son dưỡng DIOR</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">250000đ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="https://salt.tikicdn.com/ts/tmp/28/2b/c3/465692ef84ae20989687cc774d90abbf.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Son lì 3CE /div></h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">320000</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product no-margin">
                    <div class="img-product">
                        <img class="img-prd"
                            src="https://cf.shopee.vn/file/96f3bc021e0343ec709fb4aab74515a6"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Son Black rough</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">16900đ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="https://cocoshop.vn/uploads/shops/2019_08/bba.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Son BBIA</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">149000đ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="https://bizweb.dktcdn.net/100/379/179/products/img-0217.jpg?v=1600461139717"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Son YNM</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">115000đ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                
            </ul>
        </div>
    </section>
  
    <footer>
        <div class="footer-item">
            <div class="img-footer">
                <img src="img/logo.png" alt="" />
            </div>
            <div class="social-footer">
                <li><a target="_blank" href="https://www.facebook.com/thanhlongdev">
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                    </a></li>
                <li><a target="_blank" href="https://github.com/long1211">
                        <i class="fa fa-github-square" aria-hidden="true"></i>
                    </a></li>

            </div>
        </div>
    </footer>