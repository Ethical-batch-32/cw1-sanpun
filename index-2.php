<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- External CSS -->
    <link rel="stylesheet" href="./style.css">

    <!-- animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

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

    <title>Responsive Pawgroom</title>
</head>

<body>
    <!-- navbar starts here -->
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
                        <a class="nav-link  active px-4" aria-current="page" href="#home"
                            style="color: rgb(24,77,140); font-size: larger; ">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 " href="./service.html"
                            style="color:  rgb(24,77,140); font-size: larger; ">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link px-4" href="#about"
                            style="color:  rgb(24,77,140); font-size: larger; ">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="#reviews"
                            style="color:  rgb(24,77,140); font-size: larger; ">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="./contact.php"
                            style="color:  rgb(24,77,140); font-size: larger; ">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="./login.php"
                            style="color:  rgb(24,77,140); font-size: larger; ">Login</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar ends here -->

    <div class="container-fluid section4" data-aos="fade-down" id="home">
    <p class="box4">BEST GROOMER <br> FOR YOUR FURRY FRIEND</p>
    <div class="row p-0 m-0">
        <div class="col">
            <p class="secondline" style="margin-left:3%; font-weight: bold; color: rgb(24,77,140);;">For that Pawfect Look!</p>
            <p class="secondline" style="margin-left:3%; color:rgb(57, 62, 67); font-weight: 500;">Tired of looking for trusty Pet Grooming Services?<br> PawGroom now offers Pet Grooming Service <br> to treat your dogs to luxurious treatments.</p>
            <div class="d-grid gap-2 d-md-block">
                <a href="#about" class="button button--flex">
                    <button class="btn btn-light" type="button" style="color:rgb(24,77,140);">Explore<i class="ri-arrow-right-down-line button__icon"></i></button>
                </a>
            </div>
        </div>
    </div>
</div>

<style>
@media (max-width: 768px) {
    .box4 {
        font-size: 1.5em;
    }
    .secondline {
        font-size: 1.2em;
    }
    .button--flex {
        display: flex;
        justify-content: center;
    }
}
</style>

    <!-- home end -->

    <!-- about us starts here -->

    <div class="container-fluid pt-5 " data-aos="fade-down" id="about">
        <div class="row ">
            <div class="col-5">
                <img style="height: 95%; width: 85% ; padding-left:30%; padding-top: 8%;" src="./images/bath1.png"
                    alt="something went wrong">
            </div>
            <div class="col-md-7 pt-5">

                <h2 style=" font-family:Verdana, Geneva, Tahoma, sans-serif; color: rgb(24,77,140);">About Us</h2>
                <p style=" width:75%; "> We started "PawGroom" in 2020. It all started with the immense love for these
                    furry creatures
                    They say happiness looks a lot like a furry little
                    creature with a boop-able nose and a pet-able tummy.
                    All pet owners can agree, no matter the size, age, or how messy,
                    we all love our dogs like family. Well, who wouldn’t?
                    These adorable pets have been with us humans for such
                    a long time that they love us more than we love ourselves!
                    From protectors to our faithful companions, dogs have taught
                    us the warmth of another soul. That’s why we have special occasions to celebrate their
                    loyalty and bravery like Kukur Tihar in Nepal. From the stone age to the modern times, these sunny
                    creatures have shown us love in the form of waggy tails to affectionate licks.

                </p>
                <p style=" width:75%; "> PawGroom knows what’s best for
                    your pet as we have teamed up with the best animal care professionals
                    who guide us to cater to our precious customers. We love pets as much as
                    you do and wish to provide the best for these pawsome pets! A happy pet means a happy you!

                </p>
                <div class="about__details">
                    <p class="about__details-description">
                        <i class="ri-checkbox-fill about__details-icon"></i>
                        We have trained groomers.
                    </p>
                    <p class="about__details-description">
                        <i class="ri-checkbox-fill about__details-icon"></i>
                        We have facility for cats and dogs.
                    </p>
                    <p class="about__details-description">
                        <i class="ri-checkbox-fill about__details-icon"></i>
                        We are internationally certified organization.
                    </p>
                    <p class="about__details-description">
                        <i class="ri-checkbox-fill about__details-icon"></i>
                        100% hygienic.
                    </p>
                </div>
            </div>



        </div>
    </div>
    <!-- about us ends here -->

    <!-- teams starts here -->
    <div class="container back ">
        <div class="container">
            <div class="section-title pt-5">
                <h1>Our Team Member</h1>
            </div>
        </div>

        <div class="container-fluid " style="padding: 0% 10% 0% 20%">
            <div class="row ">

                <div class=" col-md-3 card m-3" data-aos="fade-down" style="width: 18rem; border-radius: 5%;">
                    <img src="./images/staff1.png" class="card-img-top " alt="...">
                    <div class="card-body">
                        <p class="card-text" style=" font-weight:bold; text-align: center;">Alina Rai </p>
                        <p class="card-text" style=" text-align: center;">CEO </p>
                    </div>
                </div>



                <div class=" col-md-3 card m-3" data-aos="fade-down" style="width: 18rem; border-radius: 5%;">
                    <img src="./images/staff3.png" class="card-img-top " alt="...">
                    <div class="card-body">
                        <p class="card-text" style=" font-weight:bold ;text-align: center;">Shreeya Kumar </p>
                        <p class="card-text" style="text-align:center;">Groomer </p>
                    </div>
                </div>



                <div class=" col-md-3 card m-3 " data-aos="fade-down" style="width: 18rem; border-radius: 5%;">
                    <img src="./images/staff4.png" class="card-img-top " alt="...">
                    <div class="card-body">
                        <p class="card-text" style=" font-weight:bold; text-align: center;">James Khanal </p>
                        <p class="card-text" style="text-align:center">Director </p>
                    </div>
                </div>

                <div class=" col-md-3 card m-3 " data-aos="fade-up" style="width: 18rem; border-radius: 5%;">
                    <img src="./images/staff5.png" class="card-img-top " alt="...">
                    <div class="card-body">
                        <p class="card-text" style=" font-weight:bold; text-align: center;">Aditi Purjja </p>
                        <p class="card-text" style="text-align:center;">Marketing Head </p>
                    </div>
                </div>

                <div class=" col-md-3 card m-3 " data-aos="fade-up" style="width: 18rem; border-radius: 5%;">
                    <img src="./images/staff6.png" class="card-img-top " alt="...">
                    <div class="card-body">
                        <p class="card-text" style=" font-weight:bold; text-align: center;">Salan Shrestha </p>
                        <p class="card-text" style="text-align:center;">Groomer </p>
                    </div>
                </div>

                <div class=" col-md-3 card m-3 " data-aos="fade-up" style="width: 18rem; border-radius: 5%;">
                    <img src="./images/staff7.png" class="card-img-top " alt="...">
                    <div class="card-body">
                        <p class="card-text" style=" font-weight:bold; text-align: center;">Geeta Kharel </p>
                        <p class="card-text" style="text-align:center;">Nurse </p>
                    </div>
                </div>


            </div>

        </div>

    </div>
    <!-- team end here -->



    <!-- review -->

    <div class="container  " style="background-color:rgb(255, 255, 255)" id="reviews">
        <div class="container">
            <div class="team pt-5">
                <h1> What our Customer says about us?</h1>
            </div>
        </div>



        <div class="container-fluid pb-5">
            <div class="row ">

                <div class="  card  col-md-3 m-5" data-aos="fade-right" style="width: 18rem; border-radius: 5%;">
                    <img src="./images/green.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text" style=" font-weight:bold; text-align: center;">Minnie </p>
                        <p class="card-text">My dog enjoys being in PawGroom and she has
                            been in good health. She enjoys the hospitality of PawGroom.She visits this place monthly.
                        </p>
                    </div>
                </div>


                <div class="card col-md-3 m-4 " data-aos="fade-down" style="width: 18rem; border-radius: 5%;">
                    <img src="./images/two.png" class="card-img-top " alt="...">
                    <div class="card-body">
                        <p class="card-text" style=" font-weight:bold; text-align: center;">Bruno</p>
                        <p class="card-text">My dog is loving the care he gets
                            and I have recommended this place to my friends. This place is popular
                            in my friend group. Great groomers and loved the hospitality.
                        </p>
                    </div>
                </div>


                <div class="card col-md-3 m-5" data-aos="fade-left" style="width: 18rem; border-radius: 5%;">
                    <img src="./images/gold.png" class="card-img-top " alt="...">
                    <div class="card-body">
                        <p class="card-text" style=" font-weight:bold; text-align: center;">Fluff</p>
                        <p class="card-text">It was becoming very difficult for me to find good groomer for my dog.
                            It has been six months since I have started visiting this place. My
                            dog seems to love this.

                        </p>
                    </div>
                </div>


            </div>

        </div>
    </div>

    <!-- review ends here -->

    <!-- footer -->

    <div class="container-fluid my-5 p-0">

        <footer style="background-color: rgb(172,213,221);">
            <div class="container p-4">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-4">
                        <h5 class="mb-3" style="letter-spacing: 2px; color: rgb(24,77,140)"><i
                                class="ri-baidu-line"></i>PawGroom</h5>
                        <p style="color: rgb(24,77,140);;">
                            Your pet deserves to be pampered!
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <h5 class="mb-3" style="letter-spacing: 2px; color: rgb(24,77,140)">Contact Us</h5>
                        <ul class="list-unstyled mb-0">
                            <a href="https://www.facebook.com/" style="color:  rgb(24,77,140);"
                                class="footer__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>

                            <a href="https://www.instagram.com/" style="color:  rgb(24,77,140);"
                                class="footer__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>

                            <a href="https://twitter.com/" style="color:  rgb(24,77,140);" class="footer__social-link">
                                <i class="ri-twitter-fill"></i>
                            </a>


                            <li class="mb-1">
                                <a href="#!" style="color:  rgb(24,77,140);"><i class="ri-phone-fill"></i>+977
                                    9874563210</a>
                            </li>
                            <li class="mb-1">
                                <a href="#!" style="color:  rgb(24,77,140);"><i
                                        class="ri-mail-fill"></i>pawgroominfo@paw.com</a>
                            </li>
                            <li class="mb-1">
                                <a href="#!" style="color:  rgb(24,77,140)"><i
                                        class="ri-home-fill"></i>Chandragiri,Kathmandu</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <h5 class="mb-1" style="letter-spacing: 2px; color:  rgb(24,77,140);">opening hours</h5>
                        <table class="table" style="color: rgb(24,77,140); border-color: rgb(24,77,140);">
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
            <div class="text-center p-3" style="background-color: rgb(24,77,140); color: bisque;">
                © 2020 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">PAWGROOM</a>
            </div>

        </footer>

    </div>
    <!-- footer end -->

    <!-- js cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
        crossorigin="anonymous"></script>

    <!-- aos data -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- custom js file link  -->
    <script src="main.js"></script>

</body>

</html>