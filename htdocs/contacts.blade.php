<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- our css -->
    <link href="style.css" rel="stylesheet">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- site icon -->
    <link rel="shortcut icon" href="white_logo_mini.svg" type="image">
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white" aria-label="Eighth navbar example">
    <div class="container">
        <!-- button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- logo -->
        <a class="navbar-brand" href="index"><img src="black_logo.svg" alt="" height="30"></a>

        <!-- bag icon -->
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-bag"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" aria-labelledby="dropdown04">
                <li><a class="dropdown-item" href="bag"><i class="bi bi-bag"></i> Bag(0)</a></li>
                <li><a class="dropdown-item" href="orders"><i class="bi bi-box-seam"></i> Orders</a></li>
                <li><a class="dropdown-item" href="saved"><i class="bi bi-bookmark"></i> Saved items</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="sign_in"><i class="bi bi-person-circle"></i> Account</a></li>
            </ul>
        </div>
        <!-- navbar items -->
        <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="store">Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="support">Support</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacts">Contacts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- header -->
<div class="container mt">
    <h1 align="center">Our contacts</h1>
    <hr class="devider">
</div>
<!-- main part -->
<div class="container mt" style="margin-top: 80px;">
    <h2>Phone numbers</h2>
    <a class="mr-5" href="tel:+7753078322">   +7(775)-307-83-22</a>
    <a class="mr-5" href="tel:+7753078322">   +7(700)-271-82-85</a>
    <h2 class="mt-5">Store Address</h2>
    <h3>Qabanbay Batyr Ave, Nur-Sultan 020000</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20003.96211987168!2d71.41847955023137!3d51.11665914429024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42458556e64a567d%3A0xbe0db63d9631e79c!2sZhk%20Vremena%20Goda.%20Leto!5e1!3m2!1sen!2skz!4v1652446749529!5m2!1sen!2skz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- footer -->
<div class="container">
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="index" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="support" class="nav-link">Support</a></li>
            <li class="nav-item"><a href="contacts" class="nav-link">Contacts</a></li>
            <li class="nav-item"><a href="about" class="nav-link">About</a></li>
        </ul>
        <p class="text-center text-muted">?? 2021 Comb Island, Inc</p>
    </footer>
</div>
<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
