<!-- php code -->
<?php
include("config.php");
$comment = "";

if(isset($_POST['submit'])){

    if($_POST['fname']=="" || $_POST['email']=="" || $_POST['number']=="" || $_POST['esubject']=="" || $_POST['message']=="")
    {
        $comment ="PLease enter all details!";
    }
    else{
        $fname=$_POST['fname'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        $esubject=$_POST['esubject'];
        $enquiry=$_POST['message'];
        $insert = mysqli_query($conn, "INSERT INTO `contact`(fname, email, number, esubject, enquiry) VALUES('$fname', '$email', '$number', '$esubject', '$enquiry')");
        if ($insert){
            $comment =" Message has been succesfully sent";
         }
    }
}
?>
<!-- php code -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/css/font-awesome.css">
</head>
<body>
    <!-- header design -->
    <header class="header">
        <a href="#" class="logo">portfolio</a>

        <i class="fa fa-bars" id="menu-icon"></i>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">about</a>
            <a href="#skills">skills</a>
            <a href="#projects">projects</a>
            <a href="#contact">contact</a>
        </nav>
    </header>
    <!-- header design ends -->
    <!-- home section -->

    <section class="home" id="home">
        <div class="home-content">
            <h3>hi, i'm</h3>
            <h1>Halimiyau Yusuf</h1>
            <h3> a <span class="multiple-text"></span></h3>
            <p>Crafting digital experiences that not only meet the eye but leave a lasting impression. <br>I turn ideas into interactive realities, one pixel at a time.</p>


            <div class="social-media">
                <a href="https://twitter.com/Yusufhalim8"><i class="fa fa-twitter"></i></a>
                <a href="www.linkedin.com/in/halimiyau-yusuf-900a201ab"><i class="fa fa-linkedin"></i></a>
                <a href="https://github.com/Yuhalim"><i class="fa fa-github"></i></a>
            </div>
            <!-- <a download="image/image.jpg" class="btn">download cv</a> -->
        </div>

        <div class="home-img">
            <img src="image/halims.jfif" alt="">
        </div>
    </section>

    <!-- home section ends -->


    <!-- about section starts -->

    
    <section class="about-section" id="about">
        <div class="title">
            <h3>know more</h3>
            <h2 class="heading">ABOUT <span>ME</span></h2>
        </div>
        <div class="about">
            <div class="about-img">
                <img src="image/halims.jfif" alt="">
            </div>
    
            <div class="about-content">
    
                <h3>frontend developer</h3>
                
                <p>I am a skilled and creative web developer with expertise in designing and building dynamic and visually appealing websites. Proficient in a variety of programming languages such as HTML, CSS, JavaScript, and possibly others like Vue.js and PHP, i possess a deep understanding of front-end development and ablity to craft responsive and user-friendly interfaces, optimizing website performance, and ensuring cross-browser compatibility. As a web developer. My attention to detail, problem-solving skills, and commitment to staying updated on the latest industry trends contribute to my success in creating engaging and seamless online experiences.</p>
                <div class="education">
                    <i class="fa fa-graduation-cap"></i>
                    <h4 class="edu">education</h4>
                    <div class="uni">
                        <p>Nigerian Tulip intl college - high school - 2013-2019.</p>
                        <p>bayero university - univeristy - 2019-2022.</p>
                        <p>KolaDaisi Univeristy - university -  2022-present.</p>
                    </div>
                </div>
                <!-- <a href="#" class="btn">read more</a> -->
            </div>
        </div>
    </section>
    <!-- about section ends -->


    <!-- skills section starts -->

    <section class="skills" id="skills">
        <div class="title">
            <h3>see all</h3>
            <h2 class="heading">MY <span>SKILLS</span></h2>
        </div>
        <div class="skills-container">
            <div class="skills-box">
                <div class="skill">
                    <i class="fa fa-check"></i>
                    <div class="text">
                        <h2>html</h2>
                        <span>experienced</span>
                    </div>
                </div>
                <div class="skill">
                    <i class="fa fa-check"></i>
                    <div class="text">
                        <h2>css</h2>
                        <span>experienced</span>
                    </div>
                </div>
                <div class="skill">
                    <i class="fa fa-check"></i>
                    <div class="text">
                        <h2>php</h2>
                        <span>intermediate</span>
                    </div>
                </div>
                <div class="skill">
                    <i class="fa fa-check"></i>
                    <div class="text">
                        <h2>vanilla js</h2>
                        <span>experienced</span>
                    </div>
                </div>
                <div class="skill">
                    <i class="fa fa-check"></i>
                    <div class="text">
                        <h2>vue.js</h2>
                        <span>intermediate</span>
                    </div>
                </div>
                <div class="skill">
                    <i class="fa fa-check"></i>
                    <div class="text">
                        <h2>git</h2>
                        <span>intermediate</span>
                    </div>
                </div>
                <div class="skill">
                    <i class="fa fa-check"></i>
                    <div class="text">
                        <h2>sass</h2>
                        <span>intermediate</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- skills section ends -->

    <!-- projects section starts -->

    <section class="projects" id="projects">
        <div class="title">
            <h3>view my</h3>
            <h2 class="heading">latest<span>projects</span></h2>
        </div>

            <div class="projects-container">
                <div class="projects-box">
                    <img src="image/bookwrm2.png" alt="">
                    <div class="projects-layer">
                        <h4>Bookworm</h4>
                        <p>E-learning website developed for students and tutors built with JS and PHP.</p>
                        <div class="link">
                            <a href="https://github.com/Yuhalim/bookworm">github</a>
                            <a href="#">live demo</a>
                        </div>
                    </div>
                </div>

                <div class="projects-box">
                    <img src="image/metabnb.png" alt="">
                    <div class="projects-layer">
                        <h4>metabnb</h4>
                        <p>User Friendly website developed from UX designer on AIRBNB's.</p>
                        <div class="link">
                            <a href="https://github.com/Yuhalim/Metabnb">github</a>
                            <a href="#">live demo</a>
                        </div>
                    </div>
                </div>

                <div class="projects-box">
                    <img src="image/elearn.png" alt="">
                    <div class="projects-layer">
                        <h4>E-learning with VUE</h4>
                        <p>E-Learning website developed while experimenting with Vue.JS .</p>
                        <div class="link">
                            <a href="#">github</a>
                            <a href="#">live demo</a>
                        </div>
                    </div>
                </div>

                <div class="projects-box">
                    <img src="image/halitech.png" alt="">
                    <div class="projects-layer">
                        <h4>Halitech Org</h4>
                        <p>Tech Organization Website that offers tech related courses for students to learn.</p>
                        <div class="link">
                            <a href="https://github.com/Yuhalim/Halitech_org">github</a>
                            <a href="#">live demo</a>
                        </div>
                    </div>
                </div>

                <div class="projects-box">
                    <img src="image/ecommerce.png" alt="">
                    <div class="projects-layer">
                        <h4>E-commerce Website</h4>
                        <p>online retail for shoes. The number one website to get your nice kicks</p>
                        <div class="link">
                            <a href="https://github.com/Yuhalim/Ecommerce_shoe_website">github</a>
                            <a href="#">live demo</a>
                        </div>
                    </div>
                </div>

                <div class="projects-box">
                    <img src="image/taskt.png" alt="">
                    <div class="projects-layer">
                        <h4>Task Tracker</h4>
                        <p>Simple Task Tracker/ ToDo list implemented using Vue.JS.</p>
                        <div class="link">
                            <a href="#">github</a>
                            <a href="#">live demo</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- projects section ends -->

    <!-- contact section starts -->
    <section class="contact" id="contact">
        <div class="title">
            <h3>get in touch</h3>
            <h2 class="heading">contact <span>ME</span></h2>
        </div>
        <form method="POST">
            <div class="input-box">
                <input type="text" placeholder="fullname" name="fname" required>
                <input type="text" placeholder="email address" name="email" required>
            </div>

            <div class="input-box">
                <input type="text" placeholder="mobile number" name="number" required>
                <input type="text" placeholder="email subject" name="esubject" required>
            </div>

            <textarea name="message" id="" cols="30" rows="10" placeholder="your enquiry" required></textarea>
            <input type="submit" value="send message" class="btn" name="submit">
            <div class="comment">
                <a href="#contact">
                    <?php
                        echo $comment;
                    ?>
                </a>

        </div>
        </form>
    </section>
    <!-- contact section ends -->

    

    <!-- footer design -->

    <footer class="footer">
        <div class="footer-text">
            <p>copyright&copy; 2024 by Halimiyau yusuf | All Rights reserved.</p>
        </div>

        <div class="footer-icontop">
            <a href="#home"><i class="fa fa-angle-up"></i></a>
        </div>
    </footer>

    <!-- footer design -->

    <!-- scroll reveal js -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- type js -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>


    <!-- javascript link -->
    <script src="js/main.js"></script>
</body>
</html>