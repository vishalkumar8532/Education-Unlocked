<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/login.css">
    <script type="text/javascript" src="js/login.js"></script>
    <script type="text/javascript" src="js/navbar.js"></script>
    <script type="text/javascript" src="js/chat.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title></title>
</head>

<body>
    <div class="navbar" id="myDiv">
        <div class="logo">
            <img src="image/EU1.png" alt="logo" style="height: 30vh;padding-top: 20px;width: 30vh;">
        </div>
        <div class="icon-bar">
            <a href="index.php" class="nav-link active"><i class="fal fa-home-alt">
                    <div class="menu-items">
                        Home
                    </div>
                </i>
            </a>
            <a href="notes.php" class="nav-link "><i class="fal fa-book-open">
                    <div class="menu-items">
                        BCA Notes
                    </div>
                </i>
            </a>
            <a href="mca.php" class="nav-link "><i class="fal fa-user-graduate">
                    <div class="menu-items">
                        MCA
                    </div>
                </i>
            </a>
            <!-- <a href="#" class="nav-link "><i class="fal fa-comments-alt">
                    <div class="menu-items">
                        Chat
                    </div>
                </i>
            </a> -->
            <a href="about.php" class="nav-link"><i class="fal fa-info">
                    <div class="menu-items">
                        About
                    </div>
                </i>
            </a>


            <?php
            session_start();

            if (isset($_SESSION['aname'])) { ?>
                <a href="user_logout.php" class="nav-link""><i class="fas fa-sign-in-alt">
                    <div class="menu-items">
                        Logout
                    </div>
                    </i>
                </a>

            <?php } else
             { ?>
                <a href="#" class="nav-link" onclick="login()"><i class="fal fa-user">
                        <div class="menu-items">
                            Login
                        </div>
                    </i>
                </a>
            <?php
            } ?>



        </div>
    </div>


    <div class="login" id="popup-1">
        <div class="close-btn" onclick="login()">✕</div>
        <h1> Sign In </h1>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <form action="login.php" method="post">
            <input type="email " class="input-box" placeholder="Your Email" name="email" required>
            <input type="password" class="input-box" placeholder="Your Password" name="password" required>
            <p class="remember"><input type="checkbox">Remember Password</p>
            <button type="submit" class="signup-btn" name="submit">Sign In </button>
            <hr>
            <p class="or">OR</p>

            <p>Don't have an account ? <a href="#" onclick="register()">Sign Up</a></p>


        </form>


    </div>

    <div class="reg" id="regi1">
        <div class="close-btn" onclick="register()">✕</div>
        <h1> Register </h1>
        <form action="registration.php" method="post">
            <input type="text" class="input-box" placeholder="Name" name="name" required>
            <input type="email " class="input-box" pattern=".+@gmail\.com" title="Please Enter Correct Email" placeholder="Email" name="email" required>
            <input type="password" class="input-box" placeholder="Password" id="password" name="password" onchange="validatePassword()" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            <input type="password" class="input-box" placeholder="Confirm Password" id="Confirm_Password" onkeyup="validatePassword()" required>

            <p class="rem2"><input type="checkbox" required>I Agree to the terms of Services </p>
            <button type="submit" class="signup-btn">Register </button>
            <hr>
            <p class="or">OR</p>

            <p>I,ve an account : <a href="#" onclick="login()"> Sign In </a> </p>

        </form>

    </div>



</body>

</html>