<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Life Organizer Landing Page</title>
    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}">

</head>

<body>
    <section id="header">
        <div class="container">
            {{-- <img src="./images/logo.png" class="logo"> --}}
            <div class="header-text">
                <h1>Organize Your Life, <br>Simplify Your Tasks.</h1>
                <span class="square"></span>
                <p>Are you struggling to keep track of your busy schedule, endless tasks, and financial management? Say
                    goodbye to chaos and hello to organization with our Life Organizer!</p>
                <a href="#about"><button class="common-btn">Read More</button></a>
                <div class="line">
                    <span class="line-1"></span><br>
                    <span class="line-2"></span><br>
                    <span class="line-3"></span>
                </div>
            </div>
        </div>
    </section>

    <nav id="sideNav">
        <ul>
            <li><a href="#header">HOME</a></li>
            <li><a href="#about">BENEFIT</a></li>
            <li><a href="#features">FEATURES</a></li>
            <li><a href="#courses">ADVATANGES</a></li>
            <li><a href="#offer">JOIN</a></li>
            <li><a href="#contact">CONTACT</a></li>
        </ul>
    </nav>
    <img src="./images/menu.png" id="menuBtn">

    <!--about-->
    <section id="about">
        <div class="about-left-col">
            <img src="./images/about.png" style="max-width:500px;height:auto;">
        </div>
        <div class="about-right-col">
            <div class="about-text">
                <h1>About Us</h1>
                <span class="square"></span>
                <p>👩‍💻 Who can benefit from the web:<br>
                    - Busy individuals looking for better organization.<br>
                    - Students or professionals with multiple tasks to manage.<br>
                    - Anyone wanting to manage their finances effectively.<br>
                    <br>
                    🔧 Technical Specifications:<br>
                    - Stable internet connection required.<br>
                    - Compatible with modern web browsers like Google Chrome, Mozilla Firefox, or Safari.<br>
                    - Recommended to use devices with a large enough screen for optimal app display.<br>
                    <br>
                </p>
                <div class="line">
                    <span class="line-1"></span><br>
                    <span class="line-2"></span><br>
                    <span class="line-3"></span>
                </div>

                <h2>"Learning is not attained by chance, it must be sought for with ardor and attended to with
                    diligence"</h2>
                <h3>----Abigail Adams</h3>
            </div>
        </div>
    </section>

    <!--features-->
    <section id="features">
        <div class="feature-row">
            <div class="feature-col">
                <img src="./images/pic-1.png">
                <h4>Stay on top of your schedule</h4>
                <p>Easily create daily, weekly, or monthly calendars and never miss an important event or deadline
                    again.</p>
            </div>
            <div class="feature-col">
                <img src="./images/pic-2.png">
                <h4>Manage your tasks effectively</h4>
                <p>Keep track of your to-dos, set deadlines, and monitor your progress effortlessly.</p>
            </div>
            <div class="feature-col">
                <img src="./images/pic-3.png">
                <h4>Take control of your finances</h4>
                <p>Keep track of your to-dos, set deadlines, and monitor your progress effortlessly.</p>
            </div>
        </div>
        </div>
        <div class="feature-btn">
            <div class="line">
                <span class="line-1"></span><br>
                <span class="line-2"></span><br>
                <span class="line-3"></span>
            </div>
            <a href="#contact" button class="common-btn">Join Now</a>
        </div>
    </section>

    <!--courses-->
    <section id="courses">
        <div class="container course-row">
            <div class="course-left-col">
                <div class="course-text">
                    <h1>Advantages of<br>"Life Organizer":</h1>
                    <span class="square"></span>
                    <p>- Never miss important events or deadlines with reminders.<br>
                        - Integration with third-party apps for easy access to data.<br>
                        - Intuitive and user-friendly interface for quick and easy management.<br>
                        <br>
                    </p>
                    <div class="line">
                        <span class="line-1"></span><br>
                        <span class="line-2"></span><br>
                        <span class="line-3"></span>
                    </div>
                </div>
            </div>
            <div class="course-right-col">
                <img src="./images/advatange.png" style="max-width:500px;height:auto;">
            </div>
        </div>
    </section>


    <!--offer-->
    <section id="offer">
        <div class="about-left-col">
            <img src="./images/about1.png" style="max-width:500px;height:auto;">
        </div>
        <div class="about-right-col">
            <div class="about-text">
                <h1></h1>
                <span class="square"></span>
                <p>Don't let disorganization hold you back! Use the "Life Organizer" website now and take control of
                    your life. Stay organized, stay efficient, stay on top of things with "Life Organizer"! 🚀
                    #LifeOrganizer #OrganizationGoal </p>
                <a href="#contact"><button class="common-btn">Join</button></a>
                <div class="line">
                    <span class="line-1"></span><br>
                    <span class="line-2"></span><br>
                    <span class="line-3"></span>
                </div>
            </div>
        </div>
    </section>



    <!--contact-->

    <section id="contact">
        <div class="container contact-row">
            <div class="contact-left-col">
                <h1>Let's join our<br>Organization Goal Community</h1>
                <div class="btn-box">
                    <a href="register" button class="common-btn">Sign Up </a>
                    <a href="login" button class="common-btn">Login</a>
                </div>
                </form>
            </div>

            <div class="contact-right-col">
                <img src="./images/contact.png">
            </div>
        </div>
    </section>

    <!--footer-->
    <section id="footer">
        <div class="container footer-row">
            <hr>
            <div class="footer-left-col">
                <div class="footer-links">
                    <div class="link-title">
                        <h4>Product</h4>
                        <small>Our Plan</small><br>
                        <small>Free Trial</small>
                    </div>
                    <div class="link-title">
                        <h4>About Us</h4>
                        <small>Request Demo</small><br>
                        <small>FAQs</small>
                    </div>
                    <div class="link-title">
                        <h4>Support</h4>
                        <small>Features</small><br>
                        <small>Contact Us</small>
                    </div>
                    <div class="link-title">
                        <h4>Explore</h4>
                        <small>Find a nonprofit</small><br>
                        <small>Coporate Solution</small>
                    </div>
                </div>
            </div>
            <div class="footer-right-col">
                <div class="footer-info">
                    <div class="copyright-text">
                        <small>supportLifeOrganizer@gmail.com</small><br>
                        <small>copyright 2024 LO</small>
                    </div>
                    <div class="footer-logo">
                        {{-- <img src="./images/logo.png"> --}}
                        <button class="common-btn">English</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--social-icons-->
    <div class="social-icons">
        <img src="./images/facebook.png">
        <a href="https://www.instagram.com/life_organizer.idn/profilecard/?igsh=ZXg1d3VzaDcyNzFk"><img src="./images/instagram.png"></a>
        <img src="./images/twitter.png">
        <img src="./images/linkedin.png">
    </div>

    <script>
        var menuBtn = document.getElementById("menuBtn");
        var sideNav = document.getElementById("sideNav");

        sideNav.style.right = "-250px";
        menuBtn.onclick = function () {
            if (sideNav.style.right == "-250px") {
                sideNav.style.right = "0";
            }
            else {
                sideNav.style.right = "-250px";
            }
        }
    </script>