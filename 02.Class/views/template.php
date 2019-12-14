<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Administrador</title>
    <link href="views/resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="views/resources/css/all.css" rel="stylesheet">
    <link href="views/resources/css/cover.css" rel="stylesheet">
</head>

<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <?php
            $Header = new TemplateControllers();
            $Header -> RequestHeaderController();
        ?>
        <main role="main" class="inner cover">
            <?php
                $LinkValidate = new LinkControllers();
                $LinkValidate -> LinkValidateContoller();
            ?>
        </main>
        <?php
            $Footer = new TemplateControllers();
            $Footer -> RequestFooterController();
        ?>
    </div>
</body>
<script src="views/resources/js/jquery-3.4.1.slim.min.js"></script>
<script src="views/resources/js/popper.min.js"></script>
<script src="views/resources/js/bootstrap.min.js"></script>
<script src="views/resources/js/user.js"></script>

</html>
<?php ob_end_flush(); ?>