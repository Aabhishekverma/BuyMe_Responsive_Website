<?php 
require('connection.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User - Login and Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <header>
        <h2>BuyMe</h2>
        <nav>
            <a href="#">HOME</a>
            <a href="#contect">CONTACT</a>
            <a href="#About">ABOUT</a>
        </nav>

        <?php
         if(isset($_SESSION['logged_in'])  && $_SESSION['logged_in'] == true)
         {
          echo"
          <div class='user'>
               $_SESSION[username] - <a href='logout.php'>Logout</a>
          </div>
          ";
         }
         else
         {
          echo"
           <div class='sign-in-up'>
               <button type='button' onclick=\"popup('login-popup')\">LOGIN</button>
               <button type='button' onclick=\"popup('register-popup')\">REGISTER</button>
           </div>
          ";
         }
    ?>

    </header>







    <div class="Items">

        <div class="Item">
            <a href="#" class="Item__link">
                <div class="ImageContainer">
                    <img src="https://www.shore.co.uk/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/C/T/CTEDA4RPa.jpg"
                        alt="Ripcurl Corp Tee Black" class="Image">
                </div>
                <div class="Item__title">Product</div>
                <div class="Item__price">$ 20.87</div>
            </a>
        </div>

        <div class="Item">
            <a href="#" class="Item__link">
                <div class="ImageContainer">
                    <img src="https://www.shore.co.uk/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/C/T/CTESC4RUa.jpg"
                        alt="Ripcurl 3D Icon Tee Tapestry Marle" class="Image">
                </div>
                <div class="Item__title">Product</div>
                <div class="Item__price">$ 20.87</div>
            </a>
        </div>

        <div class="Item">
            <a href="#" class="Item__link">
                <div class="ImageContainer">
                    <img src="https://www.shore.co.uk/media/catalog/product/cache/1/image/355x/9df78eab33525d08d6e5fb8d27136e95/C/T/CTESO4RIa.jpg"
                        alt="Ripcurl Diamond Tee Dark Marle" class="Image">
                </div>
                <div class="Item__title">Product</div>
                <div class="Item__price">$ 23.19</div>
            </a>
        </div>

        <div class="Item">
            <a href="#" class="Item__link">
                <div class="ImageContainer">
                    <img src="https://www.shore.co.uk/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/C/T/CTEAP4RIa.jpg"
                        alt="Ripcurl Aggroethnic Tee Aqua Sea" class="Image">
                </div>
                <div class="Item__title">Product</div>
                <div class="Item__price">$ 29.25</div>
            </a>
        </div>

        <div class="Item">
            <a href="#" class="Item__link">
                <div class="ImageContainer">
                    <img src="https://www.shore.co.uk/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/C/T/CTESD4RIa.jpg"
                        alt="Ripcurl Rounded Tee Mood Indigo Marle" class="Image">
                </div>
                <div class="Item__title">Product</div>
                <div class="Item__price">$ 21.06</div>
            </a>
        </div>

        <div class="Item">
            <a href="#" class="Item__link">
                <div class="ImageContainer">
                    <img src="https://www.shore.co.uk/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/C/T/CTEDA4RPa.jpg"
                        alt="Ripcurl Original Wetsuit Logo Tee Black" class="Image">
                </div>
                <div class="Item__title">Product</div>
                <div class="Item__price">$ 29.25</div>
            </a>
        </div>


        <div class="Item">
            <a href="#" class="Item__link">
                <div class="ImageContainer">
                    <img src="https://www.shore.co.uk/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/C/T/CTEAP4RIa.jpg"
                        alt="Ripcurl Aggroethnic Tee Aqua Sea" class="Image">
                </div>
                <div class="Item__title">Product</div>
                <div class="Item__price">$ 29.25</div>
            </a>
        </div>

        <div class="Item">
            <a href="#" class="Item__link">
                <div class="ImageContainer">
                    <img src="https://www.shore.co.uk/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/C/T/CTESD4RIa.jpg"
                        alt="Ripcurl Rounded Tee Mood Indigo Marle" class="Image">
                </div>
                <div class="Item__title">Product</div>
                <div class="Item__price">$ 21.06</div>
            </a>
        </div>

        <div class="Item">
            <a href="#" class="Item__link">
                <div class="ImageContainer">
                    <img src="https://www.shore.co.uk/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/C/T/CTEDA4RPa.jpg"
                        alt="Ripcurl Original Wetsuit Logo Tee Black" class="Image">
                </div>
                <div class="Item__title">Product</div>
                <div class="Item__price">$ 29.25</div>
            </a>
        </div>

    </div>








    <div class="container">
        <div class="row">
            <h1 name="contect">contact us</h1>
        </div>
        <div class="row">
            <h4 style="text-align:center">I love to hear from you!</h4>
        </div>
        <div class="row input-container">
            <div class="col-xs-12">
                <div class="styled-input wide">
                    <input type="text" required />
                    <label>Name</label>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="styled-input">
                    <input type="text" required />
                    <label>Email</label>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="styled-input" style="float:right;">
                    <input type="text" required />
                    <label>Phone Number</label>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="styled-input wide">
                    <textarea required></textarea>
                    <label>Message</label>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="btn-lrg submit-btn">Send Message</div>
            </div>
        </div>
    </div>







    <h1 name="about">contact us</h1>
    <div class="about">
        <section class="introduction">
            <div class="starcontainer">
                <h2 name="about">About me</h2>
                <i class="fa fa-star fa-2x"></i>
                <hr class="star">
                </hr>
            </div>
            <p>I am a Front End developer who believes in making the internet a better place. I currently work at
                Picspotr as a Web Developer/Design intern, Vice President of LatinosinHigherEd, and a freelancer in The
                Greater New Haven Area. Yes I wear many hats. </p>

            <p>It is my passion to conceptualize, develop, and deploy ideas to this great environment we call the
                internet. I am an advocate for Higher Education advancement and when I set my goals I sink my teeth into
                them. </p>
        </section>

    </div>








    <a name="contect"></a>
    <div class="popup-container" id="login-popup">
        <div class="popup">
            <form method="POST" action="login_register.php">
                <h2>
                    <span>USER LOGIN</span>
                    <button type="reset" onclick="popup('login-popup')">X</button>
                </h2>
                <input type="text" placeholder="E-mail or Username" name="email_username">
                <input type="password" placeholder="Password" name="password">
                <button type="submit" class="login-btn" name="login">LOGIN</button>
            </form>
        </div>
    </div>

    <div class="popup-container" id="register-popup">
        <div class="register popup">
            <form method="POST" action="login_register.php">
                <h2>
                    <span>USER REGISTER</span>
                    <button type="reset" onclick="popup('register-popup')">X</button>
                </h2>
                <input type="text" placeholder="Full Name" name="fullname">
                <input type="text" placeholder="Username" name="username">
                <input type="email" placeholder="E-mail" name="email">
                <input type="password" placeholder="Password" name="password">
                <button type="submit" class="register-btn" name="register">REGISTER</button>
            </form>
        </div>
    </div>


    
    
    <style>
    
    /* Contect us  */


    h1 {
        font-family: "Poppins", sans-serif, "arial";
        font-weight: 600;
        font-size: 72px;
        color: white;
        text-align: center;
    }

    h4 {
        font-family: "Roboto", sans-serif, "arial";
        font-weight: 400;
        font-size: 20px;
        color: #9b9b9b;
        line-height: 1.5;
    }

    /* ///// inputs /////*/
    input:focus~label,
    textarea:focus~label,
    input:valid~label,
    textarea:valid~label {
        font-size: 0.75em;
        color: #999;
        top: -5px;
        -webkit-transition: all 0.225s ease;
        transition: all 0.225s ease;
    }

    .styled-input {
        float: left;
        width: 293px;
        margin: 1rem 0;
        position: relative;
        border-radius: 4px;
    }

    @media only screen and (max-width: 768px) {
        .styled-input {
            width: 100%;
        }
    }

    .styled-input label {
        color: #999;
        padding: 1.3rem 30px 1rem 30px;
        position: absolute;
        top: 10px;
        left: 0;
        -webkit-transition: all 0.25s ease;
        transition: all 0.25s ease;
        pointer-events: none;
    }

    .styled-input.wide {
        width: 650px;
        max-width: 100%;
    }

    input,
    textarea {
        padding: 30px;
        border: 0;
        width: 100%;
        font-size: 1rem;
        background-color: #2d2d2d;
        color: white;
        border-radius: 4px;
    }

    input:focus,
    textarea:focus {
        outline: 0;
    }

    input:focus~span,
    textarea:focus~span {
        width: 100%;
        -webkit-transition: all 0.075s ease;
        transition: all 0.075s ease;
    }

    textarea {
        width: 100%;
        min-height: 15em;
    }

    .input-container {
        width: 650px;
        max-width: 100%;
        margin: 20px auto 25px auto;
    }

    .submit-btn {
        float: right;
        padding: 7px 35px;
        border-radius: 60px;
        display: inline-block;
        background-color: #4b8cfb;
        color: white;
        font-size: 18px;
        cursor: pointer;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.06), 0 2px 10px 0 rgba(0, 0, 0, 0.07);
        -webkit-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .submit-btn:hover {
        transform: translateY(1px);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.1), 0 1px 1px 0 rgba(0, 0, 0, 0.09);
    }

    @media (max-width: 768px) {
        .submit-btn {
            width: 100%;
            float: none;
            text-align: center;
        }
    }

    input[type="checkbox"]+label {
        color: #ccc;
        font-style: italic;
    }

    input[type="checkbox"]:checked+label {
        color: #f00;
        font-style: normal;
    }




    /*Product  */
    .Items {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
    }

    background #fff,
    .Item {
        padding: 20px 0;
        width: 30%;
        transition: box-shadow, 0.4s, ease-in-out;
        border-radius: 3px;
    }

    @media (max-width: 1050px) {

        background #fff,
        .Item {
            width: 48%;
        }
    }

    @media (max-width: 600px) {

        background #fff,
        .Item {
            width: 100%;
        }
    }

    :not(:last-child) {
        margin-bottom: 10px;
    }

    .Item__link {
        text-decoration: none;
    }

    .Item__title {
        text-align: center;
        font-family: 'Montserrat', sans-serif;
        font-size: 0.9em;
        color: #555;
        width: 90%;
        margin: 20px auto 0;
    }

    .Item__price {
        text-align: center;
        font-family: 'Montserrat', sans-serif;
        font-size: 0.9em;
        margin-top: 10px;
        color: #777;
    }

    .ImageContainer {
        width: 100%;
        height: auto;
    }

    .Image {
        width: 100%;
        height: auto;
    }


    /*About Me*/


    .introduction>p,
    .location>p,
    .content-footer>p {
        font-weight: 300;
        letter-spacing: 0.05em;
    }



    a {
        font-weight: bold;
        text-decoration: none;
        /*color: #a1a1a1;*/
        color: #F1F1F1;
    }

    .masthead-heading,
    .masthead-intro,
    .content-footer,
    .starcontainer,
    .starcontainerportfolio {
        text-align: center;
    }

    .masthead {
        background-image: url("https://unsplash.imgix.net/5/night-city.jpg?q=75&fm=jpg&s=17d530aa2cd2080b1aba21843cc5f433");
        background-repeat: no-repeat;
        border-top: solid 1em #a1a1a1;
        border-bottom: solid 1em #a1a1a1;
        background-size: cover;
        padding: 6em 0;
    }

    .masthead>img {
        max-height: 6em;
        border-radius: 150%;
        display: block;
        margin: 0 auto;
        border: 4px solid #a1a1a1;
    }

    .masthead-intro {
        margin-bottom: 0.1em;
        font-family: 'Shadows Into Light', cursive;
        font-size: 2em;
    }

    .masthead-heading {
        margin-top: -0.2em;
        font-family: 'Shadows Into Light', cursive;
        font-weight: bold;
        font-size: 6em;
        letter-spacing: -0.02em;
        text-transform: uppercase;
    }

    .content-footer,
    .introduction,
    .location,
    .questions {
        max-width: 38em;
        margin-left: auto;
        margin-right: auto;
        margin-top: 2em;
    }

    .questions {
        padding-bottom: 1.5em;
    }

    /* -------------------------
    Portfolio
   -------------------------*/

    li {
        list-style: none;
    }

    #container {
        background-color: grey;
        position: relative;
        width: 100%;
        overflow: hidden;

    }

    .box {
        float: left;
        width: 31%;
        margin: 1% 1% 93px 1%;
    }

    section>h1 {
        margin-top: 2em;

    }



    @media only screen and (max-width: 500px) {
        .img-responsive {
            /*margin-top: -1em;*/
        }

        .box:nth-child(1n+2) {
            border-top: 3px solid #a1a1a1;
            padding-top: 3em;
        }

        .box {
            display: block;
            width: 75%;
            padding-left: 2em;
            padding-top: 0;
        }

        .content-footer {
            font-size: 0.8em;
        }

        .masthead {
            padding: 3em 0;
        }

        .masthead-heading {
            font-size: 3em;
        }
    }
    </style>


























    <?php
  if(isset($_SESSION['logged_in'])  && $_SESSION['logged_in'] == true)
  {
    echo"<h1 color:red; style='text-align: center; margin-top:200px'> Welcome to my website - $_SESSION[username]</h1>";
  }

?>











    <script>
    function popup(popup_name) {
        get_popup = document.getElementById(popup_name);
        if (get_popup.style.display == "flex") {
            get_popup.style.display = "none";
        } else {
            get_popup.style.display = "flex";
        }
    }
    </script>





</body>

</html>