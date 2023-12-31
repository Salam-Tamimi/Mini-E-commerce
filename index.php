<?php
session_start();

if (!isset($_SESSION["inputs"])) {
    $_SESSION["inputs"] = array();
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
    $inputData = array(
        "name" => $_POST["name"],
        "price" => $_POST["price"],
        "description" => $_POST["description"],
    );
    array_unshift($_SESSION["inputs"], $inputData);
    header("Location: " . $_SERVER["PHP_SELF"] . "?" . uniqid());
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini E-commerce</title>
    <link rel="stylesheet" href="./Css/index.css">
    <link rel="stylesheet" href="./Css/header.css">
    <link rel="stylesheet" href="./Css/footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

<?php
    include "./header.php";
?>
    <form action="" method="post">
        <div class="formcontainer">
            <h1>Add products</h1>
            <div class="container">
                <label for="name"><strong>Name</strong></label><br>
                <input type="text" placeholder="Enter Name" name="name" required><br>
                <label for="price"><strong>Price</strong></label><br>
                <input type="text" placeholder="Enter Price" name="price" required><br>
                <label for="description"><strong>Description</strong></label><br>
                <input type="text" placeholder="Enter Description" name="description" required><br>
            </div>
            <button type="submit" name="submit">Add Product</button>
        </div>
    </form>

    <?php
    if (count($_SESSION["inputs"]) > 0) {
        echo '<table border="1" class="table">
        <tr class="table-header">
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Photo</th>
        </tr>';

        foreach ($_SESSION["inputs"] as $inputData) {
            echo '<tr>';
            echo '<td>' . $inputData["name"] . '</td>';
            echo '<td>' . $inputData["price"] . '</td>';
            echo '<td>' . $inputData["description"] . '</td>';
            echo '<td><img src="./images/item.jpg" alt="Product Photo" style="width: 100px; height: 100px;"></td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    ?>
        <a href="./view_products.php" ><button id="view-btn" name="view" style="width:20%;margin-left:20%;margin-top: 3%;margin-bottom: 3%;">View Products</button></a>
    
<?php
    include './footer.php'
?>
  

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
