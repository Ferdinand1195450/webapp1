<!DOCTYPE html>
<html lang="en">

<head>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu Sans Mono' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu Sans' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>login</title>
</head>

<body>
    <div class="background">
        <main>
            <div class="container">
                <?php
                include('./includes/header.php');
                ?>
                 <div class="menu">

                <form method="post" action="./dbcalls/checklogin.php">
                    <input type="text" name="username">
                    <input type="text" name="password">

                    <input type="submit" value="Login">
                </form>
                </div>
            </div>
        </main>
        <?php
        include('./includes/footer.php');
        ?>
    </div>
</body>

</html>