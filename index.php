<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["message"]) && empty($_POST["sender-mail"])){
            echo('<script>alert("Please fill in the blanks and try again")</script>');
        }
        else{
            $sender= $_POST["sender-mail"];
            $message= $_POST["message"];
            $subject= "Mail from MIkab Website";
            $to= "mikabcollege2@gmail.com";
            
            if(mail($to, $subject, $message, "From:" .$sender)){
                echo ('<script>alert("Mail succesfully delivered")</script>');
            }
            else{
                echo ('<script>alert("Mail Not delivered")</script>');
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148436198-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-148436198-1');
        </script>
        

        <title>Mikab Model School And College</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#008000">
        
        <meta name="keywords" content="school, education, mikab, okene, best school in kogi, schools in kogi, high school, college, mikab school, michael enebe, tress nation, fortress, tress ohi, enebe, veronica, mikab college, model, learn, smart, brilliant, academics, smart">
        <meta name="description" content="Offering the best in Education">
        <meta name="author" content="Enebe Fortress">
        <link rel="icon" type="image" href="assets/images/logo.jpg">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/main.css">
        <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    </head>
    <body onload="beginning()" onresize= "beginning()">
       
        <div id="home">
            <div id="home-overlay">
                <div class="navbar">
                    <p id="brand"><img src="assets/images/logo.jpg" alt="mikab model school's logo" id="logo"> <span id="schoolname"><a href="https://mikabschool.com">Mikab Model Schools</a></span></p>
                    <div class="navbar-nav-container">
                        <div id="navbar-nav">
                            <a href="#home" style="padding-left: 0" class="navlink">Home</a>
                            <a href="#aboutus" class="navlink">About</a>
                            <a href="#meetus" class="navlink">Meet Us</a>
                            <a href="#testimonial" class="navlink">Testimonials</a>
                            <a href="enquiry.html" class="navlink">Enquire</a>
                            <a href="extra gist.html" class="navlink">Extra Gist</a>
                            <a href="e-learning.html" target="_blank" class="navlink">e-Learning</a>
                            <a href="https://mikstudent.mikabschool.com/" class="navlink">Login</a>
                        </div>
                        <div>
                            <a href="#" id="side-nav-open" onclick= openSideNav()><i class="fa fa-bars"></i></a>
                        </div>
                    </div>
                </div>
                <div id="side-nav">
                    <a id="side-nav-close" onclick="closeSideNav()">&times;</a>
                    <a href="#home" onclick="closeSideNav()" class="side-link">Home</a>
                    <a href="#aboutus" onclick="closeSideNav()" class="side-link">About</a>
                    <a href="#meetus" onclick="closeSideNav()" class="side-link">Meet Us</a>
                    <a href="#testimonial" onclick="closeSideNav()" class="side-link">Testimonials</a>
                    <a href="enquiry.html" onclick="closeSideNav()" class="side-link">Enquire</a>
                    <a href="extra gist.html" class="side-link">Extra Gist</a>
                    <a href="e-learning.html" target="_blank" class="navlink">e-Learning</a>
                    <a href="https://mikstudent.mikabschool.com/" class="side-link">Login</a>
                </div>
                <div class="text-center" id="action-txt-1">
                    <h2>Welcome home</h2>
                    <h5>The best place for the child you love is in here. We give them that parent feel you don't see coming!</h5>
                    <a href="#aboutus"><button class="button">Let's Move</button></a>
                </div>
            </div>
        </div>
        <div id="welcome-video-container">
                <p>&times;</p>
                <video width="320" height="200" controls>
                    <source src="assets/images/Web Welcome Page.mp4" type="video/mp4">
                </video>
            </div>
        <div class="container-fluid" id="aboutus">
            <h2 id="about-heading" class="headers">About</h2>
            <div id="joint-card" class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12" id="about-col-1">
                        <div id="about-photo" class="about-cards" style="height: 673.5px;">

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12" id="about-col-2">
                        <div class="about-cards" id="about-brief-history">
                            <h3 class="headers">Brief History</h3>
                            <p><b>THE MAKING OF MIKAB MODEL SCHOOLS</b></p>
                            <p>The Mikab Model Nursery and Primary School, Nagazi Uvete has its antecedent in the proprietor's determination to seek for knowledge and his innate  desire to live faithfully to his professional calling, which is teaching. It is in view of this that the proprietor, Michael Enebe decided to pursue his Master Degree in Educational Management at the University of Ilorin, Nigeria. However, he was to earn not just a degree but also an idea, for he met 2 angels of God in person of Omeiza  James and Soje Aderigbibe, both proprietors of different schools who sold him the idea of establishing a private nursery &amp; primary school. That meeting with these 2 course mates of his on 5th of October, 1995 ignited the sleeping giant in Michael, who there and then became restless about this new vision... </p>
                            <p><a href="http://mikabschool.com/brief%20history.html" id="read-more"> Read more </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="values">
            <div class="row container-fluid" id="values-container">
                <div class="col-sm-6 text-center">
                    <h3 class="headers">Mission</h3>
                    <p>To offer students the best in formal education through the pursuit of academic and moral excellence.</p>
                </div>
                <div class="col-sm-6 text-center">
                    <h3 class="headers">Vision</h3>
                    <p>To be one of the largest private schools in Nigeria, providing qualitative and functional education; and bringing about total human development.</p>
                </div>
                 <div class="col-sm-6 text-center" id="core-values">
                    <h3 class="headers">Core Values</h3>
                    <p>The fear of God, Diligence, Excellence, Integrity, Sacrificial service, Discipline, Respect for others, Innovation and Creativity</p>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center" id="action-txt-2">
            <div id="action-txt-2-overlay">
                <h2>Don't think too much</h2>
                <h5>The earlier the better for your wards, they deserve that better education you never got.</h5>
                <a href="https://forms.gle/AHxLrCabu4K9sVSs5"><button class="button">Get Started</button></a>
            </div>
        </div>
        <div class="container-fluid" id="meetus">
            <h2 class="headers" id="management-heading">Our Management</h2>
            <div class="almanac-container row">
                <div class="thumbnail almanac col-md-3">
                    <img src="http://mikabschool.com/assets/images/director.jpg" alt="Mikab model school and college director" class="almanac-image">
                    <div class="almanac-portfolio">
                        <p>Michael Enebe <br>Director</p>
                    </div>
                </div>
                <div class="thumbnail almanac col-md-3">
                    <img src="http://mikabschool.com/assets/images/Asst%20director.jpg" alt="Mikab model school and college assistant director" class="almanac-image">
                    <div class="almanac-portfolio">
                        <p>Veronica Enebe <br> Asst Director</p>
                    </div>
                </div>
                <div class="thumbnail almanac col-md-3">
                    <img src="http://mikabschool.com/assets/images/manager.jpg" alt="Mikab model school and college manager" class="almanac-image">
                    <div class="almanac-portfolio">
                        <p>Raphael Kate <br>Manager</p>
                    </div>
                </div>
                <div class="thumbnail almanac col-md-3">
                    <img src="http://mikabschool.com/assets/images/secretary.jpg" alt="Mikab model school and college secretary" class="almanac-image">
                    <div class="almanac-portfolio">
                        <p>Musa Hannah <br>Secretary</p>
                    </div>
                </div>
                <div class="thumbnail almanac col-md-3">
                    <img src="http://mikabschool.com/assets/images/principal.jpg" alt="Mikab model college principal" class="almanac-image">
                    <div class="almanac-portfolio">
                        <p>Sanni Victor<br>Principal</p>
                    </div>
                </div>
                <div class="thumbnail almanac col-md-3">
                    <img src="http://mikabschool.com/assets/images/vp_acad.jpg" alt="Mikab model college vice principal academics" class="almanac-image">
                    <div class="almanac-portfolio">
                        <p>Michael Obansa <br>VP Acad</p>
                    </div>
                </div>
                <div class="thumbnail almanac col-md-3">
                    <img src="http://mikabschool.com/assets/images/vp_admin.jpg" alt="Mikab model college vice principal administration" class="almanac-image">
                    <div class="almanac-portfolio">
                        <p>Ojo Rukayat <br>VP Admin</p>
                    </div>
                </div>
                <div class="thumbnail almanac col-md-3">
                    <img src="http://mikabschool.com/assets/images/vp%20special.jpg" alt="Mikab model college vice principal special duties" class="almanac-image">
                    <div class="almanac-portfolio">
                        <p>Salawu Adeiza <br>VP Special</p>
                    </div>
                </div>
                <div class="thumbnail almanac col-md-3">
                    <img src="http://mikabschool.com/assets/images/head_teacher.jpg" alt="Mikab model school head teacher" class="almanac-image">
                    <div class="almanac-portfolio">
                        <p>Sunday Light <br>Head Teacher</p>
                    </div>
                </div>
                <div class="thumbnail almanac col-md-3">
                    <img src="http://mikabschool.com/assets/images/asst_head_teacher.jpg" alt="Mikab model school assistant head teacher" class="almanac-image">
                    <div class="almanac-portfolio">
                        <p>Rashidah Uthman <br>Asst Head Teacher</p>
                    </div>
                </div>
            </div>    
            <div id="staff-profile-button-container">
                <a href="http://mikabschool.com/staff%20profile.html"><button class="button">View Staff Profile</button></a> 
            </div>
        </div>
        <div class="container-fluid" id="upcoming-events">
            <div id="upcoming-events-overlay">
                <p><i class="fa fa-calendar" id="calendar-icon"></i></p>
                <h2>Upcoming Events</h2>
                <h5>Resumption (Date Unset)</h5>
                <button id="download-calendar-button">Download Academic Calender</button>
            </div>
        </div>
        <div class="container-fluid" id="testimonial">
            <h2 class="headers" id="testimonial-heading">Testimonials</h2>
            <div class="row testimonies-container">
                <div class="testimonies-box col-lg-6 col-sm-6 col-md-6">
                    <div class="testimonies">
                        <p><img src="http://mikabschool.com/assets/images/don favour.jpg" alt="" class="profile-picture"></p>
                        <p>"The Great Mikab grew and became one of the Best of this time and times to come. Mikab moulded us into whom we are today, we are hardworking, disciplined, productive, successful and still pushing today because the School never took light the destinies placed in her hands."</p>
                        <p class="author">-Ruth Iroh</p>
                    </div>
                </div>
                <div class="testimonies-box col-lg-6 col-sm-6 col-md-6">
                    <div class="testimonies">
                        <p><img src="http://mikabschool.com/assets/images/hassan.jpg" alt="" class="profile-picture"></p>
                        <p>"Well, Mikab is like my home, I spent more than ten years as a student there( Primary and secondary).
As a human being I do believe that we're all created special. But someone has to help you find your purpose and Mikab helped me with that. A strong and solid foundation is everything and I got that from Mikab."</p>
                        <p class="author">-Sadiq Hassan</p>
                    </div>
                </div>
                <div class="testimonies-box col-lg-6 col-sm-6 col-md-6">
                    <div class="testimonies">
                        <p><img src="http://mikabschool.com/assets/images/simisi.jpg" alt="" class="profile-picture"></p>
                        <p>"Mikab is currently one of the best schools in Kogi state. 
The proprietor in person of Pastor Michael Enebe is a great man. A man with vision, a great philanthropist and a mentor to so many.
I can say they have the best hands on deck taking various courses at a standard you just can't beat." </p>
                        <p class="author">-Muhammed Simisi</p>
                    </div>
                </div>
                <div class="testimonies-box col-lg-6 col-sm-6 col-md-6">
                    <div class="testimonies">
                        <p><img src="http://mikabschool.com/assets/images/aluko oluwole.jpg" alt="" class="profile-picture"></p>
                        <p>"Mikab Model College! 
A great citadel where leaders are made.
Where not just leaders but agents of change in their immediate society."</p>
                        <p class="author">-Aluko Isaiah</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="wordsonmarble">
            <h3 class="headers" id="wordsonmarble-heading">Words On Marble</h3>
            <div class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner" id="wordsonmarble-carousel-inner">
                    <div class="carousel-item">
                        <p>The roots of education are bitter, but the fruit is sweet.</p>
                        <sub>Aristotle</sub>
                    </div>
                    <div class="carousel-item active">
                        <p>Education is a progressive discovery of our own ignorance.</p>
                        <sub>Will Durant</sub>
                    </div>
                    <div class="carousel-item">
                        <p>He who opens a school door, closes a prison.</p>
                        <sub>Victor Hugo</sub>
                    </div>    
                    <div class="carousel-item">
                        <p>Education makes people easy to lead, but difficult to drive; easy to govern, but impossible to enslave.</p>
                        <sub>Henry Peter Brougham</sub>
                    </div>   
                    <div class="carousel-item">
                        <p>Always be nice to your children because they are the ones who will choose your rest home.</p>
                        <sub>Phyllis Diller</sub>
                    </div>   
                    <div class="carousel-item">
                        <p>Children are like wet cement. Whatever falls on them makes an impression.</p>
                        <sub>Dr. Haim Ginott</sub>
                    </div>   
                    <div class="carousel-item">
                        <p>Education, then, beyond all other devices of human origin, is the great equalizer of the conditions of man, - the balance-wheel of the social machinery.</p>
                        <sub>Horace Mann.</sub>
                    </div>   
                    <div class="carousel-item">
                        <p>You should study not only that you become a mother when your child is born, but also that you become a child.</p>
                        <sub>Dogen Zenji </sub>
                    </div>   
                    <div class="carousel-item">
                        <p>There are three ways to get something done: do it yourself, employ someone, or forbid your children to do it.</p>
                        <sub>Mona Crane</sub>
                    </div>   
                    <div class="carousel-item">
                        <p>While we try to teach our children all about life, our children teach us what life is all about.</p>
                        <sub>Angela Schwindt</sub>
                    </div>   
                    <div class="carousel-item">
                        <p>The real menace in dealing with a five-year-old is that in no time at all you begin to sound like a five-year-old. </p>
                        <sub>Joan Kerr</sub>
                    </div>   
                    <div class="carousel-item">
                        <p>Children need models rather than critics.</p>
                        <sub>Joseph Joubert</sub>
                    </div>   
                    <div class="carousel-item">
                        <p>Children are the anchors of a mother's life.</p>
                        <sub>Sophocles</sub>
                    </div>   
                    <div class="carousel-item">
                        <p>The first half of our lives is ruined by our parents, and the second half by our children.</p>
                        <sub>Clarence Darrow</sub>
                    </div>   
                    <div class="carousel-item">
                        <p>A child cannot be taught by anyone who despises him, and a child cannot afford to be fooled. </p>
                        <sub>James Baldwin</sub>
                    </div>   
                    <div class="carousel-item">
                        <p>Develop a passion for learning. If you do, you will never cease to grow. </p>
                        <sub>Anthony J Dangelo</sub>
                    </div>  
                    <div class="carousel-item">
                        <p>Education commences at the mother's knee, and every word spoken within the hearsay of little children tends towards the formation of character.</p>
                        <sub>Hosea Ballou</sub>
                    </div>  
                    <div class="carousel-item">
                        <p>The great end of education is to discipline rather than to furnish the mind; to train it to the use of its own powers, rather than fill it with the accumulation of others.</p>
                        <sub>Tryon Edwards</sub>
                    </div>  
                    <div class="carousel-item">
                        <p>Those who educate children well are more to be honored than parents, for these only gave life, those the art of living well.</p>
                        <sub>Aristotle</sub>
                    </div>  
                    <div class="carousel-item">
                        <p>A child cannot be taught by anyone who despises him, and a child cannot afford to be fooled. </p>
                        <sub>James Baldwin</sub>
                    </div>   
                    <div class="carousel-item">
                        <p>If you think education is expensive, try ignorance!</p>
                        <sub>Andy McIntyre</sub>
                    </div>  
                </div>
            </div>
        </div>
        <div class="container-fluid" id="gallery">
            <h2 class="headers" id="gallery-heading">Gallery</h2>
            <div class="row gallery-info">
                <div class="col-lg-3 gallery-image-box">
                    <div class="gallery-grids">
                        <img src="http://mikabschool.com/assets/images/image_of_the_director_in_his_office.jpg" alt="image showing the director in his office" class="img-fluid gallery-img">
                        <div class="social-icons">
                            <a href="https://www.facebook.com/mikabcollege/"><i class="fa fa-facebook"></i></a>
                            <a href="tel:08035994637"><i class="fa fa-phone"></i></a>
                            <a href="mailto:mikabcollege2@gmail.com"><i class="fa fa-google"></i></a>
                            <a href="http://mikabschool.com/#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 gallery-image-box">
                    <div class="gallery-grids">
                        <img src="http://mikabschool.com/assets/images/gallery1.jpg" alt="Pupil graduating from the creche section into the nursery section" class="img-fluid gallery-img">
                        <div class="social-icons">
                            <a href="https://www.facebook.com/mikabcollege/"><i class="fa fa-facebook"></i></a>
                            <a href="tel:08035994637"><i class="fa fa-phone"></i></a>
                            <a href="mailto:mikabcollege2@gmail.com"><i class="fa fa-google"></i></a>
                            <a href="http://mikabschool.com/#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 gallery-image-box">
                    <div class="gallery-grids">
                        <img src="http://mikabschool.com/assets/images/gallery10.jpg" alt="Teacher giving a brief talk during students morning assembly" class="img-fluid gallery-img">
                        <div class="social-icons">
                            <a href="https://www.facebook.com/mikabcollege/"><i class="fa fa-facebook"></i></a>
                            <a href="tel:08035994637"><i class="fa fa-phone"></i></a>
                            <a href="mailto:mikabcollege2@gmail.com"><i class="fa fa-google"></i></a>
                            <a href="http://mikabschool.com/#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 gallery-image-box">
                    <div class="gallery-grids">
                        <img src="http://mikabschool.com/assets/images/gallery11.jpg" alt="primary school graduands posing with their certificates" class="img-fluid gallery-img">
                        <div class="social-icons">
                            <a href="https://www.facebook.com/mikabcollege/"><i class="fa fa-facebook"></i></a>
                            <a href="tel:08035994637"><i class="fa fa-phone"></i></a>
                            <a href="mailto:mikabcollege2@gmail.com"><i class="fa fa-google"></i></a>
                            <a href="http://mikabschool.com/#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 gallery-image-box">
                    <div class="gallery-grids">
                        <img src="http://mikabschool.com/assets/images/gallery2.jpg" alt="the director praying for newly inducted secondary school students" class="img-fluid gallery-img">
                        <div class="social-icons">
                            <a href="https://www.facebook.com/mikabcollege/"><i class="fa fa-facebook"></i></a>
                            <a href="tel:08035994637"><i class="fa fa-phone"></i></a>
                            <a href="mailto:mikabcollege2@gmail.com"><i class="fa fa-google"></i></a>
                            <a href="http://mikabschool.com/#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 gallery-image-box">
                    <div class="gallery-grids">
                        <img src="http://mikabschool.com/assets/images/gallery3.jpg" alt="students marching during the annual inter-house sports" class="img-fluid gallery-img">
                        <div class="social-icons">
                            <a href="https://www.facebook.com/mikabcollege/"><i class="fa fa-facebook"></i></a>
                            <a href="tel:08035994637"><i class="fa fa-phone"></i></a>
                            <a href="mailto:mikabcollege2@gmail.com"><i class="fa fa-google"></i></a>
                            <a href="http://mikabschool.com/#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 gallery-image-box">
                    <div class="gallery-grids">
                        <img src="http://mikabschool.com/assets/images/gallery4.jpg" alt="a view showing teachers dring the induction of new students" class="img-fluid gallery-img">
                        <div class="social-icons">
                            <a href="https://www.facebook.com/mikabcollege/"><i class="fa fa-facebook"></i></a>
                            <a href="tel:08035994637"><i class="fa fa-phone"></i></a>
                            <a href="mailto:mikabcollege2@gmail.com"><i class="fa fa-google"></i></a>
                            <a href="http://mikabschool.com/#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 gallery-image-box">
                    <div class="gallery-grids">
                        <img src="http://mikabschool.com/assets/images/gallery5.jpg" alt="teachers marching during the yearly inter-house sports" class="img-fluid gallery-img">
                        <div class="social-icons">
                            <a href="https://www.facebook.com/mikabcollege/"><i class="fa fa-facebook"></i></a>
                            <a href="tel:08035994637"><i class="fa fa-phone"></i></a>
                            <a href="mailto:mikabcollege2@gmail.com"><i class="fa fa-google"></i></a>
                            <a href="http://mikabschool.com/#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 gallery-image-box">
                    <div class="gallery-grids">
                        <img src="http://mikabschool.com/assets/images/gallery6.jpg" alt="cultural dancers during the annual graduation" class="img-fluid gallery-img">
                        <div class="social-icons">
                            <a href="https://www.facebook.com/mikabcollege/"><i class="fa fa-facebook"></i></a>
                            <a href="tel:08035994637"><i class="fa fa-phone"></i></a>
                            <a href="mailto:mikabcollege2@gmail.com"><i class="fa fa-google"></i></a>
                            <a href="http://mikabschool.com/#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 gallery-image-box">
                    <div class="gallery-grids">
                        <img src="http://mikabschool.com/assets/images/gallery7.jpg" alt="cultural dancers during the annual graduation" class="img-fluid gallery-img">
                        <div class="social-icons">
                            <a href="https://www.facebook.com/mikabcollege/"><i class="fa fa-facebook"></i></a>
                            <a href="tel:08035994637"><i class="fa fa-phone"></i></a>
                            <a href="mailto:mikabcollege2@gmail.com"><i class="fa fa-google"></i></a>
                            <a href="http://mikabschool.com/#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 gallery-image-box">
                    <div class="gallery-grids">
                        <img src="http://mikabschool.com/assets/images/gallery8.jpg" alt="staff digging it on the dance floor during the annual graduation ceremony" class="img-fluid gallery-img">
                        <div class="social-icons">
                            <a href="https://www.facebook.com/mikabcollege/"><i class="fa fa-facebook"></i></a>
                            <a href="tel:08035994637"><i class="fa fa-phone"></i></a>
                            <a href="mailto:mikabcollege2@gmail.com"><i class="fa fa-google"></i></a>
                            <a href="http://mikabschool.com/#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 gallery-image-box">
                    <div class="gallery-grids">
                        <img src="http://mikabschool.com/assets/images/gallery9.jpg" alt="students lined up for morning assembly" class="img-fluid gallery-img">
                        <div class="social-icons">
                            <a href="https://www.facebook.com/mikabcollege/"><i class="fa fa-facebook"></i></a>
                            <a href="tel:08035994637"><i class="fa fa-phone"></i></a>
                            <a href="mailto:mikabcollege2@gmail.com"><i class="fa fa-google"></i></a>
                            <a href="http://mikabschool.com/#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center" id="view-more-imgs">
                <a href="http://mikabschool.com/gallery.html"><button class="button">View more</button></a>
            </div>
        </div>
        <div class="container-fluid" id="contact">
            <h2 class="headers" id="contact-heading">Contact</h2>
            <div class="row">
                <div class="col-md-6" id="form-container">
                    <div id="form">
                        <div id="form-overlay">
                            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>First Name:</p>
                                        <input type="text" class="text-space" id="fname">
                                    </div>
                                    <div class="col-sm-6">
                                        <p>Last Name:</p>
                                        <input type="text" class="text-space" id="lname">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>Mobile Contact:</p>
                                        <input type="tel" class="text-space" name="sender-mobile">
                                    </div>
                                    <div class="col-sm-6">
                                        <p>Email:</p>
                                        <input type="email" class="text-space" name="sender-mail">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p>Message:</p>
                                        <textarea name="message" id="message" rows="5"></textarea>
                                    </div>
                                </div>
                                <div>
                                    <input type="submit" value="Submit" id="submit" class="button">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" id="carousel-container">
                    <div class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/images/graduand.jpg" alt="Pupil graduating from the creche section into the nursery section" class="d-block w-100">
                            </div>
                            <div class="carousel-item" >
                                <img src="assets/images/mikab_structure_2.jpg" alt="A view of Mikab model college building" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/mikab_structure_3.jpg" alt="Another view of Mikab model college building" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/mikab.jpg" alt="A view of Mikab model college showing students posing" class="d-block w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="container-fluid text-center">
            <div id="footer-content-container">
               
                    <p><i class="fa fa-map-marker"></i> Ire Abana Nagazi Uvete Okene Kogi State</p>
                    <p><i class="fa fa-phone"></i> 08035994637 or 08065331307</p>
                    <p id="direct-up"><a href="#"><i class="fa fa-chevron-up" id="direct-up-icon"></i></a></p>
                    <br>
                    <p> &copy; 2020. Mikab Model School, Okene. All Rights Reserved </p>
               
            </div>
        </footer>
        <script src="assets/js/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>