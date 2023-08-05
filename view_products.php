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
    <link rel="stylesheet" href="./Css/index.css">
    <link rel="stylesheet" href="./Css/header.css">
    <link rel="stylesheet" href="./Css/footer.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>

<?php
    include "./header.php";
?>

    <div class="cards-container row">
        <?php
        if(!empty($inputs)){
            foreach ($inputs as $inputData) {
                ?>
                <div class="card col-3">
                    <div>
                        <img src="./images/item.jpg" alt="Product Photo">
                    </div>
                    <h2><?php echo $inputData["name"]; ?></h2>
                    <p style="color:rgb(187, 53, 53)"><strong>Price:</strong> $<?php echo $inputData["price"]; ?></p>
                    <p><strong>Description:</strong> <br><?php echo $inputData["description"]; ?></p>
                </div>
    
            <?php
            }
        }else{
            echo "<div id='div'>THERE IS NO PRODUCT</div>";
        };
            ?>
        
    </div>

    <a href="index.php"><button id="index-btn" name="index" style="width:20%;margin-left:20%">Go back</button></a>

<?php
    include './footer.php'
?>

</body>

</html>

