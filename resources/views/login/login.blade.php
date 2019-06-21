@extends('public.index')

@section('title', '登录')

@section('content')
    <!-- menu -->
    <div class="menus" id="animatedModal2">
        <div class="close-animatedModal2 close-icon">
            <i class="fa fa-close"></i>
        </div>
        <div class="modal-content">
            <div class="container">
                <div class="row">
                    <div class="col s4">
                        <a href="index.html" class="button-link">
                            <div class="menu-link">
                                <div class="icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                Home
                            </div>
                        </a>
                    </div>
                    <div class="col s4">
                        <a href="product-list.html" class="button-link">
                            <div class="menu-link">
                                <div class="icon">
                                    <i class="fa fa-bars"></i>
                                </div>
                                Product List
                            </div>
                        </a>
                    </div>
                    <div class="col s4">
                        <a href="shop-single.html" class="button-link">
                            <div class="menu-link">
                                <div class="icon">
                                    <i class="fa fa-eye"></i>
                                </div>
                                Single Shop
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col s4">
                        <a href="wishlist.html" class="button-link">
                            <div class="menu-link">
                                <div class="icon">
                                    <i class="fa fa-heart"></i>
                                </div>
                                Wishlist
                            </div>
                        </a>
                    </div>
                    <div class="col s4">
                        <a href="cart.html" class="button-link">
                            <div class="menu-link">
                                <div class="icon">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                Cart
                            </div>
                        </a>
                    </div>
                    <div class="col s4">
                        <a href="checkout.html" class="button-link">
                            <div class="menu-link">
                                <div class="icon">
                                    <i class="fa fa-credit-card"></i>
                                </div>
                                Checkout
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col s4">
                        <a href="blog.html" class="button-link">
                            <div class="menu-link">
                                <div class="icon">
                                    <i class="fa fa-bold"></i>
                                </div>
                                Blog
                            </div>
                        </a>
                    </div>
                    <div class="col s4">
                        <a href="blog-single.html" class="button-link">
                            <div class="menu-link">
                                <div class="icon">
                                    <i class="fa fa-file-text-o"></i>
                                </div>
                                Blog Single
                            </div>
                        </a>
                    </div>
                    <div class="col s4">
                        <a href="error404.html" class="button-link">
                            <div class="menu-link">
                                <div class="icon">
                                    <i class="fa fa-hourglass-half"></i>
                                </div>
                                404
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col s4">
                        <a href="testimonial.html" class="button-link">
                            <div class="menu-link">
                                <div class="icon">
                                    <i class="fa fa-support"></i>
                                </div>
                                Testimonial
                            </div>
                        </a>
                    </div>
                    <div class="col s4">
                        <a href="about-us.html" class="button-link">
                            <div class="menu-link">
                                <div class="icon">
                                    <i class="fa fa-user"></i>
                                </div>
                                About Us
                            </div>
                        </a>
                    </div>
                    <div class="col s4">
                        <a href="contact.html" class="button-link">
                            <div class="menu-link">
                                <div class="icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                Contact
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col s4">
                        <a href="setting.html" class="button-link">
                            <div class="menu-link">
                                <div class="icon">
                                    <i class="fa fa-cog"></i>
                                </div>
                                Settings
                            </div>
                        </a>
                    </div>
                    <div class="col s4">
                        <a href="login.html" class="button-link">
                            <div class="menu-link">
                                <div class="icon">
                                    <i class="fa fa-sign-in"></i>
                                </div>
                                Login
                            </div>
                        </a>
                    </div>
                    <div class="col s4">
                        <a href="register.html" class="button-link">
                            <div class="menu-link">
                                <div class="icon">
                                    <i class="fa fa-user-plus"></i>
                                </div>
                                Register
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end menu -->

    <!-- cart menu -->
    <div class="menus" id="animatedModal">
        <div class="close-animatedModal close-icon">
            <i class="fa fa-close"></i>
        </div>
        <div class="modal-content">
            <div class="cart-menu">
                <div class="container">
                    <div class="content">
                        <div class="cart-1">
                            <div class="row">
                                <div class="col s5">
                                    <img src="img/cart-menu1.png" alt="">
                                </div>
                                <div class="col s7">
                                    <h5><a href="">Fashion Men's</a></h5>
                                </div>
                            </div>
                            <div class="row quantity">
                                <div class="col s5">
                                    <h5>Quantity</h5>
                                </div>
                                <div class="col s7">
                                    <input value="1" type="text">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s5">
                                    <h5>Price</h5>
                                </div>
                                <div class="col s7">
                                    <h5>$20</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s5">
                                    <h5>Action</h5>
                                </div>
                                <div class="col s7">
                                    <div class="action"><i class="fa fa-trash"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="cart-2">
                            <div class="row">
                                <div class="col s5">
                                    <img src="img/cart-menu2.png" alt="">
                                </div>
                                <div class="col s7">
                                    <h5><a href="">Fashion Men's</a></h5>
                                </div>
                            </div>
                            <div class="row quantity">
                                <div class="col s5">
                                    <h5>Quantity</h5>
                                </div>
                                <div class="col s7">
                                    <input value="1" type="text">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s5">
                                    <h5>Price</h5>
                                </div>
                                <div class="col s7">
                                    <h5>$20</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s5">
                                    <h5>Action</h5>
                                </div>
                                <div class="col s7">
                                    <div class="action"><i class="fa fa-trash"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="total">
                        <div class="row">
                            <div class="col s7">
                                <h5>Fashion Men's</h5>
                            </div>
                            <div class="col s5">
                                <h5>$21.00</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s7">
                                <h5>Fashion Men's</h5>
                            </div>
                            <div class="col s5">
                                <h5>$21.00</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s7">
                                <h6>Total</h6>
                            </div>
                            <div class="col s5">
                                <h6>$41.00</h6>
                            </div>
                        </div>
                    </div>
                    <button class="btn button-default">Process to Checkout</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end cart menu -->


    <!-- login -->
    <div class="pages section">
        <div class="container">
            <div class="pages-head">
                <h3>LOGIN</h3>
            </div>
            <div class="login">
                <div class="row">
                    <form class="col s12">
                        <div class="input-field">
                            <input type="text" class="validate" placeholder="USERNAME" required>
                        </div>
                        <div class="input-field">
                            <input type="password" class="validate" placeholder="PASSWORD" required>
                        </div>
                        <a href=""><h6>Forgot Password ?</h6></a>
                        <a href="" class="btn button-default">LOGIN</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end login -->

    <!-- loader -->
    <div id="fakeLoader"></div>
    <!-- end loader -->
@endsection
<script>
    $(function () {
        alert(1)
    })
</script>
