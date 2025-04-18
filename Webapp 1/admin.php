<?php

session_start();
if(isset($_SESSION['username']))
{



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu Sans Mono' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu Sans' rel='stylesheet'>
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>admin</title>
</head>

<body>
<div class ="background" >
    <main>
    <div class="container">
    <?php include('./includes/header.php'); ?>
    <div class="menu">
    <h1>CREATE</h1>

    <form action="./dbcalls/create.php" method="post">
        <label for="">typ hier je gerechtnaam in:</label><br>
        <input type="text" name="gerechtnaam" id="1">

        <label for="">typ hier je beschrijving in:</label><br>
        <input type="text" name="beschrijving" id="1">
                
        <label for="">typ hier je prijs in:</label><br>
        <input type="text" name="prijs" id="1">

        <input type="submit" value="submit">
    </form>

            <?php
            include('./dbcalls/conn.php');
            include('./dbcalls/read.php');

            foreach ($result as $key => $value) {
                echo '<div class="menu-item">';
                echo '<p class="product-naam">' . $value['productnaam'] . '</p>';
                echo '<div class="menu-item-container">';
                echo '<p class="beschrijving">' . $value['beschrijving'] . '</p>';
                echo '<div class="prijs-box">';
                echo '<p class="prijs">' . "+  € " . $value['prijs'] . ",00" . '</p>';
                echo '</div>';
                echo '</div>';

                ?>
                <form action="./dbcalls/update.php" method="post">
                    <input type="hidden" name="id" id="" value="<?php echo $value['ID']; ?>">
                    <input class="update-productnaam" type="text" name="productnaam" id="" value="<?php echo $value['productnaam']; ?>">
                    <input class="update-beschrijving" type="text" name="beschrijving" id="" value="<?php echo $value['beschrijving']; ?>">
                    <input class="update-prijs" type="text" name="prijs" id="" value="<?php echo $value['prijs']; ?>">
                    <button type="submit">Update</button>
                </form>
                <?php


                echo '<form action="./dbcalls/delete.php" method ="POST">';
                echo '<input type="hidden" name="ID" value="' .$value['ID']. '">';
                echo '<input type="submit" value="delete">';
                echo '</form>';

                echo '</div>';

            }

            ?>
            </div>
        </div>
        
    </div>
    </main>
    <?php include('./includes/footer.php'); ?>
    </div>
</body>

</html>

<?php

        }
        else{
            header("location: ../index.php");
        }


?>