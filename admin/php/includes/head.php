<?php require_once __DIR__ . '/session.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title><?php echo getPageTitle() . ' - ' . getDomainName(); ?></title>
    <meta name="description" content="This is an example page">
    <!-- <meta name="robots" content="noindex"> -->
    <link rel="shortcut icon" href="../media/design/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/jdn-template.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- <meta name="theme-color" content="#fff"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
  </head>

  <body>
    <?php include_once __DIR__ . '/header.php'; ?>
    <?php include_once __DIR__ . '/page-title.php'; ?>

    <main class="container mt-4 mb-4">
