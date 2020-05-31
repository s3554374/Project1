<?php
$debug=TRUE;
session_start();
include_once "../assets/includes/header.php";
include "match.php";




function get_age($dob)
{
    $year = explode('-', $dob);


    $age = date('Y') - $year[0];


    return $age;
}
if($debug==TRUE)

{
echo "test output:".$user_info["gender"];
echo "debug test hobby: ".get_hobby_arr($user_info["hobby"])[0];
}
?>

<body>

<header class="header">
    <div class="top-bar container-fluid">
        <div class="actions">
            <a class="btn hidden-xs" href="change"><i class="fa fa-paper-plane" aria-hidden="true"></i>Edit</a>
            <a class="btn" href="../index.php"><i aria-hidden="true"></i> Back</a>
        </div><!--//actions-->
    </div><!--//top-bar-->

    <div class="intro">
        <div class="container text-center">
            <img class="profile-image" src="../assets/images/t0132285ee16f4c72f9.png" alt="">
            <h1 class="name">
                <?php echo $user_info["username"];?>
            </h1>
            <div class="title">Looking for love</div>
            <div class="profile">
                <p></p> 
            </div><!--//profile-->
        </div><!--//container-->
    </div><!--//intro-->

    <div class="contact-info">
        <div class="container text-center">
            <ul class="list-inline">
                <li class="email"><i class="fa fa-envelope"></i><a href="">
                        
                            <?php echo $user_info["email"];?>
                        
                    </a></li>
                <li><i class="fa fa-phone"></i> <a href="a"><?php echo $user_info["phone"];?></a></li>
            </ul>
        </div><!--//container-->
    </div><!--//contact-info-->

    <div class="page-nav-space-holder hidden-xs">
        <div id="page-nav-wrapper" class="page-nav-wrapper text-center">
            <div class="container">
                <ul id="page-nav" class="nav page-nav list-inline">
                    <li><a class="scrollto" href="#skills-section">Skills</a></li>
                    <li><a class="scrollto" href="#testimonials-section">Personal Information</a></li>
                    <li><a class="scrollto" href="#portfolio-section">Best Match</a></li>
                    <li><a class="scrollto" href="#contact-section">Contact</a></li>
                </ul><!--//page-nav-->
            </div>
        </div><!--//page-nav-wrapper-->
    </div>

</header><!--//header-->

<div class="wrapper container">



    <section id="skills-section" class="skills-section section text-center">
        <h2 class="section-title">Skills</h2>
        <div class="top-skills">
            <h3 class="subtitle">Skills</h3>
            <div class="row">
            <?php 
            if( !empty(get_hobby_arr($user_info["hobby"])[0])){
              echo ' <div class="item col-xs-12 col-sm-4">
                    <div class="item-inner">
                        <div class="chart-easy-pie text-center">
                            <div class="chart-theme-1 chart" data-percent="98"><span>98</span>%</div>
                        </div>';
                        
                        
                        
                        echo '<h4 class="skill-name">';
                        echo get_hobby_arr($user_info["hobby"])[0];

                        echo '</h4>';
                       
                       
                        
                echo '        <div class="level">9 years</div>
                        <div class="desc">
                            TEXT
                        </div>
                    </div><!--//item-inner-->
                </div><!--//item-->';
                }
                 ?>
                 <?php
                  if( !empty(get_hobby_arr($user_info["hobby"])[1])){
              echo '  <div class="item col-xs-12 col-sm-4">
                    <div class="item-inner">
                        <div class="chart-easy-pie text-center">
                            <div class="chart-theme-1 chart" data-percent="90"><span>90</span>%</div>
                        </div>

                        <h4 class="skill-name">';
                        
                         echo get_hobby_arr($user_info["hobby"])[1];
                        
                  echo '      </h4>
                        <div class="level">8 years</div>
                        <div class="desc">
                            TEXT
                        </div>
                    </div><!--//item-inner-->
                </div><!--//item-->';
                }
                ?>
                <?php
                 if( !empty(get_hobby_arr($user_info["hobby"])[2])){
             echo '   <div class="item col-xs-12 col-sm-4">
                    <div class="item-inner">
                        <div class="chart-easy-pie text-center">
                            <div class="chart-theme-1 chart" data-percent="85"><span>85</span>%</div>
                        </div>
                        <h4 class="skill-name">';
                       
                       echo get_hobby_arr($user_info["hobby"])[2];
                        
               echo '        </h4>
                        <div class="level">4 years</div>
                        <div class="desc">
                            TEXT
                        </div>
                    </div><!--//item-inner-->
                </div><!--//item-->';
                }
                ?>
            </div><!--//row-->
        </div><!--//top-skills-->

        <div class="other-skills">
            <h3 class="subtitle">Other Skills</h3>
            <div class="misc-skills">
                <span class="skill-tag">Cooking skill</span>
                <span class="skill-tag">Collections</span>
                <span class="skill-tag">Invest in stocks</span>
                <span class="skill-tag">keep cats</span>
                <span class="skill-tag">..</span>
                <br>
                <span class="skill-tag">..</span>
                <span class="skill-tag">..</span>
                <span class="skill-tag">..</span>
                <span class="skill-tag">..</span>
                <span class="skill-tag">..</span>
            </div>
        </div><!--//other-skills-->

    </section><!--//skills-section-->

    <section id="testimonials-section" class="testimonials-section section">
        <h2 class="section-title">Personal Information</h2>

        <div id="testimonials-carousel" class="testimonials-carousel carousel slide" data-interval="8000">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#testimonials-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#testimonials-carousel" data-slide-to="1"></li>
                <li data-target="#testimonials-carousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <blockquote class="quote">
                        <p><i class="fa fa-quote-left"></i>
                        <?php echo $user_info["gender"];?>

                        </p>
                    </blockquote>
                    <div class="source">
                        <div class="name">Gender</div>
                         
                    </div><!--//source-->

                </div><!--//item-->
                <div class="item">
                    <blockquote class="quote">
                        <p><i class="fa fa-quote-left"></i>
                            
                                <?php echo get_age($user_info["dayofbirth"]);?>
                           
                        </p>

                    </blockquote>
                    <div class="source">
                        <div class="name">Age</div>

                    </div><!--//source-->

                </div><!--//item-->
                <div class="item">
                    <blockquote class="quote">
                        <p><i class="fa fa-quote-left"></i>
                            
                               <?php echo $user_info["hobby"];?>
                            
                        </p>
                    </blockquote>
                    <div class="source">
                        <div class="name">Hobby</div>

                    </div><!--//source-->
                </div><!--//item-->

            </div><!--//carousel-inner-->
        </div><!--//testimonials-carousel-->

    </section><!--//section-->


    <section id="portfolio-section" class="portfolio-section section">
        <h2 class="section-title">Best Match</h2>
        <ul id="filters" class="filters clearfix">
            <li class="type active" data-filter="*">All</li>
            <li class="type" data-filter=".backend">Recently</li>
            <li class="type" data-filter=".frontend">newest</li>
        </ul><!--//filters-->
        <div class="items-wrapper isotope row">
        <?php
        for($i=0;$i<sizeof((array)$match_results);++$i)
        {
         echo '   <div class="item frontend col-md-3 col-xs-6 ">
                <div class="item-inner">
                    <figure class="figure">
                        <img class="img-responsive" src="../assets/images/portfolio/portfolio-1.jpg" alt=""/>
                    </figure>
                    <div class="content text-left">
                        <h3 class="sub-title"><a href="#">';
                       
                       echo "Username: ".$match_results[$i]["username"];
                        
            echo '            </a>
                       
                       
                       </h3>
                        <div class="meta">';
                        
                       echo "Age: ".get_age($match_results[$i]["dayofbirth"]);
                        
                        
            echo '            </div>
                        <div class="action"><a href="#">View profiles</a></div>
                    </div><!--//content-->
                    <a class="link-mask" href="#"></a>
                </div><!--//item-inner-->
            </div><!--//item-->';
            }
            ?>
           

        </div><!--//item-wrapper-->

    </section><!--//section-->

    <section id="contact-section" class="contact-section section">
        <h2 class="section-title">Get in Touch</h2>
        <div class="intro">
            <img class="profile-image" src="../assets/images/t0132285ee16f4c72f9.png" alt="">
            <div class="dialog">
                <p>Hello everyone, very glad to come here, I hope to know more friends, more look forward to your
                    appearance, please send me a letter</p>
                <p><strong>I can accept the following types of blind dates:</strong></p>
                <ul class="list-unstyled service-list">
                    <li><i class="fa fa-check" aria-hidden="true"></i> Blind date in a restaurant</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Blind date in the park</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> From 8 a.m. to 5 p.m</li>
                </ul>
                <p>Drop me a line at <a href="mailto:someone@gmail.com">
                        <script>
                            document.getElementById('email').value = '<?php echo $row["email"];?>';
                        </script>
                    </a> or call me at <a href="tel:04164567890">0416 456 7890</a></p>
                <ul class="social list-inline">
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-github-alt" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                </ul><!--//social-->
            </div><!--//diaplog-->
        </div><!--//intro-->

    </section><!--//section-->

</div><!--//wrapper-->

<?php
include_once "../assets/includes/footer.php";
?>