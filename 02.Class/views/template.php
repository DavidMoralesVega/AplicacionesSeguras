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
            <i class="fas fa-code"></i>
            <h1 class="cover-heading">Cover your page.</h1>
            <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
            <p class="lead">
                <a href="#" class="btn btn-lg btn-secondary">Learn more</a>
            </p>
        </main>
        <?php
            $Footer = new TemplateControllers();
            $Footer -> RequestFooterController();
        ?>
    </div>
</body>

</html>