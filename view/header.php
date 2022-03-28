<!DOCTYPE html>
<html lang="en">
<head>
    <?php session_start();?>
    <meta charset="utf-8"/>
    <title>[ADD A TITLE HERE]</title>
    <script type="module" src="../dist/firebase.js"></script>
    <link rel="stylesheet" href="../dist/app.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../dist/app.js"></script>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">Mist</a>
            <button class="navbar-toggler" id="btn_expand" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <?php
                        if ($_SESSION["loggedIn"]){
                            if ($_SESSION["isAdmin"]){
                                echo "<ul class='navbar-nav'>";
                                echo        "<li class='nav-item'>";
                                echo            "<a class='nav-link' href='admin.php'>Admin Panel</a>";
                                echo        "</li>";
                                echo    "</ul>";
                            }
                            echo "<ul class='navbar-nav'>";
                            echo        "<li class='nav-item'>";
                            echo            "<a class='nav-link' id='btn_basket' name='btn_basket' href='basket.php' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Basket Empty'>Basket</a>";
                            echo        "</li>";
                            echo        "<li class='nav-item'>";
                            echo            "<a class='nav-link' href='account.php'>Account</a>";
                            echo        "</li>";
                            echo        "<li class='nav-item'>";
                            echo            "<a class='nav-link' href='logout.php'>Logout</a>";
                            echo        "</li>";
                            echo    "</ul>";
                        }
                        else{
                            echo "<li class='nav-item'>";
                            echo    "<a class='nav-link' href='login.php'>Login</a>";
                            echo "</li>";
                            echo "<li class='nav-item'>";
                            echo    "<a class='nav-link' href='register.php'>Register</a>";
                            echo "</li>";
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
