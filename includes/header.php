<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLack White MTA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="app.js" defer></script>
</head>


<body class="bg-black d-flex flex-column min-vh-100" style="font-family: 'Lalezar',system-ui;">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="logo.jpg" alt="Avatar Logo" style="width:50px;" class="rounded-pill me-md-2"> 
            <a class="navbar-brand mx-auto" href="https://user.bwmta.ir/">
                BLack White MTA
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <hr class="text-white my-2">
                <ul class="navbar-nav ms-auto d-flex flex-row-reverse justify-content-evenly">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">اکانت من</a>
                        <ul class="dropdown-menu dropdown-menu-end text-end position-absolute">
                            <li><a class="dropdown-item" href="#">پروفایل  <i class="bi bi-person-circle"></i></a></li>
                            <li><a class="dropdown-item" href="#">ماشین‌های من <i class="bi bi-car-front-fill"></i></a></li>
                            <li><a class="dropdown-item" href="#">خانه‌های من <i class="bi bi-house-door"></i></a></li>
                            <li><a class="dropdown-item" href="#">امنیت <i class="bi bi-shield-lock-fill"></i></a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">فعالیت</a>
                    </li>   
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">بررسی درخواست‌ها</a>
                    </li> -->
                    
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="#">فروشگاه <i class="bi bi-cart"></i></a> -->
                        <a class="nav-link" href="#"><i class="bi bi-cart"></i> فروشگاه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">قوانین</a>
                    </li>
                    <li class="nav-item  d-md-block">
                        <span class="badge badge-warning text-warning" style="float:left;margin-bottom:-9px;">1</span>
                        <a href="#" class="nav-link">
                            <i class="bi bi-bell-fill text-warning"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container rounded-bottom-pill bg-dark pb-3 px-5 col-10 col-md-5">
        <form class="d-flex mx-auto">
            <div class="input-group">
                <input class="form-control rounded-start-pill" dir="rtl" type="text" placeholder="جست‌وجوی پلیر...">
                <button class="btn btn-primary rounded-end-pill " type="button">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </form>
    </div>
