<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal</title>
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="main.css">
    <!-- ICONSCOUT CDN -->
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
     <!-- GOOGLE FONT (MONTSERRAT)-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,500&family=Rubik:ital,wght@0,300;0,400;0,500;1,500&display=swap" rel="stylesheet">

</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="http://localhost/portal/index.php" class="nav__logo">My Portal</a>
            <ul class="nav__items">
                <li><a href="http://localhost/portal/index.php">Home</a></li>
                <li><a href="http://localhost/portal/about.php">About</a></li>
                <li><a href="http://localhost/portal/service.php">Services</a></li>
                <li><a href="http://localhost/portal/contact.php">Contact</a></li>
             <!--   <li><a href="signin.html">Signin</a></li>-->
               <li class="nav__profile">
                <div class="avatar">
                    <img src="./image/him1.jpeg">
                </div>
                <ul>
                   <li><a href="logout.html" style="background-color: darkred; color: white;height: 40px;text-align: center;">Logout</a></li>
                </ul>
            </li>
         </ul>

         <button id="open__nav-btn"><i class="uil uil-list-ul"></i></button>
        <button id="close__nav-btn"><i class="uil uil-times-circle"></i></button>
    </div>
</nav>
<!--=================== END OF NAV ==========-->



<section class="featured">
    <div class="container featured__container">
        <div class="post__thumbail">
            <img src="./image/t1.jpg">
        </div>
        <div class="post__info">
            <a href="#" class="category__button">MY Portal Website</a>
            <h1 class="post__title"><a href="">Group Of Institutes</a></h1>
            <p class="Post__body">
                If you want an amazing education website that stands out from the competition,work with a  design for a student. <br>Find and hire a designer to make your vision come to life, or host a design contest and get ideas from designers around the world.
                Technical skills related to mathematical or science background applied in the industry to solve technical based problems. In this case a person need clear facts on the matter being solved as application skills rarely produce muchsuccess. 
            <div class="post__author">
                <div class="post__author-avatar">
                    <img src="./image/him1.jpeg">
                </div>
                <div class="post__author-info">
                  <h5>BY: Himanshu vashistha</h5> 
                   <small>Jany  29, 2023 - 07:23</small>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=================== END OF FEATURED ==========-->

                       

   

<!--=================== END OF POSTS ==========-->


<section class="category__buttons">
    <div class="container category__buttons-container">
        <a href="http://localhost/portal/login.php" class="category__button">Login In</a>
       
    </div>
</section>

<!--=================== END OF CATEGORY BUTTONS ==========-->





<footer>
    <div class="footer__socials">
        <a href="https://youtube.com/@harshchaudhari514" target="_blank"><i class="uil uil-youtube"></i></a>
        <a href="#" target="_blank"><i class="uil uil-facebook"></i></a>
        <a href="#" target="_blank"><i class="uil uil-instagram-alt"></i></a>
        <a href="#" target="_blank"><i class="uil uil-linkedin"></i></a>
        <a href="#" target="_blank"><i class="uil uil-twitter"></i></a>
    </div>
    <div class="container footer__container">
        <article>
            <h4>Categories</h4>
            <ul>
                <li><a href="">Information</a></li>
                <li><a href="">Interface</a></li>
                <li><a href="">Communication</a></li>
                <li><a href="">Online Service</a></li>
                <li><a href=""> Technology</a></li>
                
                
            </ul>
        </article>
            <article>
                <h4>Support</h4>
                <ul>
                    <li><a href="">Online Support</a></li>
                    <li><a href="">Call Numbers</a></li>
                    <li><a href="">Emails</a></li>
                    <li><a href="">Social support</a></li>
                    <li><a href="">Location</a></li>
                   
            </ul>
            </article>
                    <article>
                        <h4>Team</h4>
                        <ul>
                            <li><a href="">Himanshu vashistha</a></li>
                            <li><a href="">Deepanshu Kumar</a></li>
                            <li>Eitish Tyagi<a href=""></a></li>
                            <li><a href="">Garbhit Tyagi</a></li>
                            
                           
                        </ul>
                    </article>
                        <article>
                            <h4>Permalinks</h4>
                            <ul>
                                <li><a href="">Home</a></li>
                               
                                <li><a href="">About</a></li>
                                <li><a href="">Services</a></li>
                                <li><a href="">Contact</a></li>
                               
                            </ul>
                        </article>
    </div>
    <div class="footer__copyright">
        <small>Copyright &copy; 2023 HIMANSHU </small>
    </div>
</footer>



<script src="./main.js"></script>
</body>
</html>