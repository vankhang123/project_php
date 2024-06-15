

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <h3 class="title_admin">  Welcome to admin </h3>
    <div class="wrapper">
        <?php
        include("config/config.php");
        include("../admin/modules/header.php");
        include("../admin/modules/menu.php");
        include("../admin/modules/main.php");
        include("../admin/modules/footer.php");
    
        ?>
    </div>

</body>

</html>