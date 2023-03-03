<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog website</title>
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="main.css">
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- GOOGLE FONT (MONTSERRAT)-->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,500&family=Rubik:ital,wght@0,300;0,400;0,500;1,500&display=swap"
        rel="stylesheet">

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

    <section class="form__section">
        <div class="container form__section-container">
            <h1>Contact</h1>
            <div class="alert__message error">
                <p>This is an success message</p>
            </div>
            <form action="" enctype="multipart/form-data">
                <input type="text" placeholder="Title">
                <select >
                <option value="1">Information</option>
                <option value="1">Support</option>
                <option value="1">Technology</option>
                
                </select>
                <textarea rows="10" placeholder="Body"></textarea>
                <div class="form__control inline">
                    <input type="checkbox" id="is_featured">
                    <label for="is_featured" checked>Featured</label>
                </div>
                <div class="form__control">
                    <label for="thumbail">Add Thumbail</label>
                    <input type="file" id="thumbail">
                </div>
               <button type="submit" class="btn">Contact</button>
            </form>
        </div>
    </section>





    


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