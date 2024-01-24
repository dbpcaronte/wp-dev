<!-- estando la carpeta template, este archivo no se cargará nunca -->

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class('example'); ?>>
    <?php wp_body_open(); ?>
    <p>Hello world!</p>
    <?php wp_footer(); ?>
</body>

</html>