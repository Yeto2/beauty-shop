<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://kit.fontawesome.com/fc8080f1e4.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/fc8080f1e4.js" crossorigin="anonymous"></script>
    <!-- css file -->
    <link rel="stylesheet" href="<?=ASSETS?>css/index.css">
    <!-- jquery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <title>She | <?=$data["page_tittle"]?></title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
    <a class="navbar-brand" href="<?=ROOT?>home">SHE.</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?=ROOT?>home">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=ROOT?>#features">Features</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=ROOT?>#blog">Blog</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=ROOT?>contact">Contact</a>
        </li>
        <li class="nav-item iii">
        <i class="fa-solid fa-language"></i>
            <div class="dropdown">
            <div class="dropbtn"><i class="fa-solid fa-user"></i></div>
                <div class="dropdown-content">
                    <b><?php if (isset($_SESSION['user_name'])): ?>
                    <?php endif; ?></b>
                    <?php if (!isset($_SESSION['user_name'])): ?>
                        <a href="<?=ROOT?>login">Sign In</a>
                        <a href="<?=ROOT?>register">Register</a>
                    <?php else:?>
                        <div>
                            <a href="<?=ROOT?>profile">Profile</a>
                            <div class="dropdown2">
                                <button class="dropbtn2" for="btnControl">Upload</button>
                                <div class="dropdown-content2">
                                    <a href="<?=ROOT?>upload">Upload Once</a>
                                    <a href="<?=ROOT?>uploadMultiple">Upload Multiple</a>
                                    
                                </div>
                            </div>
                            <a href="<?=ROOT?>logout">Logout</a>
                        </div>
                    <?php endif; ?>

            </div>
            </div>
            <i class="fa-solid fa-cart-shopping"></i>
        </li>
        </ul>
    </div>
    </div>
    </nav>