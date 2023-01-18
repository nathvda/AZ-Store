<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="See shopping cart for AZ[store]">
    <link rel="stylesheet" type="text/css" href="./assets/scss/style.css">
    <title>AZ[STORE] - Shopping Cart</title>
</head>
<body>
    
    <!-- nav -->
    <nav>
    <p>
            AZ[Store]
        </p>
        <div class="shop__nav">
        <a>
            Home
        </a>
        <a>
            About
        </a>
        <a>
            Products
        </a>
        <a>
            Contact
        </a>
        </div>
        <button class="shop__login" id="login">
            <img src="./assets/images/shopping-cart.svg">
            <p> 
                Login
            </p>
        </button> 
    </nav>
    
<!-- Form --><?php
$bought = ["id","blop","woop","plop"];

var_dump($bought);

function remove_item($button_id){

global $bought;

array_splice($bought, $button_id);
}

var_dump($bought);


?>

<!-- Validation place -->

<!-- footer-->
<footer>
        <a>
            Home
        </a>
        <a>
            About
        </a>
        <a>
            Products
        </a>
        <a>
            Contact
        </a>
    </footer>
</body>
</html>