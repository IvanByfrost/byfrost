<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NAME ?> </title>
    <?php
    include "./views/links.php"
    ?>
</head>
<header>
    <?php
    include "./views/includes/rootHeader.php"
    ?>
</header>

<body>
    <?php
    $AjaxPetition = false;
    require_once "./controller/viewController.php";
    $IV = new viewController();
    $vistas = $IV->getViewController();
    if ($vistas == "login" || $vistas == "404") {
        require_once "./views/contents/" . $vistas . "-view.php";
    } else {


    ?>
        <main>
            <?php
            include "./views/includes/navLateral.php"
            ?>
        </main>
        <?php
        include "./views/includes/rootFooter.php"
        ?>
</body>
<?php
    }
    include "./views/scripts.php"
?>

</html>