<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <!-- remix icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- aos library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body id="a_z">

    <div id="preload">
        <div class="load"></div>
    </div>

    <div class="full-container">
        <div class="container">
            <div class="page-header">
                <h1>Admin panel</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="categories">
            <div class="category admin_main">main</div>
            <div class="category admin_enquiry">enquiry</div>
            <div class="category admin_home">home</div>
            <div class="category admin_about">about</div>
            <div class="category admin_videoshow">video show</div>
            <div class="category admin_services">services</div>
            <div class="category admin_gallery">gallery</div>
            <div class="category admin_reviews">reviews</div>
            <div class="category admin_clients">clients</div>
            <div class="category admin_contact">contact</div>
            <div class="category admin_setting">setting</div>
        </div>
    </div>

    <div class="section" id="admin_main">
        <?php include('./components/main.php'); ?>
    </div>
    <div class="section" id="admin_enquiry">
        <?php include('./components/enquiry.php'); ?>
    </div>
    <div class="section" id="admin_home">
        <?php include('./components/home.php'); ?>
    </div>
    <div class="section" id="admin_about">
        <?php include('./components/about.php'); ?>
    </div>
    <div class="section" id="admin_videoshow">
        <?php include('./components/videoshow.php'); ?>
    </div>
    <div class="section" id="admin_services">
        <?php include('./components/services.php'); ?>
    </div>
    <div class="section" id="admin_gallery">
        <?php include('./components/gallery.php'); ?>
    </div>
    <div class="section" id="admin_reviews">
        <?php include('./components/reviews.php'); ?>
    </div>
    <div class="section" id="admin_clients">
        <?php include('./components/clients.php'); ?>
    </div>
    <div class="section" id="admin_contact">
        <?php include('./components/contact.php'); ?>
    </div>
    <div class="section" id="admin_setting">
        <?php include('./components/setting.php'); ?>
    </div>

</body>
<script type="module" src="index.js"></script>
<script type="module" src="./js/main.js"></script>
<script type="module" src="./js/home.js"></script>
<script type="module" src="./js/about.js"></script>
<script type="module" src="./js/videoshow.js"></script>
<script type="module" src="./js/services.js"></script>
<script type="module" src="./js/gallery.js"></script>
<script type="module" src="./js/review.js"></script>
<script type="module" src="./js/contact.js"></script>
<script type="module" src="./js/clients.js"></script>
</html>