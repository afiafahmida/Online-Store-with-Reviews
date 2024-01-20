<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wishlist</title>

    <!----------------Custom CSS-------------------------->
    <link rel="stylesheet" href="asset/css/style.css" />

    <link rel="shortcut icon" href="asset/images/favicon.ico" type="image/x-icon" />

    <!-------------------BootStrap CSS------------------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--Font Awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include 'nav.php'; ?>
    <?php
    if (isset($_SESSION['id']) && $_SESSION['id'] != null) {

        $product_id = isset($_GET['id']) ? $_GET['id'] : null;
        $user_id = $_SESSION['id'];

        $sql = "INSERT INTO wishlist (user_id, products_id) VALUES ('$user_id', '$product_id')";

        if ($con->query($sql) === TRUE) {
            echo "<div class='message'>
            <p>Product Added to Wishlist</p><br>
            <a href='index.php' class='nested-button-link'><button class='nested-button'>Back</button></a>
            </div> <br>";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    } else {
        echo "<div class='message'>
            <p>Oops...You are not logged in! </p><br>
            <a href='login.php' class='nested-button-link'><button class='nested-button'>Log In</button></a>
            </div> <br>";
    }
    ?>

    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>