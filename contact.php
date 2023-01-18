<?php

$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contactform`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

    if ($insert) {
        $message[] = 'appointment made successfully!';
    } else {
        $message[] = 'appointment failed';
    }

}
?>

<?

header(C:\xampp\htdocs\Pawgroom\index.html);

exit;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- External CSS -->
    <link rel="stylesheet" href="./contact.css">

    <!-- Bootstrap cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <!-- Remix icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="./faq.js"></script>

    <title> Pawgroom</title>
</head>

<body>

    <body>
        
       
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar overlayy">
      <div class="container-fluid">
          <a href="/">
              <span><img src="./image/Black And White Business Logo.png " height="30%" width="30%" alt=""></span>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link  active px-4" aria-current="page" href="./index.php"
                          style="color: rgb(24,77,140); font-size: 170%;">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link px-4 " href="./service.html"
                          style="color:  rgb(24,77,140); font-size: 170%; ">Services</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link px-4" href="./index.php"
                          style="color:  rgb(24,77,140); font-size: 170%; ">About</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link px-4" href="./index.php"
                          style="color:  rgb(24,77,140); font-size: 170%; ">Reviews</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link px-4" href="./contact.php"
                          style="color:  rgb(24,77,140); font-size: 170%; ">Contact</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link px-4" href="./login.php" style="color:  rgb(24,77,140); font-size: 170%; ">Login</a>
                  </li>

              </ul>
          </div>
      </div>
  </nav>


        <section class="contact" id="contact">
        
            <h1 class="heading" style="font-size: large; padding-top: 47px;padding-bottom: 6px;">make appointment</h1>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <?php
                if (isset($message)) {
                    foreach ($message as $message) {
                        echo '<p class="message">' . $message . '</p>';
                    }
                }
                ?>
                <span>your name :</span>
                <input type="text" name="name" placeholder="enter your name" class="box" required>
                <span>your email :</span>
                <input type="email" name="email" placeholder="enter your email" class="box" required>
                <span>your number :</span>
                <input type="number" name="number" placeholder="enter your number" class="box" required>
                <span>appointment date :</span>
                <input type="datetime-local" name="date" class="box" required>
                <input type="submit" value="make appointment" name="submit" class="link-btn">
            </form>
            
        </section>
        


        <div class="container-fluid my-5 p-0">

            <footer style="background-color: rgb(172,213,221); font-family:verdana">
                <div class="container p-4">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 mb-4">
                            <h5 class="mb-3" style="letter-spacing: 2px; font-size: 170%; color: rgb(24,77,140)"><i
                                    class="ri-baidu-line"></i>PawGroom</h5>
                            <p style="color: rgb(24,77,140);font-size: 130%;;">
                                Your pet deserves to be pampered!
                            </p>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <h5 class="mb-3" style="letter-spacing: 2px; font-size: 170%;color: rgb(24,77,140)">Contact Us</h5>
                            <ul class="list-unstyled mb-0">
                                <a href="https://www.facebook.com/" style="color:  rgb(24,77,140);font-size: 170%;"
                                    class="footer__social-link">
                                    <i class="ri-facebook-fill"></i>
                                </a>

                                <a href="https://www.instagram.com/" style="color:  rgb(24,77,140);font-size: 170%;"
                                    class="footer__social-link">
                                    <i class="ri-instagram-line"></i>
                                </a>

                                <a href="https://twitter.com/" style="color:  rgb(24,77,140);font-size: 170%;"
                                    class="footer__social-link">
                                    <i class="ri-twitter-fill"></i>
                                </a>


                                <li class="mb-1">
                                    <a href="#!" style="color:  rgb(24,77,140);font-size: 130%;"><i class="ri-phone-fill"></i>+977
                                        9874563210</a>
                                </li>
                                <li class="mb-1">
                                    <a href="#!" style="color:  rgb(24,77,140);font-size: 130%;"><i
                                            class="ri-mail-fill"></i>pawgroominfo@paw.com</a>
                                </li>
                                <li class="mb-1">
                                    <a href="#!" style="color:  rgb(24,77,140);font-size: 130%;"><i
                                            class="ri-home-fill"></i>Chandragiri,Kathmandu</a>
                                </li>

                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <h5 class="mb-1" style="letter-spacing: 2px; font-size: 190%;color:  rgb(24,77,140);">opening hours</h5>
                            <table class="table" style="color: rgb(24,77,140);font-size: 130%; border-color: rgb(24,77,140);">
                                <tbody>
                                    <tr>
                                        <td>Mon - Fri:</td>
                                        <td>8am - 9pm</td>
                                    </tr>
                                    <tr>
                                        <td>Sat - Sun:</td>
                                        <td>8am - 1am</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="text-center p-3" style="background-color: rgb(24,77,140); font-size: 150%;color: bisque;">
                    © 2020 Copyright:
                    <a class="text-white" href="https://mdbootstrap.com/">PAWGROOM</a>
                </div>

            </footer>

        </div>

           <!-- js cdn -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
       integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
       crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
       integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
       crossorigin="anonymous"></script>

    </body>

    