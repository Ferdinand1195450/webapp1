<!DOCTYPE html>
<html>

<head>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu Sans Mono' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu Sans' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>index</title>
</head>

<body>
    <div class ="background" >
    <main>
        <div class="container">
            <?php
            include('./includes/header.php');
            ?>
            <div class="menu">
                <!-- <div class="menu-left">
                    <div class="menu-header"></div>
                    <div class="menu-list"></div>
                </div>
                <div class="menu-right">
                    <div class="menu-order"></div>
                </div> -->
            <?php
            include('./dbcalls/conn.php');
            include('./dbcalls/read.php');

            session_start();  
            $searchResult = $_SESSION["searchResult"] ;
             
            if(isset($searchResult)){
                foreach ($searchResult as $key => $value) {
                    echo '<div class="menu-item">';
                    echo '<p class="product-naam">' . $value['ProductNaam'] . '</p>';
                    echo '<div class="menu-item-container">';
                    echo '<p class="beschrijving">' . $value['Beschrijving'] . '</p>';
                    echo '<div class="prijs-box">';
                    echo '<p class="prijs">' . "+  € " . $value['Prijs'] . ",00" . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            }else{
                foreach ($result as $key => $value) {
                    echo '<div class="menu-item">';
                    echo '<p class="product-naam">' . $value['productnaam'] . '</p>';
                    echo '<div class="menu-item-container">';
                    echo '<p class="beschrijving">' . $value['beschrijving'] . '</p>';
                    echo '<div class="prijs-box">';
                    echo '<p class="prijs">' . "+  € " . $value['prijs'] . ",00" . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            }

            


            ?>
            </div>
        </div>
    </main>
    <?php
    include('./includes/footer.php');
    ?>
    </div>
</body>

</html>