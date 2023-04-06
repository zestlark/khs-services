<?php
include('php/services.obj.php');
include('php/object.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Primary Meta Tags -->
  <title>KHS Services</title>
  <meta name="title" content="KHS Services">
  <meta name="description" content="We offer a wide range of services including Hospital cleaning, building, car cleaning, and more,
KHS takes the commitment to delivering value to our clients seriously.">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="khs">
  <meta property="og:title" content="KHS Services">
  <meta property="og:description" content="We offer a wide range of services including Hospital cleaning, building, car cleaning, and more,
KHS takes the commitment to delivering value to our clients seriously.">
  <meta property="og:image" content="assets/img/banner.jpg">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="khs">
  <meta property="twitter:title" content="KHS Services">
  <meta property="twitter:description" content="We offer a wide range of services including Hospital cleaning, building, car cleaning, and more,
KHS takes the commitment to delivering value to our clients seriously.">
  <meta property="twitter:image" content="assets/img/banner.jpg">

  <link rel="stylesheet" href="assets/style.css">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <!-- remix icon -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <!-- aos library -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <script defer type="module" src="assets/main.js"></script>
  <title>KHS SERVICES</title>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8363EY9PXH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8363EY9PXH');
</script>
  <style>
  <?php include('./assets/style.css') ?>
  </style>
</head>

<body>
  <div id="preload"><img width="100px" src="./favicon.ico" alt=""></div>
  <?php include('./components/home.html') ?>
  <?php include('./components/about.html') ?>
  <?php include('./components/videoshow.html') ?>
  <?php include('./components/services.html') ?>
  <?php include('./components/gallery.html') ?>
  <?php include('./components/review.html') ?>
  <?php include('./components/client.html') ?>
  <?php include('./components/contact.html') ?>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</body>

</html>