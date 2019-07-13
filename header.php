<?php if (substr_count($_SERVER[‘HTTP_ACCEPT_ENCODING’], ‘gzip’)) ob_start(«ob_gzhandler»); else ob_start(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,user-scalable=0">
    <meta name="keywords" content="">
    <title><?php echo wp_get_document_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="main__wrapper">
       <header></header>
        