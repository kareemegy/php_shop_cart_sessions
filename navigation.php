<!-- navbar -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="products.php">Shopping Cart</a>
        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

                <!-- highlight if $page_title has 'Products' word. -->
                <li <?php echo $page_title == "Products" ? "class='active'" : ""; ?>>
                    <a href="products.php" class="dropdown-toggle">Products</a>
                </li>

                <li <?php echo $page_title == "Cart" ? "class='active'" : ""; ?> >
                    <a href="cart.php">
                        <?php
// count products in cart
$cart_count = count($_SESSION['cart']);
?>
                        Cart <span class="badge" id="comparison-count"><?php echo $cart_count; ?></span>
                    </a>
                </li>
            </ul>

        </div><!--/.nav-collapse -->

    </div>
</div>
<!-- /navbar -->