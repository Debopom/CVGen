<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Home</title>
    <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="background.css">
    <link rel="stylesheet" href="navbar_logo.css">
    <style>
        body {
            background: linear-gradient(160deg, #b2f2b3 37.4%, #fff 0);
            background-repeat: no-repeat;


        }

        nav {
            float: left;
            padding-top: 11.5px;
            margin-left: 14%;



        }

        .logo {
            float: left;
            margin-left: 38px;
        }

        ul li {

            color: rgba(0, 0, 0, 0.723);
            display: inline-block;
            padding: 10px;
            font-size: 22px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;

        }



        a {
            text-decoration: none;

        }

        .flex-container {
            margin-top: -80px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <h1 class="logo2">CVGen</h1>

        </div>
        <nav>
            <ul>
                <a href="index.php">
                    <li>Home</li>
                </a>
                <li>FAQ</li>
                <li>About</li>
            </ul>
        </nav>
    </div>

    <div class="flex-container">

        <div class="cv">
            <h2>Build a professional resume for free</h2>
            <p>Land your dream job
                with the help
                of our resume builder </p>
            <img class="imag" src="cv.png">

        </div>


        <div class="buttons">
            <button class="btn"><a href="login.php">CREATE YOUR CV NOW</a></button>

            <button class="btn-2"> <a href="registration.php">SIGN UP</a></button>
        </div>
        <?php include 'footer_home.php'; ?>
    </div>


</body>

</html>