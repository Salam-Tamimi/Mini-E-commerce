<?php
session_start();
$inputs = isset($_SESSION["inputs"]) ? $_SESSION["inputs"] : array();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Product Page</title>
    <link rel="stylesheet" href="./Css/view_product.css">
    <link rel="stylesheet" href="./Css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>
    <header>
    <nav id="nav">
            <img src="./images/logo.jpg" alt="logo" id="logo" class="logo">
            <ul id="nav-item">
                <li><a class="active" href="#">Home</a></li>
                <li><a href="#">Catagories</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>

        </nav>

    </header>

    <div class="cards-container">
        <?php
        if(!empty($inputs)){
            foreach ($inputs as $inputData) {
                ?>
                <div class="card">
                    <div class="image-wrapper">
                        <img src="./images/item.jpg" alt="Product Photo" style="width: 100px; height: 100px;">
                    </div>
                    <h2><?php echo $inputData["name"]; ?></h2>
                    <p><strong>Price:</strong> $<?php echo $inputData["price"]; ?></p>
                    <p><strong>Description:</strong> <?php echo $inputData["description"]; ?></p>
                </div>
    
            <?php
            }
        }else{
            echo "<div id='div'>THERE IS NO PRODUCT</div>";
        };
            ?>
        
    </div>

    <a href="index.php"><button id="index-btn" name="index">Go back</button></a>


    <div class="footer-container">
    <footer>
            <div>
                <h4>company</h4>
                <ul>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">our services</a></li>
                    <li><a href="#">privacy policy</a></li>
                    <li><a href="#">affiliate program</a></li>
                </ul>
            </div>
            <div>
                <h4>get help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">shipping</a></li>
                    <li><a href="#">returns</a></li>
                    <li><a href="#">order status</a></li>
                    <li><a href="#">payment options</a></li>
                </ul>
            </div>
            <div>
                <h4>online shop</h4>
                <ul>
                <li><a href="#">Vegetables</a></li>
                    <li><a href="#">Fruits</a></li>
                    <li><a href="#">Grocery</a></li>
                </ul>
            </div>
            <div>
                <h4>follow us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
        </footer>
    </div>

</body>

</html>

