<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="STM ( Service to mankind ). STM  is an NGO , which fulfills the needs of homeless childrens and people.">
    <title>STM-INDIA</title>

    <!--styles-->
    <!-- <link rel="stylesheet" href="css/main/style.css"> -->
    <link rel="stylesheet" href="css/main/style.css?v=2.8">
    <!-- <link rel="stylesheet" href="css/main/banner.css"> -->
    <link rel="stylesheet" href="css/main/banner.css">
    <link rel="stylesheet" href="css/main/btn.css">
    <link rel="stylesheet" href="css/defualt/catto.css">
    <link rel="stylesheet" href="css/defualt/catto.min.css">
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script> -->
    <script src="js/jquery1.js"></script>
    <script src="js/jquery-3.5.1-slim.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js"></script>
    <script src="js/typed-1.1.1.js"></script>
    <script src="main-js/typed.js?v=1"></script>
    <!-- <script>
    alert(
        'Parts of this page are under development, only DONATE section is made active for emergency donations. Thank you for co-operating with us. - STM'
    );
    </script> -->

    <!-- BS CSS / js-->
    <link rel="stylesheet" href="css/defualt/bootstrap.css?v=1" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script> -->
    <script src="js/boostrap.js"></script>


    <!-- Favicons -->

    <link rel="apple-touch-icon" href="accesories/service_to_man_kind-20200709-0001.jpg" sizes="180x180">
    <link rel="icon" href="accesories/fevicon 32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="accesories/fevicon 16.png" sizes="16x16" type="image/png">
    <link rel="mask-icon" href="accesories/safari-tab.svg" color="#563d7c">
    <link rel="icon" href="accesories/fevicon 32.ico">
    <meta name="theme-color" content="#563d7c">

    <link href="css/main/carousel.css" rel="stylesheet">

    <!-- fontaswsome00000 -->
    <script src="https://use.fontawesome.com/releases/v6.0.0/js/all.js?v=1" data-auto-replace-svg="nest"></script>


</head>

<body>

    <?php if (!empty($_SESSION['SHOW_WELCOME_BACK'])) { unset($_SESSION['SHOW_WELCOME_BACK']); ?>
    <div id="stm-welcome-toast" style="position:fixed;right:20px;bottom:20px;z-index:20000;max-width:340px;background:#fff;border-radius:14px;box-shadow:0 12px 40px rgba(0,0,0,0.22);padding:18px 20px 18px;font-family:'Inter',sans-serif;border:1px solid #eef1f6;">
        <button type="button" onclick="var t=document.getElementById('stm-welcome-toast');t&&t.remove();" style="position:absolute;top:8px;right:12px;border:none;background:none;color:#b2bec3;font-size:1.1rem;line-height:1;cursor:pointer;">&times;</button>
        <div style="display:flex;align-items:center;gap:10px;margin-bottom:6px;">
            <span style="font-size:1.4rem;">👋</span>
            <strong style="color:#2c3e50;font-size:1rem;">Welcome back<?php echo isset($_SESSION['USER_NAME']) ? ', ' . htmlspecialchars(explode(' ', $_SESSION['USER_NAME'])[0]) : ''; ?>!</strong>
        </div>
        <p style="margin:0 0 12px;font-size:0.86rem;color:#636e72;line-height:1.5;">Head to your dashboard to see your contributions and impact &mdash; let's keep the good going. 📊</p>
        <a href="dashboard" style="display:inline-block;background:linear-gradient(135deg,#0984e3,#8e44ad);color:#fff;text-decoration:none;font-weight:600;font-size:0.85rem;padding:8px 18px;border-radius:9px;">View Your Dashboard →</a>
    </div>
    <script>
        setTimeout(function () {
            var t = document.getElementById('stm-welcome-toast');
            if (t) { t.style.transition = 'opacity .5s'; t.style.opacity = '0'; setTimeout(function () { t && t.remove(); }, 550); }
        }, 9000);
    </script>
    <?php } ?>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-white big-nav">
            <img style="border-radius: 50%; margin-right: 10px;" src="accesories/service_to_man_kind-20200709-0001.jpg"
                height="50px" width="50px">
            <!-- <a class="navbar-brand" href="#">Service To Mankind</a> -->
            <!-- <button class="navbar-toggler navbtn" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon navicon"></span>
            </button> -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" style="color:red !important;
                        " href="https://ask.stmorg.in">#ASKSTM</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logs">Payment Logs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutus">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#themes">Our Themes</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="gallary">Gallery</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>

                </ul>
                <?php if(isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_LOGIN']!=''){ ?>
                <ul class="navbar-nav user-menu">
                    <li id="userpic-main">
                        <span><i class="fa-solid fa-circle-user userpic"></i></span>
                        <ul id="dropped-prof" class="hidden">
                            <li class="nav-item">
                                <?php echo htmlspecialchars($_SESSION['USER_NAME'], ENT_QUOTES, 'UTF-8'); ?>
                            </li>
                            <li class="nav-item">
                                <span><i class="fas fa-user"></i></span>
                                <a class="nav-link" href="profile">Profile</a>
                            </li>
                            <li class="nav-item">
                                <span><i class="fa-solid fa-right-from-bracket"></i></span>
                                <a class="nav-link" href="logout">LogOut</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <?php }else{ ?>
                <ul class="navbar-nav user-menu">
                    <li id="userpic-main">
                        <span><a href="login"><i class="fa-solid fa-circle-user"></i></a></span>
                    </li>
                </ul>
                <?php } ?>

            </div>
            <!-- <div class="mobile-nav">
                <ul class="navbar-nav user-menu">
                    <li id="userpic-main">
                        <span><i class="fa-solid fa-circle-user userpic"></i></span>
                        <ul id="dropped-prof">
                            <li class="nav-item">
                                <?php echo isset($_SESSION['USER_NAME']) ? $_SESSION['USER_NAME'] : ''; ?>
                            </li>
                            <li class="nav-item">
                                <span><i class="fas fa-user"></i></span>
                                <a class="nav-link" href="profile">Profile</a>
                            </li>
                            <li class="nav-item">
                                <span><i class="fa-solid fa-right-from-bracket"></i></span>
                                <a class="nav-link" href="logout">LogOut</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div> -->
        </nav>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-white mobile-nav">
            <img style="border-radius: 50%; margin-right: 10px;" src="accesories/service_to_man_kind-20200709-0001.jpg"
                height="50px" width="50px">
            <!-- <a class="navbar-brand" href="#">Service To Mankind</a> -->
            <button class="navbar-toggler navbtn" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon navicon"></span>
            </button>
            <div class="collapse navbar-collapse nav-box" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <?php if(isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_LOGIN']!=''){ ?>
                    <li class="nav-item">
                        <span><i class="fas fa-user"></i></span>
                        <a class="nav-link" href="profile"><?php echo htmlspecialchars($_SESSION['USER_NAME'], ENT_QUOTES, 'UTF-8'); ?></a>
                    </li>

                    <?php }else{?>
                    <li class="nav-item">
                        <span><i class="fa-solid fa-right-from-bracket"></i></span>
                        <a class="nav-link" href="login">Login</a>
                    </li>
                    <?php } ?>
                    <li class="nav-item active">
                        <span><i class="fa-solid fa-house"></i></span>
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <span><i class="fa-solid fa-list"></i></span>
                        <a class="nav-link" href="logs">Payment Logs</a>
                    </li>
                    <li class="nav-item">
                        <span><i class="fa-solid fa-circle-info"></i></span>
                        <a class="nav-link" href="#aboutus">About us</a>
                    </li>
                    <li class="nav-item">
                        <span><i class="fa-solid fa-map"></i></span>
                        <a class="nav-link" href="#themes">Our Themes</a>
                    </li>
                    <!-- <li class="nav-item">
                        <span><i class="fa-solid fa-image"></i></span>
                        <a class="nav-link" href="gallary">Gallery</a>
                    </li> -->
                    <li class="nav-item">
                        <span><i class="fa-solid fa-id-card"></i></span>
                        <a class="nav-link" href="contact">Contact Us</a>
                    </li>
                    <?php if(isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_LOGIN']!=''){ ?>
                    <li class="nav-item">
                        <span><i class="fa-solid fa-right-from-bracket"></i></span>
                        <a class="nav-link" href="logout">Log Out</a>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </nav>

    </header>